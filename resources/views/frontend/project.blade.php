
@extends('frontend.layouts.main')

@section('main-container')

        <div role="main" class="main mt-5">

            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image:url({{asset('frontend/img/Carousel-image/slider.jpg')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Project</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{url('/')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Project</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->

            <!-- project part start -->

            <div class="row container mt-5">
                <h1 class="text-center">My Project</h1>
                @foreach($projects as $project)
                <div class="col-lg-4">

                    <div class="ratio ratio-16x9 ratio-borders">
                        <iframe
                            src="{{$project -> url}}"
                           ></iframe>
                           {{--  width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen" --}}
                        </div>
                    </div>
                    @endforeach
         
            </div>
            {{-- <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="commom_center_btn text-center">
                        <button class="btn btn-primary">See More</button>

                    </div>
                </div>
            </div> --}}


            {{-- <div class="ratio ratio-16x9 mt-5">
                <iframe frameborder="0" allowfullscreen=""
                    src="https://www.facebook.com/plugins/video.php?height=393&amp;href=https%3A%2F%2Fwww.facebook.com%2FMdJayedHasanEmran%2Fvideos%2F515321102496578%2F&amp;show_text=false&amp;width=560&amp;t=0"></iframe>
            </div> --}}


            <!-- project part end -->
@endsection