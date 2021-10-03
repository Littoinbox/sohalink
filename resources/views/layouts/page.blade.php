<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title>

    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/bx.js"></script>
    <!--<script src="/js/slick.js"></script>-->
    <script src="/js/audioplayer.js"></script>
    <script src="/js/script.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bx.css" rel="stylesheet">
    <script src="/css/slick.css"></script>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid" id="{{$mainId}}">

        @include("inc.nav")

    <div class="container">
        <div class="bigLogo">
            <h1><img src="{{$logoSrc}}" class="img-responsive"> SakhaLink</h1>
        </div>
    </div>
    <div class="qwizBlock">
        <h3>Тест на знание острова<br /> Сахалин</h3>
        <div class="aboutQwiz">
            Пройди тест и узнай на сколько ты знаешь<br />
            уникальные места и историю прекрасного острова
        </div>
        <div class="qwizBottom">
            <a class="btn qwizBtn" href="/quize/1"></a>
        </div>
    </div>

</div>
    <div class="container">
          @yield('content')

    </div>
@include("inc.footer")

</body>
</html>
