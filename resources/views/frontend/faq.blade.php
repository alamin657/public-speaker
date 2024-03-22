@extends('frontend.layouts.main')

@section('main-container')

        <div role="main" class="main mt-5">
            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image:url({{asset('frontend/img/Carousel-image/carousel-image/carosel-image1.avif')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">FAQ</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="{{url('/')}}" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->
            <div class="row pb-4 container mt-5">

                <div class="col mb-4 mb-lg-0">


                    <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false"
                                        aria-controls="collapse100One">
                                        1 - What is the Public Speaker project all about?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">The Public Speaker project is a platform dedicated to empowering
                                        individuals to
                                        enhance their public speaking skills. We
                                        provide resources, training modules, and a supportive community for aspiring
                                        speakers to develop confidence and
                                        proficiency in the art of public communication.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false"
                                        aria-controls="collapse100Two">
                                        2 - Who can benefit from the Public Speaker project?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">The Public Speaker project is designed for anyone looking to improve
                                        their public
                                        speaking abilities. This includes
                                        professionals, students, entrepreneurs, and individuals from all walks of life
                                        who want to excel in communicating
                                        effectively in public settings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Three"
                                        aria-expanded="false" aria-controls="collapse100Three">
                                        3 - What resources are available for members of the Public Speaker
                                        project?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">Members of the Public Speaker project have access to a wide range of
                                        resources,
                                        including video tutorials, articles,
                                        workshops, and practice sessions. We also offer personalized feedback and tips
                                        to help members refine their skills.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Four"
                                        aria-expanded="false" aria-controls="collapse100Four">
                                        4 - How do I become a member of the Public Speaker project?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">To become a member, simply navigate to our website and sign up for
                                        an account.
                                        Once registered, you'll have access to
                                        all our resources and be part of our vibrant community of speakers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFive">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Five"
                                        aria-expanded="false" aria-controls="collapse100Five">
                                        5 - Can I participate in live events organized by the Public Speaker
                                        project?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Five" class="collapse" aria-labelledby="collapse1HeadingFive"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">Absolutely! We regularly host live events, including webinars,
                                        workshops, and
                                        networking sessions. These events provide
                                        valuable opportunities for members to practice their public speaking skills and
                                        interact with like-minded individuals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

@endsection