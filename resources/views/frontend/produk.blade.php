@extends('frontend.template')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style=""></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Produk</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li class="active">Produk</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Services Section-->
<section class="services-section-three padd-top">
    <div class="auto-container">
        <div class="services">
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><img src="{{ asset('frontend/images/icons/gusset.png') }}" alt=""></div>
                        <h5><a href="#">Gusset</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="{{ url('produk-detail/gusset')}}"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><img src="{{ asset('frontend/images/icons/standing-pouch.png') }}" alt=""></div>
                        <h5><a href="#">Standing Pouch</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><img src="{{ asset('frontend/images/icons/central-seal.png') }}" alt=""></div>
                        <h5><a href="#">Central Seal</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                    data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><img src="{{ asset('frontend/images/icons/sachet.png') }}" alt=""></div>
                        <h5><a href="#">Sachet</a></h5>
                        <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
                        <div class="link-box"><a href="#"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
    
@endsection