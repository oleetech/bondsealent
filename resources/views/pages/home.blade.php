@extends('layouts.website')

@section('page-content')
<!-- Banner Area Start -->
<div class="banner__area">
    {{--  <video autoplay muted loop id="myVideo">
        <source src="{{ asset('assets/video/usa-video.mp4') }}" type="video/mp4">
    </video>  --}}
    <div class="banner__content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-xl-8 order-change">
                    <div class="banner__area-left">
                        <h1>A Product of USA</h1>
                        <a href="{{ route('products') }}" class="theme-btn">Explore Products</a>
                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="banner__area-social">
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                <li><a href="https://www.instagram.com/" target="_blank">Tnstagram</a></li>
            </ul>
        </div>  --}}
    </div>
</div>
<!-- Banner Area End -->

<!-- Products Area Start -->
<div class="services__area">
    <div class="container services__area-bg">
        <div class="row align-items-end mb-60">
            <div class="col-xl-7 col-md-7 md-mb-30">
                <div class="services__area-title md-t-center">
                    <span class="subtitle">Products</span>
                    <h2>Our Line of Products</h2>
                </div>
            </div>
            <div class="col-xl-5 col-md-5">
                <div class="services__area-btn t-right md-t-center">
                    <a class="theme-btn" href="{{ route('products') }}">View All Products</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 xl-mb-30">
                <a href="{{ route('weather') }}" class="flipcard">
                    <div class="flipcard-wrap">
                        <div class="card card-front">
                            <img src="{{ asset('assets/images/products/Weather-Home-Page.jpg') }}" alt="Weather Silicone Sealant" class="card-img-top">
                            <div class="card-body">
                                <h4>Weather Silicone Sealant</h4>
                            </div>
                        </div>
                        <div class="card card-back">
                            <div class="card-body">
                                <p>@lang('Our 6700 BOND Weatherproof sealants are perfect for outdoor use as they are designed to withstand UV, weather and water exposure. Some have to be applied in dry conditions, whilst others can be applied in wet conditions. Once applied they remain flexible and some weatherproofing sealants are paintable.')</p>
                                <h4 class="mb-20">Main purposes:</h4>
                                <ol>
                                    <li>Structural glazing in glass curtain wall system.</li>
                                    <li>For the situation of high requirement to adhesive safety and other purpose.</li>
                                    <li>Many other purposes.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-6 xl-mb-30">
                <a href="{{ route('structural') }}" class="flipcard">
                    <div class="flipcard-wrap">
                        <div class="card card-front">
                            <img src="{{ asset('assets/images/products/Structural-Home-Page.jpg') }}" alt="Structural Silicone Sealant" class="card-img-top">
                            <div class="card-body">
                                <h4>Structural Silicone Sealant</h4>
                            </div>
                        </div>
                        <div class="card card-back">
                            <div class="card-body">
                                <p>@lang('Our 7700 BOND Structural Sealants are transparent electrometric adhesives with very good adhesion properties that are primarily used in the bonding of structural glazing.')</p>
                                <h4 class="mb-20">Main purposes:</h4>
                                <ol>
                                    <li>Structural glazing in glass curtain wall system.</li>
                                    <li>For the situation of high requirement to adhesive safety and other purpose.</li>
                                    <li>Many other purposes.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-6 xl-mb-30">
                <a href="{{ route('neutral') }}" class="flipcard">
                    <div class="flipcard-wrap">
                        <div class="card card-front">
                            <img src="{{ asset('assets/images/products/Neutral-Home-Page.jpg') }}" alt="Neutral Silicone Sealant" class="card-img-top">
                            <div class="card-body">
                                <h4>Neutral Silicone Sealant</h4>
                            </div>
                        </div>
                        <div class="card card-back">
                            <div class="card-body">
                                <p>@lang('Our 5700 BOND Neutral sealants are specifically designed to have excellent adhesion and elastomeric properties for sealing joints in glass use where movement can be expected. ')</p>
                                <h4 class="mb-20">Main purposes:</h4>
                                <ol>
                                    <li>Structural glazing in glass curtain wall system.</li>
                                    <li>For the situation of high requirement to adhesive safety and other purpose.</li>
                                    <li>Many other purposes.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Products Area End -->

<!-- About Area Start -->
<div class="about__area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 lg-mb-30">
                <div class="about__area-left">
                    <img class="img__full" src="{{ asset('assets/images/about-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about__area-title">
                    <span class="subtitle">About Us</span>
                    <h2>A Bond Forever !</h2>
                    <p>Bond Sealant is a brain child of Cosmopolitan Group USA. After adding a name in the industry with several building material products all over the world, Cosmopolitan LLC have launched  a series of Bond Sealants currently one of the Most Emerging Sealant Brand in the market distributed all over the world. All of our products are developed and tested in USA. Our manufacturing plants are in USA & CHINA. Our goal is to provide re-engineered quality sealants which would keep our BOND stronger then ever!</p>
                    <a class="theme-btn" href="{{ route('about') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Project Area Start -->
