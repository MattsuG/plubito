
@extends('common.layout')
@section('TitleAndCss')
<title>トーク編集</title>

<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style_pre_index.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/add.css')}}">


@stop

@section('content')

        <div class="row wrapper border-bottom white-bg page-heading inbox-title">
            <div class="col-lg-9ƒ">
                <h2>トーク一覧</h2>
                <ol class="breadcrumb">
                    <li class="active">
                        <strong>トーク一覧</strong>
                    </li>
                </ol>
            </div>
        </div>


        <div class="row wrapper white-bg">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{ url('/mentor/'.$talk->id) }}">
                            <input name="_method" type="hidden" value="PUT">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760">

                            <div class="form-group"><label class="col-sm-2 control-label">タイトル（＊必須）</label>
                                <div class="col-sm-10"><input type="text" name="title" id="title" placeholder="最大５０文字" class="form-control" value="{{ old('title', $talk->title) }}"></div>
                                <p id="title_count"></p>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">カテゴリー（＊必須）</label>
                                <div class="col-sm-10">
                                    <select name="category" id="category" class="form-control">
                                        <option value="">カテゴリーを選択</option>
                                        @foreach ($categories as $category)
                                            <option value="{{  $category->id }}" @if ((int)$talk->category_id === (int)$category->id) selected @endif>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">詳細（＊必須）</label>
                                <div class="col-sm-10">
                                    <textarea name="detail" id="detail" class="form-control" rows="20" required placeholder="最大1000文字">{{ old('detail', $talk->detail) }}</textarea>
                                    <p id="detail_count"></p>
                                    <p>※時間相談のやり取りをスムーズにするため、この詳細欄にあなたがトークをすることができる曜日や時間帯を書くことをオススメします。</p>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">挿入画像１</label>
                                <input class="pic" name="pic0" id="pic0" type="file" style="display:none">
                                <div class="input-group">
                                  <input type="text" id="photoCover0" class="form-control" placeholder="jpgもしくはpng(5MBまで)">
                                  <span class="input-group-btn"><button type="button" class="btn btn-primary" onclick="$('#pic0').click();">ファイル選択</button></span>
                                </div>
                                <label id="label0" class="cebroad-pink"></label>
                                <div class="events-pad">
                                  <img src="{{secure_asset($talk->pic0_path)}}" id="preview0" style="width: 300px;">
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">挿入画像２</label>
                                <input class="pic" name="pic1" id="pic1" type="file" style="display:none">
                                <div class="input-group">
                                  <input type="text" id="photoCover1" class="form-control" placeholder="jpgもしくはpng(5MBまで)">
                                  <span class="input-group-btn"><button type="button" class="btn btn-primary" onclick="$('#pic1').click();">ファイル選択</button></span>
                                </div>
                                <label id="label1" class="cebroad-pink"></label>
                                <div class="events-pad">
                                  <img src="{{secure_asset($talk->pic1_path)}}" id="preview1" style="width: 300px;">
                                </div>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {{ csrf_field() }}
                              <div class="" class="events-pad">
                                    <div class="form-group">
                                        <input type="submit" id="confirm" class="btn btn-primary" value="トーク編集">
                                    </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
@stop

@section('Js')
<script src="{{secure_asset('/assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{secure_asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{secure_asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{secure_asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{secure_asset('/assets/js/inspinia.js')}}"></script>
<script src="{{secure_asset('/assets/js/plugins/pace/pace.min.js')}}"></script>
<script src="{{secure_asset('/assets/js/add.js')}}"></script>
@stop