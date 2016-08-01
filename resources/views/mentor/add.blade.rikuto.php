@extends('common.layout')
@section('TitleAndCss')
<title>新規メンタリング作成</title>
<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{('/assets/css/add.css')}}}">
@stop

@section('content')
<div class="container">


    <form method="post" enctype="multipart/form-data" action="{{ url('/mentor') }}">
    {{ csrf_field() }}
    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">

      <div class="row">

      <div class="testvar hidden-xs col-sm-2 col-md-2">
        </div>

        <div class="col-sm-8 col-md-8">
            <h1>新規メンタリング作成</h1>
            <h3 class="cebroad-pink">※赤文字は必須入力です</h3>
        </div>

        <div class="col-sm-8 col-md-8">
            <div class="form-group">
                <label class="cebroad-pink">タイトル</label>
                <input type="text" name="title" id="title" class="form-control" required value="" placeholder="最大50文字">
                <p id="title_count"></p>
            </div>
        </div>


        <div class="col-sm-4 col-md-4">            
            <div class="form-group">
                <label class="cebroad-pink">カテゴリー</label>
                <select name="category" id="category" class="form-control">
                  <option value="">カテゴリーを選択</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-4 col-md-4">          
            <div class="form-group">
                <label>価格</label>
                <select name="price" id="price" class="form-control">
                    @for ($i = 3; $i < 51; $i++)
                        <option value="{{ $i * 1000 }}">{{ $i * 1000 }}円</option>
                    @endfor
                </select>
            </div>
        </div>
        
        
        <div class="col-sm-8 col-md-8">
            <div class="form-group">
                <label class="cebroad-pink">詳細(内容・対応可能な時間等)</label>
                <textarea name="detail" id="detail" class="form-control" rows="20" required placeholder="最大1000文字"></textarea>
                <p id="detail_count"></p>
            </div>
        </div>

        <div class="col-sm-8 col-md-8">
            <label>サムネイル画像</label>
            <input class="pic" name="pic0" id="pic0" type="file" style="display:none">
            <div class="input-group">
              <input type="text" id="photoCover0" class="form-control" placeholder="jpgもしくはpng(5MBまで)">
              <span class="input-group-btn"><button type="button" class="btn btn-cebroad" onclick="$('#pic0').click();">Browse</button></span>
            </div>
            <label id="label0" class="cebroad-pink"></label>
            <div class="events-pad">
              <img src="" id="preview0" style="display:none; width: 300px;">
            </div>
        </div>

        <div class="col-sm-8 col-md-8">
            <label>サブ画像</label>
            <input class="pic" name="pic1" id="pic1" type="file" style="display:none">
            <div class="input-group">
              <input type="text" id="photoCover1" class="form-control" placeholder="jpgもしくはpng(5MBまで)">
              <span class="input-group-btn"><button type="button" class="btn btn-cebroad" onclick="$('#pic1').click();">Browse</button></span>
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
      <div class="col-sm-8 col-md-8" class="events-pad">
            <div class="form-group">
                <input type="submit" id="confirm" class="btn btn-cebroad" value="作成">
            </div>
      </div>
    </form>
  </div>
</div>
@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{asset('/assets/js/add.js')}}}"></script>

@stop
