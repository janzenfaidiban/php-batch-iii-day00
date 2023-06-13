<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Butterfly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('views/includes/header.php'); ?>

  <!-- ======= Hero Section ======= -->
  <?php 
      if(isset($_GET['page']) && $_GET['page'] == 'beranda') {
        include('views/includes/hero-2.php'); 
      }
    ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php 
      if(isset($_GET['page']) && $_GET['page'] == 'tentang-sekolah') {
        include('views/pages/tentang-sekolah.php'); 
      }
    ?>
    
    
    <!-- ======= Counts Section ======= -->
    <?php // include('views/pages/counts.php'); ?>   
    
    <!-- ======= Clients Section ======= -->
    <?php // include('views/pages/clients.php'); ?>   
    
    <!-- ======= Services Section ======= -->
    <?php // include('views/pages/services.php'); ?>   
    
    <!-- ======= Portfolio Section ======= -->
    <?php // include('views/pages/portfolio.php'); ?>   
    
    <!-- ======= Testimonials Section ======= -->
    <?php // include('views/pages/tertimonials.php'); ?>   
    
    <!-- ======= Team Section ======= -->
    <?php // include('views/pages/team.php'); ?>   
    
    <!-- ======= Gallery Section ======= -->
    <?php // include('views/pages/gallery.php'); ?>   
    
    <!-- ======= Contact Section ======= -->
    <?php // include('views/pages/contact.php'); ?>   
    
  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
  <?php include('views/includes/footer.php'); ?>   
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>