<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Talk;

use DB;

use Image;

use Session;

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
            $filename = str_random(20).'.'.$file0->getClientOriginalExtension();
            $path = 'talk_pictures';
            $img = Image::make($file0->getRealPath());
            chmod($path, 0777);
            $img->resize(800, 600)->save($path.'/'.$filename);
            chmod($path, 0744);
            $pic0_path = '/'.$path.'/'.$filename;
        }
        else
        {
            //ファイルアップロードが無いときは変数を初期化（viewでのエラー防止）
            $pic0_path = '/assets/img/default_thumbnail.jpg';
        }

      $file1 = $request->file('pic1');

      if(!empty($file1))
        {
            $filename = str_random(20).'.'.$file0->getClientOriginalExtension();
            $path = 'talk_pictures';
            $img = Image::make($file0->getRealPath());
            chmod($path, 0777);
            $img->resize(800, 600)->save($path.'/'.$filename);
            chmod($path, 0744);
            $pic1_path = '/'.$path.'/'.$filename;          
        }
        else
        {
            //ファイルアップロードが無いときは変数を初期化（viewでのエラー防止）
            $pic1_path = '';
        }

      Session::put('id', 1);

      $talk = new Talk();
      $talk->title = $request->title;
      $talk->category_id = $request->category;
      $talk->price = $request->price;
      $talk->detail = $request->detail;
      $talk->pic0_path = $pic0_path;
      $talk->pic1_path = $pic1_path;
      $talk->mentor_id = Session::get('id');
      $talk->save();

      return redirect('mentor');
    }

  public function index() 
  {
    $talks = DB::table('talks as t')
    ->select('t.id',
             't.title',
             't.category_id',
             't.price',
             't.detail',
             't.pic0_path',
             'c.category_name')
    ->leftJoin('categories as c', 't.category_id', '=', 'c.id')
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

  public function show($id)
  {
    $talk = DB::table('talks as t')
    ->select('t.title',
             't.mentor_id',
             't.category_id',
             't.price',
             't.detail',
             't.pic0_path',
             't.pic1_path',
             'c.category_name',
             'u.name',
             'u.profile_picture_path',
             'u.introduction')
    ->where('t.id', $id)
    ->leftJoin('categories as c', 't.category_id', '=', 'c.id')
    ->leftJoin('users as u', 't.mentor_id', '=', 'u.id')
    ->get();
    return view("mentor.show", ['talk' => $talk]);
  }

  public function edit($id)
  {

  }

}








