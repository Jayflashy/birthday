@extends('layouts')

@section('content')
 <!-- Hero -->
 <section id="slider" class="hero p-0">
    <div class="swiper-container no-slider animation slider-h-100">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <video class="full-image" data-mask="50" playsinline autoplay muted loop>
                    <source src="{{url('assets/videos/video1.mp4')}}" type="video/mp4" />
                </video>

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-end inner">
                        <div class="right text-center text-md-left">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Wishing You A<br>Memorable <br>Birthday <br> Ayemere ❤.</h1>
                            <div class="d-sm-inline-flex mt-3">
                                <a href="#about" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mr-md-0 mt-4 mt-sm-0 btn primary-button"><i class="icon-cup"></i>GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- About [video] -->
<section id="about" class="section-1 highlights image-left">
    <div class="container">
        <div class="row">
            <div class="gallery col-12 col-md-6">
                <a data-poster="{{url('assets/videos/video2.gif')}}" href="{{url('assets/videos/video2.gif')}}">
                    <i class="play-video icon-control-play"></i>
                    <div class="mask-radius"></div>
                    <img src="{{url('assets/videos/video2.gif')}}" class="fit-image" alt="Ayemere">
                </a>
            </div>
            <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
                <div class="row intro">
                    <div class="col-12 p-0">
                        <h2 class="super effect-static-text">A Maestro of Creativity</h2>
                        <p>Your talent knows no bounds, and your mastery in every endeavor is a marvel to behold. The finesse with which you conceive and bring forth ideas is a facet of you that I deeply admire.</p>
                    </div>
                </div>
                <div class="row items">
                    <div class="col-12 p-0">
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-heart"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center">
                                <h4>A Heart of Compassion</h4>
                                <p>Your caring nature touches the lives of those around you in ways that words struggle to define.</p>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-fire"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center">
                                <h4>A Blaze of Passion</h4>
                                <p>Your passion for what you do ignites a fire that's contagious. I am realy inspired by your dedication and enthusiasm.</p>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-diamond"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center">
                                <h4>An Intellect to Admire</h4>
                                <p>Your intelligence shines like a guiding star, illuminating paths to solutions that often seem elusive. Your sharp mind is a gift that keeps on giving.</p>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-support"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center">
                                <h4>A Pillar of Support</h4>
                                <p>You are a very support person. Your willingness to stand by others, offering strength and guidance, is truly remarkable.</p>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-diamond"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center">
                                <h4>A Spirit of Resilience</h4>
                                <p>Your resilience in the face of challenges is truly awe-inspiring. You're a testament to the fact that strength isn't just in muscles, but in the mind and heart.</p>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-12 col-md-2 align-self-center">
                                <i class="icon icon-heart"></i>
                            </div>
                            <div class="col-12 col-md-9 align-self-center">
                                <h4>Endlessly Caring</h4>
                                <p>Your capacity for care knows no bounds, creating ripples of comfort and love wherever you go. Your heart is a treasure to cherish.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- <!-- Skills -->
<section id="skills" class="section-2 odd counter skills featured">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2 class="super effect-static-text">Main Skills</h2>
                <p class="text-max-800">We see all types of projects as if they were ours. This brings us closer to our clients' projects bringing much more confidence and commitment.</p>
            </div>
        </div>
        <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="42" class="radial">
                    <span></span>
                </div>
                <h4>Marketing</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="60" class="radial">
                    <span></span>
                </div>
                <h4>Branding</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="84" class="radial">
                    <span></span>
                </div>
                <h4>Web Design</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
                <h4>WordPress</h4>
            </div>
        </div>
    </div>
</section> --}}

