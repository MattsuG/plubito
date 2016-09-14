<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>プラビト - Landing Page</title>
@yield('TitleAndCss')
</head>
<body id="page-top" class="landing-page">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top navbar-scroll" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">+ヒト</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="/">ホーム</a></li>
                        <li><a href="/auth/login">ログイン</a></li>
                        <li><a href="/auth/register">サインアップ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<section id="howtouse" class="features">
    <div class="container">
        <div class="row">
        @yield('content')
        </div>
    </div>
</section>
<footer>
<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="list-inline social-icon">
                    <li><a href="https://twitter.com/plubito"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/plubito/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="list-inline termlink">
                    <li><a href="terms">利用規約</a></li>
                    <li><a href="privacy">個人情報</a></li>
                    <li><a href="tradeterm">特定商取引法</a></li>
                    <li><a href="qa">Q & A</a></li>
                    <li><a href="howtouse">使い方</a></li>
                    <li><a href="becometalker">話し手になる</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-b-lg">
            <hr>
                <p>&copy; 2016 All right reserved by Timelag.Inc</p>
            </div>
        </div>
    </div>
</section>
</footer>
@yield('Js')
</body>
</html>