<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Hasta - Responsive MultiPurpose HTML5 Template</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- stylesheets -->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/js/bootstrap/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/js/mainmenu/menu.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/layouts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/shortcodes.css') }}" type="text/css" />
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/responsive-leyouts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/css/et-line-font/et-line-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/cubeportfolio/cubeportfolio.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-styles.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset("assets/js/smart-forms/smart-forms.css")}}">

    <!-- стили главная -->
    @yield('blog-style')
    <!-- Remove the below comments to use your color option -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/lightblue.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/orange.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/green.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/pink.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/red.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/purple.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/bridge.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/yellow.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/violet.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/cyan.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/colors/mossgreen.css') }}" /> -->

    <!-- just remove the below comments witch bg patterns you want to use -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-default.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-1.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-2.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-3.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-4.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-5.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-6.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-7.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-8.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-9.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-10.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-11.css') }}" /> -->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bg-patterns/pattern-12.css') }}" /> -->
</head>

<body>
    <div class="wrapper-boxed">

        @include('layouts.app-templates.header')
        @yield('content')
        @include('layouts.app-templates.footer')
        <div class="clearfix"></div>

        <section class="section-copyrights section-less-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class=" social-icons-3">
                            <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="active" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
                            <li><a href="#"><i class="fa fa-android"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <br />
                        <span>Copyright © 2019 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By
                            <a href="https://1.envato.market/codelayers">Codelayers</a> | All rights reserved.</span>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

    </div>
    </div>
    <!--end sitewraper-->

    <!-- ========== Js Files ========== -->

    <script type="text/javascript" src="{{ asset('assets/js/universal/jquery.js') }}"></script>
    @yield('home-script')
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/mainmenu/customeUI.js') }}"></script>
    <script src="{{ asset('assets/js/mainmenu/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltotop/totop.js') }}"></script>




    <script src="{{ asset('assets/js/scripts/functions.js') }}" type="text/javascript"></script>

    <!-- Главная скрипты  -->





</body>

</html>
