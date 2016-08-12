<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TalkRequest;

use App;

use Image;

use Session;

use Input;

use File;

use DB;

use Auth;

class MentorController extends Controller
{

  public function index() 
  {
    $category_id = Input::get('category_id');
    $word     = Input::get('word');

    $query = App\Talk::query();

    $talks = $query->with('category');

    if(!empty($category_id)) {
      $query->where('category_id', $category_id);
    }

    if(!empty($word)) {
      $query->where('title', 'like', '%'.$word.'%')->orWhere('detail', 'like', '%'.$word.'%');
    }

    $talks = $talks->orderBy('created_at', 'DESC')
    ->paginate(15);
    $categories = App\Category::All();

    return view("mentor.index", compact('talks', 'categories', 'category_id', 'word'));
  }

  public function create()
  {
    $categories = App\Category::All();
    return view("mentor.add", ['categories' => $categories]);
  }

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


      $talk = new App\Talk();
      $talk->title = $request->title;
      $talk->category_id = $request->category;
      $talk->price = $request->price;
      $talk->detail = $request->detail;
      $talk->pic0_path = $pic0_path;
      $talk->pic1_path = $pic1_path;
      $talk->mentor_id = Auth::user()->id;
      $talk->save();


      $thisTalk = App\Talk::where('mentor_id', Session::get('id'))
      ->first();

      return redirect("mentor");
    }

  public function show($id)
  {
    $talk = App\Talk::find($id);
    $check_like = $talk->likes->contains(Auth::user()->id);
    $check_application = $talk->applications->contains(Auth::user()->id);
    return view("mentor.show", compact('talk', 'check_like', 'check_application'));
  }

  public function edit($id)
  {

    $talk = App\Talk::find($id);
    $categories = App\Category::All();


    // if ($talk->mentor_id !== Auth::user()->id) {
    //   return redirect("mentor");
    // }

    return view("mentor.edit", compact('talk', 'categories'));
  }

  public function update(TalkRequest $request, $id) {
    
    $thisTalk = App\Talk::find($id);

    if ((int)$thisTalk->mentor_id !== (int)Auth::user()->id) {
      return redirect('mentor/index');
    }
    $file0 = $request->file('pic0');


      if ($request->pic0_delete === '1')
      {
        File::delete($thisTalk->pic0_path);
        $pic0_path = '/assets/img/default_thumbnail.jpg';
      }
      

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
      elseif ($request->pic0_delete !== '1')
      {
        $pic0_path = $thisTalk->$pic0_path;
      }


    $file1 = $request->file('pic1');

    if ($request->pic1_delete === '1')
    {
      File::delete($thisTalk->pic1_path);
      $pic1_path = '';
    }

    if (!empty($file1))
      {

          $filename = str_random(20).'.'.$file0->getClientOriginalExtension();
          $path = 'talk_pictures';
          $img = Image::make($file0->getRealPath());
            chmod($path, 0777);
          $img->resize(800, 600)->save($path.'/'.$filename);
            chmod($path, 0744);
          $pic1_path = '/'.$path.'/'.$filename;          
        }
        elseif ($request->pic1_delete !== '1')
        {
            $pic1_path = $thisTalk->pic1_path;
        }


      $talk = App\Talk::find($id);
      $talk->title = $request->title;
      $talk->mentor_id = Auth::user()->id;
      $talk->category_id = $request->category;
      $talk->price = $request->price;
      $talk->detail = $request->detail;
      $talk->pic0_path = $pic0_path;
      $talk->pic1_path = $pic1_path;
      $talk->save();

     return redirect('mentor/'.$id);
  }

  public function apply(Request $request) {

      $talk = App\Talk::find($request->talk_id);
      if ((int)$talk->mentor_id === (int)Auth::user()->id) {
        \Session::flash('flash_message', '自分のトークには申し込みできません');
      }
      else
      {
          $check = $talk->applications->contains(Auth::user()->id);

          if ($check) {
            $talk->likes()->detach(Auth::user()->id);
            $talk->decrement('applications_count');
            \Session::flash('flash_message', '申し込みを取り消しました。');
          }
          else
          {
            $talk->applications()->attach(Auth::user()->id);
            $talk->increment('applications_count');
            \Session::flash('flash_message', '申し込みが完了しました'); 
          }
      }

      return redirect('mentor/'.$request->talk_id);
  }

  public function like($id) {

      $talk = App\Talk::find($id);
      if ((int)$talk->mentor_id === (int)Auth::user()->id) {
        \Session::flash('flash_message', '自分のトークには申し込みできません');
      } else {

          $check = $talk->likes->contains(Auth::user()->id);

          if ($check) {
            $talk->likes()->detach(Auth::user()->id);
            $talk->decrement('likes_count');
            \Session::flash('flash_message', '興味あり！を取り消しました'); 
          }
          else
          {
            $talk->likes()->attach(Auth::user()->id);
            $talk->increment('likes_count');
            \Session::flash('flash_message', '興味あり！しました'); 
          }
      }

      return redirect('mentor/'.$id);
  }
}


  






