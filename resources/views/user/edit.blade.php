
@extends('common.layout')
@section('TitleAndCss')
<title>show.php | ユーザー詳細</title>

<link rel="stylesheet" href="{{secure_asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style_pre_index.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/animate.css')}}">
<link rel="stylesheet" href="{{secure_asset('/assets/css/style.css')}}">


@stop

@section('content')
        <div class="row wrapper white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>ユーザー詳細</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>ユーザー詳細</strong>
                    </li>
                </ol>
            </div>
        </div>


        <div class="row wrapper border-bottom white-bg">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="{{ url('/user/edit') }}" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            {{ method_field('patch') }}

                            <!-- プロフィール画像 -->
                            <div class="form-group"><label class="col-sm-2 control-label">プロフィール画像</label>
                                <input class="pic" name="pic3" id="pic3" type="file" style="display:none" enctype="multipart/form-data">
                                <div class="input-group">
                                  <input type="text" id="photoCover3" class="form-control" placeholder="jpgもしくはpng(5MBまで)">
                                  <span class="input-group-btn"><button type="button" class="btn btn-primary" onclick="$('#pic3').click();">ファイル選択</button></span>
                                </div>
                                <label id="label3" class="cebroad-pink"></label>
                                <div class="events-pad">
                                  <img src="{{secure_asset($user->profile_picture_path)}}" id="preview3" style="width: 300px;">
                            </div>

                             <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">お名前</label>
                                <div class="col-sm-5"><input type="text" name="lastname" placeholder="姓" value="{{ old('lastname', $user->lastname) }}" class="form-control"></div>
                                <div class="col-sm-5"><input type="text" name="firstname" placeholder="名" value="{{ old('firstname', $user->firstname) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">現在地</label>
                                <div class="col-sm-10"><input type="text" name="place" placeholder="現在地" value="{{ old('place', $user->place) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">自己紹介</label>
                                <div class="col-sm-10"><textarea type="text" name="introduction" placeholder="自己紹介" rows="4" class="form-control">{{ old('introduction', $user->introduction) }}</textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">今後やってみたいこと</label>
                                <div class="col-sm-10"><textarea type="text" name="vision" placeholder="今後やってみたいこと" rows="4" class="form-control">{{ old('vision', $user->vision) }}</textarea></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">自由記入欄</label>
                                <div class="col-sm-10"><textarea type="text" name="others" placeholder="他項目に書き入れられない情報はここへどうぞ" rows="4" class="form-control">{{ old('others', $user->others) }}</textarea></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">現職</label>
                                <div class="col-sm-10"><input type="text" name="current_job" placeholder="会社名など" value="{{ old('current_job', $user->current_job) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">現職のポジション</label>
                                <div class="col-sm-10"><input type="text" name="current_position" placeholder="職種、部署など" value="{{ old('current_position', $user->current_position) }}" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">現職の業務内容詳細</label>
                                <div class="col-sm-10"><textarea type="text" name="current_detail" placeholder="具体的な業務内容、スキルなど"  rows="7" class="form-control">{{ old('current_detail', $user->current_detail) }}</textarea></div>
                            </div>

                             <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" name="current_period" placeholder="〇〇年〇〇月〜〇〇年〇〇月" value="{{ old('current_period', $user->current_period) }}" class="form-control"></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">前職</label>
                                <div class="col-sm-10"><input type="text" name="past_job"placeholder="会社名など" value="{{ old('past_job', $user->past_job) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">前職のポジション</label>
                                <div class="col-sm-10"><input type="text" name="past_position" placeholder="職種、部署など" value="{{ old('past_position', $user->past_position) }}" class="form-control"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-2 control-label">前職の業務内容詳細</label>
                                <div class="col-sm-10"><textarea type="text" name="past_detail" placeholder="具体的な業務内容、スキルなど" rows="7" class="form-control" >{{ old('past_detail', $user->past_detail) }}</textarea></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" name="past_period" placeholder="〇〇年〇〇月〜〇〇年〇〇月" value="{{ old('past_period', $user->past_period) }}" class="form-control"></div>
                            </div>

                            <hr>

                            <div class="form-group"><label class="col-sm-2 control-label">最終学歴</label>
                                <div class="col-sm-10"><input type="text" name="latest_school" placeholder="学校名" value="{{ old('latest_school', $user->latest_school) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">学部・学科</label>
                                <div class="col-sm-10"><input type="text" name="latest_major" placeholder="学部、学科名" value="{{ old('latest_major', $user->latest_major) }}" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" name="latest_school_period" placeholder="〇〇年〇〇月〜〇〇年〇〇月" value="{{ old('latest_school_period', $user->latest_school_period) }}" class="form-control"></div>
                            </div>

                            <hr>

                             <div class="form-group"><label class="col-sm-2 control-label">その他学歴</label>
                                <div class="col-sm-10"><input type="text" name="other_school" placeholder="学校名" value="{{ old('other_school', $user->other_school) }}" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">学部・学科</label>
                                <div class="col-sm-10"><input type="text" name="other_major" placeholder="学部、学科名" value="{{ old('other_major', $user->other_major) }}" class="form-control"></div>
                            </div>   
                             <div class="form-group"><label class="col-sm-2 control-label">在籍期間</label>
                                <div class="col-sm-10"><input type="text" name="other_school_period" placeholder="〇〇年〇〇月〜〇〇年〇〇月" value="{{ old('other_school_period', $user->other_school_period) }}" class="form-control"></div>
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

                            <button type="submit" class="btn btn-primary block full-width m-b">更新</button>

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
