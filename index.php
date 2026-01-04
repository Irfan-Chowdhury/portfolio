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

  /* Navbar */
/* Desktop top bar */
.topbar-nav{
  gap: 18px;
  padding: 10px 18px;
  border-radius: 16px;
  background: rgba(255,255,255,0.85);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(0,0,0,0.06);
}

/* Brand */
.topbar-brand{
  font-weight: 700;
  text-decoration: none;
  color: var(--heading-color, #0b1220);
  white-space: nowrap;
}

/* Center menu */
.topbar-menu{
  list-style: none;
  display: flex;
  gap: 18px;
  margin-left: auto;
  margin-right: auto;   /* ✅ this centers the menu */
  align-items: center;
}

.topbar-menu .nav-link{
  text-decoration: none;
  font-weight: 600;
  padding: 8px 10px;
  border-radius: 10px;
  color: var(--default-color, #111);
  transition: 0.2s;
}

.topbar-menu .nav-link:hover{
  background: rgba(0,0,0,0.05);
  color: var(--accent-color, #0d6efd);
}

/* Right side */
.topbar-right{
  gap: 12px;
  white-space: nowrap;
}

.topbar-right .social-links a{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  border-radius: 10px;
  background: rgba(0,0,0,0.04);
  transition: 0.2s;
}

.topbar-right .social-links a:hover{
  background: rgba(0,0,0,0.08);
}

.topbar-avatar{
  width: 36px;
  height: 36px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid rgba(0,0,0,0.08);
}
  /* Navbar */


  /* WhatsApp floating button styles */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 10px;
    right: 100px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50%;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.whatsapp-float:hover {
    background-color: #128C7E;
    transform: scale(1.1);
    text-decoration: none;
    color: white;
}

.whatsapp-float .whatsapp-icon {
    margin-left: 1px;
    margin-bottom: 1px;
}

.whatsapp-icon{
  font-size: 22px;
  color: #fff;
  line-height: 1;
}

  /* Skills Grid */

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

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/devicon/2.17.0/devicon.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->


</head>

<body class="index-page">

  <?php  
    require_once 'includes/navbar.php';
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


    <!-- project Section -->
    <?php  
        require_once 'includes/project.php';
    ?>
    <!-- /project Section -->
     

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

    <!-- footer Section -->
    <?php  
        require_once 'includes/footer.php';
    ?>
    <!-- /footer Section -->


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