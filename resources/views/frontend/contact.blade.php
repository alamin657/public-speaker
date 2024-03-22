@extends('frontend.layouts.main')

@section('main-container')

            <!-- Contact section start -->
            <div class="container">

                <div class="row py-4">

                    {{-- <div class="col-lg-6">

                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                            <h4 class="mt-3 mb-1">Our <strong>Office</strong></h4>
                            <ul class="list list-icons list-icons-style-2 mt-2">
                                <li><i class="fas fa-map-marker-alt top-6"></i> <strong
                                        class="text-dark">Address:</strong> 1234
                                    Street Name, City Name, United States</li>
                                <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123)
                                    456-789</li>
                                <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a
                                        href="/cdn-cgi/l/email-protection#98f5f9f1f4d8fde0f9f5e8f4fdb6fbf7f5"><span
                                            class="__cf_email__"
                                            data-cfemail="462b272f2a06233e272b362a236825292b">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                            <h4 class="pt-5">Business <strong>Hours</strong></h4>
                            <ul class="list list-icons list-dark mt-2">
                                <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                                <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                                <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                            </ul>
                        </div>

                        <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                        <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            eget leo at
                            velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum
                            dolor sit
                            amet, consectetur adipiscing elit.</p>

                    </div> --}}
                    <div>

                        <h2 class="font-weight-bold text-8 mt-4 text-center mb-0">Contact Us</h2>
                        <p class="mb-4"></p>

                        <form action="{{route ('frontend.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                             <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="form-label mb-1 text-2">Full Name</label>
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-label mb-1 text-2">Email Address</label>
                                    <input type="email" value="" data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control text-3 h-auto py-2" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="form-label mb-1 text-2">Phone</label>
                                    <input type="number" value="" data-msg-required="Please enter the phone."
                                        maxlength="100" class="form-control text-3 h-auto py-2" name="phone" required>
                                </div>
                            
                                <div class="form-group col-lg-6">
                                    <label class="form-label mb-1 text-2">Address</label>
                                    <input type="text" value="" data-msg-required="Please enter the Address."
                                        maxlength="100" class="form-control text-3 h-auto py-2" name="address" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label mb-1 text-2">Message</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                        class="form-control text-3 h-auto py-2" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="submit" value="Send" class="btn btn-primary btn-modern">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <!-- Contact section end -->


            <!-- map section start -->

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2798.691646917969!2d-118.796649!3d34.154469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco%20Wholesale!5e1!3m2!1sbn!2sbd!4v1697092303660!5m2!1sbn!2sbd"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- map section end -->

@endsection