<!-- Portfolio Grid -->
<section id="memories" class="section-3 showcase portfolio blog-grid filter-section">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2 class="mb-0 super effect-static-text">Fine Pictures as per a Fine Girl</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn active">
                            <input type="radio" value="all" checked class="btn-filter-item">
                            <span>All</span>
                        </label>
                        <label class="btn">
                            <input type="radio" value="photography" class="btn-filter-item">
                            <span>Fine Girl 🥰😍</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row items filter-items">

                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing",""]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image1.jpg" class="image-over">
                                <img src="assets/img/image1.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image2.jpg" class="image-over">
                                <img src="assets/img/image2.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image3.jpg" class="image-over">
                                <img src="assets/img/image3.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing",""]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image4.jpg" class="image-over">
                                <img src="assets/img/image4.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image5.jpg" class="image-over">
                                <img src="assets/img/image5.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image6.jpg" class="image-over">
                                <img src="assets/img/image6.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing",""]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image7.jpg" class="image-over">
                                <img src="assets/img/image7.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image8.jpg" class="image-over">
                                <img src="assets/img/image8.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image9.jpg" class="image-over">
                                <img src="assets/img/image9.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing",""]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image10.jpg" class="image-over">
                                <img src="assets/img/image10.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image11.jpg" class="image-over">
                                <img src="assets/img/image11.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing",""]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image12.jpg" class="image-over">
                                <img src="assets/img/image12.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image13.jpg" class="image-over">
                                <img src="assets/img/image13.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image14.jpg" class="image-over">
                                <img src="assets/img/image4.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image15.jpg" class="image-over">
                                <img src="assets/img/image15.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image16.jpg" class="image-over">
                                <img src="assets/img/image16.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image17.jpg" class="image-over">
                                <img src="assets/img/image7.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image18.jpg" class="image-over">
                                <img src="assets/img/image18.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image19.jpg" class="image-over">
                                <img src="assets/img/image19.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image20.jpg" class="image-over">
                                <img src="assets/img/image20.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image21.jpg" class="image-over">
                                <img src="assets/img/image21.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image22.jpg" class="image-over">
                                <img src="assets/img/image22.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image23.jpg" class="image-over">
                                <img src="assets/img/image23.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image24.jpg" class="image-over">
                                <img src="assets/img/image24.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image25.jpg" class="image-over">
                                <img src="assets/img/image25.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image26.jpg" class="image-over">
                                <img src="assets/img/image26.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image27.jpg" class="image-over">
                                <img src="assets/img/image27.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image28.jpg" class="image-over">
                                <img src="assets/img/image28.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image29.jpg" class="image-over">
                                <img src="assets/img/image29.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/img/image30.jpg" class="image-over">
                                <img src="assets/img/image30.jpg" alt="Ayemere Jae">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">Happy Birthday Baby Girl.</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>May your dreams continue to unfold, leading you to places you've always wished to explore.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1 filter-sizer"></div>
            </div>

        </div>
    </div>
</section>

<section id="secured" class="section-5 odd hero p-0 featured">
    <div class="swiper-container no-slider animation slider-h-100">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <video class="full-image" data-mask="70" playsinline autoplay muted loop>
                    <source src="assets/videos/lens.mp4" type="video/mp4" />
                </video>
                <!--
                    Suggestion: Add a video to your assets folder and configure it here.

                    <video type="video/mp4" class="full-image" data-mask="70" src="assets/videos/yourvideo.mp4" autoplay muted loop></video>
                -->

                <div class="slide-content row">
                    <div class="col-12 d-flex inner">
                        <div class="left align-self-center text-center text-md-left">
                            <h2 class="super effect-static-text">Little Secret</h2>
                            <p class="description">While this is a public site, I still have a little secret and confession to make.</p>
                            <p class="description">While Some things hurt, we need to learn to forgive and move on.
                                <blockquote>"The only way to move on is to let go of the past." - Steve Maraboli"</blockquote>
                                Life is a learning place and eventually we are going to be alright.
                            </p>
                            <p class="description">
                                <blockquote>Please Input the Code you got from your Email.</blockquote>
                            </p>
                            <form action="{{route('secured')}}" method="POST">
                                @csrf
                                <input type="text" name="secured_code" id="code" placeholder="Enter Code" required class="form-control">

                                <button class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button" type="submit">VIEW SECRET PAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
