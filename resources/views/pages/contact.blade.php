@extends('layouts.website')

@section('page-content')

<!-- Page Banner Area Start -->
<x-page-banner image="assets/images/page-banner.jpg" activePage='Contact Us' :pageLinks="['home' => 'Home', 'contact' => 'Contact Us']" />
<!-- Page Banner Area End -->

<!-- Contact Area Start -->
<div class="contact__page section-padding pb-0">
    <div class="container">
        <div class="row mb-60">
            <div class="col-xl-12">
                <div class="contact__page-title t-center">
                    <span class="subtitle">Contact Us</span>
                    <h2>Feel Free to Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row section-padding pt-0">
            <div class="col-xl-4 col-lg-6 xl-mb-30">
                <div class="contact__page-item">
                    <div class="contact__page-item-icon">
                        <i class="fal fa-phone-alt"></i>
                    </div>
                    <div class="contact__page-item-content">
                        <h5>urgent Help</h5>
                        <p><a href="tel:+301 377 3777">+301 377 3777</a></p>
                        <p><a href="tel:+880 1859666594">+880 1859666594</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 lg-mb-30">
                <div class="contact__page-item">
                    <div class="contact__page-item-icon">
                        <i class="fal fa-envelope-open-text"></i>
                    </div>
                    <div class="contact__page-item-content">
                        <h5>Email Drop</h5>
                        <p><a href="mailto:bondsealent@gmail.com">bondsealent@gmail.com</a></p>
                        <p><a href="mailto:btsbd2017@yahoo.com">btsbd2017@yahoo.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="contact__page-item">
                    <div class="contact__page-item-icon">
                        <i class="fal fa-map-marked-alt"></i>
                    </div>
                    <div class="contact__page-item-content">
                        <h5>Location</h5>
                        <p>
                            Cosmopolitan LLC, PO box 1661

                        </p>
                        <p>Greenbelt, MD 20770, USA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__page-form">
                    <h2>Send Massage</h2>
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul class="list-group list-group-flush mr-2">
                        </ul>
                    </div>
                    <div class="alert alert-success print-success-msg alert-dismissible fade show" role="alert" style="display:none">

                    </div>

                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="contact__page-form-item">
                                    <input id="name" type="text" name="name" placeholder="Full Name" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 md-mb-30">
                                <div class="contact__page-form-item">
                                    <input id="email" type="email" name="email" placeholder="Email Address" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="contact__page-form-item">
                                    <input id="phone" type="text" name="phone" placeholder="Phone" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 md-mb-30">
                                <div class="contact__page-form-item">
                                    <input id="subject" type="text" name="subject" placeholder="Subject" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-30">
                                <div class="contact__page-form-item">
                                    <textarea id="message" name="message" placeholder="Type your comments...."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact__page-form-item">
                                    <button class="theme-btn btn-submit" type="submit">Contact Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact__page-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894606!2d-74.11976383964463!3d40.69766374865767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1652012644726!5m2!1sen!2sbd" loading="lazy"></iframe>
</div>
<!-- Contact Area End -->
@endsection


@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-submit").click(function(e){
            e.preventDefault();

            var fullName = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var subject = $("#subject").val();
            var message = $("#message").val();

            $.ajax({
            type:'POST',
            url:"{{ route('contact.post') }}",
            data:{
                  fullName: fullName,
                  email: email,
                  phone: phone,
                  subject: subject,
                  message: message,
            },
            success:function(data){
                    if($.isEmptyObject(data.error)){
                        //location.reload();
                        $(".print-success-msg").append("Thanks for connecting with us. We will contact you shortly.");
                        $(".print-success-msg").css('display','block');
                        $("#name").val("");
                        $("#email").val("");
                        $("#phone").val("");
                        $("#subject").val("");
                        $("#message").val("");
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
