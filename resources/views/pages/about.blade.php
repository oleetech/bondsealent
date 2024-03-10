@extends('layouts.website')

@section('page-content')
<!-- Page Banner Area Start -->
<x-page-banner image="assets/images/page-banner.jpg" activePage='About Us' :pageLinks="['home' => 'Home', 'about' => 'About Us']" />
<!-- Page Banner Area End -->

<!-- Mission Area Start -->
<div class="mission__area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 lg-mb-30">
                <div class="mission__area-left">
                    <div class="mission__area-left-image">
                        <img src="{{ asset('assets/images/about-2.jpg') }}" alt="">
                        <div class="mission__area-left-image-one">
                            <img src="{{ asset('assets/images/about-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="mission__area-title">
                    <span class="subtitle">About Us</span>
                    <h2>A Bond Forever !</h2>
                    <p>Bond Sealant is a brain child of Cosmopolitan Group USA. After adding a name in the industry with several building material products all over the world, Cosmopolitan LLC have launched  a series of Bond Sealants currently one of the Most Emerging Sealant Brand in the market distributed all over the world. All of our products are developed and tested in USA. Our manufacturing plants are in USA & CHINA. Our goal is to provide re-engineered quality sealants which would keep our BOND stronger then ever!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission Area End -->

<!-- Appointment Area Start -->
<div class="appointment__area" data-background="{{ asset('assets/images/resources.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="appointment__area-title">
                    <h2>Looking for an estimate for your next project?</h2>
                    <a href="{{ route('contact') }}" class="theme-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment Area End -->

<!-- FAQ Area Start -->
<div class="faq__area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 lg-mb-30">
                <div class="faq__area-left">
                    <div class="faq__area-left-title">
                        <span class="subtitle">Our FAQ</span>
                        <h2>frequently ask Question</h2>
                    </div>
                    <div class="faq__area-left-faq">
                        <div class="faq__area-left-faq-item">
                            <div class="faq__area-left-faq-item-card">
                                <div class="faq__area-left-faq-item-card-header">
                                    <h5>Why do we need high quality silicone sealant?</h5>
                                    <i class="fa-long-arrow-down far"></i>
                                </div>
                                <div class="faq__area-left-faq-item-card-header-content display-block active">
                                    <p>Silicone Sealants have a much higher ability to withstand temperature fluctuations than rubber sealants do. A better alternative, they bond virtually any materials together. Additionally, they are also resistant to thermal expansion and contraction, wind oscillation – even seismic movement – which makes them a preferred building material.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq__area-left-faq-item">
                            <div class="faq__area-left-faq-item-card">
                                <div class="faq__area-left-faq-item-card-header">
                                    <h5>Where do we use silicone sealant?</h5>
                                    <i class="far fa-long-arrow-up"></i>
                                </div>
                                <div class="faq__area-left-faq-item-card-header-content display-none">
                                    <p>Silicone sealants are regularly used to seal the border of sinks, sinks, showers and bathtubs in a kitchen or bathroom. Some contractors are also keen to use them to apply silicone seals between counters and walls. In addition to preventing water from getting in between different surfaces, many silicone sealants prevent mold from appearing. They are also easy to clean.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq__area-left-faq-item">
                            <div class="faq__area-left-faq-item-card">
                                <div class="faq__area-left-faq-item-card-header">
                                    <h5>How do i apply silicone sealant?</h5>
                                    <i class="fa-long-arrow-down far"></i>
                                </div>
                                <div class="faq__area-left-faq-item-card-header-content display-none">
                                    <ol>
                                        <li>Press down on the gun’s release tab and pull the pressure valve.</li>
                                        <li>Insert the tube of silicone into the gun.</li>
                                        <li>Adjust the trigger so that it is calibrated with the size of your tube.</li>
                                        <li>Prepare the surface you wish to seal.</li>
                                        <li>Cut a hole in the silicone tube.</li>
                                        <li>Test your silicone on a piece of scrap material.</li>
                                        <li>Apply the sealant to your surface.</li>
                                        <li>Allow the sealant to dry.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="faq__area-right">
                    <div class="faq__area-right-image">
                        <img src="{{ asset('assets/images/faq.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Area End -->
@endsection
