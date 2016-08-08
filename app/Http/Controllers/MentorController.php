<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TalkRequest;

use App;

use DB;

use Image;

use Session;

class MentorController extends Controller
{

    public function store(TalkRequest $request)
    {


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

      $talk = new App\Talk();
      $talk->title = $request->title;
      $talk->category_id = $request->category;
      $talk->price = $request->price;
      $talk->detail = $request->detail;
      $talk->pic0_path = $pic0_path;
      $talk->pic1_path = $pic1_path;
      $talk->mentor_id = Session::get('id');
      $talk->save();


      $thisTalk = App\Talk::where('mentor_id', Session::get('id'))
      ->first();

      return redirect("mentor");
    }

  public function index() 
  {

    $talks = App\Talk::orderBy('created_at', 'DESC')
    ->paginate(15);
    $categories = App\Category::All();

    return view("mentor.index", compact('talks', 'categories'));
  }

  public function create()
  {
    $categories = App\Category::All();
    return view("mentor.add", ['categories' => $categories]);
  }

  public function show($id)
  {
    $talk = App\Talk::find($id);
    return view("mentor.show", ['talk' => $talk]);
  }

  public function edit($id)
  {

    $talk = App\Talk::find($id);
    $categories = App\Category::All();


    // if (Session::get('id') != $talk->mentor_id) {
    //   return redirect("mentor");
    // }

    return view("mentor.edit", compact('talk', 'categories'));
  }

  public function update($id) {

  }

}








