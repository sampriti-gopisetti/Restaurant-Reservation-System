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
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="<?php echo url('login.php'); ?>" class="nav-item nav-link active">Login</a>
                        <a href="<?php echo url('index.php'); ?>" class="nav-item nav-link">Home</a>
                        <a href="<?php echo url('about.php'); ?>" class="nav-item nav-link">About</a>
                        <a href="<?php echo url('service.php'); ?>" class="nav-item nav-link">Service</a>
                        <a href="<?php echo url('menu.php'); ?>" class="nav-item nav-link">Menu</a>
                        <a href="<?php echo url('logout.php'); ?>" class="nav-item nav-link">Logout</a>
                    </div>
                    <a href="<?php echo url('menu.php'); ?>" class="btn btn-primary py-2 px-4">Reserve A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Reserve A Table</h1>
					<br><br>
                    <nav aria-label="breadcrumb">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

h4 {
	color: #f1f1f1;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #FF9A35;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
                    </nav>
                </div>
            </div>
        </div>
</style>
</head>
 <!-- Navbar & Hero End -->
		<!--Login Start-->
		<body>
		<div class="container">
			<form method="post">
			<div class="container">
				<label for="number"><h4>Number of people</h4></label>
				<select id="number" type="int" name="number" required>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<br>
				<label id="book" for="booking"><h4><br>Date</h4></label>
				<input id="book" type="date" name="date" required>   
				<br>
				<label id="booking" for="time"><h4><br>Time</h4></label>
				<input id="booking" type="time" name="time" required>
				<br><br>
				<!--
				<button id="button" type="submit">Reserve</button>
				-->
                <a href="<?php echo url('final.php'); ?>" class="btn btn-primary py-2 px-2">Reserve</a>
				<br>
			</div>
			</form>
		</div>
		</body>
		<!--Login End-->
        
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