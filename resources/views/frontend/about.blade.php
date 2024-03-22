@extends('frontend.layouts.main')

@section('main-container')
<div role="main" class="main">
            @foreach ($abouts as $about) 

            <!-- About section start -->
            <div id="aboutus" class="row align-items-xl-center pt-4 mt-5 container-fluid">
                <div class="col-md-10 col-lg-6 mb-5 mb-lg-0 ">
                    <div class="row row-gutter-sm ">
                        <div class="col-6" id="about">
                            <img id="about_img" src="{{ asset('images/about/' . $about->image) }}" class="box-shadow-5 " alt="" />
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <h2 class="text-color-dark font-weight-bold text-10  pt-0  appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="300">{{$about -> name}}</h2>

                    <p class="font-weight-bold text-primary text-uppercase mb-2 appear-animation text-4"
                        data-appear-animation="maskUp" data-appear-animation-delay="500">{{$about -> title}}</p>

                    <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                        {{$about -> description}}
                        {{-- I’m Md Jayed Hasan Emran, working with Zariq Limited in top management. I have held top-level
                        office responsibilities.
                        Apol and Daily Shop are among them. Both companies have given me the opportunity to apply my
                        roles. For this, both of
                        these companies are now operating very well. I hope to use my experience to take Zariq Limited’s
                        management level one
                        step further, Insha-Allah <br>
                        I am a seasoned professional with a distinguished career in top-level management. Over the
                        years, I have been entrusted
                        with significant responsibilities, particularly in the domains of Apol and Daily Shop, within
                        Zariq Limited. --}}
                    </p>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1000">
                        <a href="{{route('frontend.contact')}}"
                            class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                            data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a
                                Quote</span></a>
                    </div>
                </div>
               
            </div>

            {{-- <section class="ceo message">
                <div class="container">
                    <div class="row align-items-center py-2 my-5 mb-lg-0 my-xl-5">
                        <div class="col-lg-7 mb-2 mb-lg-0 md_speach_first_part">
                            <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-6 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter">M.D Message</h2>
                            <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">A leading
                                player in the World market</h3>
                            <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation line-height-6"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                As a prominent figure in the global market, it is with great pride and enthusiasm that I
                                address you. At the helm of our
                                dynamic organization, I am M.D. Jayed Hasan Emran, a dedicated professional driven by a
                                singular vision - to lead and
                                excel.

                            </p>

                            <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation line-height-6"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                In an ever-evolving world market, our organization stands tall as a leading player, a
                                testament to our unwavering
                                commitment to excellence. We believe in pushing boundaries, exploring new horizons, and
                                setting benchmarks that resonate
                                across industries.

                            </p>
                            <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation line-height-6"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                With a legacy of innovation and a culture of continuous improvement, we have carved a
                                niche for ourselves on the
                                international stage. Our journey has been marked by strategic decisions, astute
                                investments, and a deep understanding of
                                market dynamics. It is this acumen that has propelled us to the forefront of the global
                                market.

                            </p>
                        </div>
                        <div class="col-lg-5 md_image">
                            <img src="{{asset('frontend/img/short-about/jayed.jpeg')}}" class="img-fluid" alt="" />
                        </div>
                        <div class="md_speach_2nd">
                            <p class="text-3">In an era defined by rapid change and unprecedented challenges,
                                adaptability is key. We are not merely participants in
                                the market ,we are visionaries, architects of progress, and catalysts of transformation.
                                Through every endeavor, we seek
                                to not only meet but exceed expectations, delivering products and services that redefine
                                industry standards. </p>
                        </div>
                        <div class="col-lg-2">
                            <div class="md_signature">
                                <img src="{{asset('frontend/img/signature.png')}}" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-3 mt-4 md_details">
                            <h2 class="text-color-primary">Jayed Hasan Emran</h2>
                            <p class="">Managing, Director</p>
                        </div>
                    </div>
                </div>
            </section> --}}
            @endforeach  
        </div>
        <!-- About section end -->
@endsection