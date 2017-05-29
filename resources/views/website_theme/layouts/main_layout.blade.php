<!DOCTYPE html>
<html>
<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/kube.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>

    @yield('header')
    
    @inject('frontHelp', 'Library\FrontendHelperLib')
    <script type="text/javascript">
        var routes = {
            base_url: "<?php echo URL::to('/').'/'; ?>",
            send: "<?php echo $frontHelp->pRoute('send_email',$_ENV['LANG'],$_ENV['WEBSITE'],'post'); ?>",
            news: "<?php echo route('newsletter.subscribe'); ?>"
        }
    </script>
</head>
<body>
    <div id="site_wrap">
        @include('website_theme.includes.header')
        @yield('content')
        @include('website_theme.includes.footer')
        
        <div class="status_message @if(session('type')){{'displayed'}}@endif @if(session('type')=='confirmation_sent' || session('type')=='sub_success' || session('type')=='unsub_confirmation_sent' || session('type')=='success'){{'success'}}@else{{'error'}}@endif">
            @if (session('type'))
                <div class="text-center">
                    <p>@lang('status_messages.'.session('type'))</p>
                </div>
            @endif
            <span class="close small close_status"><i class="fa fa-times" aria-hidden="true"></i></span>
        </div>
    </div>

    <script type="text/javascript" src="/js/kube.min.js"></script>
    @yield('js')
    <script type="text/javascript">
        $(document).ready(function(){
        
        });
    </script>
</body>
</html>
