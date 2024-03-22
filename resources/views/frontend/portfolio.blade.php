@extends('frontend.layouts.main')
@section('main-container')
        <div role="main" class="main mt-5">

            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image: url({{asset('frontend/img/Carousel-image/slider.jpg')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Portfolio</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{route('frontend.home')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->

            <!-- Portfolio part start -->
            <div class="container py-2">
                <h1 class="text-center mt-5">Portfolio</h1>
               
                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center"
                    data-sort-id="portfolio" data-option-key="filter"
                    data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                    
                    <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active"
                            href="#"> All</a></li>
                   
                    
                     @foreach($portfoliocategories as $portfoliocategory)
                    <li class="nav-item" data-option-value=".{{$portfoliocategory->id}}">
                        <a class="nav-link text-2-5 text-uppercase"
                            href="#">{{$portfoliocategory -> name}}
                        </a>
                    </li>
                     @endforeach
                </ul>
                <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                        @foreach($portfolios as $portfolio)
                        <div class="col-md-6 col-lg-4 isotope-item websites {{$portfolio ->category_id}}">
                            <div class="portfolio-item ">
                                    <span
                                        class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{ asset('images/portfolio/'.$portfolio->image) }}"
                                                class="img-fluid border-radius-0" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- Portfolio part end -->
        </div>
@endsection
     