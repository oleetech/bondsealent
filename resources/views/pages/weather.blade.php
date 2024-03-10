@extends('layouts.website')

@push('styles')
    <style>

    </style>
@endpush


@section('page-content')

<!-- Page Banner Area Start -->
<x-page-banner image="assets/images/page-banner.jpg" activePage='WEATHERPROOFING BUILDING SILICONE SEALANT' :pageLinks="['home' => 'Home', 'products' => 'Products', 'weather' => 'BOND 6700 Sealant Weatherproofing Building Sealant']" />
<!-- Page Banner Area End -->



<div class="news__details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 xl-mb-30">
                <div class="blog__details-left">
                    <h4 class="mb-20">Basic Information:</h4>
                    <div class="row">
                        <div class="col-md-6 table-responsive">
                            <table class="table table-striped  table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Model NO.</th>
                                        <td>6700BOND</td>
                                    </tr>
                                    <tr>
                                        <th>Bonding Material</th>
                                        <td>Glass</td>
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                        <td>Clear/White/Black/Gery</td>
                                    </tr>
                                    <tr>
                                        <th>MOQ</th>
                                        <td>2400PCS</td>
                                    </tr>
                                    <tr>
                                        <th>Certificate</th>
                                        <td>ISO9001</td>
                                    </tr>
                                    <tr>
                                        <th>Transport Package</th>
                                        <td>Cartridge/Sausage/Bucket</td>
                                    </tr>
                                    <tr>
                                        <th>Trademark</th>
                                        <td>BOND</td>
                                    </tr>
                                    <tr>
                                        <th>HS Code</th>
                                        <td>3506100090</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 table-responsive">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Mildew Proof</th>
                                        <td>Mildew Proof</td>
                                    </tr>
                                    <tr>
                                        <th>Shelf Life</th>
                                        <td>12 Months</td>
                                    </tr>
                                    <tr>
                                        <th>Lead Time</th>
                                        <td>15 Days</td>
                                    </tr>
                                    <tr>
                                        <th>OEM</th>
                                        <td>Available</td>
                                    </tr>
                                    <tr>
                                        <th>Deliver Time</th>
                                        <td>15-20 Days</td>
                                    </tr>
                                    <tr>
                                        <th>Specification</th>
                                        <td>500ML</td>
                                    </tr>
                                    <tr>
                                        <th>Origin</th>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <th>Production Capacity</th>
                                        <td>10000tons/Month</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4 class="mb-20">Description:</h4>
                    <img src="{{ asset('assets/images/products/weather-silicone-sealant.jpg') }}" class="img-fluid mb-4" loading="lazy">

                    <br/>
                    <h4 class="mb-20">Technical Data:</h4>
                    <p>The following data are only for reference purpose, not intended for use in preparing specification.</p>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center">BOND 6700 Weatherproofing Silicone Sealant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Performance</th>
                                <th>Standard</th>
                                <th>Measured Value</th>
                                <th>Testing Method</th>
                            </tr>
                            <tr>
                                <td colspan="4">Test at 50±5% RH and temperature 23±2&#8451;</td>
                            </tr>
                            <tr>
                                <td>Density (g/cm3)</td>
                                <td>±0.1</td>
                                <td>1.40</td>
                                <td>GB/T 13477</td>
                            </tr>
                            <tr>
                                <td>Tack-Free Time (min)</td>
                                <td>&#8804;180</td>
                                <td>60</td>
                                <td>GB/T 13477</td>
                            </tr>
                            <tr>
                                <td>Extrusion (g/5S)</td>
                                <td>/</td>
                                <td>8</td>
                                <td>GB/T 13477</td>
                            </tr>
                            <tr>
                                <td>Slumpability (mm) vertical</td>
                                <td>/</td>
                                <td>&#8804;3</td>
                                <td>GB/T 13477</td>
                            </tr>
                            <tr>
                                <td>Slumpability (mm) horizontal</td>
                                <td>not change shape</td>
                                <td>not change shape</td>
                                <td>GB/T 13477</td>
                            </tr>
                            <tr>
                                <td>Curing Speed (mm/d)</td>
                                <td>2</td>
                                <td>4</td>
                                <td>/</td>
                            </tr>
                            <tr>
                                <td colspan="4">As Cured -After 21 days at 50±5% RH and temperature 23±2&#8451;</td>
                            </tr>
                            <tr>
                                <td>Hardness (Shore A)</td>
                                <td>20~60</td>
                                <td>45</td>
                                <td>GB/T 531</td>
                            </tr>
                            <tr>
                                <td>Tensile Strength under Standard Conditions (Mpa)</td>
                                <td>/</td>
                                <td>1.05</td>
                                <td>GB/T 13477</td>
                            </tr>
                            <tr>
                                <td>Elongation of Rupture (%)</td>
                                <td>/</td>
                                <td>300</td>
                                <td>GB/T 13477</td>
                            </tr>
                            <tr>
                                <td>Storage</td>
                                <td colspan="3">12 Months</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 class="mb-20">Gallery:</h4>
                    <div class="blog__details-left-image">
                        <!-- Product Preview Area Start -->
						<div class="product__Preview">
							<div class="swiper preview__swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<video src="{{ asset('assets/gallery/weatherproof-6700.mp4') }}" autoplay loop muted playsinline controls></video>
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('assets/gallery/6700-1.jpeg') }}" alt="image" loading="lazy">
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('assets/gallery/6700-2.jpeg') }}" alt="image" loading="lazy">
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('assets/gallery/6700-4.jpeg') }}" alt="image" loading="lazy">
									</div>
								</div>
							</div>
							<div thumbsSlider="" class="swiper thumb__swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="{{ asset('assets/gallery/6700-4.jpeg') }}" alt="image" loading="lazy">
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('assets/gallery/6700-1.jpeg') }}" alt="image" loading="lazy">
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('assets/gallery/6700-2.jpeg') }}" alt="image" loading="lazy">
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('assets/gallery/6700-3.jpeg') }}" alt="image" loading="lazy">
									</div>
								</div>
							</div>
						</div>
						<!-- Product Preview Area End -->
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="all__sidebar">
                    <div class="all__sidebar-item">
                        <img src="{{ asset('assets/images/products/Weather-vertical.jpg') }}" alt="WEATHERPROOFING BUILDING SILICONE SEALANT" class="img-fluid" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
