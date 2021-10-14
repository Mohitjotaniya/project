<?php

$mainurl="http://localhost/EmployeeManagement/";
$baseurl="http://localhost/EmployeeManagement/assets/";
?>
<?php $this->cookie()?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eterna Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $baseurl;?>img/favicon.png" rel="icon">
  <link href="<?php echo $baseurl;?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $baseurl;?>vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v4.1.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 
 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="/">Eterna</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          
          <?php
            if (!isset($_SESSION["id"])) {
        ?>
          <li><a class="active" href="./">Home</a></li>
          <li><a  href="<?php echo $mainurl;?>registration">Registration</a></li>
         
          <li><a  href="<?php echo $mainurl;?>login">Login</a></li>
          <!-- <li><a  href="<?php echo $mainurl;?>salry">salry</a></li> -->
          <!-- <li><a href="contact.php">Contact</a></li> -->
        <?php }else
         {
        ?>
        <?php 
        $this->logout()  
                    
                        
                        
                        ?>
                         <li><a href="<?php echo  $mainurl?>addsalry">Add salary</a></li>
        <li><a href="<?php echo  $mainurl?>?logout">Logout</a></li>
       
       <?php  } 
       ?>
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo $baseurl;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $baseurl;?>vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo $baseurl;?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo $baseurl;?>vendor/php-email-form/validate.js"></script>
<script src="<?php echo $baseurl;?>vendor/purecounter/purecounter.js"></script>
<script src="<?php echo $baseurl;?>vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $baseurl;?>vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo $baseurl;?>js/main.js"></script>

</body>

</html>