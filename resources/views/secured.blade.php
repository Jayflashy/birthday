@extends('layouts')

@section('content')
 <!-- Hero -->
 <section id="home" class="hero p-0 odd featured">
    <div class="swiper-container no-slider animation slider-h-100">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                <img src="assets/img/image5.jpg" class="full-image" data-mask="50">
                <div class="slide-content row">
                    <div class="col-12 d-flex inner">
                        <div class="center align-self-center text-center">
                            <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Happy Birthday <br>&Jessica</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
 <!-- Skills -->
 <section id="skills" class="section-1 odd counter skills featured">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2 class="super effect-static-text">Cheers to Big 20 🎉🎈</h2>
                <p class="text-max-800">As You start a new year today, I wish you all the good thing Life has to offer. <br> May all your dreams turn into reality and your days be filled with happiness.</p>
            </div>
        </div>
        <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="90" class="radial">
                    <span></span>
                </div>
                <h4>Your Beauty</h4>
            </div>
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="90" class="radial">
                    <span></span>
                </div>
                <h4>How Caring you are</h4>
            </div>
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="99" class="radial">
                    <span></span>
                </div>
                <h4>How Smart you are</h4>
            </div>
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
                <h4>How Supportive</h4>
            </div>
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="91" class="radial">
                    <span></span>
                </div>
                <h4>How Much I fucked Up</h4>
            </div>
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="99" class="radial">
                    <span></span>
                </div>
                <h4>How Badly I want you</h4>
            </div>
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
                <h4>How Much I missed You</h4>
            </div>
            <div class="col-6 col-md-4 col-lg-3 item">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
                <h4>How Much I still Love You</h4>
            </div>
        </div>
        <div class="row text-center intro">
            <div class="col-12 mt-3">
                <p class="text-max-800">Wishing You a Bithday Full of Fun and Memories.</p>
            </div>
        </div>
    </div>
</section>
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
                    </div>
                </div>
            </div>

            <div class="row items filter-items">

                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/images/jae1.jpg" class="image-over">
                                <img src="assets/images/jae1.jpg" alt="Jae & Jay">
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
                            <a href="#" class="image-over">
                                <video controls width="100%" height="auto">
                                    <source src="assets/videos/jae1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/images/jae13.jpg" class="image-over">
                                <img src="assets/images/jae13.jpg" alt="Jae & Jay">
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
                            <a href="assets/images/jae2.jpg" class="image-over">
                                <img src="assets/images/jae2.jpg" alt="Jae & Jay">
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
                            <a href="#" class="image-over">
                                <video controls width="100%" height="auto">
                                    <source src="assets/videos/jae2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/images/jae3.jpg" class="image-over">
                                <img src="assets/images/jae3.jpg" alt="Jae & Jay">
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
                            <a href="assets/images/jae4.jpg" class="image-over">
                                <img src="assets/images/jae4.jpg" alt="Jae & Jay">
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
                            <a href="assets/images/jae5.jpg" class="image-over">
                                <img src="assets/images/jae5.jpg" alt="Jae & Jay">
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
                            <a href="assets/images/jae6.jpg" class="image-over">
                                <img src="assets/images/jae6.jpg" alt="Jae & Jay">
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
                            <a href="#" class="image-over">
                                <video controls width="100%" height="auto">
                                    <source src="assets/videos/jae3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/images/jae7.jpg" class="image-over">
                                <img src="assets/images/jae7.jpg" alt="Jae & Jay">
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
                            <a href="assets/images/jae8.jpg" class="image-over">
                                <img src="assets/images/jae8.jpg" alt="Jae & Jay">
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
                            <a href="#" class="image-over">
                                <video controls width="100%" height="auto">
                                    <source src="assets/videos/jae4.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/images/jae9.jpg" class="image-over">
                                <img src="assets/images/jae9.jpg" alt="Jae & Jay">
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
                            <a href="assets/images/jae10.jpg" class="image-over">
                                <img src="assets/images/jae10.jpg" alt="Jae & Jay">
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
                            <a href="#" class="image-over">
                                <video controls width="100%" height="auto">
                                    <source src="assets/videos/jae5.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/images/jae11.jpg" class="image-over">
                                <img src="assets/images/jae11.jpg" alt="Jae & Jay">
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
                            <a href="#" class="image-over">
                                <video controls width="100%" height="auto">
                                    <source src="assets/videos/jae6.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","digital-marketing","photography"]'>
                    <div class="row card p-0 text-center">
                        <div class="gallery">
                            <a href="assets/images/jae12.jpg" class="image-over">
                                <img src="assets/images/jae12.jpg" alt="Jae & Jay">
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
                            <a href="#" class="image-over">
                                <video controls width="100%" height="auto">
                                    <source src="assets/videos/jae2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-1 filter-sizer"></div>
            </div>

        </div>
    </div>
</section>

 <!-- Secret-->
 <section id="secured" class="section-4 odd plans featured custom">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2 class="super effect-static-text">My Little Confession</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <div class="col-12  align-self-center text-center item">
                <div class="card">
                    <i class="icon icon-heart"></i>
                    <h4>Dear Jessica</h4>
                    <div class="text-left">
                        <blockquote>
                            <p>On this special day, as the world celebrates another year of your presence, I find myself marveling at the incredible person you are.
                                With each passing day, you manage to fill my life with immeasurable joy, laughter, and a love that words can hardly capture.
                            </p>
                            <p>From the moment our paths intertwined, I knew my life had changed for the better. Your warmth, kindness, and genuine nature have illuminated my world in ways I could have never imagined.
                                <br>
                                Your ability to see beauty in the simplest of things and to spread that beauty to everyone around you is a gift I treasure. The way you light up a room with your smile, the compassion you show to others, and the unwavering support you offer, are all testaments to the remarkable person you are.
                                <br>
                                As I reflect on the memories we've created together, I'm reminded of the laughter we've shared, the challenges we've conquered, and the dreams we continue to build.
                            </p>
                            <p>On this day, I wish for your heart's desires to come to fruition. May your path be strewn with success, love, and endless happiness.</p>
                            <p>May this day be as beautiful as your smile.</p>
                        </blockquote>
                    </div>

                </div>
                <div class="card">
                    <i class="icon icon-heart"></i>
                    <h4>A Heartfelt Apology and a New Beginning</h4>
                    <div class="text-left">
                        <blockquote>
                            <p>
                                Today, as the world joins in celebrating your birthday, I find myself reflecting on the journey we've shared. While this day is meant to be filled with joy and laughter, my heart feels heavy with the weight of my mistakes, especially on a day so special for you.
                                <br>
                                I want to express my deepest and most sincere apologies for the pain I've caused you. Every moment that we've spent apart has made me realize the gravity of my actions, and the immense love I hold for you has only grown stronger in your absence.
                            </p>
                            <p>I have been thinking a lot about what happened, and I realize that I took you for granted. I didn't appreciate how much you loved me and how much you did for me. I was selfish and immature, and I let my insecurities get the best of me.</p>

                            <p>
                                On this significant day, I want you to know that my heart aches for a chance to make things right. I'm ready to put in the effort, the time, and the dedication it takes to rebuild the trust that was broken.
                                I'm committed to learning from my mistakes, and I'm determined to be the person you deserve.
                            </p>

                            <p>Please give me a chance to show you how much I love you and how sorry I am. <br>

                            </p>
                            <span class="float-right">
                                Love always, <br>
                                Joshua
                            </span>
                        </blockquote>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

@endsection
