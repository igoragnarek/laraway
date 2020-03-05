<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | Nova</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ $path . '/public/css/bootstrap.min.css' }}">
    <link rel="stylesheet" href="{{ $path . '/public/css/bootstrap-responsive.min.css' }}">
    <link rel="stylesheet" href="{{ $path . '/public/css/font-awesome.min.css' }}">
    <link rel="stylesheet" href="{{ $path . '/public/css/main.css' }}">
    <link rel="stylesheet" href="{{ $path . '/public/css/sl-slide.css' }}">

    <script src="{{ $path . '/public/js/modernizr-2.6.2-respond-1.1.0.min.js' }}"></script>

    <!-- Le fav and touch icons 
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" 
            href=" {{ $path . '/public/img/ico/apple-touch-icon-144-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
            href=" {{ $path . '/public/img/ico/apple-touch-icon-114-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" 
            href=" {{ $path . '/public/img/ico/apple-touch-icon-72-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" 
            href=" {{ $path . '/public/img/ico/apple-touch-icon-57-precomposed.png' }}">
    -->
</head>

<body>

    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>

                        @if(auth()->user())
                            <a class='normal-me' data-toggle="modal" href="{{ url('/home') }}"><i class="icon-home"></i></a>
                        @else
                            <li class="login">
                                <a data-toggle="modal" href="{{ url('/login') }}"> Login </a>
                            </li>
                            <li class="login">
                                <a data-toggle="modal" href="{{ url('/register') }}"> Register </a>
                            </li>
                        @endif

                    </ul>        
                </div>
            </div>
        </div>
    </header>


    @yield('content')


    <footer id="footer">
        <div class="container">
            <div class="row-fluid">
                <div class="span5 cp">
                    &copy; 2013 <a target="_blank" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>

                <div class="span6">
                    <ul class="social pull-right">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-rss"></i></a></li>
                        <li><a href="#"><i class="icon-github-alt"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                    </ul>
                </div>

                <div class="span1">
                    <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
                </div>

            </div>
        </div>
    </footer>


    <script src="{{ $path . '/public/js/jquery-1.9.1.min.js' }}"></script>
    <script src="{{ $path . '/public/js/bootstrap.min.js' }}"></script>
    <script src="{{ $path . '/public/js/main.js' }}"></script>



</body>
</html>