@extends('frontend.template')

@section('content')

{{-- <section class="gallery-section" id="portfolio">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <div class="upper-row clearfix">
                <div class="sec-title">
                    <h2>katalog<span class="dot">.</span></h2>
                </div>
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                        <li class="filter" data-role="button" data-filter=".branding">Standing Pouch<sup>[3]</sup>
                        </li>
                        <li class="filter" data-role="button" data-filter=".illustration">
                            Sachet<sup>[3]</sup></li>
                        <li class="filter" data-role="button" data-filter=".photography">
                            Gusset<sup>[3]</sup></li>
                        <li class="filter" data-role="button" data-filter=".web-design">Central Seal<sup>[4]</sup>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="filter-list row">
                <!-- Gallery Item -->
                <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-1.png') }}" alt=""></figure>
                        <a href="{{ asset('frontend/images/showcase/showcase-1.png') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Standing Pouch</span></div>
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
                        <a href="{{ asset('frontend/images/showcase/showcase-2.png') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Gusset</span></div>
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
                        <a href="{{ asset('frontend/images/showcase/showcase-3.png') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Sachet</span></div>
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
                        <a href="{{ asset('frontend/images/showcase/showcase-4.png') }}" class="lightbox-image overlay-box"
                            data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>Central Seal</span></div>
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
                        <a href="{{ asset('frontend/images/showcase/showcase-5.png') }}" class="lightbox-image overlay-box"
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
                        <a href="{{ asset('frontend/images/showcase/showcase-6.png') }}" class="lightbox-image overlay-box"
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
</section> --}}

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style=""></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Katalog</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li class="active">Katalog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters centered clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                    <li class="filter" data-role="button" data-filter=".branding">Standing Pouch<sup>[3]</sup></li>
                    <li class="filter" data-role="button" data-filter=".illustration">Gusset<sup>[3]</sup>
                    </li>
                    <li class="filter" data-role="button" data-filter=".photography">Sachet<sup>[3]</sup>
                    </li>
                    <li class="filter" data-role="button" data-filter=".web-design">Central Seal<sup>[4]</sup>
                    </li>
                </ul>
            </div>
            <div class="filter-list row">
                <!-- Gallery Item -->
                <div class="gallery-item mix all web-design col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-6.png') }}" alt=""></figure>
                        <a href="{{ asset('frontend/images/showcase/showcase-6.png') }}" class="lightbox-image overlay-box"
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
                <div class="gallery-item mix all photography web-design col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-5.png') }}" alt=""></figure>
                        <a href="{{ asset('frontend/images/showcase/showcase-5.png') }}" class="lightbox-image overlay-box"
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
                <div class="gallery-item mix all branding web-design col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-4.png') }}" alt=""></figure>
                        <a href="{{ asset('frontend/images/showcase/showcase-4.png') }}" class="lightbox-image overlay-box"
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
                <div class="gallery-item mix all branding illustration col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-3.png') }}" alt=""></figure>
                        <a href="{{ asset('frontend/images/showcase/showcase-3.png') }}" class="lightbox-image overlay-box"
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
                <div class="gallery-item mix all branding illustration photography web-design col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-2.png') }}" alt=""></figure>
                        <a href="{{ asset('frontend/images/showcase/showcase-2.png') }}" class="lightbox-image overlay-box"
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
                <div class="gallery-item mix all illustration photography col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('frontend/images/showcase/showcase-1.png') }}" alt=""></figure>
                        <a href="{{ asset('frontend/images/showcase/showcase-1.png') }}" class="lightbox-image overlay-box"
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
            {{-- <div class="more-box">
                <a class="theme-btn btn-style-one" href="portfolio.html">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Load more work</span>
                </a>
            </div> --}}
        </div>

    </div>
</section>
    
@endsection