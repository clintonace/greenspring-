<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenSpring</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/greenspringlogo.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/greenspringlogo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/greenspringlogo.png" />
    <link rel="manifest" href="/assets/guest/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="An online agric produce sale website" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/guest/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/agrion-icons/style.css">
    <link rel="stylesheet" href="/assets/guest/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/guest/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/guest/assets/css/agrion.css" />
    <link rel="stylesheet" href="/assets/guest/assets/css/agrion-responsive.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body class="custom-cursor">

    @include('sweetalert::alert')

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header-three">
            <div class="main-header-three__top">
                <div class="container">
                    <div class="main-header-three__top-inner">
                        <ul class="main-header-three__contact list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p><a href="tel:09160334710">091 6033 4710</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-user"></span>
                                </div>
                                <div class="text">
                                    <p><a href="{{route('login')}}">Login / </a><a
                                            href="{{route('register')}}">Register</a></p>
                                </div>
                            </li>
                        </ul>
                        <div class="main-header-three__logo">
                            <a href="index.html"><img src="/assets/greenspringlogo.png" alt=""></a>
                        </div>
                        {{-- <div class="main-menu-three__search-cart-btn-box">
                            <div class="main-menu-three__search-box">
                                <a href="#" class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                            </div>
                            <div class="main-menu-three__cart-box">
                                <a href="cart.html" class="main-menu-three__cart icon-shopping-cart"></a>
                            </div>
                            <div class="main-menu-three__btn-box">
                                <a href="contact.html" class="thm-btn main-menu-three__btn">Get Free Quote
                                    <i class="icon-right-arrow"></i> </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="container">
                        <div class="main-menu-three__wrapper-inner">
                            <div class="main-menu-three__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current megamenu">
                                        <a href="{{route('/')}}">Home </a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.aboutus.view')}}">About</a>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <a href="#">Services</a>
                                    </li> --}}

                                    <li class="dropdown">
                                        <a href="{{route('user.blog.view')}}">Blog</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('user.all.products.view')}}">Shop</a>

                                    </li>
                                    <li>
                                        <a href="{{route('user.contact.view')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->




        {{-- The main content goes here --}}

        @yield('content')


        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer-shape-1 float-bob-x"
                            style="background-image: url(assets/images/shapes/site-footer-shape-1.png);"></div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__logo">
                                        <a href="index.html"><img src="/assets/greenspringlogo.png" alt=""></a>
                                    </div>
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">Welcome to our Natural farm produce market
                                            and blog.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__Explore">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Explore</h3>
                                    </div>
                                    <ul class="footer-widget__Explore-list list-unstyled">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="farmers.html">Shop</a></li>
                                        <li><a href="project-01.html">Blogs</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__news">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Blogs</h3>
                                    </div>
                                    <ul class="footer-widget__news-list list-unstyled">

                                        @foreach ($blogs as $b)

                                        @php
                                        $image = explode('|', $b->image);
                                        @endphp

                                        <li>
                                            <div class="footer-widget__news-img">
                                                <img style="height: 50px; width: 50px;"
                                                    src="/assets/BlogImages/{{$image[0]}}" alt="">
                                            </div>
                                            <div class="footer-widget__news-content">
                                                <p class="footer-widget__news-date">{{$b->created_at->diffForHumans()}}
                                                </p>
                                                <h5 class="footer-widget__news-sub-title"><a href="#">{{$b->title}}</a>
                                                </h5>
                                            </div>
                                        </li>

                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__Contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contact</h3>
                                    </div>
                                    <ul class="footer-widget__Contact-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-phone-square-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:09160334710">09160334710</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="#">greenspring@gmail.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="text">
                                                <p>#58 Circular Road Federal Housing Estate Off Peter Odili Road</p>
                                            </div>
                                        </li>
                                    </ul>
                                    {{-- <form class="footer-widget__Contact-form">
                                        <div class="footer-widget__Contact-input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                            <button type="submit" class="footer-widget__Contact-btn"><i
                                                    class="icon-right-arrow"></i></button>
                                        </div>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2024 by <a href="#">BrownCode</a></p>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="site-footer__bottom-scroll">
                                    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i
                                            class="icon-up-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{route('/')}}" aria-label="logo image"><img src="/assets/greenspringlogo.png" width="122"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="#">greensprings@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:09160334710">09160334710</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <script src="/assets/guest/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/guest/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/guest/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/guest/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/guest/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/guest/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/guest/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/guest/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/guest/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/guest/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/assets/guest/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/assets/guest/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/assets/guest/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/guest/assets/vendors/wow/wow.js"></script>
    <script src="/assets/guest/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/guest/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/guest/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/guest/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/assets/guest/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets/guest/assets/vendors/vegas/vegas.min.js"></script>
    <script src="/assets/guest/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/guest/assets/vendors/timepicker/timePicker.js"></script>
    <script src="/assets/guest/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="/assets/guest/assets/vendors/circleType/jquery.lettering.min.js"></script>

    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <script>
        // Function to handle form submission and update progress bar
            function submitForm(step) {
                // You can add form validation logic here before proceeding to the next step
                // For simplicity, I'm assuming all fields are required

                // Hide the current form
                document.getElementById('form' + step).style.display = 'none';

                // Increment the progress bar value
                const progressBar = document.getElementById('progressBar');
                progressBar.value = step;

                // Show the next form (if it exists)
                const nextStep = step + 1;
                const nextForm = document.getElementById('form' + nextStep);
                if (nextForm) {
                    nextForm.style.display = 'block';
                } else {
                    // All forms are completed, you can perform final submission here
                    alert('All forms submitted successfully!');
                }
            }

            var map = L.map('map').setView([51.505, -0.09], 13);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            L.Control.geocoder().addTo(map);

            navigator.geolocation.watchPosition(success, error);

            let marker , circle;

            function success (pos){

                const lng = pos.coords.longitude;
                const lat = pos.coords.latitude;
                const accuracy = pos.coords.accuracy;
                if (marker) {

                    map.removeLayer(marker);
                    map.removeLayer(circle);
                }

               marker =  L.marker([lat, lng]).addTo(map);
               circle =  L.circle([lat, lng], {raduis: accuracy}).addTo(map);

                map.fitBounds(circle.getBounds());
            }

            function error(err){

                if(err.code === 1){

                    alert('allow access');
                }
                else{
                    alert('cannot get');
                }
            }

    </script>

    <!-- template js -->
    <script src="/assets/guest/assets/js/agrion.js"></script>
</body>

</html>
