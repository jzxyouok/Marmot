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

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <div class="header">
        <div class="banner">
            <div class="container">
                ...
            </div>
        </div>
        <div class="navbar navbar-default">
            <div class="container">
                <nav class="nav navbar-nav">
                    <li><a href="#">电影</a></li>
                    <li><a href="#">电视剧</a></li>
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
