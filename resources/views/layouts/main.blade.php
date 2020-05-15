<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />

    <!-- icons bootstraps -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    

    <!-- css -->
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/jcarousel.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" />


    <!-- Theme skin -->
    <link href="{{asset('public/skins/default.css')}}" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
    <div id="wrapper">
        @yield('content')
    </div>


    <!-- icons bootstraps -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('public/js/jquery.js')}}"></script>
    <script src="{{asset('public/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('public/js/jquery.fancybox-media.js')}}"></script>
    <script src="{{asset('public/js/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('public/js/portfolio/jquery.quicksand.js')}}"></script>
    <script src="{{asset('public/js/portfolio/setting.js')}}"></script>
    <script src="{{asset('public/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('public/js/animate.js')}}"></script>
    <script src="{{asset('public/js/custom.js')}}"></script>
    <script src="{{asset('public/js/jquery-3.5.1.min.js')}}"></script>
    @session('script')
    @show
</body>
</html>