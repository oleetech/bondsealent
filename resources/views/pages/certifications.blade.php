@extends('layouts.website')


@push('styles')
    <style>
        div#staticBackdrop::before {
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            content: "";
            background: #000;
            opacity: .8;
        }
    </style>
@endpush

@section('page-content')

<!-- Page Banner Area Start -->
<x-page-banner image="assets/images/page-banner.jpg" activePage='CERTIFICATIONS' :pageLinks="['home' => 'Home', 'certifications' => 'Certifications']" />
<!-- Page Banner Area End -->



<!-- Property Details Start -->
<div class="property__details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mb-30">
                <center>
                    <embed src= "{{ asset('assets/certifications/6700-Weather-Silicone-Report.pdf') }}"
                        width="100%"
                        height="500">
                </center>
            </div>
            <div class="col-sm-12 sm-mb-30">
                <center>
                    <embed src="{{ asset('assets/certifications/7700-Structural-Sealant-Report.pdf') }}"
                        width="100%"
                        height="500">
                </center>
            </div>
            <div class="col-sm-12 sm-mb-30">
                <center>
                    <embed src="{{ asset('assets/certifications/Bondsealant.pdf') }}"
                        width="100%"
                        height="500">
                </center>
            </div>
            <div class="col-sm-12 sm-mb-30">
                <center>
                    <embed src="{{ asset('assets/certifications/Pat-OLV-7000-（K48）.pdf') }}"
                        width="100%"
                        height="500">
                </center>
            </div>
        </div>
    </div>
</div>
<!-- Property Details End -->


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Certifications</h5>
            <a href="{{ route('home') }}">X</a>
        </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">password protected!</h4>
            <p>The certifications are password protected. Please provide your password in order to see the certifications.</p>
            <hr/>
            <p>Need a password? Please <a href="{{ route('contact') }}">contact us</a> to get a password.</p>
        </div>
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul class="list-group list-group-flush mr-2">
            </ul>
        </div>
        <form method="POST">
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-info btn-submit">View Certificates</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@if(!Session::get('password'))
    @push('scripts')
        <script>
            //load modal
            window.onload = () => {
                $('#staticBackdrop').modal('show');
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".btn-submit").click(function(e){
                e.preventDefault();

                var password = $("#password").val();

                $.ajax({
                type:'POST',
                url:"{{ route('verify') }}",
                data:{ password: password },
                success:function(data){
                        if($.isEmptyObject(data.error)){
                            location.reload();
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
            });

            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }
        </script>
    @endpush
@endif

