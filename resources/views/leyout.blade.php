<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />


    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/navbars/navbar-1/assets/css/navbar-1.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>

<body>
    <!-- header section start -->
    <nav class="navbar navbar-expand-md bg-light bsb-navbar bsb-navbar-hover bsb-navbar-caret">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.svg" alt="BootstrapBrain Logo" width="135" height="44">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">OurServices</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">
                                <li><a class="dropdown-item" href="medicalefq">Medicaal equipment</a></li>
                                <li><a class="dropdown-item" href="lab">LabTest</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                {{-- <li><a class="dropdown-item" href="#!"></a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item" href="about">About Compeny</a></li>
                                <li><a class="dropdown-item" href="#!">SEO</a></li>
                                {{-- <li><a class="dropdown-item" href="#!"></a></li>
                                <li><a class="dropdown-item" href="#!"></a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- header section end -->
    {{-- <!-- main section start --> --}}
    @yield('index-page');
    @yield('about-section')
    @yield('contuct-section')
    @yield('medcalenq')
    @yield('login')
    @yield('edit')
    @yield('lab')
    {{-- <!-- main section start --> --}}


    <!-- bookjeaureny section start -->
<section class="book-journey">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="book-journey-box">
                <p>ORGMACARE PVT LTD</p>
                <h1>Book Your Care Journey Today!</h1>
                <p>Ready to experience the exceptional care and support Orgmacare Pvt Ltd has to offer? Take the first step
                    towards your well-being by booking our nursing care services today.</p>
                    <a href="">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bookjeaureny section end -->

    <!-- footer section start -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">

            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4 imagesh">
                            <!-- <i class="fas fa-gem me-3"></i>Company name -->
                            <img src="images/Logo-orgmacare-pvt.-ltd.png" alt="">
                        </h6>
                        <p>
                            Orgmacare was born out of a desire to bring a new level of excellence to nursing care.
                            Founded by individuals with a shared commitment to making a difference in the healthcare
                            industry.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Facilities
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products & Services
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact Info</h6>
                        <p><i class="fas fa-home me-3"></i> marihan mirzapir utterPradesh</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            vinyyadav34139@.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +91 7388762825</p>
                        <p><i class="fas fa-print me-3"></i> +91 7525967890</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Vinay Kumar</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- footer section end -->


    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/crosul.js"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{asset('jsjquery.js') }}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/crosul.js') }}"></script>
<script type="text/javascript" src="{{asset('js/frome.js') }}"></script>
<script type="text/javascript" src="{{asset('js/accroden.js') }}"></script>

</body>

</html>