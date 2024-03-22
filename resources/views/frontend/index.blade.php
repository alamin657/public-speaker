@extends('frontend.layouts.main')

@section('main-container')


<div role="main" class="main">

    <div id="home"
        class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
        data-plugin-options="{'autoplayTimeout': 4000}" style="height: 100vh;">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                @foreach($banners as $banner)
                <div class="owl-item position-relative pt-5"
                    style="background-image: url('images/banner/{{ $banner->image }}') ; background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">
                                    <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-3 appear-animation"
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
                                        <span
                                            class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="img/slides/slide-title-border.png" class="w-auto appear-animation"
                                                data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                alt="" />
                                        </span>
                                        {{-- With Us --}}
                                        <span
                                            class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="img/slides/slide-title-border.png" class="w-auto appear-animation"
                                                data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                alt="" />
                                        </span>
                                    </h3>
                                    <h2 class="text-color-light font-weight-extra-bold text-8 mb-4 appear-animation"
                                        data-appear-animation="blurIn" data-appear-animation-delay="500"
                                        data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">

                                        {{-- You Are Always One  --}}
                                        <span class="position-relative"><span
                                                class="position-absolute left-50pct transform3dx-n50 bottom-0"><img
                                                    src="" class="w-auto appear-animation"
                                                    data-appear-animation="fadeInLeftShorterPlus"
                                                    data-appear-animation-delay="1000"
                                                    data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}"
                                                    alt="" /></span></span>
                                    </h2>
                                    <p class="text-4 text-color-light font-weight-light opacity-7 text-center mt-2 mb-4"
                                        data-plugin-animated-letters
                                        data-plugin-options="{'startDelay': 1000, 'firstLoadNoAnim': true, 'minWindowWidth': 0, 'animationSpeed': 25}">
                                        <strong class="text-color-light"></strong>
                                        {{-- Strategies of our attorneys will help you solve very complex legal
												issues. --}}
                                    </p>
                                    {{-- <a href="#"
												class="btn btn-primary btn-rounded font-weight-bold text-3 px-5 py-3 appear-animation"
												data-appear-animation="fadeInUpShorter"
												data-appear-animation-delay="1600"
												data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
												 GET STARTED NOW! 
											</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
        </div>
        <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            {{-- <button role="button" class="owl-dot"><span></span></button>
					<button role="button" class="owl-dot"><span></span></button> --}}
        </div>
    </div>

    <!-- Header part end -->
    <!-- sort about part start -->
    <div class="container pt-5">
        @foreach($abouts as $about)
        <div class="row py-4 mb-2">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="300">{{$about -> name}}</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="500">{{$about -> title}}</p>
                </div>
                <p class="lead appear-animation text-black fs-6" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="700">
                    {{$about -> description}}

                    {{-- I’m Md Jayed Hasan Emran, working with Zariq Limited in top management. I have held
							top-level office responsibilities.
							Apol and Daily Shop are among them. Both companies have given me the opportunity to apply my
							roles. For this, both of
							these companies are now operating very well. I hope to use my experience to take Zariq
							Limited’s management level one
							step further, Insha-Allah. --}}

                </p>
                {{-- <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter"
							data-appear-animation-delay="800">
							I am a seasoned professional with a distinguished career in top-level
							management. Over the years,
							I have been entrusted with significant responsibilities, particularly in the domains of Apol
							and Daily Shop, within
							Zariq Limited.</p> --}}
                <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="900">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="1000">
                    <div class="col-lg-6">
                        <!-- <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a> -->
                        <a href="{{ route('frontend.about') }}" class="btn btn-modern btn-primary mt-3">See More</a>
                    </div>
                    <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                        <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                        <ul class="social-icons float-lg-end">
                            <li class="social-icons-facebook"><a href="https://www.facebook.com/MdJayedHasanEmran"
                                    target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a href="https://www.youtube.com/@mdjayedhasanemran2251"
                                    target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                            <li class="social-icons-linkedin"><a href="https://www.linkedin.com/in/csejayed/"
                                    target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                <img src="{{ asset('images/about/' . $about->image) }}" class="img-fluid mb-2" alt="">
            </div>
        </div>
        @endforeach
    </div>
    <!-- sort about part end -->

    <!-- short gallery section start -->

    <div class="container">
        <div class=" row ">
            <div class="col">

                <h2 class="mt-4 text-color-dark font-weight-bold text-12 mb-2 pt-0  appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="300">
                    </h2>

                <div class="row">
                    @foreach($galleries as $gallery)

                    <div class="col-lg-4">
                        <h5 class="text-uppercase mt-4"></h5>
                        {{-- <a href="{{route('frontend.gallery')}}" aria-label=""> --}}
                            <span class="  thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                <span class="thumb-info-wrapper">
                                    <img src="{{ asset('images/gallery/' . $gallery->image) }}" class=" img-fluid"
                                        alt="">
                                </span>
                            </span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        <a href="{{route('frontend.gallery')}}" class="mt-3 btn btn-modern btn-primary" id="btn-gallery">See More</a>
    </div>


    <!-- short gallery section end -->

    <!-- Counter part start -->
    <section id="counter" class="parallax section section-text-light section-parallax section-center my-0 mt-4"
         data-plugin-parallax style="background-color: #0088CC;"
        data-plugin-options="{'speed': 1.5, 'parallaxHeight': '200%'}"
        data-image-src="img/testimonial-history-bg/background-3.jpg">
        <div class="container position-relative" >
            <div class="row py-5 counters counters-text-light" >
                @foreach($counters as $counter)
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0" >
                    <div class="counter" >
                        <img width="44" height="50" src="img/demos/law-firm/icons/business-years.svg" alt="" data-icon
                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light d-inline-block ms-2 p-relative bottom-1'}" />
                        <strong class="pt-3 custom-font-secondary font-weight-bold"
                            data-to="{{$counter -> number}}"
                            data-append="+">{{ $counter -> number }}</strong>
                        <label class="pt-2 text-4 opacity-7 text-white">{{ $counter -> name }}</label>
                    
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- Counter part end -->
</div>

@endsection
