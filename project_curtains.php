<?php
$pageTitle = "Curtains | Portfolio";

/**
 * Images collected from curtains.irfandev.xyz
 * (You can later download + host them in your own assets folder if you want)
 */
$img_slider_1 = "https://curtains.irfandev.xyz/storage/uploads/images/slider/NBsi9Emai6.jpg";
$img_slider_2 = "https://curtains.irfandev.xyz/storage/uploads/images/slider/ocUBFoCigN.jpg";
$img_slider_3 = "https://curtains.irfandev.xyz/storage/uploads/images/slider/KkjqicaPjR.jpg";

$img_thumb_1  = "https://curtains.irfandev.xyz/storage/uploads/images/banner_images/pYYTfsCDro.jpg";
$img_thumb_2  = "https://curtains.irfandev.xyz/storage/uploads/images/booking_measurement/bjB3Z1AeHN.png";
$img_thumb_3  = "https://curtains.irfandev.xyz/storage/uploads/images/slider/K0ogFOIoU1.jpg";
$img_thumb_4  = "https://curtains.irfandev.xyz/storage/uploads/images/slider/KkjqicaPjR.jpg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "includes/head.php"; ?>
</head>

<body class="index-page">

  <?php //require_once "includes/navbar.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Curtains</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- LEFT SIDE (images) -->
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
                      <img src="<?php echo $img_slider_1; ?>" alt="Curtains project screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="Curtains project screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="Curtains project screenshot 3" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_1; ?>" alt="Curtains thumbnail 1" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_2; ?>" alt="Curtains thumbnail 2" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_3; ?>" alt="Curtains thumbnail 3" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_4; ?>" alt="Curtains thumbnail 4" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- Tech stack badges -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>PHP (Laravel)</span>
                <span>MySQL</span>
                <span>Bootstrap</span>
                <span>Booking form</span>
                <span>Price calculator</span>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">

              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">Service landing page</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>PHP web application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-house-door"></i>
                    <span>Curtains</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">Curtains</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://curtains.irfandev.xyz/" target="_blank" rel="noopener">Live website</a>
                <span class="mx-2">•</span>
                <a href="https://curtains.irfandev.xyz/terms-and-conditions" target="_blank" rel="noopener">Terms</a>
                <span class="mx-2">•</span>
                <a href="https://curtains.irfandev.xyz/privacy-policy" target="_blank" rel="noopener">Privacy</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  This is a modern curtains service landing page focused on fast conversion: booking free measurements,
                  an online price calculator, inspiration gallery, and a quick contact form. The goal is to let users
                  order curtains with minimal effort.
                </p>

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
                        <ul class="mb-0">
                          <li>Clear hero message + strong CTA (book free measurements / calculator)</li>
                          <li>Step-by-step process (book → expert visit → curtains ready)</li>
                          <li>Online calculator showing estimated price with included services</li>
                          <li>Gallery (“how it looks”) to build trust</li>
                          <li>Contact form + WhatsApp quick quote</li>
                        </ul>
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
                          <li><strong>Backend:</strong> PHP (Laravel)</li>
                          <li><strong>Database:</strong> MySQL</li>
                          <li><strong>Frontend:</strong> Bootstrap + responsive layout</li>
                          <li><strong>UI parts:</strong> slider, forms, calculator, testimonials</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Challenges -->
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
                          <li>Designing a fast, simple flow that works well on mobile.</li>
                          <li>Making the calculator easy to understand and trustworthy.</li>
                          <li>Keeping forms short but still collecting required info (building, date, time, phone).</li>
                          <li>Maintaining good performance while using multiple images and sliders.</li>
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
                          <li>Add a saved quote feature (send estimate to email/WhatsApp).</li>
                          <li>Add more calculator options (fabric type, blackout level, lining).</li>
                          <li>Add admin dashboard for booking and lead management.</li>
                          <li>Improve load time using image compression + caching.</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Important sections -->
                  <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#portfolio-details-collapse-5" aria-expanded="false"
                        aria-controls="portfolio-details-collapse-5">
                        <i class="bi bi-window me-2"></i> Important sections
                      </button>
                    </h2>

                    <div id="portfolio-details-collapse-5" class="accordion-collapse collapse"
                      data-bs-parent="#portfolio-details-projectAccordion">
                      <div class="accordion-body">
                        <ul class="mb-0">
                          <li>Hero CTA (book measurements + calculator)</li>
                          <li>How it works (3-step process)</li>
                          <li>Booking form (building + phone + date + time)</li>
                          <li>Online calculator</li>
                          <li>Gallery / inspiration</li>
                          <li>Testimonials</li>
                          <li>Contact form + WhatsApp</li>
                          <li>Terms & privacy pages</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="project-features" data-aos="fade-up" data-aos-delay="300">
                <h3><i class="bi bi-stars"></i> Key features</h3>
                <div class="row g-3">
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Booking free measurements</li>
                      <li><i class="bi bi-check2-circle"></i> Online price calculator</li>
                      <li><i class="bi bi-check2-circle"></i> Gallery slider + inspiration</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Contact form + WhatsApp quote</li>
                      <li><i class="bi bi-check2-circle"></i> Testimonials section</li>
                      <li><i class="bi bi-check2-circle"></i> Fully responsive UI</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://curtains.irfandev.xyz/" target="_blank" rel="noopener" class="btn-view-project">
                  View live project
                </a>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- /Portfolio Details Section -->

  </main>

  <?php require_once "includes/footer.php"; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <?php require_once "includes/scripts.php"; ?>

</body>
</html>
