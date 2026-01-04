<?php
$pageTitle = "Digital wallet | Portfolio";

/**
 * TODO (when allowed to open links):
 * - Replace slider + thumbnail images with real screenshots from:
 *   https://digital-wallet-iota.vercel.app/
 * - Confirm exact stack + credentials from the repo README:
 *   https://github.com/Irfan-Chowdhury/PH-Level2-B5-Assignment-6-frontend
 */

// PLACEHOLDER images (will be replaced with real screenshots)
$img_slider_1 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fdigital-wallet-iota.vercel.app%2F?w=1400";

// GitHub repo pages (nice for extra slider shots)
$img_slider_2 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fgithub.com%2FIrfan-Chowdhury%2FPH-Level2-B5-Assignment-6-frontend?w=1400";
$img_slider_3 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fgithub.com%2FIrfan-Chowdhury%2FPH-Level2-B5-Assignment-6-frontend%23readme?w=1400";

// Thumbnails (smaller)
$img_thumb_1  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fdigital-wallet-iota.vercel.app%2F?w=600";
$img_thumb_2  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fgithub.com%2FIrfan-Chowdhury%2FPH-Level2-B5-Assignment-6-frontend?w=600";
$img_thumb_3  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fgithub.com%2FIrfan-Chowdhury%2FPH-Level2-B5-Assignment-6-frontend%23readme?w=600";
$img_thumb_4  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fdigital-wallet-iota.vercel.app%2F?w=900";
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
            <li class="current">Digital wallet</li>
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
                      <img src="<?php echo $img_slider_1; ?>" alt="Digital wallet screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="Digital wallet screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="Digital wallet screenshot 3" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_1; ?>" alt="Digital wallet thumbnail 1" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_2; ?>" alt="Digital wallet thumbnail 2" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_3; ?>" alt="Digital wallet thumbnail 3" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_4; ?>" alt="Digital wallet thumbnail 4" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- Tech stack badges -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>Frontend app</span>
                <span>Digital wallet</span>
                <span>Auth</span>
                <span>Transactions</span>
                <span>Responsive ui</span>
                <span>Api integration</span>
              </div>

            </div>
          </div>

          <!-- RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">

              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">Fintech frontend</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>Frontend web application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-wallet2"></i>
                    <span>Digital wallet</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">Digital wallet</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://digital-wallet-iota.vercel.app/" target="_blank" rel="noopener">Live website</a>
                <span class="mx-2">•</span>
                <a href="https://github.com/Irfan-Chowdhury/PH-Level2-B5-Assignment-6-frontend" target="_blank" rel="noopener">Source code (github)</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  Digital wallet is a frontend web application focused on a clean wallet experience: users can log in,
                  view balance, track transactions, and manage their profile in a simple, modern dashboard.
                </p>

                <div class="accordion project-accordion" id="portfolio-details-projectAccordion">

                  <!-- overview -->
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
                          <li>User login and secure session flow</li>
                          <li>Wallet dashboard (balance and summary)</li>
                          <li>Transaction list (history, status, details)</li>
                          <li>Profile and settings management</li>
                          <li>Responsive layout for mobile and desktop</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- tech stack -->
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
                          <li><strong>Frontend:</strong> (will confirm from repo)</li>
                          <li><strong>State management:</strong> (will confirm from repo)</li>
                          <li><strong>Ui:</strong> (will confirm from repo)</li>
                          <li><strong>Api:</strong> integrates with backend endpoints</li>
                          <li><strong>Demo credentials:</strong> (will copy from repo if provided)</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- challenges -->
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
                          <li>Handling auth states (logged in, logged out, token refresh)</li>
                          <li>Keeping transaction ui fast and readable</li>
                          <li>Form validation for wallet actions</li>
                          <li>Making everything responsive without breaking layout</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- future plans -->
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
                          <li>Add filters and search for transactions</li>
                          <li>Add export (pdf/csv) for statements</li>
                          <li>Add better error states and loading skeletons</li>
                          <li>Add analytics charts (spend, income, trends)</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- important sections -->
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
                          <li>Login and registration</li>
                          <li>Wallet dashboard</li>
                          <li>Transaction history</li>
                          <li>Profile and settings</li>
                          <li>Notifications / toast messages (if used)</li>
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
                      <li><i class="bi bi-check2-circle"></i> Clean wallet dashboard</li>
                      <li><i class="bi bi-check2-circle"></i> Transaction history ui</li>
                      <li><i class="bi bi-check2-circle"></i> Auth flow support</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Responsive design</li>
                      <li><i class="bi bi-check2-circle"></i> Form validation</li>
                      <li><i class="bi bi-check2-circle"></i> Api integration ready</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://digital-wallet-iota.vercel.app/" target="_blank" rel="noopener" class="btn-view-project">
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
