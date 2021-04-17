<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="description" content="Find easily a doctor and book online an appointment"> <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo e(asset('front/img/logo1.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('front/img/logo1.png')); ?>" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('front/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/owl.carousel/asstes/owl.carousel.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/aos/aos.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('front/css/style.css')); ?>" rel="stylesheet">

  <!-- BASE CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
	
	<link href="<?php echo e(asset('css/style-front.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/menu.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/vendors.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	

	<?php echo $__env->yieldContent('styles'); ?>

	<style type="text/css">
		*{
			font-size: 1rem !important;
		}
	</style>

	<!-- YOUR CUSTOM CSS -->
	<link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="/" class="logo me-auto"><img src="front/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
      <nav class="nav-menu d-none d-lg-block">
          <ul>
        
          <li class="active"><a href="/">Home</a></li>
          <li class="drop-down"><a href="">About</a>
             <ul>
                 <li><a href="#">Services</a></li>
                 <li><a href="#">Contact</a></li>
            </ul>
          </li>
    		<?php if(!Auth::user()): ?>
    		    <li class=""><a class="" href="/login"><i class="fa fa-power-off"></i> Login</a></li>
    		    <li><a class="" href="/register"><i class="fa fa-user-plus"></i> Register</a></li>
    		<?php else: ?>
    		<li><a class="" href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
    		<li>
    			<a class="" href="<?php echo e(url('/logout')); ?>"
    			onclick="event.preventDefault();
    			document.getElementById('logout-form').submit();">
    			<i class=""></i> Logout</a>

    			<form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
    			<?php echo e(csrf_field()); ?>

    			</form>
    		</li>
    		<?php endif; ?>
          </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  

	<main style="margin-top: 8rem;">
		<div class="container">
			<br>
		    <div class="row">
		        <?php if(Auth::check() &&  Auth::user()->isAdmin): ?>
		          <?php echo $__env->make('admin.includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		        <?php elseif(Auth::check() &&  Auth::user()->isPatient): ?>
		          <?php echo $__env->make('patients.includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		        <?php elseif(Auth::check() && Auth::user()->isDoctor): ?>
		          <?php echo $__env->make('doctors.includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		        <?php elseif(Auth::check() && Auth::user()->isAccountant): ?>
		          <?php echo $__env->make('accountants.includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		        <?php endif; ?>
		      <div class="col-lg-8">
		        <?php echo $__env->yieldContent('content'); ?>
		      </div>
		    </div>
		 </div>
	</main>

	<!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                
                 <a href="index.html"><img class="footer-logo" style="width: 10rem;" src="front/img/logo.png" alt=""></a>
                <p>
                  President Road 245/A,Narayanganj<br>
                  Bangladesh<br><br>
                  <strong>Phone:</strong> +881 4942 3945<br>
                  <strong>Email:</strong> doctorbhai@gmail.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Search for clinics</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Search for doctors</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Consult a doctor</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Read Health Article</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright © 2020. All Rights Reserved Doctor Bhai.
        </div>

      </div>
    </footer><!-- End Footer -->

    

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('front/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/php-email-form/validate.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/venobox/venobox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/vendor/aos/aos.js')); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('front/js/main.js')); ?>"></script>


	<!-- COMMON SCRIPTS -->
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery-2.2.4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/common_scripts.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/functions.js')); ?>"></script>
	<script type="text/javascript">
	  <?php if(Session::has('success')): ?>
		toastr.success("<?php echo e(Session::get('success')); ?>")
	  <?php elseif(Session::has('info')): ?>
		toastr.info("<?php echo e(Session::get('info')); ?>")
	  <?php endif; ?>
	</script>
	<?php echo $__env->yieldContent('scripts'); ?>

  </body>

  </html>
