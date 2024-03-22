@extends('frontend.layouts.main')
@section('main-container')

        <div role="main" class="main mt-5">
            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image:url({{asset('frontend/img/Carousel-image/slider.jpg')}}); ">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Education</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{route('frontend.home')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Education</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->

            <!-- Education part start -->
            <section id="education" class="smoke">
                <div class="container">

                    <div id="builder-column-53e3cfbd26f3f" class="span12 col-md-12 column_first column_last">
                        <div id="builder-module-53e3d039cc063" class="module module-heading">
                            <div class="heading-red">
                                <h2 class="title">Education</h2>
                            </div>
                        </div>
                        <div id="builder-module-53e3cfd2e10c4" class="module">
                            @foreach($educations as $education)
                            <div class="row workDetails">

                                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                                    <div class="workYear">{{$education -> start_date}}<br>{{$education -> end_date}}</div>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
                                    <div class="arrowpart"></div>
                                    <div class="exCon">
                                        <h4>{{$education -> name}}</h4>
                                        <h5>{{$education -> title}}</h5>
                                        <p>{{$education -> description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="row workDetails">
                                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                                    <div class="workYear">Jun, 2014<br>Sep, 2014</div>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
                                    <div class="arrowpart"></div>
                                    <div class="exCon">
                                        <h4>Certified Supply Chain Analyst</h4>
                                        <h5>ISCEA Bangladesh</h5>
                                        <p>At ISCEA, my major experiences included examining the movement of goods
                                            through the
                                            supply channel, overseeing ongoing developments, pinpointing and evaluating
                                            gaps and
                                            generating improvements. My acquired skills from the course at ISCEA also
                                            include
                                            database management and spreadsheet analysis.</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
            <!-- Education part end -->

      
        </div>

@endsection