<div class="property__area pb-5">
    <div class="container p-0">
        <div class="row mb-60">
            <div class="col-xl-12">
                <div class="project__area-title t-center">
                    <span class="subtitle">Projects</span>
                    <h2>Latest Projects</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="swiper property-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="property__area-item">
                                <div class="property__area-item-image">
                                    <img src="{{ asset('assets/images/projects/Interior.jpeg') }}" alt="">
                                    <div class="property__area-item-image-content">
                                        <span>INTERIOR</span>
                                        <h3>Bathroom Interior</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="property__area-item">
                                <div class="property__area-item-image">
                                    <img src="{{ asset('assets/images/projects/res-construction.jpg') }}" alt="">
                                    <div class="property__area-item-image-content">
                                        <span>RESIDENTIAL</span>
                                        <h3>Residential Building</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="property__area-item">
                                <div class="property__area-item-image">
                                    <img src="{{ asset('assets/images/projects/Commercial.jpg') }}" alt="">
                                    <div class="property__area-item-image-content">
                                        <span>COMMERCIAL</span>
                                        <h3>Commercial Building</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="property__area-item">
                                <div class="property__area-item-image">
                                    <img src="{{ asset('assets/images/projects/fence.jpg') }}" alt="">
                                    <div class="property__area-item-image-content">
                                        <span>outdoor</span>
                                        <h3>Fence Repair</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="property__area-pagination">
                    <div class="property-pagination"></div>
                </div>
            </div>
        </div>
        {{--  <div class="project__area-wrapper" data-background="assets/img/project/project-new.jpg">
            <div class="row g-0">
                <div class="col-xl-3 col-sm-6">
                    <div class="project__area-item">
                        <div class="project__area-item-content">
                            <span>Interior</span>
                            <h3><a href="#">military buildings</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="project__area-item project__area-item-hover">
                        <div class="project__area-item-content">
                            <span>Residential</span>
                            <h3><a href="#">Modern Apartment</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="project__area-item">
                        <div class="project__area-item-content">
                            <span>Commercial</span>
                            <h3><a href="#">Blue moon complex</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="project__area-item">
                        <div class="project__area-item-content">
                            <span>architecture</span>
                            <h3><a href="#">Loft Kitchen Interior</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
</div>
<!-- Project Area End -->

<!-- Reviews Area Start -->
<div class="reviews__area section-padding pb-0">
    <div class="container">
        <div class="row align-items-end mb-55">
            <div class="col-xl-6 col-md-8">
                <div class="reviews__area-title">
                    <span class="subtitle">Reviews</span>
                    <h2>What Clients say</h2>
                </div>
            </div>
            <div class="col-xl-6 col-md-2">
                <div class="reviews__area-pagination">
                    <div class="reviews-pagination"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="swiper reviews-slider">
                    <div class="swiper-wrapper">
                        <div class="reviews__area-item swiper-slide">
                            <div class="reviews__area-item-icon">
                                <img src="{{ asset('assets/images/icon/quote.png') }}" alt="">
                            </div>
                            <div class="reviews__area-item-avatar">
                                <img src="{{ asset('assets/images/avatar/avatar-3.jpg') }}" alt="">
                            </div>
                            <div class="reviews__area-item-content">
                                <p>This is easily the best silicone sealant around it spreads like butter dries quickly and grips like nothing else, did my widow edges as they were leaking this stuff did the biz, in the future I won't use any other silicone sealant this is the one for me, it's not that expensive like DOW, GE, SIKA but goes for miles and it works and it is surprising, brilliant stuff.</p>
                                <h5>Oliver Shalake</h5>
                            </div>
                        </div>
                        <div class="reviews__area-item swiper-slide">
                            <div class="reviews__area-item-icon">
                                <img src="{{ asset('assets/images/icon/quote.png') }}" alt="">
                            </div>
                            <div class="reviews__area-item-avatar">
                                <img src="{{ asset('assets/images/avatar/avatar-2.jpg') }}" alt="">
                            </div>
                            <div class="reviews__area-item-content">
                                <p>I used this to seal an old set of aluminum awning windows in my sun-room. The cranks are all stripped and the screens are long gone, but they didn't have a good seal. So, if I can't open them, I at least wanted them to be airtight. This bonded to the aluminum well enough to only use a thin bead, and I was surprised at how fast it cured.</p>
                                <h5>Helen Rose</h5>
                            </div>
                        </div>
                        <div class="reviews__area-item swiper-slide">
                            <div class="reviews__area-item-icon">
                                <img src="{{ asset('assets/images/icon/quote.png') }}" alt="">
                            </div>
                            <div class="reviews__area-item-avatar">
                                <img src="{{ asset('assets/images/avatar/avatar-6.jpg') }}" alt="">
                            </div>
                            <div class="reviews__area-item-content">
                                <p>Undoubtedly one of the best sealant that we have used as a fabricator in the Asian region !</p>
                                <h5>Tawhid R</h5>
                            </div>
                        </div>
                        <div class="reviews__area-item swiper-slide">
                            <div class="reviews__area-item-icon">
                                <img src="{{ asset('assets/images/icon/quote.png') }}" alt="">
                            </div>
                            <div class="reviews__area-item-avatar">
                                <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="">
                            </div>
                            <div class="reviews__area-item-content">
                                <p>Very reasonable priced ! Great technology a lot more coverage than most sealant brands in the market.</p>
                                <h5>M Beiraghadary</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reviews Area End -->


<!-- CLient Area Start -->
<div class="cLient__area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cLient__area-title">
                    <h2>Trusted CLient's</h2>
                </div>
                <div class="cLient__area-brand">
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/1.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/2.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/3.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/4.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/5.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/6.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/7.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/8.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/9.png') }}" alt="">
                    </div>
                    <div class="cLient__area-brand-item">
                        <img src="{{ asset('assets/images/brand/10.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CLient Area End -->


@endsection
