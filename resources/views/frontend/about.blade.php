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
                <h1>Tentang Kami</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('/') }}">Home</a></li>
                        <li class="active">Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="footer-text">{!! $about->deskripsi !!}</div>

        <div class="map-box">
            <iframe class="map-iframe"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1050976226634!2d110.7922529758837!3d-7.563519324698169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a152b2a2ec95d%3A0x430ea58909b013c8!2spacksolution.id!5e0!3m2!1sen!2sid!4v1723993239782!5m2!1sen!2sid"
                style="border:0;" aria-hidden="false" tabindex="0"></iframe>
        </div>
        
        <div class="form-box">
            <div class="sec-title">
                <h2>Kritik & Saran<span class="dot">.</span></h2>
            </div>
            <div class="default-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="username" value="" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="email" value="" placeholder="Email Address"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="subject" value="" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <textarea name="message" placeholder="Write Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button class="theme-btn btn-style-one">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Kirim Pesan</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    
@endsection