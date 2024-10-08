<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="packsolution.id">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Packsolution.id menyediakan solusi kemasan custom berkualitas tinggi dengan desain inovatif untuk memperkuat citra merek Anda, produksi cepat, pilihan desain tak terbatas, dan bahan food grade yang aman.">

    <title>Packsolution.id - Custom Packaging Solutions</title>
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link href="{{ asset('frontend/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/linoor-icons-2.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/hover.css?ver='.generateRandomString(5).'') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom-animate.css?ver='.generateRandomString(5).'') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/jarallax.css?ver='.generateRandomString(5).'') }}">
    <link href="{{ asset('frontend/css/style.css?ver='.generateRandomString(5).'') }}" rel="stylesheet">

    {{-- Custom CSS --}}
    {!! $css ?? '' !!}
    
    <!-- Custom Packsolution -->
    <link href="{{ asset('frontend/css/custom.css?ver='.generateRandomString(5).'') }}" rel="stylesheet">
    <!-- End Custom Packsolution -->
    
    <!-- rtl css -->
    <link href="{{ asset('frontend/css/rtl.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('frontend/css/responsive.css?ver='.generateRandomString(5).'') }}" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('frontend/css/colors/color-default.css?ver='.generateRandomString(5).'') }}">

    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">

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
                        <div class="logo"><a href="{{ route('/') }}" title="Linoor - DIgital Agency HTML Template"><img
                                    src="{{ base_asset('/frontend/images/logo-white.png') }}" id="dLogo" class="main-logo"
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
                                <ul class="navigation clearfix">
                                    <li class="dropdown {{ $page == 'home' ? 'current' : '' }}">
                                        <a href="{{ route('/') }}">Home</a>
                                    </li>
                                    <li class="dropdown {{ $page == 'produk' ? 'current' : '' }}">
                                        <a href="{{ route('produk') }}">Produk</a>
                                    </li>
                                    <li class="dropdown {{ $page == 'katalog' ? 'current' : '' }}">
                                        <a href="{{ route('katalog') }}">Portofolio</a>
                                    </li>
                                    <li class="dropdown {{ $page == 'about' ? 'current' : '' }}">
                                        <a href="{{ route('about') }}">Tentang Kami</a>
                                        {{-- <ul>
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
                                        </ul> --}}
                                    </li>
                                    {{-- <li class="scrollToLink"><a href="#about">About</a></li>
                                    <li class="scrollToLink"><a href="#services">Services</a></li> --}}
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                        <!-- cart btn -->
                        {{-- <div class="cart-btn">
                            <a href="cart.html" class="theme-btn cart-toggler"><span
                                    class="flaticon-shopping-cart"></span></a>
                        </div> --}}
                        <!--Search Btn-->
                        {{-- <div class="search-btn">
                            <button type="button" class="theme-btn search-toggler"><span
                                    class="flaticon-loupe"></span></button>
                        </div> --}}
                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="https://wa.me/6281952727888?text=Halo%20Packsolution.id,%20saya%20ingin%20order%20kemasan%20untuk%20produk%20saya">
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
                    <p>Percayakan kebutuhan kemasan Anda kepada kami dan rasakan perbedaannya !</p>
                    {{-- <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888
                            999 0000</a></p> --}}
                    {{-- <div class="side-menu__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div> --}}
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

        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="logo text-center text-md-start">
                                        <a href="index.html"><img id="fLogo" src="{{ asset('/frontend/images/logo-white.png') }}" alt="" /></a>
                                    </div>
                                    <div class="text text-md-start">Percayakan kebutuhan kemasan bisnis Anda kepada kami, dan nikmati layanan unggulan serta kualitas terbaik yang membuat bisnis Anda tampil lebih menonjol dan profesional, Kami hadir untuk memberikan hasil terbaik !</div>
                                    <ul class="social-links clearfix text-center text-md-start">
                                        <li><a href="https://web.facebook.com/packsolution.id/?_rdc=1&_rdr"><img src="{{ asset('/frontend/images/icons/fb.png') }}" id="footer-sosmed" alt=""></a></li>
                                        <li><a href="https://www.instagram.com/packsolution.id/"><img src="{{ asset('/frontend/images/icons/ig.png') }}" id="footer-sosmed" alt=""></a></li>
                                        <li><a href="https://www.tiktok.com/@packsolution.id"><img src="{{ asset('/frontend/images/icons/tiktok.png') }}" id="footer-sosmed" alt=""></a></li>
                                        <li><a href="https://shopee.co.id/packsolution.id"><img src="{{ asset('/frontend/images/icons/shopee.png') }}" id="footer-sosmed" class="invert" alt=""></a></li>
                                        <li><a href="https://www.tokopedia.com/packsolution"><img src="{{ asset('/frontend/images/icons/tokped.png') }}" id="footer-sosmed" class="invert" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        {{-- <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h6>Tentang</h6>
                                    <ul>
                                        <li><a href="#">Tentang Packsolution</a></li>
                                        <li><a href="#">Mitra Packsolution</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Karir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content text-center text-md-start">
                                    <h6>Contact</h6>
                                    <ul class="contact-info text-start">
                                        <li class="address"><span class="icon flaticon-pin-1"></span> Jl agus salim Ruko laweyan square no 8, Kota Surakarta, Jawa Tengah 57147</li>
                                        <li><span class="icon flaticon-call"></span><a href="https://wa.me/6281952727888?text=Halo%20Packsolution.id,%20saya%20ingin%20order%20kemasan%20untuk%20produk%20saya">081952727888</a></li>
                                        <li><span class="icon flaticon-email"></span><a
                                                href="mailto:packsolution.id@gmail.com">packsolution.id@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-content text-center text-md-start">
                                    <h6>Pengunjung</h6>

                                    <div class="row clearfix text-center text-md-start justify-content-center justify-content-md-start">
                                        <div class="col-md-6 col-3 text-start">
                                            <ul>
                                                <li><span style="color: #999b9f" href="#">Harian</span></li>
                                                <li><span style="color: #999b9f" href="#">Bulanan</span></li>
                                                <li><span style="color: #999b9f" href="#">Tahunan</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-3">
                                            <ul>
                                                <li><span style="color: #999b9f" href="#">{{ $statistik->counterHari }}</span></li>
                                                <li><span style="color: #999b9f" href="#">{{ $statistik->counterBulan }}</span></li>
                                                <li><span style="color: #999b9f" href="#">{{ $statistik->counterTahun }}</span></li>
                                            </ul>
                                        </div>
                                    </div>

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

    {{-- custom js --}}
    {!! $js ?? '' !!}

    <script src="{{ asset('frontend/js/lang.js') }}"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="{{ asset('frontend/js/color-switcher.js') }}"></script>

</body>

</html>