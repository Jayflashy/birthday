<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>Happy Birthday Ayemere! Big 20</title>

    <meta name="description" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="subject" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.jpg')}}">
    <link rel="apple-touch-icon" href="{{url('assets/images/favicon.jpg')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/images/favicon.jpg')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/images/favicon.jpg')}}">

    <!-- ==============================================
    Vendor Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/slider.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/icons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/gallery.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/cookie-notice.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/snackbar/snackbar.min.css')}}">

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="{{url('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/theme-yellow.css')}}">

    <!-- ==============================================
    Theme Settings
    =============================================== -->
    <style>
        :root {
            --header-bg-color: #121a21;
            --nav-item-color: #f5f5f5;
            --top-nav-item-color: #f5f5f5;
            --hero-bg-color: #000000;

            --section-1-bg-color: #0a131a;
            --section-2-bg-color: #121a21;
            --section-3-bg-color: #0a131a; --section-3-bg-image: url('/assets/images/bg-9.jpg');
            --section-4-bg-color: #0a131a;
            --section-5-bg-color: #000000;
            --section-6-bg-color: #0a131a;

            --card-bg-color: #121a21;

            --footer-bg-color: #121a21;
        }
    </style>


</head>
<body class="home">
    <!-- Header -->
    <header id="header">

        <!-- Navbar -->
        <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
            <div class="container header">

                <!-- Navbar Brand-->
                <a class="navbar-brand" href="{{route('index')}}">
                    Ayemere<i class="version-number">Big 20</i>
                    <!--
                        Custom Logo
                        <img src="assets/images/logo.svg" alt="Leverage">
                    -->
                </a>

                <!-- Nav holder -->
                <div class="ml-auto"></div>

                <!-- Navbar Items -->
                <ul class="navbar-nav items">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smooth-anchor">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link smooth-anchor">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#memories" class="nav-link smooth-anchor">Memories</a>
                    </li>
                    <li class="nav-item">
                        <a href="#secured" class="nav-link smooth-anchor">Little Secret</a>
                    </li>
                </ul>

                <!-- Navbar Toggle -->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-menu m-0"></i>
                        </a>
                    </li>
                </ul>

                <!-- Navbar Action -->
                <ul class="navbar-nav action">
                    <li class="nav-item ml-3">
                        <a href="{{route('secured')}}" class="btn ml-lg-auto primary-button smooth-anchor"><i class="icon-lock"></i>SECURED</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    @yield('content')

    <footer class="odd">
        <section id="copyright" class="p-3 copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                        <p>Enjoy the lovely day Ayemere.  Wishing you long live and prosperity ❤.</p>
                        <!--
                            Suggestion: Replace the text above with a description of your website.
                         -->
                    </div>
                    <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                        <p>© 2023 Ayemere Big Day Celebration.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>


     <!-- Modal [responsive menu] -->
     <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    Menu <i class="icon-close"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                        <div class="contacts p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll [to top] -->
    <div id="scroll-to-top" class="scroll-to-top">
        <a href="#header" class="smooth-anchor">
            <i class="icon-arrow-up"></i>
        </a>
    </div>

    <script src="{{url('assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.easing.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.inview.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/ponyfill.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/slider.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/animation.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/progress-radial.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/bricklayer.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/gallery.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/shuffle.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/cookie-notice.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/particles.min.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>
    <script src="{{url('assets/snackbar/snackbar.min.js')}}"></script>
    @yield('scripts')
    <script type="text/javascript">
        @if(Session::get('success'))
        Snackbar.show({
            text: '{{Session::get('success')}}',
            backgroundColor: '#38c172'
        });
        @endif
        @if(Session::get('error'))
        Snackbar.show({
            text: '{{Session::get('error')}}',
            backgroundColor: '#e3342f'
        });
        @endif
    </script>
</body>
</html>
