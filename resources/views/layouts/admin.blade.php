<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (empty($title))
            Административная панель
        @else
            {{$title}}
        @endif
    </title>

    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/admin/moment-with-locales.js"></script>
    <script src="/js/admin/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/admin/tiny.js"></script>
    <script src="/js/admin/script.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin/bootstrap-datetimepicker-standalone.css" rel="stylesheet">
    <link href="/css/admin/bootstrap-theme.css" rel="stylesheet">
    <link href="/css/admin/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/css/admin/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid" id="main">
    @include("inc.admin_nav")
</div>
@if ( $errors->count() > 0 )
    <div class="container">
    <div class="alert-danger">
        @foreach( $errors->all() as $message )
            <p>{{$message}}</p>
        @endforeach
    </div>
</div>

@endif


<div class="container">
    @yield('content')
</div>


<div class="footer container-fluid">
</div>

</body>
</html>
