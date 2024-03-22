@extends('frontend.layouts.main')
@section('main-container')

        <div role="main" class="main">

            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image: url({{asset('frontend/img/Carousel-image/slider.jpg')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Awards</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{route('frontend.home')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Awards</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->


            <!--  Awards section start -->

            <div class="container">
                <div class=" row ">
                    <div class="col">
                        <h2 class="mt-4 text-color-dark text-center font-weight-bold text-12 mb-2 pt-0  appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="300">
                            Awards</h2>
                        <div class="row">
                            @foreach($awards as $award)
                            <div class="col-lg-4">
                                <h5 class="text-uppercase mt-4"></h5>
                                {{-- <a href="{{route('frontend.award')}}" aria-label=""> --}}
                                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('images/award/' . $award ->image)}}" class="img-fluid" alt="">

                                        </span>
                                    </span>
                                </a>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>


            <!--  awards section end -->
@endsection