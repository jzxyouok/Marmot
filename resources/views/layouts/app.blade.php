<!DOCTYPE html>
<html lang="zh-hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("/css/themes.css") }}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body id="app-layout">
    <div class="header">
        <div class="banner">
            <div class="container">
                <div class="col-md-4">
                    <div class="row">
                        <h1 class="logo"><a href=""><img src="{{ asset('/images/common/logo.png') }}" alt=""></a></h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <form method="get" action="{{ url("/search") }}" class="form-search col-md-12">
                            {{ csrf_field() }}
                            <input name="search" type="text" class="form-control" placeholder="新闻联播">
                            <label for="submit">
                                <span class="glyphicon glyphicon-search"></span>
                                <button id="submit" type="submit"></button>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="um">
                            <div class="pull-right">
                                <ul class="list-inline">
                                    <li><a href="">登录</a></li>
                                    <li><a href="">注册</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-default">
            <div class="container">
                <nav class="nav navbar-nav">
                    <li class="active"><a href="channel/movie">电影</a></li>
                    <li><a href="channel/tv">电视剧</a></li>
                    <li><a href="channel/tv">综艺</a></li>
                    <li><a href="channel/tv">纪录片</a></li>
                    <li class="split"></li>
                    <li><a href="channel/tv">娱乐</a></li>
                    <li><a href="channel/tv">时尚</a></li>
                    <li><a href="channel/tv">体育</a></li>
                    <li><a href="channel/tv">汽车</a></li>
                    <li class="split"></li>
                    <li><a href="channel/tv">演唱会</a></li>
                    <li><a href="channel/tv">音乐</a></li>
                    <li><a href="channel/tv">戏曲</a></li>
                    <li class="split"></li>
                    <li><a href="channel/dv">网剧</a></li>
                    <li><a href="channel/short">微电影</a></li>
                </nav>
                <nav class="nav navbar-nav navbar-right">
                    <li class="hot"><a href="">直播</a></li>
                </nav>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- JavaScripts -->
    <script src="//cdn.bootcss.com/jquery/1.12.0/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
