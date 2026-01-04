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
    .topbar-nav {
      gap: 18px;
      padding: 10px 18px;
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(0, 0, 0, 0.06);
    }

    /* Brand */
    .topbar-brand {
      font-weight: 700;
      text-decoration: none;
      color: var(--heading-color, #0b1220);
      white-space: nowrap;
    }

    /* Center menu */
    .topbar-menu {
      list-style: none;
      display: flex;
      gap: 18px;
      margin-left: auto;
      margin-right: auto;
      /* ✅ this centers the menu */
      align-items: center;
    }

    .topbar-menu .nav-link {
      text-decoration: none;
      font-weight: 600;
      padding: 8px 10px;
      border-radius: 10px;
      color: var(--default-color, #111);
      transition: 0.2s;
    }

    .topbar-menu .nav-link:hover {
      background: rgba(0, 0, 0, 0.05);
      color: var(--accent-color, #0d6efd);
    }

    /* Right side */
    .topbar-right {
      gap: 12px;
      white-space: nowrap;
    }

    .topbar-right .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 34px;
      height: 34px;
      border-radius: 10px;
      background: rgba(0, 0, 0, 0.04);
      transition: 0.2s;
    }

    .topbar-right .social-links a:hover {
      background: rgba(0, 0, 0, 0.08);
    }

    .topbar-avatar {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid rgba(0, 0, 0, 0.08);
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

    .whatsapp-icon {
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
  // require_once 'includes/navbar.php';
  ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">CartPro</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <!-- ✅ LEFT SIDE (images unchanged) -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="portfolio-details-media">
            <div class="main-image">
              <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 1000,
                    "autoplay": { "delay": 6000 },
                    "effect": "creative",
                    "creativeEffect": {
                      "prev": { "shadow": true, "translate": [0, 0, -400] },
                      "next": { "translate": ["100%", 0, 0] }
                    },
                    "slidesPerView": 1,
                    "navigation": {
                      "nextEl": ".swiper-button-next",
                      "prevEl": ".swiper-button-prev"
                    }
                  }
                </script>

                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="https://snipboard.io/XzFajU.jpg" alt="Portfolio Image" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="https://snipboard.io/eFfwhb.jpg" alt="Portfolio Image" class="img-fluid">
                  </div>
                  <div class="swiper-slide">
                    <img src="https://snipboard.io/6jhrDw.jpg" alt="Portfolio Image" class="img-fluid">
                  </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>

            <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
              <div class="row g-2 mt-3">
                <div class="col-3">
                  <img src="https://snipboard.io/H1XxUD.jpg" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                  <img src="https://snipboard.io/vHRIg0.jpg" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                  <img src="https://snipboard.io/Cevwdg.jpg" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                  <img src="https://snipboard.io/WFzJI0.jpg" alt="Gallery Image" class="img-fluid glightbox">
                </div>
              </div>
            </div>

            <!-- ✅ Tech stack badges (updated for CartPro) -->
            <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
              <span>Laravel</span>
              <span>PHP</span>
              <span>MySQL</span>
              <span>Bootstrap</span>
              <span>AJAX</span>
            </div>
          </div>
        </div>

        <!-- ✅ RIGHT SIDE (content updated) -->
        <div class="col-lg-6" data-aos="fade-left">
          <div class="portfolio-details-content">
            <div class="project-meta">
              <div class="badge-wrapper">
                <span class="project-badge">E-commerce CMS</span>
              </div>

              <div class="date-client">
                <div class="meta-item">
                  <i class="bi bi-code-slash"></i>
                  <span>Laravel-based Web App</span>
                </div>
                <div class="meta-item">
                  <i class="bi bi-bag-check"></i>
                  <span>CartPro</span>
                </div>
              </div>
            </div>

            <!-- Title (matches your "centered" style idea, but keeps template format) -->
            <h2 class="project-title text-center">CartPro</h2>

            <!-- Links -->
            <div class="project-website">
              <i class="bi bi-link-45deg"></i>
              <a href="https://cartpro.irfandev.xyz/" target="_blank" rel="noopener">Visit Demo</a>
              <span class="mx-2">•</span>
              <a href="https://codecanyon.net/item/cartpro-ecommerce-multipurpose-laravel-ecommerce-cms/36768394" target="_blank" rel="noopener">View on CodeCanyon</a>
            </div>

            <!-- Quick intro -->
            <div class="project-overview">
              <p class="lead">
                CartPro is a modern, feature-rich e-commerce CMS built with users in mind. It delivers a smooth frontend experience
                and a powerful admin panel for managing products, orders, and store settings—focused on performance, scalability,
                and user-friendly design.
              </p>

              <!-- Accordion (overview + stack + challenges + future plans + full features list) -->
              <div class="accordion project-accordion" id="portfolio-details-projectAccordion">

                <!-- Overview -->
                <div class="accordion-item" data-aos="fade-up">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#portfolio-details-collapse-1" aria-expanded="true"
                      aria-controls="portfolio-details-collapse-1">
                      <i class="bi bi-clipboard-data me-2"></i> Project overview
                    </button>
                  </h2>

                  <div id="portfolio-details-collapse-1" class="accordion-collapse collapse show"
                    data-bs-parent="#portfolio-details-projectAccordion">
                    <div class="accordion-body">
                      <p>
                        CartPro is designed for many types of online stores (electronics, fashion, books, cosmetics, accessories, and more).
                        It includes fast search, filters, sorting, AJAX cart, smooth sliders, and flexible design settings—helping create a fast,
                        secure and user-friendly shopping experience.
                      </p>
                    </div>
                  </div>
                </div>

                <!-- Tech stack -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#portfolio-details-collapse-2" aria-expanded="false"
                      aria-controls="portfolio-details-collapse-2">
                      <i class="bi bi-stack me-2"></i> Main technology stack
                    </button>
                  </h2>

                  <div id="portfolio-details-collapse-2" class="accordion-collapse collapse"
                    data-bs-parent="#portfolio-details-projectAccordion">
                    <div class="accordion-body">
                      <ul class="mb-0">
                        <li><strong>Backend:</strong> Laravel (PHP)</li>
                        <li><strong>Database:</strong> MySQL</li>
                        <li><strong>Frontend:</strong> Bootstrap-based UI</li>
                        <li><strong>Interactivity:</strong> AJAX features (cart, search/filter)</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Challenge -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#portfolio-details-collapse-3" aria-expanded="false"
                      aria-controls="portfolio-details-collapse-3">
                      <i class="bi bi-exclamation-diamond me-2"></i> Challenges faced
                    </button>
                  </h2>

                  <div id="portfolio-details-collapse-3" class="accordion-collapse collapse"
                    data-bs-parent="#portfolio-details-projectAccordion">
                    <div class="accordion-body">
                      <ul class="mb-0">
                        <li>Ensuring fast performance with a smooth user experience (search, filter, cart actions).</li>
                        <li>Managing multiple payment gateways and order workflows reliably.</li>
                        <li>Supporting multi-language and SEO-friendly page structure.</li>
                        <li>Keeping the admin panel powerful but easy to use for store owners.</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Future plans -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#portfolio-details-collapse-4" aria-expanded="false"
                      aria-controls="portfolio-details-collapse-4">
                      <i class="bi bi-lightbulb me-2"></i> Future improvements & plans
                    </button>
                  </h2>

                  <div id="portfolio-details-collapse-4" class="accordion-collapse collapse"
                    data-bs-parent="#portfolio-details-projectAccordion">
                    <div class="accordion-body">
                      <ul class="mb-0">
                        <li>More advanced analytics dashboard and sales insights.</li>
                        <li>Performance enhancements for large catalogs and high traffic.</li>
                        <li>More theme/layout presets and UI customization options.</li>
                        <li>Expanded automation features (marketing, reporting, alerts).</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- Full feature list -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#portfolio-details-collapse-5" aria-expanded="false"
                      aria-controls="portfolio-details-collapse-5">
                      <i class="bi bi-list-check me-2"></i> Features & functionality (full list)
                    </button>
                  </h2>

                  <div id="portfolio-details-collapse-5" class="accordion-collapse collapse"
                    data-bs-parent="#portfolio-details-projectAccordion">
                    <div class="accordion-body">

                      <ol class="mb-0">
                        <li>
                          Google Analytics
                          <ul>
                            <li>Top Browser</li>
                            <li>Top Most Visited Pages</li>
                            <li>Top Referrers</li>
                            <li>Top User Types</li>
                            <li>Page View Statistics</li>
                          </ul>
                        </li>

                        <li>
                          Payment Gateway
                          <ul>
                            <li>PayPal</li>
                            <li>Stripe</li>
                            <li>SSL Commerz</li>
                            <li>Cash On Delivery</li>
                            <li>Razorpay</li>
                            <li>Paystack</li>
                          </ul>
                        </li>

                        <li>Menu bar background and text color change option</li>
                        <li>Contact Us</li>
                        <li>About Us</li>
                        <li>FAQ</li>
                        <li>Currency Conversion</li>
                        <li>Coupon</li>
                        <li>Order Tracking</li>
                        <li>Languages</li>
                        <li>Mail send with invoice PDF after ordering</li>
                        <li>Home Page, Pages SEO setup</li>
                        <li>System Backup Feature</li>
                        <li>Refresh button to clear all cache</li>
                        <li>Auto update feature</li>
                        <li>Mail Theme Color</li>
                        <li>System Notification</li>
                        <li>Multi Languages Support</li>
                        <li>Customer Dashboard</li>
                        <li>Newsletter</li>
                        <li>Flash Sale</li>
                        <li>Product Search and Filter</li>
                        <li>Responsive design and theme color</li>
                        <li>Mail system</li>
                        <li>Allow Cookies</li>
                        <li>Best Deals</li>
                        <li>Trending</li>
                        <li>Dynamic Menu</li>
                        <li>Category Wise Products</li>
                        <li>Brand Wise Products</li>
                        <li>Dynamic Pages</li>
                        <li>Slider</li>
                        <li>User Review</li>
                        <li>Reports</li>
                        <li>Users & customer details</li>
                        <li>Role and Permission</li>
                        <li>Tax</li>
                        <li>Empty database</li>
                        <li>Social Logins (Facebook, Google and GitHub)</li>
                        <li>Shipping Method (Free Shipping, Local pickup, Flat Rate)</li>
                      </ol>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Key features (short highlights from your list) -->
            <div class="project-features" data-aos="fade-up" data-aos-delay="300">
              <h3><i class="bi bi-stars"></i> Key features</h3>
              <div class="row g-3">
                <div class="col-md-6">
                  <ul class="feature-list">
                    <li><i class="bi bi-check2-circle"></i> AJAX Cart + Fast Search</li>
                    <li><i class="bi bi-check2-circle"></i> Filter & Sorting Options</li>
                    <li><i class="bi bi-check2-circle"></i> Multi-language Support</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="feature-list">
                    <li><i class="bi bi-check2-circle"></i> Multiple Payment Gateways</li>
                    <li><i class="bi bi-check2-circle"></i> SEO Setup for Pages</li>
                    <li><i class="bi bi-check2-circle"></i> Role & Permission</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- CTA -->
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
              <a href="https://cartpro.irfandev.xyz/" target="_blank" rel="noopener" class="btn-view-project">View Live Project</a>
              <a href="https://codecanyon.net/item/cartpro-ecommerce-multipurpose-laravel-ecommerce-cms/36768394" target="_blank" rel="noopener" class="btn-next-project">
                View on CodeCanyon <i class="bi bi-arrow-right"></i>
              </a>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section><!-- /Portfolio Details Section -->

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