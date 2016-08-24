<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TalkRequest;

use App\Talk;

use App\User;

use App\Category;

use Image;

use Session;

use Input;

use File;

use Auth;

class MentorController extends Controller
{

  public function index() 
  {
    $category_id = Input::get('category_id');
    $word     = Input::get('word');

    $query = Talk::query();

    $talks = $query->with('category');

    if(!empty($category_id)) {
      $query->where('category_id', $category_id);
    }

    if(!empty($word)) {
      $query->where('title', 'like', '%'.$word.'%')->orWhere('detail', 'like', '%'.$word.'%');
    }

    $talks = $talks->orderBy('created_at', 'DESC')
    ->paginate(15);
    $categories = Category::All();

    return view("mentor.index", compact('talks', 'categories', 'category_id', 'word'));
  }

  public function create()
  {
    if ((int)Auth::user()->role === 0) {
      redirect("mentor/index");
      die();
    }

    $categories = Category::All();
    return view("mentor.add", ['categories' => $categories]);
  }

  public function store(TalkRequest $request)
  {
    if ((int)Auth::user()->role === 0) {
      redirect("mentor/index");
      die();
    }

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


      $talk = new Talk();
      $talk->title = $request->title;
      $talk->category_id = $request->category;
      $talk->talk_time = $request->time;
      $talk->price = $request->price;
      $talk->detail = $request->detail;
      $talk->pic0_path = $pic0_path;
      $talk->pic1_path = $pic1_path;
      $talk->mentor_id = Auth::user()->id;
      $talk->save();


      $thisTalk = Talk::where('mentor_id', Session::get('id'))
      ->first();

      return redirect("mentor");
    }

  public function show($id)
  {
    $talk = Talk::findOrFail($id);
    $check_like = $talk->likes->contains(Auth::user()->id);
    $check_application = $talk->applications->contains(Auth::user()->id);
    return view("mentor.show", compact('talk', 'check_like', 'check_application'));
  }

  public function edit($id)
  {
    if ((int)Auth::user()->role === 0) {
      redirect("mentor/index");
      die();
    }
    $talk = Talk::findOrFail($id);
    $categories = Category::All();


    if ((int)$talk->mentor_id !== (int)Auth::user()->id) {
      return redirect("mentor/".$id);
      die();
    }

    return view("mentor.edit", compact('talk', 'categories'));
  }

  public function update(TalkRequest $request, $id) {   
    if ((int)Auth::user()->role === 0) {
      redirect("mentor/index");
      die();
    }
    $thisTalk = Talk::findOrFail($id);

    if ((int)$thisTalk->mentor_id !== (int)Auth::user()->id) {
      return redirect('mentor/index');
      die();
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


      $talk = Talk::findOrFail($id);
      $talk->title = $request->title;
      $talk->mentor_id = Auth::user()->id;
      $talk->category_id = $request->category;
      $talk->detail = $request->detail;
      $talk->pic0_path = $pic0_path;
      $talk->pic1_path = $pic1_path;
      $talk->save();

     return redirect('mentor/'.$id);
  }

  public function apply(Request $request) {

      $talk = Talk::findOrFail($request->talk_id);
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
            \Session::flash('flash_message', '申し込みが完了しました。話し手にメッセージを送り、日時を相談してください。'); 
          }
      }

      return redirect('mentor/'.$request->talk_id);
  }

  public function like($id) {

      $talk = Talk::findOrFail($id);
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

  






