
		<footer id="footer" class="border-top-0 mt-5 mb-0">
                <div class="container py-4">
                    <div class="row py-5">
                        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                           
                            <a href="{{route('frontend.home')}}" class="logo pe-0 pe-lg-3 pb-4">
                                <h5>Public Speaker</h5>
                                {{-- <img src="{{asset('frontend/img/logo/gradient-world.png')}}" width="100" height="auto" alt=""> --}}
                                <!-- <img alt="Porto" width="125" height="47" src="img/demos/law-firm/logo-footer.png"> -->
                            </a>
                             {{-- @foreach($abouts as $about) --}}
                             <p class="pt-3 mb-2">
                                {{$setting->bs_footertext}}
                                </p>
                                {{-- @endforeach --}}
                          <p class="mb-0"><a class="mt-3 text-primary font-weight-semi-bold" href="#">Learn
                                    More<img width="27" height="27" src="img/demos/law-firm/icons/arrow-right.svg"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" /></a>
                            </p> 
                            
                        </div>
                        <div class="col-md-3 mb-4 mb-lg-0 col-lg-4" >
                            <h5 class="text-4-5 text-transform-none custom-font-primary mb-3">Contact Us</h5>
                            <div class="row pb-3">
                                <div class="col">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <img width="34" height="28" src="img/demos/law-firm/icons/envelope.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 34px; height: 28px;" />
                                        </div>
                                        <div class="feature-box-info ps-1">
                                            <label class="custom-footer-label-1">SEND US AN EMAIL</label>
                                            <strong class="custom-footer-strong-1"><a href="mailto:mail@example.com"
                                                    class="text-color-light">{{$setting->bs_email}}</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <img width="30" height="30" src="img/demos/law-firm/icons/phone.svg" alt=""
                                                data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}"
                                                style="width: 30px; height: 30px;" />
                                        </div>
                                        <div class="feature-box-info ps-1">
                                            <label class="custom-footer-label-1">CALL US NOW</label>
                                            <strong class="custom-footer-strong-1"><a href="tel:8001234567"
                                                    class="text-color-light">{{$setting->bs_phone}}</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-4">
                            <h5 class="text-4-5 text-transform-none custom-font-primary mb-3">Follow Us</h5>

                            <ul class="custom-social-icons-style-1 social-icons social-icons-clean">
                                <li class="social-icons-instagram">
                                    <a href="{{$setting->bs_instagram}}" class="no-footer-css" target="_blank"
                                        title="Instagram"><i class="text-primary fab fa-instagram"></i></a>
                                </li>
                                <li class="social-icons-twitter mx-4">
                                    <a href="{{$setting->bs_twitter}}" class="no-footer-css" target="_blank"
                                        title="Twitter"><i class="text-primary fab fa-twitter"></i></a>
                                </li>
                                <li class="social-icons-facebook">
                                    <a href="{{$setting->bs_facebook}}" class="no-footer-css" target="_blank"
                                        title="Facebook"><i class="text-primary fab fa-facebook-f"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright footer-copyright-style-2">
                    <div class="container py-2">
                        <div class="row py-4">
                            <div class="col d-flex align-items-center justify-content-center">
                                {{-- <p>© Copyright 2023. All Rights Reserved.</p> --}}
                                <p>Design & Development Zariq Ltd.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
		

		<!-- Vendor -->
		<script src="{{asset('frontend/vendor/plugins/js/plugins.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('frontend/js/theme.js')}}"></script>

		<script src="{{asset('frontend/js/views/view.contact.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('frontend/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('frontend/js/theme.init.js')}}"></script>

		<!-- Examples -->
		<script src="{{asset('frontend/js/examples/examples.portfolio.js')}}"></script>

		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> -->