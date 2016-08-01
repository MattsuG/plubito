<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Talk;

use DB;

use Image;

class MentorController extends Controller
{

    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required|max:50',
        'category' => 'required|integer',
        'price' => 'required|integer',
        'detail' => 'required|max:1000',
        'pic0' => 'mimes:jpeg,png|max:5120',
        'pic1' => 'mimes:jpeg,png|max:5120',
      ]);


      $file0 = $request->file('pic0');

      if(!empty($file0))
        {   
            $image = Image::make($file0);
            $filename = str_random(20).'.'.$file0->getClientOriginalExtension();
            $path = public_path().'/talk_pictures';
            chmod($path, 0777);
            $image->resize(800, 600)->save($path.'/'.$filename);
            chmod($path, 0644);
            $request->pic0 = $path.'/'.$filename;


        }
        else
        {
            //ファイルアップロードが無いときは変数を初期化（viewでのエラー防止）
            $request->pic0 = '';
        }

      $file1 = $request->file('pic1');

      if(!empty($file1))
        {
            $filename = str_random(20).'.'.$file1->getClientOriginalExtension();
            $path = public_path().'/talk_pictures';
            chmod($path, 0777);
            $file1->resize(800, 600)->save($path.'/'.$filename);
            chmod($path, 0644);
            $request->pic1 = $path.'/'.$filename;

        }
        else
        {
            //ファイルアップロードが無いときは変数を初期化（viewでのエラー防止）
            $request->pic1 = '';
        }



      // $talk = new Talk();
      // $talk->title = $request->title;
      // $talk->category_id = $request->category;
      // $talk->price = $request->price;
      // $talk->detail = $request->detail;
      // $talk->save();
      Talk::create($request->all());

      return redirect('mentor');
    }

  public function index() 
  { 
    $talks = DB::table('talks')
    ->select('talks.id as talk_id',
             'talks.title',
             'talks.category_id',
             'talks.price',
             'talks.detail',
             'talks.pic0_path',
             'talks.pic1_path')
    ->leftJoin('categories', 'talks.id', '=', 'categories.id')
    ->orderBy('created_at', 'desc')
    ->get();
    $categories = DB::table('categories')->get();
    return view("mentor.index", compact('talks', 'categories'));
  }

  public function create()
  {
    $categories = DB::table('categories')->get();
    return view("mentor.add", ['categories' => $categories]);
  }

  public function show()
  {
    // $talks = DB::table('talks')->get()
    // ;
    // return view("mentor.show" ['talks' => $talks]);
  }
}








