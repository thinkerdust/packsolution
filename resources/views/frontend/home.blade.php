<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Packsolution.id - Custom Packaging Solutions</title>
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/linoor-icons-2.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom-animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/jarallax.css') }}">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    
    <!-- Custom Packsolution -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <!-- End Custom Packsolution -->
    
    <!-- rtl css -->
    <link href="{{ asset('frontend/css/rtl.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('frontend/css/colors/color-default.css') }}">

    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- style switcher -->
        {{-- <div class="style-switcher">
            <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
            <h3>Color Skins</h3>
            <ul id="styleOptions" title="Switch Color">
                <li>
                    <a href="" data-theme="color-default" class="color-default">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-2" class="color-2">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-3" class="color-3">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-4" class="color-4">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-5" class="color-5">

                    </a>
                </li>
                <li>
                    <a href="" data-theme="color-6" class="color-6">

                    </a>
                </li>
            </ul>
            <div class="language-feature">
                <button class="ltr-switcher" data-href="#googtrans(en|en)">LTR</button><!-- /.ltr-switcher -->
                <button class="rtl-switcher" data-href="#googtrans(en|ar)">RTL</button><!-- /.rtl-switcher -->
            </div><!-- /.language-feature -->
            <div class="layout-feature">
                <a href="#" class="dark-switcher">Dark</a>
                <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
            </div><!-- /.language-feature -->
        </div> --}}
        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-one header-style-four">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html" title="Linoor - DIgital Agency HTML Template"><img
                                    src="{{ asset('frontend/images/logo-dark.png') }}" id="dLogo" class="main-logo"
                                    alt="Linoor - DIgital Agency HTML Template"
                                    title="Linoor - DIgital Agency HTML Template"></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix one-page-scroll-menu">
                                    <li class="dropdown megamenu megamenu-clickable megamenu-clickable--toggler"><a
                                            href="index-main.html">Home</a>
                                        <ul>
                                            <li>
                                                <section class="home-showcase">
                                                    <span class="home-showcase__toggler megamenu-clickable--toggler">
                                                        <a href="#" class="linoor-icon-two-close"></a>
                                                    </span><!-- /.home-showcase__toggler -->
                                                    <div class="auto-container">
                                                        <div class="home-showcase__inner">

                                                            <h3 class="home-showcase__top-title">Pre-Built Demos
                                                            </h3>

                                                            <div class="row">

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-1.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-9.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">photography
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-2.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-10.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">design
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-3.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-11.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Profile
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-4.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-6.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">Multi
                                                                                            Page</span>
                                                                                    </a>

                                                                                    <a href="index-6-one-page.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">One
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Corporate
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-5.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-7.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">Multi
                                                                                            Page</span>
                                                                                    </a>

                                                                                    <a href="index-7-one-page.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">One
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Seo
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-6.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-8.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">Multi
                                                                                            Page</span>
                                                                                    </a>

                                                                                    <a href="index-8-one-page.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">One
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Consulting
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-7.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-4.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">Multi
                                                                                            Page</span>
                                                                                    </a>

                                                                                    <a href="index-4-one-page.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">One
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Business
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-8.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-5.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Digital
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-9.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-portfolio.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Portfolio</h3>
                                                                        <!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-10.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-parallax.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">Multi
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Parallax
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-11.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-main.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">agency 01
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-12.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-2.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">Multi
                                                                                            Page</span>
                                                                                    </a>

                                                                                    <a href="index-2-one-page.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">One
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">agency 02
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-13.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-3.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">Multi
                                                                                            Page</span>
                                                                                    </a>

                                                                                    <a href="index-3-one-page.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">One
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">agency 03</h3>
                                                                        <!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-14.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="one-page.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">One Page</h3>
                                                                        <!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-19.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-dark.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Dark</h3>
                                                                        <!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-3">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-16.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-boxed.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">Boxed
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-3 -->

                                                                <div class="col-lg-6">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-17.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-portfolio-2.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">horizontal
                                                                            01
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-6 -->

                                                                <div class="col-lg-6">
                                                                    <div class="home-showcase__item">
                                                                        <div class="home-showcase__image-box">
                                                                            <div class="home-showcase__image">
                                                                                <img src="{{ asset('frontend/images/update-18-05-2022/home-showcase/home-showcase-1-18.jpg') }}"
                                                                                    alt="">
                                                                                <div class="home-showcase__buttons">
                                                                                    <a href="index-portfolio-3.html"
                                                                                        class="theme-btn btn-style-one home-showcase__buttons__item">
                                                                                        <i class="btn-curve"></i>
                                                                                        <span class="btn-title">View
                                                                                            Page</span>
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /.home-showcase__buttons -->
                                                                            </div><!-- /.home-showcase__image -->
                                                                        </div><!-- /.home-showcase__image box -->
                                                                        <h3 class="home-showcase__title">horizontal
                                                                            02
                                                                        </h3><!-- /.home-showcase__title -->
                                                                    </div><!-- /.home-showcase__item -->
                                                                </div><!-- /.col-lg-6 -->

                                                            </div><!-- /.row -->
                                                        </div><!-- /.home-showcase__inner -->

                                                    </div><!-- /.container -->
                                                </section>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="about.html">Tipe Kemasan</a>
                                        <ul>
                                            <li><a href="about-2.html">About Two </a></li>
                                            <li><a href="about-me.html">About Me </a></li>
                                            <li><a href="mission.html">Our Mission </a></li>
                                            <li><a href="history.html">Our History </a></li>
                                            <li class="dropdown">
                                                <a href="team.html">Our Team </a>
                                                <ul>
                                                    <li><a href="team.html">Team 01</a></li>
                                                    <li><a href="team-2.html">Team 02</a></li>
                                                    <li><a href="team-3.html">Team 03</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="process.html">Our Process </a></li>
                                            <li><a href="partners.html">Our Partner</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="about.html">Katalog</a>
                                        <ul>
                                            <li><a href="about-2.html">About Two </a></li>
                                            <li><a href="about-me.html">About Me </a></li>
                                            <li><a href="mission.html">Our Mission </a></li>
                                            <li><a href="history.html">Our History </a></li>
                                            <li class="dropdown">
                                                <a href="team.html">Our Team </a>
                                                <ul>
                                                    <li><a href="team.html">Team 01</a></li>
                                                    <li><a href="team-2.html">Team 02</a></li>
                                                    <li><a href="team-3.html">Team 03</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="process.html">Our Process </a></li>
                                            <li><a href="partners.html">Our Partner</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="about.html">Tentang Kami</a>
                                        <ul>
                                            <li><a href="about-2.html">About Two </a></li>
                                            <li><a href="about-me.html">About Me </a></li>
                                            <li><a href="mission.html">Our Mission </a></li>
                                            <li><a href="history.html">Our History </a></li>
                                            <li class="dropdown">
                                                <a href="team.html">Our Team </a>
                                                <ul>
                                                    <li><a href="team.html">Team 01</a></li>
                                                    <li><a href="team-2.html">Team 02</a></li>
                                                    <li><a href="team-3.html">Team 03</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="process.html">Our Process </a></li>
                                            <li><a href="partners.html">Our Partner</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="scrollToLink"><a href="#about">About</a></li>
                                    <li class="scrollToLink"><a href="#services">Services</a></li> --}}
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                        <!-- cart btn -->
                        <div class="cart-btn">
                            <a href="cart.html" class="theme-btn cart-toggler"><span
                                    class="flaticon-shopping-cart"></span></a>
                        </div>
                        <!--Search Btn-->
                        {{-- <div class="search-btn">
                            <button type="button" class="theme-btn search-toggler"><span
                                    class="flaticon-loupe"></span></button>
                        </div> --}}
                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:6668880000">
                                    <span class="icon"></span>
                                    <span class="sub-text">Hubungi Kami</span>
                                    <span class="number">0819 5272 7888</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->


        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{ asset('frontend/images/icons/close-1-1.png') }}"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                        other agencies.</p>
                    <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888
                            999 0000</a></p>
                    <div class="side-menu__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <!--Search Popup-->
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->


        <!-- Banner Section -->
        <section class="banner-section banner-one banner-one-page" id="home">

            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url(images/carousel/carousel-1.png);"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner text-center">
                                    <h1>Discover <br> <span>new linoor agency</span></h1>
                                    <div class="sub-title">welcome to Carousel 1</div>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Buat Pesanan</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url(images/main-slider/2-2.jpg);"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner text-center">
                                    <h1>Discover <br> <span>new linoor agency</span></h1>
                                    <div class="sub-title">welcome to Carousel 1</div>
                                    <div class="link-box">
                                        <a class="theme-btn btn-style-one" href="about.html">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Buat Pesanan</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Banner Section -->

        <!--About Section-->
        <section class="about-section" id="about">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Image Column-->
                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('frontend/images/about/about-1.png') }}" alt=""></div>
                            <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('frontend/images/about/about-2.png') }}" alt=""></div>
                        </div>
                    </div>
                    <!--Text Column-->
                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>Solusi Kemasan untuk produk<span class="dot">.</span></h2>
                                <div class="lower-text">We are committed to providing our customers with exceptional
                                    service while offering our employees the best training.</div>
                            </div>
                            <div class="text">
                                <p>Lorem Ipsum is simply dummy text of free available in market the printing and
                                    typesetting industry has been the industry's standard dummy text ever.</p>
                            </div>
                            <div class="text clearfix">
                                <ul>
                                    <li>Pengerjaan 10 hari kerja.</li>
                                    <li>Desain tidak terbatas.</li>
                                    <li>Menggunakan bahan food grade.</li>
                                </ul>
                                <div class="since"><span class="txt">Since <br>2008</span></div>
                            </div>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="about.html">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Buat Pesanan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Services Section-->
        <section class="services-section-three services-section-three__one-page" id="services">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Produk Kami</h2>
                </div>
                <div class="services">
                    <div class="row clearfix">
                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><img src="{{ asset('frontend/images/icons/gusset.png') }}" alt=""></div>
                                <h5><a href="#">Gusset</a></h5>
                                {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><img src="{{ asset('frontend/images/icons/standing-pouch.png') }}" alt=""></div>
                                <h5><a href="#">Standing Pouch</a></h5>
                                {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                                <div class="link-box mt-3"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><img src="{{ asset('frontend/images/icons/central-seal.png') }}" alt=""></div>
                                <h5><a href="#">Central Seal</a></h5>
                                {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><img src="{{ asset('frontend/images/icons/sachet.png') }}" alt=""></div>
                                <h5><a href="#">Sachet</a></h5>
                                {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                                <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!--Why Section-->
        <section class="why-section" id="why">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Mengapa Packsolution ?</h2>
                    <div class="lower-text">Kelebihan menggunakan produk kami.</div>
                </div>
                <div class="row clearfix image-right">
                    <!--Text Column-->
                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h3>Menggunakan Material Food Grade<span class="dot">.</span></h3>
                                <div class="lower-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae elit maximus, feugiat dolor a, maximus nulla. Aenean quis lacus ex.</div>
                            </div>
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('frontend/images/why/why-1.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="why-border"></div>
                </div>

                <div class="row clearfix image-left">
                    <!--Image Column-->
                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('frontend/images/why/why-2.png') }}" alt=""></div>
                        </div>
                    </div>
                    <!--Text Column-->
                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h3>Pencetakan 10 hari kerja<span class="dot">.</span></h3>
                                <div class="lower-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae elit maximus, feugiat dolor a, maximus nulla. Aenean quis lacus ex.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="why-border"></div>
                </div>

                <div class="row clearfix image-right">
                    <!--Text Column-->
                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h3>Pilihan Desain Tak Terbatas Gratis Revisi<span class="dot">.</span></h3>
                                <div class="lower-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae elit maximus, feugiat dolor a, maximus nulla. Aenean quis lacus ex.</div>
                            </div>
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('frontend/images/why/why-3.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="why-border"></div>
                </div>

                <div class="row clearfix image-left">
                    <!--Image Column-->
                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                    src="{{ asset('frontend/images/why/why-4.png') }}" alt=""></div>
                        </div>
                    </div>
                    <!--Text Column-->
                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h3>Apalagi Ya Aku Bingung, Ngarang Ngarang<span class="dot">.</span></h3>
                                <div class="lower-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae elit maximus, feugiat dolor a, maximus nulla. Aenean quis lacus ex.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--Live Section-->
        <section class="live-section live-section__one-page">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Experience us live<span class="dot">.</span></h2>
                </div>
                <div class="main-image-box">
                    <div class="image-layer" style="background-image: url(images/resource/featured-image-3.jpg);"></div>
                    <div class="inner clearfix">
                        <div class="round-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="round-inner">
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i
                                                class="ripple"></i></div>
                                    </a>
                                </div>
                                <div class="title">
                                    <h3>agency that gets <br>excited about</h3>
                                </div>
                                <div class="more-link"><a href="about.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--We DO Section-->
        <section class="we-do-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>We do more then ever <br>platforms<span class="dot">.</span></h2>
                            </div>
                            <div class="featured-block clearfix">
                                <div class="image"><img src="{{ asset('frontend/images/resource/featured-image-4.jpg') }}" alt=""></div>
                                <div class="text">There are many variatns of passages the majority have suffered
                                    alteration in some foor randomised words believable.</div>
                            </div>
                            <div class="progress-box">
                                <div class="bar-title">Digital marketing</div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="70%">
                                        <div class="count-box">
                                            <span class="count-text" data-stop="70" data-speed="1500">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="faq-box">
                                <ul class="accordion-box clearfix">
                                    <!--Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><span class="count">1.</span> We help to create
                                            visual strategies</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">There are many variations of passages the majority
                                                    have suffered alteration in some fo injected humour, or randomised
                                                    words believable.</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><span class="count">2.</span> Motion Graphics & Animations
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">There are many variations of passages the majority
                                                    have suffered alteration in some fo injected humour, or randomised
                                                    words believable.</div>
                                            </div>
                                        </div>
                                    </li>

                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><span class="count">3.</span> We help to achieve mutual
                                            goals</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">There are many variations of passages the majority
                                                    have suffered alteration in some fo injected humour, or randomised
                                                    words believable.</div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Funfacts Section -->
        <section class="facts-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
            <!-- <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div> -->
            <img src="{{ asset('frontend/images/parallax.png') }}" alt="" class="jarallax-img">
            <div class="auto-container">
                <div class="inner-container">

                    <!-- Fact Counter -->
                    <div class="fact-counter">
                        <div class="row clearfix d-flex justify-content-center">

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        {{-- <div class="count-outer count-box">
                                            <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                        </div> --}}
                                        <img src="{{ asset('frontend/images/icons/pesan.png') }}" style="width: 190px; height: 190px;" alt="">
                                        <div class="counter-title">Pesan</div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="column column-line counter-column col-lg-1 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <img src="{{ asset('frontend/images/icons/line.png') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div> --}}

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        {{-- <div class="count-outer count-box alternate">
                                            <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                        </div> --}}
                                        <img src="{{ asset('frontend/images/icons/persetujuan.png') }}" style="width: 190px; height: 190px;" alt="">
                                        <div class="counter-title">Persetujuan</div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="column column-line counter-column col-lg-2 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <img src="{{ asset('frontend/images/icons/line.png') }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div> --}}

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        {{-- <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                        </div> --}}
                                        <img src="{{ asset('frontend/images/icons/kirim.png') }}" style="width: 190px; height: 190px;" alt="">
                                        <div class="counter-title">Kirim</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Funfacts Section -->

        <!-- Gallery Section -->
        <section class="gallery-section" id="portfolio">
            <div class="auto-container">
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">
                    <div class="upper-row clearfix">
                        <div class="sec-title">
                            <h2>work showcase<span class="dot">.</span></h2>
                        </div>
                        <!--Filter-->
                        <div class="filters clearfix">
                            <ul class="filter-tabs filter-btns clearfix">
                                <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                                <li class="filter" data-role="button" data-filter=".branding">Branding<sup>[3]</sup>
                                </li>
                                <li class="filter" data-role="button" data-filter=".illustration">
                                    illustration<sup>[3]</sup></li>
                                <li class="filter" data-role="button" data-filter=".photography">
                                    Photography<sup>[3]</sup></li>
                                <li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-list row">
                        <!-- Gallery Item -->
                        <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-1.png') }}" alt=""></figure>
                                <a href="images/gallery/1.jpg" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all photography web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-2.png') }}" alt=""></figure>
                                <a href="images/gallery/2.jpg" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all branding web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-3.png') }}" alt=""></figure>
                                <a href="images/gallery/3.jpg" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all branding illustration col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-4.png') }}" alt=""></figure>
                                <a href="images/gallery/4.jpg" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div
                            class="gallery-item mix all branding illustration photography web-design col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-5.png') }}" alt=""></figure>
                                <a href="images/gallery/5.jpg" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item -->
                        <div class="gallery-item mix all illustration photography col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-6.png') }}" alt=""></figure>
                                <a href="images/gallery/6.jpg" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Graphic</span></div>
                                        <div class="title">
                                            <h5><a href="portfolio-single.html">Fimlor Experience</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Gallery Section -->
        
        <!--Sponsors Section-->
        <section class="sponsors-section sponsors-section__one-page">
            <div class="sponsors-outer">
                <!--Sponsors-->
                <div class="auto-container">

                    <div class="sec-title centered">
                        <h2>Customer Kami</h2>
                    </div>

                    <!--Sponsors Carousel-->
                    <div class="sponsors-carousel owl-theme owl-carousel">
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/1.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/2.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/3.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/4.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/5.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/1.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/2.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/3.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/4.png') }}" alt=""></a></figure>
                        </div>
                        <div class="slide-item">
                            <figure class="image-box"><a href="#"><img src="{{ asset('frontend/images/clients/5.png') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        {{-- <section class="team-section" id="team">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Showcase<span class="dot">.</span></h2>
                </div>
            </div>
            <div class="auto-container">
                <div class="carousel-box">
                    <div class="team-carousel__one-page owl-theme owl-carousel">
                        <!--Team-->
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="about.html"><img src="{{ asset('frontend/images/resource/team-1.jpg') }}" alt=""></a>
                                    <ul class="social-links clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <h5><a href="#">Kevin martin</a></h5>
                                    <div class="designation">Designer</div>
                                </div>
                            </div>
                        </div>

                        <!--Team-->
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="about.html"><img src="{{ asset('frontend/images/resource/team-2.jpg') }}" alt=""></a>
                                    <ul class="social-links clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <h5><a href="#">Jessica Brown</a></h5>
                                    <div class="designation">Designer</div>
                                </div>
                            </div>
                        </div>

                        <!--Team-->
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="about.html"><img src="{{ asset('frontend/images/resource/team-3.jpg') }}" alt=""></a>
                                    <ul class="social-links clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <h5><a href="#">John Albert</a></h5>
                                    <div class="designation">Designer</div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div><!-- /.auto-container -->
        </section> --}}

        <!-- Parallax Section -->
        {{-- <section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
            <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->
            <img src="{{ asset('frontend/images/background/image-2.jpg') }}" alt="" class="jarallax-img">
            <div class="auto-container">
                <div class="content-box">
                    <div class="icon-box"><span class="flaticon-app-development"></span></div>
                    <h2>Great things in business are never done by one person. <span>They’re done by a team of
                            people.</span></h2>
                </div>
            </div>
        </section> --}}
        <!-- End Funfacts Section -->

        <!--Testimonials Section-->
        <section class="testimonials-section" id="testimonials">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Customer feedbacks<span class="dot">.</span></h2>
                </div>
                <div class="carousel-box">
                    <div class="testimonials-carousel owl-theme owl-carousel">
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="{{ asset('frontend/images/resource/author-1.jpg') }}"
                                                alt=""></a></div>
                                    <div class="name">Shirley Smith</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="{{ asset('frontend/images/resource/author-2.jpg') }}"
                                                alt=""></a></div>
                                    <div class="name">Mike hardson</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="{{ asset('frontend/images/resource/author-3.jpg') }}"
                                                alt=""></a></div>
                                    <div class="name">Sarah albert</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="{{ asset('frontend/images/resource/author-1.jpg') }}"
                                                alt=""></a></div>
                                    <div class="name">Shirley Smith</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="{{ asset('frontend/images/resource/author-2.jpg') }}"
                                                alt=""></a></div>
                                    <div class="name">Mike hardson</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="image"><a href="team.html"><img src="{{ asset('frontend/images/resource/author-3.jpg') }}"
                                                alt=""></a></div>
                                    <div class="name">Sarah albert</div>
                                    <div class="designation">Director</div>
                                </div>
                                <div class="text">There are many variations of passages of lorem ipsum available but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        {{-- <section class="news-section" id="blog">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Latest news & articles<span class="dot">.</span></h2>
                </div>

                <div class="row clearfix">
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('frontend/images/resource/news-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">basic rules of running web agency business</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('frontend/images/resource/news-2.jpg') }}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">Delivering the best digital marketing</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="{{ asset('frontend/images/resource/news-3.jpg') }}" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="blog-single.html">Introducing the latest linoor features</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="blog-single.html"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!--Get Quote Section-->
        <section class="get-quote-two get-quote-two__one-page" id="contact">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>Buat Pesanan Anda Sekarang<span class="dot">.</span></h2>
                            </div>
                            <div class="text">There are many variatns of passages the majority have suffered alteration
                                in some foor randomised words believable.</div>
                            <div class="info">
                                <ul>
                                    <li class="address">
                                        <span class="icon flaticon-pin-1"></span>
                                        <strong>Kunjungi Kami</strong>
                                        Jl. Agus Salim (Ruko Laweyan Square no 8), Sondakan, Laweyan, Surakarta
                                    </li>
                                    <li>
                                        <span class="icon flaticon-email-2"></span>
                                        <strong>Email</strong>
                                        <a href="mailto:needhelp@linoor.com">packsolution.id@gmail.com</a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-call"></span>
                                        <strong>Hubungi Kami</strong>
                                        <a href="tel:081952727888">0819 5272 7888</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="form-box">
                                <div class="default-form">
                                    <form method="post" action="sendemail.php" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="username" value="" placeholder="Your Name"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="email" name="email" value=""
                                                        placeholder="Email Address" required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="phone" value="" placeholder="Phone Number"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="subject" value="" placeholder="Subject"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <div class="field-inner">
                                                    <textarea name="message" placeholder="Write Message"
                                                        required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <button class="theme-btn btn-style-one">
                                                    <i class="btn-curve"></i>
                                                    <span class="btn-title">Send message</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- <div class="map-section map-section__one-page">
            <div class="map-container">
                <iframe class="map-iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230899.1642407818!2d145.06327708904033!3d-37.792102974783376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65cd0db468a97%3A0xb61fde84306fc38a!2sMelbourne%20Zoo!5e0!3m2!1sen!2s!4v1592307685926!5m2!1sen!2s"
                    style="border:0;" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div> --}}

        <!--Contact Section-->
        <section class="contact-section contact-section__one-page">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Offices near you<span class="dot">.</span></h2>
                </div>

                <div class="upper-info">
                    <div class="row clearfix">
                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>Austin</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>22 Texas West Hills</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>Boston</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>5 Federal Street Boston</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>New york</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>8th Broklyn New York</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>baltimore</h5>
                                <div class="text">
                                    <ul class="info">
                                        <li>3 Lombabr 50 Baltimore</li>
                                        <li><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                        <li><a href="tel:666888000">666 888 000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Call To Section -->
        <section class="call-to-section">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                    <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                    <h2>Mari Mulai Proyek Anda <br>Sekarang !</h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="about.html">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Hubungi Kami</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="logo">
                                        <a href="index.html"><img id="fLogo" src="{{ asset('frontend/images/footer-logo.png') }}" alt="" /></a>
                                    </div>
                                    <div class="text">Welcome to our web design agency. Lorem ipsum simply free text
                                        dolor sited amet cons cing elit.</div>
                                    <ul class="social-links clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h6>Explore</h6>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <ul>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Meet Our Team</a></li>
                                                <li><a href="#">Our Portfolio</a></li>
                                                <li><a href="#">Latest News</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <ul>
                                                <li><a href="#">Support</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms of Use</a></li>
                                                <li><a href="#">Help</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content">
                                    <h6>Contact</h6>
                                    <ul class="contact-info">
                                        <li class="address"><span class="icon flaticon-pin-1"></span> 66 Broklyn Street,
                                            New York <br>United States of America</li>
                                        <li><span class="icon flaticon-call"></span><a href="tel:666888000">666 888
                                                000</a></li>
                                        <li><span class="icon flaticon-email-2"></span><a
                                                href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-content">
                                    <h6>Newsletter</h6>
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group clearfix">
                                                <input type="email" name="email" value="" placeholder="Email Address"
                                                    required="">
                                                <button type="submit" class="theme-btn"><span
                                                        class="fa fa-envelope"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text">Sign up for our latest news & articles. We won’t give you spam
                                        mails.</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="copyright">&copy; Copyright 2024 by packsolution.id</div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/TweenMax.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.js') }}"></script>
    <script src="{{ asset('frontend/js/knob.js') }}"></script>
    <script src="{{ asset('frontend/js/validate.js') }}"></script>
    <script src="{{ asset('frontend/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/js/jQuery.style.switcher.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
    </script>
    <script src="{{ asset('frontend/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom-script.js') }}"></script>


    <script src="{{ asset('frontend/js/lang.js') }}"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="{{ asset('frontend/js/color-switcher.js') }}"></script>

</body>

</html>