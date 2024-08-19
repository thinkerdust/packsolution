@extends('frontend.template')

@section('content')

    <!-- Banner Section -->
    <section class="banner-section banner-one banner-one-page" id="home">

        <div class="banner-carousel owl-theme owl-carousel">
        
            @foreach ($carousel as $c)
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url('storage/{{ $c->gambar }}');"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner text-center">
                                    <h1>{!! $c->judul !!}</h1>
                                    <div class="sub-title">{!! $c->deskripsi !!}</div>
                                    @if ($c->link_button)
                                        <div class="link-box">
                                            <a class="theme-btn btn-style-one" href="{{ $c->link_button }}">
                                                <i class="btn-curve"></i>
                                                <span class="btn-title">Pesan Sekarang</span>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

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
                            <h2>Solusi Kemasan Terbaik untuk Produk Anda<span class="dot">.</span></h2>
                            {{-- <div class="lower-text">We are committed to providing our customers with exceptional
                                service while offering our employees the best training.</div> --}}
                        </div>
                        <div class="text">
                            <p>Packsolution.id hadir sebagai solusi terpercaya untuk semua kebutuhan kemasan Anda. Dengan berbagai pilihan material berkualitas tinggi dan desain yang inovatif, kami siap membantu Anda menciptakan kemasan yang tidak hanya melindungi produk, tetapi juga memperkuat citra merek Anda.</p>
                        </div>
                        <div class="text clearfix">
                            <ul>
                                <li>Kualitas Terbaik.</li>
                                <li>Produksi Cepat.</li>
                                <li>Pilihan Desain Tidak Terbatas.</li>
                                <li>Food Grade.</li>
                            </ul>
                            <div class="since"><span class="txt">Sejak <br>2020</span></div>
                        </div>
                        <div class="link-box">
                            <a class="theme-btn btn-style-one" href="https://wa.me/081952727888">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Pesan Sekarang</span>
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

                    @foreach ($kategori as $k)
                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><img src="{{ asset('storage') . '/' . $k->gambar }}" alt=""></div>
                                <h5><a href="{{ url('produk-detail/'.$k->id)}}">{{ $k->nama }}</a></h5>
                                {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                                <div class="link-box"><a href="{{ url('produk-detail/'.$k->id)}}"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--Why Section-->
    <section class="why-section" id="why">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Kenapa Harus Packsolution.id ?</h2>
                {{-- <div class="lower-text">Kelebihan menggunakan produk kami.</div> --}}
            </div>
            <div class="row clearfix image-right">
                <!--Text Column-->
                <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h4>Menggunakan Material Food Grade<span class="dot">.</span></h4>
                            <div class="lower-text">Bahan yang kami gunakan adalah bahan yang aman digunakan untuk pengemasan makanan.</div>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                src="{{ asset('frontend/images/why/why-1.1.png') }}" alt=""></div>
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
                        <div class="image-block wow fadeInLeft text-end" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                src="{{ asset('frontend/images/why/why-2.1.png') }}" alt=""></div>
                    </div>
                </div>
                <!--Text Column-->
                <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h4>Proses Produksi Cepat<span class="dot">.</span></h4>
                            <div class="lower-text">Proses Produksi yang relatif cepat. Kami akan mengerjakan kemasan anda 10 Hari kerja.</div>
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
                            <h4>Pilihan Desain Tidak Terbatas <br> & Gratis Revisi<span class="dot">.</span></h4>
                            <div class="lower-text">Banyak pilihan desain yang kami sediakan agar kemasan anda semakin menarik.</div>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                src="{{ asset('frontend/images/why/why-3.1.png') }}" alt=""></div>
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
                        <div class="image-block wow fadeInLeft text-end" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                                src="{{ asset('frontend/images/why/why-4.1.png') }}" alt=""></div>
                    </div>
                </div>
                <!--Text Column-->
                <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h4>Kualitas Terbaik & Banyak Varian<span class="dot">.</span></h4>
                            <div class="lower-text">Kami menggunakan material yang berkualitas dan memiliki banyak varian material seperti alumunium, paper, metalize paper.</div>
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
                            <h2>PENTINGNYA KEMASAN DALAM SEBUAH BRAND<span class="dot">.</span></h2>
                        </div>
                        {{-- <div class="featured-block clearfix">
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
                        </div> --}}
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="faq-box">
                            <ul class="accordion-box clearfix">
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active"><span class="count">1.</span> Identitas Brand</div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                Kemasan adalah wajah pertama dari sebuah produk yang dilihat konsumen. Dengan desain yang unik, warna yang khas, dan tipografi yang menarik akan membantu konsumen mengingat brand Anda dengan lebih mudah
                                                Kemasan juga dapat membedakan produk Anda dari pesaing di pasar yang kompetitif.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">2.</span> Informasi Produk
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                Kemasan berfungsi sebagai media komunikasi utama antara brand dan konsumen. Brand dapat menyampaikan informasi penting tentang produk, seperti manfaat, cara penggunaan, dan bahan-bahan yang digunakan. 
                                                Kemasan juga dapat mencerminkan nilai-nilai brand, seperti keberlanjutan, kualitas tinggi, atau eksklusivitas.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">3.</span> Membentuk Persepsi
                                        goals</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                Desain kemasan yang menarik dan berkualitas akan membentuk persepsi positif di benak konsumen terhadap produk dan brand Anda.
                                                Konsumen cenderung mengasosiasikan kemasan yang berkualitas tinggi dengan produk yang juga berkualitas tinggi</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count">3.</span> Perlindungan Produk
                                        goals</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                Fungsi utama kemasan adalah melindungi produk dari kerusakan selama proses produksi, distribusi, hingga sampai ke tangan konsumen. 
                                                Kemasan yang baik akan menjaga kualitas produk, sehingga konsumen merasa puas dan loyal terhadap brand Anda.</div>
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
        <div class="section-alur">
            <div class="inner-container">

                <div class="sec-title">
                    <h2 class="text-white text-center pt-5">ALur Pemesanan</h2>
                </div>

                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix d-flex justify-content-center">

                        <!--Column-->
                        <div class="column counter-column col-lg-2 col-md-6 col-4">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-1.png') }}" style="width: 190px; height: auto;" alt="">
                                    <div class="counter-title">1. Order</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-2 col-md-6 col-4">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-2.png') }}" style="width: 190px; height: auto;" alt="">
                                    <div class="counter-title">2. Pembuatan Invoice & Preview Desain</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-2 col-md-6 col-4">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-3.png') }}" style="width: 190px; height: auto;" alt="">
                                    <div class="counter-title">3. Pembayaran DP 50%</div>
                                </div>
                            </div>
                        </div>

                        <div class="column counter-column col-lg-2 col-md-6 col-4">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-4.png') }}" style="width: 190px; height: auto;" alt="">
                                    <div class="counter-title">4. Proses Produksi</div>
                                </div>
                            </div>
                        </div>

                        <div class="column counter-column col-lg-2 col-md-6 col-4">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-5.png') }}" style="width: 190px; height: auto;" alt="">
                                    <div class="counter-title">5. Pelunasan</div>
                                </div>
                            </div>
                        </div>

                        <div class="column counter-column col-lg-2 col-md-6 col-4">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-6.png') }}" style="width: 190px; height: auto;" alt="">
                                    <div class="counter-title">6. Pengiriman</div>
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
                        <h2>Katalog Showcase<span class="dot">.</span></h2>
                    </div>
                </div>
                <div class="filter-list row">

                    @foreach ($katalog as $k)                        
                        <!-- Gallery Item -->
                        <div class="gallery-item mix all col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="{{ asset('storage/'.$k->gambar) }}" alt=""></figure>
                                <a href="{{ asset('storage/'.$k->gambar) }}" class="lightbox-image overlay-box"
                                    data-fancybox="gallery"></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>{{ $k->judul }}</span></div>
                                        <div class="title">
                                            <h5><a href="#">{{ $k->deskripsi }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="more-box">
                        <a class="theme-btn btn-style-one" href="{{ route('katalog') }}">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Lihat Katalog Lainya</span>
                        </a>
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
                                <div class="name">Andi Wijaya</div>
                                <div class="designation">Mellynd Care</div>
                            </div>
                            <div class="text">Packsolution.id selalu memberikan solusi terbaik untuk kebutuhan kemasan kami. Dengan desain inovatif dan kualitas material yang tinggi, produk kami selalu tampil lebih menarik dan terlindungi dengan baik.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Siti Rahma</div>
                                <div class="designation">Seblak Baraka</div>
                            </div>
                            <div class="text">Kami sangat puas dengan layanan dari packsolution.id. Desain kemasan yang mereka buat selalu sesuai dengan yang kami inginkan, dan free design untuk pesanan besar sangat membantu bisnis kami.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Budi Santoso</div>
                                <div class="designation">Aroma Biji</div>
                            </div>
                            <div class="text">Packsolution.id telah menjadi mitra terpercaya kami dalam menyediakan kemasan berkualitas tinggi. Mereka benar-benar mengerti bagaimana membuat kemasan yang menarik dan fungsional.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Rina Amelia</div>
                                <div class="designation">Teh Nusantara</div>
                            </div>
                            <div class="text">Kerjasama dengan packsolution.id selalu memuaskan. Kualitas kemasan yang mereka sediakan sangat bagus, dan layanan desainnya sangat membantu kami dalam memperkuat brand kami.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Dedi Kurniawan</div>
                                <div class="designation">Croma</div>
                            </div>
                            <div class="text">Kami sangat merekomendasikan packsolution.id. Desain kemasan yang mereka buat selalu sesuai dengan konsep kami, dan kualitasnya selalu konsisten.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Fitri Sari</div>
                                <div class="designation">Potami</div>
                            </div>
                            <div class="text">Packsolution.id selalu memberikan yang terbaik dalam setiap pesanan kami. Kami sangat puas dengan kemasan yang inovatif dan pelayanan yang mereka tawarkan.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Irwan Setiawan</div>
                                <div class="designation">Makripau</div>
                            </div>
                            <div class="text">Packsolution.id selalu menjadi pilihan utama kami untuk kebutuhan kemasan. Kualitas dan desainnya luar biasa, sangat membantu kami dalam menjaga kualitas produk.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Yulia Pratama</div>
                                <div class="designation">Solok Radjo</div>
                            </div>
                            <div class="text">Kami sangat senang dengan hasil kerja packsolution.id. Kemasan yang mereka buat tidak hanya melindungi produk kami, tetapi juga memperkuat brand kami di mata konsumen.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Arif Hidayat</div>
                                <div class="designation">Sensa Coffee</div>
                            </div>
                            <div class="text">Layanan dari packsolution.id sangat memuaskan. Desain kemasan yang mereka sediakan sangat profesional dan membantu kami dalam memasarkan produk dengan lebih baik.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Dian Kartika</div>
                                <div class="designation">Dika Bakery</div>
                            </div>
                            <div class="text">Kami sangat puas dengan kemasan yang dibuat oleh packsolution.id. Mereka selalu memahami kebutuhan kami dan memberikan hasil yang sesuai dengan ekspektasi.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Agus Saputra</div>
                                <div class="designation">Joy Bakery</div>
                            </div>
                            <div class="text">Packsolution.id selalu memberikan solusi kemasan yang tepat. Desain yang mereka buat sangat menarik dan selalu on time.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Tika Ramadhani</div>
                                <div class="designation">Gujati</div>
                            </div>
                            <div class="text">Kami sangat menghargai kerja sama dengan packsolution.id. Kemasan yang mereka buat sangat membantu kami dalam meningkatkan citra produk kami.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Anwar Fahmi</div>
                                <div class="designation">Susu Almond</div>
                            </div>
                            <div class="text">Packsolution.id memberikan layanan yang luar biasa. Kami sangat puas dengan kualitas kemasan dan desain yang mereka tawarkan.</div>
                        </div>
                    </div>
                    
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Indah Lestari</div>
                                <div class="designation">Susu Etawa</div>
                            </div>
                            <div class="text">Packsolution.id selalu menghadirkan kemasan berkualitas tinggi yang sesuai dengan kebutuhan kami. Desainnya kreatif dan materialnya tahan lama.</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!--Faqs Section-->
    <section class="faqs-section">
        <div class="auto-container">

            <div class="sec-title centered">
                <h2>Faq<span class="dot">.</span></h2>
                <div class="lower-text">Hal yang sering ditanyankan tentang Packsolution.id</div>
            </div>

            <div class="row clearfix">
                <div class="faq-block col-lg-6 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active"><span class="count">1.</span> Apa itu Packsolution.id ?</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Packsolution.id adalah solusi terpercaya untuk kebutuhan kemasan Anda, menawarkan material berkualitas tinggi dan desain inovatif yang melindungi produk dan memperkuat citra merek Anda.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> Kenapa Harus Packsolution.id ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Kami menyediakan kemasan berkualitas tinggi dengan pilihan desain tidak terbatas, produksi cepat, dan bahan food grade yang aman untuk produk makanan Anda.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">3.</span> We help to achieve mutual goals</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">4.</span> What happend to my design code</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">5.</span> what will be the cost of code</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="faq-block col-lg-6 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">1.</span> We help to create visual strategies
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> Motion Graphics & Animations</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">3.</span> We help to achieve mutual goals</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active"><span class="count">4.</span> What happend to my design code
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">5.</span> what will be the cost of code</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">There are many variations of passages the majority have
                                        suffered alteration in some fo injected humour, or randomised words
                                        believable.</div>
                                </div>
                            </div>
                        </li>

                    </ul>
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
                    <a class="theme-btn btn-style-two" href="https://wa.me/081952727888">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Hubungi Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
@endsection