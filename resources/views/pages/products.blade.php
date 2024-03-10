@extends('layouts.website')

@section('page-content')
<!-- Page Banner Area Start -->
<x-page-banner image="assets/images/page-banner.jpg" activePage='OUR LINE OF PRODUCTS' :pageLinks="['home' => 'Home', 'products' => 'Our Line of Products']" />
<!-- Page Banner Area End -->



<div class="services__page section-padding">
    <div class="container">
        <div class="row justify-content-center">
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
@endsection
