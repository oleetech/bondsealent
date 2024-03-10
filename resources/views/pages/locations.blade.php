@extends('layouts.website')

@section('page-content')
<!-- Page Banner Area Start -->
<x-page-banner image="assets/images/page-banner.jpg" activePage='LOCATIONS' :pageLinks="['home' => 'Home', 'locations' => 'Locations']" />
<!-- Page Banner Area End -->

<!-- Locations Area Start -->
<div class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <x-address-card name="Bangladesh" location="BUILDING TECHNOLOGY & SYSTEMS"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>

            <div class="col-md-3">
                <x-address-card name="India" location="WVC CORPORATION LTD"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>

            <div class="col-md-3">
                <x-address-card name="China" location="XinLion Building materials LTD"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>

            <div class="col-md-3">
                <x-address-card name="Singapore" location="SEVEN WINGS LLC"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>

            <div class="col-md-3">
                <x-address-card name="UAE" location="AL DIL LLC"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>

            <div class="col-md-3">
                <x-address-card name="America" location="COSMOPOLITAN LLC"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>

            <div class="col-md-3">
                <x-address-card name="UK" location="Bildzwen Engineering"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>

            <div class="col-md-3">
                <x-address-card name="America" location="COSMOPOLITAN LLC"  email="bondsealent@gmail.com" phone="+301 377 3777" />
            </div>
        </div>
    </div>
</div>
<!-- Locations Area End -->


<!-- Map Area Start -->
<div class="">
    <div id="map_wrapper">
        <div id="map_canvas" class="mapping"></div>
    </div>
</div>
<!-- Map Area End -->
@endsection


@push('scripts')
    <script type="text/javascript">
		jQuery(function($) {
            // Asynchronously Load the map API
            var script = document.createElement('script');
            script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDFi1-DrMf7IpnNGdA5ovxdqV8Y1KHrxWM&callback=initialize";
            document.body.appendChild(script);
        });

        function initialize() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the page
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            map.setTilt(45);

            // Multiple Markers
            var markers = [
                ['Bangaldesh', 23.810331, 90.412521],
                ['India', 20.593683, 78.962883],
                ['China', 35.861660, 104.195396],
                ['Singapore', 1.352083, 103.819839],
                ['UAE', 23.424076, 53.847816],
                ['America', 37.09024, -95.712891],
                ['UK', 55.378051, -3.435973]
            ];

            // Info Window Content
            var infoWindowContent = [
                ['<div class="info_content">' +
                    '<h3 class="info_location_name">Bangladesh</h3>' +
                    '<h5 class="info_location_title">BUILDING TECHNOLOGY & SYSTEMS</h5>' +
                    '<p class="info_location_text">House: 77/B, Road: 03, Block: F, Banani, Dhaka-1213</p>' +
                    '<p class="info_location_mail"><span><i class="fa fa-envelope"></i></span>bondsealent@gmail.com</p>' +
                    '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>+301 377 3777</p>' +
                    '<a href="#" class="btn-link">View Location</a>' +
                    '</div>'
                ],
                ['<div class="info_content">' +
                    '<h3 class="info_location_name">India</h3>' +
                    '<h5 class="info_location_title">WVC CORPORATION LTD</h5>' +
                    '<p class="info_location_text">House: 77/B, Road: 03, Block: F, Banani, Dhaka-1213</p>' +
                    '<p class="info_location_mail"><span><i class="fa fa-envelope"></i></span>bondsealent@gmail.com</p>' +
                    '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>+301 377 3777</p>' +
                    '<a href="#" class="btn-link">View Location</a>' +
                    '</div>'
                ],
                ['<div class="info_content">' +
                    '<h3 class="info_location_name">China</h3>' +
                    '<h5 class="info_location_title">XinLion Building materials LTD</h5>' +
                    '<p class="info_location_text">House: 77/B, Road: 03, Block: F, Banani, Dhaka-1213</p>' +
                    '<p class="info_location_mail"><span><i class="fa fa-envelope"></i></span>bondsealent@gmail.com</p>' +
                    '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>+301 377 3777</p>' +
                    '<a href="#" class="btn-link">View Location</a>' +
                    '</div>'
                ],
                ['<div class="info_content">' +
                    '<h3 class="info_location_name">Singapore</h3>' +
                    '<h5 class="info_location_title">SEVEN WINGS LLC</h5>' +
                    '<p class="info_location_text">House: 77/B, Road: 03, Block: F, Banani, Dhaka-1213</p>' +
                    '<p class="info_location_mail"><span><i class="fa fa-envelope"></i></span>bondsealent@gmail.com</p>' +
                    '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>+301 377 3777</p>' +
                    '<a href="#" class="btn-link">View Location</a>' +
                    '</div>'
                ],
                ['<div class="info_content">' +
                    '<h3 class="info_location_name">UAE</h3>' +
                    '<h5 class="info_location_title">AL DIL LLC</h5>' +
                    '<p class="info_location_text">House: 77/B, Road: 03, Block: F, Banani, Dhaka-1213</p>' +
                    '<p class="info_location_mail"><span><i class="fa fa-envelope"></i></span>bondsealent@gmail.com</p>' +
                    '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>+301 377 3777</p>' +
                    '<a href="#" class="btn-link">View Location</a>' +
                    '</div>'
                ],
                ['<div class="info_content">' +
                    '<h3 class="info_location_name">America</h3>' +
                    '<h5 class="info_location_title">COSMOPOLITAN LLC</h5>' +
                    '<p class="info_location_text">House: 77/B, Road: 03, Block: F, Banani, Dhaka-1213</p>' +
                    '<p class="info_location_mail"><span><i class="fa fa-envelope"></i></span>bondsealent@gmail.com</p>' +
                    '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>+301 377 3777</p>' +
                    '<a href="#" class="btn-link">View Location</a>' +
                    '</div>'
                ],
                ['<div class="info_content">' +
                    '<h3 class="info_location_name">UK</h3>' +
                    '<h5 class="info_location_title">Bildzwen Engineering</h5>' +
                    '<p class="info_location_text">House: 77/B, Road: 03, Block: F, Banani, Dhaka-1213</p>' +
                    '<p class="info_location_mail"><span><i class="fa fa-envelope"></i></span>bondsealent@gmail.com</p>' +
                    '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>+301 377 3777</p>' +
                    '<a href="#" class="btn-link">View Location</a>' +
                    '</div>'
                ],
            ];
            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow({ maxWidth: 280 }),
                marker, i;

            // Loop through our array of markers & place each one on the map
            for (i = 0; i < markers.length; i++) {
                var position = new google.maps.LatLng(markers[i][1],
                    markers[i][2], markers[i][3], markers[i][4]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0],
                    gestureHandling: 'greedy'
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var  tilesloadedListener = google.maps.event.addListener((map),  'tilesloaded', function(event) {
                this.setZoom(2);
                google.maps.event.removeListener(tilesloadedListener);
            });

        }
	</script>
@endpush
