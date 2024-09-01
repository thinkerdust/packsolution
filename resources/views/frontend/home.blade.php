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
                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12 d-none d-md-block">
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
                        <div class="text clearfix d-flex justify-content-between">
                            <ul class="col-8 ">
                                <li>Kualitas Terbaik.</li>
                                <li>Produksi Cepat.</li>
                                <li>Pilihan Desain Tidak Terbatas.</li>
                                <li>Food Grade.</li>
                            </ul>
                            <div class="since col-3"><span class="txt">Sejak <br>2020</span></div>
                        </div>
                        <div class="link-box text-center text-md-start">
                            <a class="theme-btn btn-style-one" href="https://wa.me/6281952727888?text=Halo%20Packsolution.id,%20saya%20ingin%20order%20kemasan%20untuk%20produk%20saya">
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
                            <div class="inner-box wow fadeInUp text-center" data-wow-delay="0ms" data-wow-duration="1500ms">
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
                                    <div class="acc-btn"><span class="count">2.</span> Informasi Produk</div>
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
                                    <div class="acc-btn"><span class="count">3.</span> Membentuk Persepsi</div>
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
                                    <div class="acc-btn"><span class="count">3.</span> Perlindungan Produk</div>
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
        <img src="{{ asset('frontend/images/background/bg-alur.jpg') }}" alt="" class="jarallax-img">
        <div class="section-alur">
            <div class="inner-container">

                <div class="sec-title">
                    <h2 class="text-white text-center pt-5">ALur Pemesanan</h2>
                </div>

                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix d-flex justify-content-center">

                        <!--Column-->
                        <div class="column counter-column col-lg-2 col-md-6 col-6">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-1.png') }}" class="icon-alur" alt="icon alur">
                                    <div class="counter-title">1. Order</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-2 col-md-6 col-6">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-2.png') }}" class="icon-alur" alt="icon alur">
                                    <div class="counter-title">2. Pembuatan Invoice & Preview Desain</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-2 col-md-6 col-6">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-3.png') }}" class="icon-alur" alt="icon alur">
                                    <div class="counter-title">3. Pembayaran DP 50%</div>
                                </div>
                            </div>
                        </div>

                        <div class="column counter-column col-lg-2 col-md-6 col-6">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-4.png') }}" class="icon-alur" alt="icon alur">
                                    <div class="counter-title">4. Proses Produksi</div>
                                </div>
                            </div>
                        </div>

                        <div class="column counter-column col-lg-2 col-md-6 col-6">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-5.png') }}" class="icon-alur" alt="icon alur">
                                    <div class="counter-title">5. Pelunasan</div>
                                </div>
                            </div>
                        </div>

                        <div class="column counter-column col-lg-2 col-md-6 col-6">
                            <div class="inner">
                                <div class="content">
                                    {{-- <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                    </div> --}}
                                    <img src="{{ asset('frontend/images/icons/alur-6.png') }}" class="icon-alur" alt="icon alur">
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
                    <h2>Customer</h2>
                </div>

                <!--Sponsors Carousel-->
                <div class="sponsors-carousel owl-theme owl-carousel">

                    @foreach ($customer as $c)
                        <div class="slide-item">
                            <figure class="image-box"><a href="#" onclick="event.preventDefault();"><img src="{{ asset('storage') . '/' . $c->logo }}" alt=""></a></figure>
                        </div>
                    @endforeach

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

                    @foreach ($customer as $c)     
                        @if ($c->deskripsi == null || $c->deskripsi == '' || !empty($c->deskripsi))
                            @continue
                        @endif                   
                        <div class="testi-block">
                            <div class="inner">
                                <div class="icon"><span>“</span></div>
                                <div class="info">
                                    <div class="name">{{ $c->pic }}</div>
                                    <div class="designation">{{ $c->nama }}</div>
                                </div>
                                <div class="text">{{ $c->deskripsi }}</div>
                            </div>
                        </div>
                    @endforeach
                    
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
                                    <div class="text">Packsolution.id adalah penyedia jasa pembuatan kemasan produk, seperti standing pouch, sachet,center seal, dan gusset. Kami akan membuat kemasan produk Anda menjadi menarik dan berkualitas.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> Kenapa Harus Packsolution.id ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Kami menawarkan pembuatan kemasan dengan kualitas terbaik, desain menarik, harga terjangkau, dan proses produksi yang cepat. Selain itu, kami juga memberikan konsultasi gratis untuk membantu Anda memilih tipe kemasan yang tepat.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">3.</span> Dimana Lokasi Packsolution.id ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Workshop Packsolution.id berlokasi di Jl. Agus Salim Ruko laweyan square no 8, Kota Surakarta, Jawa Tengah, 57147.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">4.</span> Kemasan Apa saja yang tersedia di Packsolution.id ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Kami menyediakan berbagai jenis kemasan, seperti standing pouch, sachet,center seal, dan gusset dengan berbagai variasi. Semua kemasan dapat disesuaikan dengan kebutuhan Anda.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">5.</span> Bagaimana saya tahu ukuran yang cocok untuk produk saya ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Jika Anda tidak yakin dengan ukuran kemasan yang tersedia, Anda dapat mengukur ukuran kemasan yang biasa Anda gunakan saat ini. Anda juga bisa berkonsultasi dengan tim Packsolution.id
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="faq-block col-lg-6 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">6.</span> Berapa desain per order ?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Anda bisa langsung tanyakan ke tim Packsolution.id dengan klik tombol "Hubungi kami"
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">7.</span> Apa format desain yang harus saya sediakan ?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Format desain yang dapat kami terima hanya dalam bentuk format PDF, JPG, PNG, AI, dan CDR.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">8.</span> Bagaimana jika saya tidak memiliki desain ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Tidak perlu khawatir. Packsolution.id menyediakan jasa desain kemasan untuk membantu Anda memperoleh desain kemasan yang menarik dan berkualitas.Bahkan Anda bisa mendapatkan free 1 desain untuk order 1000pcs.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active"><span class="count">9.</span> Berapa lama Waktu pengerjaan ?
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Estimasi waktu pengerjaan di Packsolution.id adalah sekitar 10 hari kerja. Kami akan mengusahakan yang terbaik untuk kepuasan customer kami.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">10.</span> Berapa lama Waktu pengiriman ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Estimasi waktu pengiriman akan disesuaikan dengan jasa ekspedisi dan tipe pengiriman yang Anda pilih. Kemasan akan kami kirimkan dari lokasi produksi kami di Surakarta.</div>
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
                <h2>HUBUNGI KAMI & KONSULTASIKAN <br> PRODUKMU SEKARANG !</h2>
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