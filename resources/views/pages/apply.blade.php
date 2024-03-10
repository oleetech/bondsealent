@extends('layouts.website')

@section('page-content')

<!-- Page Banner Area Start -->
<x-page-banner image="assets/images/page-banner.jpg" activePage='WHERE TO APPLY' :pageLinks="['home' => 'Home', 'whereToApply' => 'Where to apply']" />
<!-- Page Banner Area End -->



<!-- News Grid Area Start -->
<div class="news__grid section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-30">
                <x-application-card image="assets/images/applications/curtain-wall-2.jpg" title="Curtain Wall Glazing" description="Putting the finishing touches on your kitchen? With bond sealants and adhesives, your project is sure to be a success." />
            </div>
            <div class="col-lg-4 mb-30">
                <x-application-card image="assets/images/applications/windows-and-doors.jpg" title="Windows & Doors" description="Our Window & Door sealants are waterproof and durable, specifically designed for exterior sealing projects exposed to severe weather." />
            </div>
            <div class="col-lg-4 mb-30">
                <x-application-card image="assets/images/applications/kitchen-bath.jpg" title="Kitchen & Bath" description="Our Kitchen & Bath sealants offer mold resistant and waterproof seals to fill gaps and cracks in areas prone to mold and moisture." />
            </div>
            <div class="col-lg-4 mb-30">
                <x-application-card image="assets/images/applications/basement.jpg" title="Basement" description="Putting the finishing touches on your basement? With bond sealants, your project is sure to be a success." />
            </div>
            <div class="col-lg-4 mb-30">
                <x-application-card image="assets/images/applications/sealants-caulks.jpg" title="Seal & Paint" description="Our  sealants are waterproof and durable, specifically designed for sealing & painting projects exposed to severe weather." />
            </div>
            <div class="col-lg-4 mb-30">
                <x-application-card image="assets/images/applications/exterior.jpeg" title="Home Exterior" description="For over a century, Bond Sealent repair products have been used on mega home exterior projects all over the world." />
            </div>
        </div>
    </div>
</div>
<!-- News Grid Area End -->
@endsection
