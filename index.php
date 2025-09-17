<?php
session_start();
include("connection.php");
include("functions.php");
include("config.php");

$user_data=check_login($con);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EasyDine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description"> 

    <!-- Favicon -->
    <link href="<?php echo asset('img/favicon.ico'); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo asset('lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo asset('css/style.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>EasyDine</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
						<a href="<?php echo url('login.php'); ?>" class="nav-item nav-link">Login</a>
                        <a href="<?php echo url('index.php'); ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo url('about.php'); ?>" class="nav-item nav-link">About</a>
                        <a href="<?php echo url('service.php'); ?>" class="nav-item nav-link">Service</a>
                        <a href="<?php echo url('menu.php'); ?>" class="nav-item nav-link">Menu</a>
						<a href="<?php echo url('logout.php'); ?>" class="nav-item nav-link">Logout</a>
                    </div>
                    <a href="<?php echo url('menu.php'); ?>" class="btn btn-primary py-2 px-4">Reserve A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Discover the best<br>Dining Experience</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Find the best restaurants around you to book a table & <br> Experience new flavours</p>
                            <a href="<?php echo url('menu.php'); ?>" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Reserve A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="<?php echo asset('img/hero.png'); ?>" alt="">
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        

        <!-- Footer Start -->

        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">EasyDine.com</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="<?php echo url('index.php'); ?>">Home</a>
                                <!--<a href="">Cookies</a>
                                <a href="">Help</a>
								<a href="">FAQs</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo asset('lib/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo asset('lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo asset('lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo asset('lib/counterup/counterup.min.js'); ?>"></script>
    <script src="<?php echo asset('lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo asset('lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo asset('lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo asset('js/main.js'); ?>"></script>
</body>

</html>
