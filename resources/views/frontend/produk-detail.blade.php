@extends('frontend.template')

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image: url('/frontend/images/Foto Hero Produk.jpg')"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ strtoupper($kategori->nama) }}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li><a href="{{ route('produk') }}">Produk</a></li>
                        <li class="active">Produk Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<section class="service-nine">
    <div class="auto-container">
        <div class="row">
            
            @foreach ($produk as $p)                
                <div class="col-md-6 col-lg-12 my-5">
                    <div class="service-nine__card">
                        <div class="service-nine__card__inner row justify-content-center">

                            <div class="shape-1"></div>
                            <div class="shape-2"></div>

                            <div class="service-nine__content col-11 col-lg-9 mx-1 mx-md-0">

                                <div class="shape-1"></div>
                                <div class="shape-2"></div>

                                <div class="row">
                                    <div class="col-lg-8 produk-card">
                                        <h3 class="service-nine__title">
                                            <a href="javascript:;">{{ $p->kategori_judul }}</a>
                                        </h3>

                                        <img src="{{ base_asset("/storage/" . $p->gambar) }}" alt="" class="produk-detail-image-1 d-none">

                                        <p class="service-nine__text service-nine__text-1 fw-bold">{{ $p->judul }}</p>
                                        <p class="service-nine__text service-nine__text-2">{{ $p->deskripsi }}</p>
                                    
                                        <div class="row detail d-flex justify-content-between ms-0" style="border-left: 11px solid #CE1717; padding-left: 10px;">
                                            <ul class="produk-detail col-md-6">
                                                <li>Warna : {{ $p->warna }}</li>
                                                <li>Ukuran Custom : {{ $p->ukuran_custom }}</li>
                                                <li>Laminasi : {{ $p->laminasi }}</li>
                                            </ul>

                                            {{-- button size chart --}}
                                            <div class="col-md-6 link-box d-flex align-items-end mt-3 mt-md-0">
                                                <figure class="image">
                                                    <a class="theme-btn btn-style-one lightbox-image overlay-box" href="{{ base_asset('/storage/' . $p->ukuran) }}" data-fancybox="gallery" style="margin-bottom: -11px;">
                                                        <i class="btn-curve"></i>
                                                        <span class="btn-title">Lihat Ukuran & Harga</span>
                                                    </a>
                                                </figure>
                                            </div>

                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="service-nine__image col-lg-3">
                                <img src="{{ base_asset("/storage/" . $p->gambar) }}" class="produk-detail-image-2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-md-6 col-lg-12">
                <div class="service-nine__card">
                    <div class="service-nine__card__inner row justify-content-center">
                        <div class="service-nine__content col-11 col-lg-9 mx-1 mx-md-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="service-nine__title">
                                        <a href="ui-designing.html">STANDING POUCH ZIPLOCK</a>
                                    </h3>

                                    <img src="{{ base_asset("/frontend/images/produk-detail/detail-2.png") }}" alt="" class="produk-detail-image-1 d-none">

                                    <p class="service-nine__text service-nine__text-1 fw-bold">METALIZE HB 52 | GLOSSY/DOFF | PAPER | OPP | ZIPLOCK</p>
                                    <p class="service-nine__text service-nine__text-2">Kemasan standing pouch berbahan paper Alufoil, salah satu solusi kemasan produk dengan harga murah yang kami sediakan untuk skala UMKM dengan tanpa menggunakan klip/zipper</p>
                                
                                    <div class="detail" style="border-left: 11px solid #CE1717; padding-left: 20px;">
                                        <ul>
                                            <li>Warna : Full Color</li>
                                            <li>Ukuran Custom : Ya</li>
                                            <li>Lamonasi : Glossy/Doff</li>
                                        </ul>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="service-nine__image col-lg-3">
                            <img src="{{ base_asset("/frontend/images/produk-detail/detail-2.png") }}" class="produk-detail-image-2" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-12">
                <div class="service-nine__card">
                    <div class="service-nine__card__inner row justify-content-center">
                        <div class="service-nine__content col-11 col-lg-9 mx-1 mx-md-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="service-nine__title">
                                        <a href="ui-designing.html">STANDING POUCH ALM</a>
                                    </h3>

                                    <img src="{{ base_asset("/frontend/images/produk-detail/detail-3.png") }}" alt="" class="produk-detail-image-1 d-none">

                                    <p class="service-nine__text service-nine__text-1 fw-bold">ALUMINIUM HB 80 | GLOSSY/DOFF | PAPER | OPP</p>
                                    <p class="service-nine__text service-nine__text-2">Kemasan Standing pouch berbahan paper Alufoil salah satu kemasan  yang memiliki kualitas terbaik yang kami sediakan untuk skala UMKM .  dengan  tanpa menggunakan klip/zipper.</p>
                                
                                    <div class="detail" style="border-left: 11px solid #CE1717; padding-left: 20px;">
                                        <ul>
                                            <li>Warna : Full Color</li>
                                            <li>Ukuran Custom : Ya</li>
                                            <li>Lamonasi : Glossy/Doff</li>
                                        </ul>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="service-nine__image col-lg-3">
                            <img src="{{ base_asset("/frontend/images/produk-detail/detail-3.png") }}" class="produk-detail-image-2" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-12">
                <div class="service-nine__card">
                    <div class="service-nine__card__inner row justify-content-center">
                        <div class="service-nine__content col-11 col-lg-9 mx-1 mx-md-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="service-nine__title">
                                        <a href="ui-designing.html">STANDING POUCH ALm. ZIPLOCK</a>
                                    </h3>

                                    <img src="{{ base_asset("/frontend/images/produk-detail/detail-4.png") }}" alt="" class="produk-detail-image-1 d-none">

                                    <p class="service-nine__text service-nine__text-1 fw-bold">ALUMINIUM HB 80 | GLOSSY/DOFF | PAPER | OPP | ZIPLOCK</p>
                                    <p class="service-nine__text service-nine__text-2">Kemasan Standing pouch berbahan paper Alufoil salah satu kemasan  yang memiliki kualitas terbaik yang kami sediakan untuk skala UMKM . dengan dilengkapi ziplock/zipper untuk memudahkan menutup kembali pada kemasan  produk.</p>
                                
                                    <div class="detail" style="border-left: 11px solid #CE1717; padding-left: 20px;">
                                        <ul>
                                            <li>Warna : Full Color</li>
                                            <li>Ukuran Custom : Ya</li>
                                            <li>Lamonasi : Glossy/Doff</li>
                                        </ul>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="service-nine__image col-lg-3">
                            <img src="{{ base_asset("/frontend/images/produk-detail/detail-4.png") }}" class="produk-detail-image-2" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-12">
                <div class="service-nine__card">
                    <div class="service-nine__card__inner row justify-content-center">
                        <div class="service-nine__content col-11 col-lg-9 mx-1 mx-md-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="service-nine__title">
                                        <a href="ui-designing.html">STANDING POUCH TRAPESIUM</a>
                                    </h3>

                                    <img src="{{ base_asset("/frontend/images/produk-detail/detail-5.png") }}" alt="" class="produk-detail-image-1 d-none">

                                    <p class="service-nine__text service-nine__text-1 fw-bold">ALUMINIUM HB 80 | GLOSSY/DOFF | PAPER | OPP | ZIPLOC</p>
                                    <p class="service-nine__text service-nine__text-2">Kemasan Standing Pouch ini sangat cocok untuk produk yang padat contohnya. (bubuk, biji-bijian, chips, dll) untuk produk non-food pun bisa selama bukan cairan.</p>
                                
                                    <div class="detail" style="border-left: 11px solid #CE1717; padding-left: 20px;">
                                        <ul>
                                            <li>Warna : Full Color</li>
                                            <li>Ukuran Custom : Ya</li>
                                            <li>Lamonasi : Glossy/Doff</li>
                                        </ul>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="service-nine__image col-lg-3">
                            <img src="{{ base_asset("/frontend/images/produk-detail/detail-5.png") }}" class="produk-detail-image-2" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}

        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.service-nine -->

@endsection