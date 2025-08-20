<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio | Irfan Chowdhury</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
 <link href="assets/img/irfan-profile-img.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Style
  * Template URL: https://bootstrapmade.com/style-bootstrap-portfolio-template/
  * Updated: Jul 02 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
  .skill-icon {
    width: 50px;
    height: 50px;
    object-fit: contain;
    display: block;
    margin: 0 auto 8px;
  }
  .skill-name {
    display: block;
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    color: #333;
  }
  .skill-item {
    text-align: center;
  }
</style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/devicon/2.17.0/devicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body class="index-page">

  <?php  
    require_once 'includes/header.php';
  ?>

  <main class="main">

    <!-- Hero Section -->
    <?php  
        require_once 'includes/hero.php';
    ?>
    <!-- /Hero Section -->

    
    <!-- About Section -->
    <?php  
        require_once 'includes/about.php';
    ?>
    <!-- /About Section -->



    <!-- Skills Section -->
    <?php  
        require_once 'includes/skill.php';
    ?>
    <!-- /Skills Section -->


    <!-- Resume Section -->
    <?php  
        require_once 'includes/resume.php';
    ?>
    <!-- /Resume Section -->


    <!-- Services Section -->
    <?php  
        require_once 'includes/service.php';
    ?>
    <!-- /Services Section -->


    <!-- Portfolio Section -->
    <?php  
        require_once 'includes/portfolio.php';
    ?>
    <!-- /Portfolio Section -->
     

    <!-- Testimonials Section -->
    <?php  
        require_once 'includes/testimonial.php';
    ?>
    <!-- /Testimonials Section -->



    <!-- Contact Section -->
    <?php  
        require_once 'includes/contact.php';
    ?>
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="copyright text-center ">
        <!-- <p>© <span>Copyright</span> <strong class="px-1 sitename">Style</strong> <span>All Rights Reserved</span></p> -->
      </div>
      <div class="social-links d-flex justify-content-center">
          <a href="https://x.com/irfan_chy95" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/irfanchowdhuryfahim" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.linkedin.com/in/irfan-chowdhury/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="https://github.com/Irfan-Chowdhury" target="_blank" class="github"><i class="bi bi-github"></i></a>
      </div>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>