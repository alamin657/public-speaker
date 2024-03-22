@extends('frontend.layouts.main')

@section('main-container')
<div role="main" class="main mt-5">
            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image: url({{asset('frontend/img/Carousel-image/slider.jpg')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Blog</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{url('/')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->


            <!-- Blog section start -->
            <div class="container pt-4 pb-5 my-5 ">
                <div class="row m-auto">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-4 shadow rounded" >
                        <div class="card m-auto" style="width: 18rem;">
                            <img src="{{asset('images/blogs/' . $blog -> image)}}" class="card-img-top" alt="...">
                            <div class="card-body" style="height: 400px; overflow:auto;">
                              <h5 class="card-title"> {{ $blog->title }}</h5>
                              <h6 class="card-title"> {{ $blog->sub_title }}</h6>
                              <p class="card-text"> {{$blog->description}}</p>
                            </div>
                          </div>
                    </div>
                    @endforeach
                    
                    {{-- <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1600">

                        <article class="mb-5">
                            <div class="card bg-transparent border-0 custom-border-radius-1">
                                <div class="card-body p-0 z-index-1">
                                    <a href="blog-details.html" data-cursor-effect-hover="plus">
                                        <img class="card-img-top custom-border-radius-1 mb-2"
                                            src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" alt="Card Image">
                                    </a>
                                    <p class="text-uppercase text-color-default text-1 my-2">
                                        <time pubdate datetime="2023-01-10">10 Jan 2023</time>
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        3 Comments
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        John Doe
                                    </p>
                                    <div class="card-body p-0">
                                        <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                                class="text-color-dark text-color-hover-primary text-decoration-none"
                                                href="blog-details.html">An Interview with John Doe</a>
                                        </h4>
                                        <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Nunc
                                            viverra lorem , consectetur adipiscing elit...</p>
                                        <a href="{{url('/blog-details')}}"
                                            class="text-decoration-none custom-link-hover-effects">
                                            <span
                                                class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                                Read More
                                                <img width="27" height="27"
                                                    src="img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                    data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                    style="width: 27px;" />
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article> 

                         <article class="mb-5">
                            <div class="card bg-transparent border-0 custom-border-radius-1">
                                <div class="card-body p-0 z-index-1">
                                    <a href="{{url('/blog-details')}}" data-cursor-effect-hover="plus">
                                        <img class="card-img-top custom-border-radius-1 mb-2"
                                            src="{{asset('frontend/img/gallery-image/gallery-image-3.jpg')}}" alt="Card Image">
                                    </a>
                                    <p class="text-uppercase text-color-default text-1 my-2">
                                        <time pubdate datetime="2023-01-10">10 Jan 2023</time>
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        3 Comments
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        John Doe
                                    </p>
                                    <div class="card-body p-0">
                                        <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                                class="text-color-dark text-color-hover-primary text-decoration-none"
                                                href="blog-details.html">How to Grow your Business</a>
                                        </h4>
                                        <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Nunc
                                            viverra lorem , consectetur adipiscing elit...</p>
                                        <a href="{{url('/blog-details')}}"
                                            class="text-decoration-none custom-link-hover-effects">
                                            <span
                                                class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                                Read More
                                                <img width="27" height="27"
                                                    src="img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                    data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                    style="width: 27px;" />
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article> 

                        <ul
                            class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
                            <li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit"><i
                                        class="fas fa-angle-left" id="page-link"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#"
                                    data-cursor-effect-hover="fit">1</a></li>
                            <li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit"
                                    id="page-link">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" id="page-link" href="#"
                                    data-cursor-effect-hover="fit">3</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#" data-cursor-effect-hover="fit"><i
                                        class="fas fa-angle-right" id="page-link"></i></a></li>
                        </ul>

                    </div>
                    <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
                        <aside class="sidebar">
                            <div class="px-3 mb-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About
                                    The
                                    Blog
                                </h3>
                                <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo,
                                    volutpat
                                    quis
                                    porta diam.</p>
                            </div>

                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">
                                    Recent Posts
                                </h3>
                                <div class="pb-2 mb-1">
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan
                                        2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem
                                        ipsum dolor sit amet</a>
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan
                                        2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur
                                        adipiscing elit</a>
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan
                                        2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus
                                        sollicitudin nibh luctus</a>
                                </div>
                            </div>
                            <div class="py-1 clearfix">
                                <hr class="my-2">
                            </div>
                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">
                                    Recent
                                    Comments
                                </h3>
                                <div class="pb-2 mb-1">
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                                        on
                                        <strong class="text-color-dark text-hover-primary text-4">Vivamus
                                            sollicitudin</strong>
                                        <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John
                                        Doe
                                        on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum
                                            dolor</strong>
                                        <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                                        on
                                        <strong class="text-color-dark text-hover-primary text-4">Consectetur
                                            adipiscing</strong>
                                        <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                                </div>
                            </div>
                            <div class="py-1 clearfix">
                                <hr class="my-2">
                            </div>
                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories
                                </h3>
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
                    </div> --}}
                </div>
            </div>
            <!-- Blog section end -->

        
        </div>
@endsection

