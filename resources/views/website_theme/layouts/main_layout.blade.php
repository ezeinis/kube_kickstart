<!DOCTYPE html>
<html>
<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/kube.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    @yield('header')
</head>
<body>
    <div id="site_wrap">
        @include('website_theme.includes.header')
        @yield('content')
        @include('website_theme.includes.footer')
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/kube.min.js"></script>
    @yield('js')
</body>
</html>
