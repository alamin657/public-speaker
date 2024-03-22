@extends('frontend.layouts.main')

@section('main-container')


      
        <div role="main" class="main mt-5">
            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image: url({{asset('frontend/img/Carousel-image/slider.jpg')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Skills</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{route('frontend.home')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->

            <!-- skills part start -->
            <div class="row">
                <div class="col">
                    <h4 class="text-center mt-5">Circular</h4>
                    <div class="row mt-5">
                        @foreach($skills as $skill)
                        <div class="col-lg-3 col-md-4">
                            <div class="circular-bar">
                                <div class="circular-bar-chart" data-percent="{{$skill -> number}}"
                                    data-plugin-options="{'barColor': '#0088CC'}">
                                    <strong>{{$skill -> name}}</strong>
                                    <label>{{$skill -> number}}%</label>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
               
                    <!-- skills part end -->
               
                 
                </div>
            </div>
            </div>
@endsection