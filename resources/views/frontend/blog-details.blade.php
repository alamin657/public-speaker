@extends('frontend.layouts.main')

@section('main-container')

        <div role="main" class="main mt-5">

            <!-- Header part start -->
            <section class="page-header page-header-modern bg-color-quaternary page-header-lg border-0 m-0"
                style="background-image:url({{asset('frontend/img/Carousel-image/carousel-image/carosel-image1.avif')}});">
                <div class="container position-relative z-index-2">
                    <div class="row text-center text-md-start py-3">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="font-weight-bold   text-10 mb-0">Blog Details</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                                <li><a href="index.html" class="text-decoration-none text-white">Home</a></li>
                                <li class="text-upeercase active text-color-primary">Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header part end -->
            <div class="container pt-4 pb-5 my-5">
                <div class="row">


                    <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1600">

                        <article>

                            <div class="card border-0">
                                <div class="card-body z-index-1 p-0">


                                    <div class="post-image pb-4">
                                        <img class="card-img-top custom-border-radius-1"
                                            src="{{('frontend/img/gallery-image/gallery-image-3.jpg')}}" alt="Card Image">
                                    </div>

                                    <div class="card-body p-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus
                                            lacus,
                                            rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget
                                            placerat
                                            viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus.
                                            Vestibulum
                                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                            Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa
                                            fringilla
                                            consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel
                                            nisl.
                                            Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in
                                            faucibus
                                            orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh.
                                            Donec
                                            mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing
                                            convallis,
                                            nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor.
                                            Vestibulum
                                            vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas
                                            sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet
                                            risus
                                            sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id,
                                            egestas
                                            quis mauris.</p>
                                        <p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla
                                            elit.
                                            Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque
                                            penatibus
                                            et
                                            magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris,
                                            viverra
                                            et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie
                                            vitae
                                            sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque
                                            ligula
                                            vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum
                                            primis
                                            in
                                            faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                                        <p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et
                                            interdum.
                                            Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet.
                                            Phasellus
                                            convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo
                                            tellus
                                            porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla
                                            sed
                                            nibh
                                            sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris,
                                            eu
                                            mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec
                                            tortor.
                                        </p>

                                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                        <div class="addthis_inline_share_toolbox"></div>
                                        <script data-cfasync="false"
                                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                        <script type="text/javascript"
                                            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>




                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>

                    <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
                        <aside class="sidebar">
                            <div class="px-3 mb-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About
                                    The
                                    Blog</h3>
                                <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo,
                                    volutpat
                                    quis porta diam.</p>
                            </div>

                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">
                                    Recent
                                    Posts
                                </h3>
                                <div class="pb-2 mb-1">
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem
                                        ipsum dolor sit amet</a>
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur
                                        adipiscing elit</a>
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan 2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
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
                                    Comments</h3>
                                <div class="pb-2 mb-1">
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                                        on <strong class="text-color-dark text-hover-primary text-4">Vivamus
                                            sollicitudin</strong> <span
                                            class="text-uppercase text-1 d-block pt-1 pb-3">10
                                            Jan
                                            2023</span></a>
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John
                                        Doe on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum
                                            dolor</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan
                                            2023</span></a>
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                                        on <strong class="text-color-dark text-hover-primary text-4">Consectetur
                                            adipiscing</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10
                                            Jan
                                            2023</span></a>
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
                    </div>

                </div>
            </div>

            <div class="position-relative pb-5 d-none d-xl-block">
                <div class="position-absolute transform3dy-n50 left-0">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorterPlus"
                        data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
                        <div class="custom-square-1 bg-primary mt-0 mb-5"></div>
                    </div>
                </div>
            </div>

@endsection