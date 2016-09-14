
@extends('common.layout')
@section('TitleAndCss')
<title>add.php | トーク作成</title>

<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style_pre_index.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/add.css')}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
        <div class="row wrapper white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>トーク作成</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>トーク作成</strong>
                    </li>
                </ol>
            </div>
        </div>


        <div class="row wrapper white-bg">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{ url('/mentor') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760">

                            <div class="form-group"><label class="col-sm-2 control-label">タイトル（＊必須）</label>
                                <div class="col-sm-10"><input type="text" name="title" id="title" placeholder="最大５０文字" class="form-control" value="{{ old('title') }}"></div>
                                <p id="title_count"></p>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">カテゴリー（＊必須）</label>
                                <div class="col-sm-10">
                                    <select name="category" id="category" class="form-control">
                                        <option value="">カテゴリーを選択</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if (old('category') === $category->id) selected @endif>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">価格（＊必須）</label>
                                <div class="col-sm-10">
                                    <select name="price" id="price" class="form-control">
                                        @for ($i = 3; $i < 51; $i++)
                                            <option value="{{ $i * 1000 }}" @if (old('price') === $i * 1000) selected @endif>{{ $i * 1000 }}円</option>
                                        @endfor
                                    </select>
                                    <p>※価格は変更できません。慎重にお考えください。</p>
                                </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">所要時間（＊必須）</label>
                                <div class="col-sm-10">
                                    <select name="time" id="time" class="form-control">
                                        @for ($i = 1; $i < 5; $i++)
                                            <option value="{{ $i * 30 }}" @if (old('time') === $i * 30) selected @endif>{{ $i * 30 }}分</option>
                                        @endfor
                                    </select>
                                    <p>※所要時間は変更できません。慎重にお考えください。</p>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">詳細（＊必須）</label>
                                <div class="col-sm-10">
                                    <textarea name="detail" id="detail" class="form-control" rows="20" required placeholder="最大1000文字">{{ old('detail') }}</textarea>
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
                                  <img src="" id="preview0" style="display:none; width: 300px;">
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">挿入画像２</label>
                                <input class="pic" name="pic1" id="pic1" type="file" style="display:none">
                                <div class="input-group">
                                  <input type="text" id="photoCover0" class="form-control" placeholder="jpgもしくはpng(5MBまで)">
                                  <span class="input-group-btn"><button type="button" class="btn btn-primary" onclick="$('#pic1').click();">ファイル選択</button></span>
                                </div>
                                <label id="label1" class="cebroad-pink"></label>
                                <div class="events-pad">
                                  <img src="" id="preview1" style="display:none; width: 300px;">
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
                              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                              <div class="" class="events-pad">
                                    <div class="form-group">
                                        <input type="submit" id="confirm" class="btn btn-primary" value="トーク作成">
                                    </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
@stop

@section('Js')
<script src="{{asset('/assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('/assets/js/inspinia.js')}}"></script>
<script src="{{asset('/assets/js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('/assets/js/add.js')}}"></script>
@stop
