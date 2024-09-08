@extends('frontend.template')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" loading="lazy" style="background-image: url('frontend/images/Foto Hero Produk.jpg')"></div>
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
                
                @foreach ($kategori as $k)                    
                    <!--Service Block-->
                    <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                        data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><img src="{{ asset('storage/'.$k->gambar) }}" alt=""></div>
                            <h5><a href="{{ url('produk-detail/'.$k->id)}}">{{ $k->nama }}</a></h5>
                            <div class="text">{{ $k->deskripsi }}</div>
                            <div class="link-box"><a href="{{ url('produk-detail/'.$k->id)}}"><span class="fa fa-angle-right"></span></a></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
    
@endsection