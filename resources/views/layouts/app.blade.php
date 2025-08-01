<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content="pavilan" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    <title>Primary Care</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Mediplus CSS -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- Color CSS -->
    <link rel="stylesheet" href="css/color/color1.css" />

    <link rel="stylesheet" id="colors" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->



    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <!-- Contact -->
                        <ul class="top-link">
                            <li><a href=""><i class="fa fa-phone me-2 text-primary"></i>Find a Doctor</a></li>
                            <li><a href=""><i class="fa fa-user-md me-2 text-primary"></i>24/7 Virtual Care</a>
                            </li>
                            <li><a href=""><i class="fa fa-credit-card me-2 text-primary"></i>Pay Your Bill</a>
                            </li>
                            <li><a href=""><i class="fa fa-hospital-o me-2 text-primary"></i>Patient Portal</a>
                            </li>
                        </ul>


                        <!-- End Contact -->
                    </div>
                    <div>
                        <!-- Top Contact -->
                        <ul class="top-link">
                            <li> <a href="tel:+880123456789"><i class="fa fa-phone text-primary"></i> &nbsp;+880 1234 56789</a></li>
                            <li> <a href="mailto:support@yourmail.com"><i class="fa fa-envelope text-primary"></i>
                                    &nbsp;support@yourmail.com</a>
                            </li>
                        </ul>
                        <!-- End Top Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="{{ route('home') }}"><img style="width: 60px" src="img/favicon.png"
                                        alt="Primary Care" /></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="active">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}">Services <i
                                                    class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li>
                                                    <a href="#"><i class="fa fa-caret-right"
                                                            aria-hidden="true"></i>Consuling</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-caret-right"
                                                            aria-hidden="true"></i>Finance</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-caret-right"
                                                            aria-hidden="true"></i>Testimonials</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-caret-right"
                                                            aria-hidden="true"></i>FAQ</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        {{-- <li>
                                            <a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="register.html">Sign Up</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="" class="btn"> Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <main class="">
        @yield('content')
    </main>


    <!-- Footer Area -->
    <footer id="footer" class="footer">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>
                                Lorem ipsum dolor sit am consectetur adipisicing elit do
                                eiusmod tempor incididunt ut labore dolore magna.
                            </p>
                            <!-- Social -->
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>

                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Home</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>About Us</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Services</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our
                                                Cases</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Consuling</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Finance</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>FAQ</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Open Hours</h2>
                            <p>
                                Lorem ipsum dolor sit ame consectetur adipisicing elit do
                                eiusmod tempor incididunt.
                            </p>
                            <ul class="time-sidual">
                                <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                <li class="day">Saturday <span>9.00-18.30</span></li>
                                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Newsletter</h2>
                            <p>
                                subscribe to our newsletter to get allour news in your inbox..
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            </p>
                            <form action="https://mediplus-html.vercel.app/mail/mail.php" method="get"
                                class="newsletter-inner">
                                <input name="email" placeholder="Email Address" class="common-input"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                    required="" type="email" />
                                <button class="button">
                                    <i class="icofont icofont-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>
                                © Copyright 2024 | All Rights Reserved by
                                <a href="#">Mediplus</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from mediplus-html.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Aug 2025 17:35:55 GMT -->

</html>
