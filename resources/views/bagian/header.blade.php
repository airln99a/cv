<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicons -->
    <link href="{{ secure_asset('public/img/about/logo.png') }}" rel="icon">
    <link href="{{ secure_asset('public/img/about/logo.png') }}" rel="apple-touch-icon">

    <title>{{ $judul }}</title>

    <!-- STYLES -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ secure_asset('public/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('public/css/style.css') }}" />
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- /STYLES -->

</head>

<body>

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- WRAPPER ALL -->
    <div class="cavani_tm_all_wrap" data-magic-cursor="show" data-enter="flipInX" data-exit="">

        <div class="cavani_tm_left_border"></div>
        <div class="cavani_tm_right_border"></div>

        <!-- MOBILE MENU -->
        <div class="cavani_tm_topbar">
            <div class="topbar_inner">
                <div class="logo" data-type="text">
                    <!-- You can use text or image as logo. data-type values are: "image" and "text"  -->
                    {{-- <a class="image" href="/"><img src="img/logo/dark.png" alt=""/></a> --}}
                    <a class="text" href="#"><span>Airlangga</span></a>
                </div>
                <div class="trigger">
                    <div class="hamburger hamburger--slider">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cavani_tm_mobile_menu">
            <div class="inner">
                <div class="wrapper">
                    <div class="avatar">
                        <div class="image" data-img-url="img/about/cool.jpg"></div>
                    </div>
                    <div class="menu_list">
                        <ul class="transition_link">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#service">Service</a></li>
                            {{-- <li><a href="#news">News</a></li> --}}
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><img class="svg" src="{{ secure_asset('img/svg/social/facebook.svg') }}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{ secure_asset('img/svg/social/twitter.svg') }}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{ secure_asset('img/svg/social/instagram.svg') }}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{ secure_asset('img/svg/social/dribbble.svg') }}" alt="" /></a></li>
                            <li><a href="#"><img class="svg" src="{{ secure_asset('img/svg/social/tik-tok.svg') }}" alt="" /></a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy; 2022</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- /MOBILE MENU -->

        <!-- HEADER -->
        <div class="cavani_tm_header">
            <div class="logo" data-type="text">
                <!-- You can use text or image as logo. data-type values are: "image" and "text"  -->
                {{-- <a class="image" href="/"><img src="img/logo/dark.png" alt=""/></a> --}}
                <a class="text" href="#"><span>Airlangga</span></a>
            </div>
            <div class="menu">
                <ul class="transition_link">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#service">Service</a></li>
                    {{-- <li><a href="#news">News</a></li> --}}
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <span class="ccc"></span>
            </div>
        </div>
        <!-- /HEADER -->
