@extends('frontend.layouts.main')

@section('main-container')


        <div role="main" class="main mt-5">

            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image:url({{asset('frontend/img/Carousel-image/carousel-image/carosel-image1.avif')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Certificate</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{url('/')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Certificate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->

            <!-- Certificate part start -->
            <div class="container">

                <div class=" row ">

                    <div class="col">

                        <h2 class="mt-4 text-color-dark font-weight-bold text-10 mb-2 pt-0  appear-animation text-center"
                            data-appear-animation="maskUp" data-appear-animation-delay="300">Certificate
                        </h2>


                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="text-uppercase mt-4"></h5>
                                <a href="{{url('/certificate')}}" aria-label="">
                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" class="img-fluid" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-uppercase mt-4"></h5>
                                <a href="{{url('/certificate')}}" aria-label="">
                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded ">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" class="img-fluid" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-uppercase mt-4"></h5>
                                <a href="{{url('/certificate')}}" aria-label="">
                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" class="img-fluid" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-uppercase mt-4"></h5>
                                <a href="{{url('/certificate')}}" aria-label="">
                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" class="img-fluid" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-uppercase mt-4"></h5>
                                <a href="{{url('/certificate')}}" aria-label="">
                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" class="img-fluid" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-uppercase mt-4"></h5>
                                <a href="{{url('/certificate')}}" aria-label="">
                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" class="img-fluid" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>


                    </div>
                    <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
                        <aside class="sidebar">

                            <div class="px-3 mt-4">

                                <h2 class="text-color-dark  text-capitalize font-weight-bold text-5 m-0">
                                    Categories
                                </h2>
                                <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design
                                            (2)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">Animals</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0 active"
                                                    href="#">Business</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">Sports</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">People</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos
                                            (3)</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle
                                            (2)</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology
                                            (1)</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <!-- Certificate part end  -->
        </div>
@endsection