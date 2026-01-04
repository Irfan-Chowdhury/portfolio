<?php
$pageTitle = "Device sandbox simulator | Portfolio";

/**
 * Auto screenshots (always up-to-date) using Thum.io URL API
 * Docs: https://www.thum.io/documentation/api/url
 *
 * Note:
 * - We use the "?url=" format so https links work cleanly.
 * - "noanimate/" returns a single final image (better for portfolio pages).
 */
$target_url = "https://device-sandbox-simulator-client.vercel.app/";
$encoded_url = rawurlencode($target_url);

// Slider screenshots (3)
$img_slider_1 = "https://image.thum.io/get/noanimate/width/1200/?url={$encoded_url}";
$img_slider_2 = "https://image.thum.io/get/noanimate/width/1200/crop/900/?url={$encoded_url}";
$img_slider_3 = "https://image.thum.io/get/noanimate/width/1200/crop/700/?url={$encoded_url}";

// Thumbnails (4)
$img_thumb_1  = "https://image.thum.io/get/noanimate/width/450/crop/320/?url={$encoded_url}";
$img_thumb_2  = "https://image.thum.io/get/noanimate/width/450/crop/420/?url={$encoded_url}";
$img_thumb_3  = "https://image.thum.io/get/noanimate/width/450/crop/520/?url={$encoded_url}";
$img_thumb_4  = "https://image.thum.io/get/noanimate/width/450/crop/620/?url={$encoded_url}";

// Links
$live_site = "https://device-sandbox-simulator-client.vercel.app/";
$repo_url  = "https://github.com/Irfan-Chowdhury/device-sandbox-simulator-client";
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
            <li class="current">Device sandbox simulator</li>
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
                      <img src="<?php echo $img_slider_1; ?>" alt="Device sandbox simulator screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="Device sandbox simulator screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="Device sandbox simulator screenshot 3" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_1; ?>" alt="Device sandbox simulator thumbnail 1" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_2; ?>" alt="Device sandbox simulator thumbnail 2" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_3; ?>" alt="Device sandbox simulator thumbnail 3" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_4; ?>" alt="Device sandbox simulator thumbnail 4" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- Tech stack badges -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>Frontend web app</span>
                <span>API integration</span>
                <span>Sandbox simulation</span>
                <span>Responsive UI</span>
                <span>Vercel deploy</span>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">

              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">Web application</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>Client-side application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-cpu"></i>
                    <span>Device sandbox simulator</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">Device sandbox simulator</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="<?php echo $live_site; ?>" target="_blank" rel="noopener">Live website</a>
                <span class="mx-2">•</span>
                <a href="<?php echo $repo_url; ?>" target="_blank" rel="noopener">Repository</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  This project is a web client for a “device sandbox” environment. It helps test and demo device-style
                  interactions in a safe place, with a simple UI so users can try flows quickly.
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
                          <li>Clean UI to interact with a sandbox environment</li>
                          <li>Designed for quick testing and demos</li>
                          <li>Responsive layout for desktop and mobile</li>
                          <li>Deployed live for easy sharing</li>
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
                          <li><strong>Frontend:</strong> Modern JavaScript SPA</li>
                          <li><strong>Deployment:</strong> Vercel</li>
                          <li><strong>Integration:</strong> API-based communication with sandbox services</li>
                          <li><strong>UI parts:</strong> pages, components, responsive layout</li>
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
                          <li>Keeping the UI simple while supporting real testing flows.</li>
                          <li>Handling async requests and showing clear loading/error states.</li>
                          <li>Making the app fast and smooth for demos.</li>
                          <li>Ensuring it stays usable on smaller screens.</li>
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
                          <li>Add activity logs (history of actions).</li>
                          <li>Add better error messages and retry options.</li>
                          <li>Add more UI filters/search for faster navigation.</li>
                          <li>Improve performance with caching and code-splitting.</li>
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
                          <li>Home / main workspace UI</li>
                          <li>Sandbox interaction flow</li>
                          <li>Status + feedback states</li>
                          <li>Responsive layout for mobile</li>
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
                      <li><i class="bi bi-check2-circle"></i> Live deployed demo</li>
                      <li><i class="bi bi-check2-circle"></i> Simple, clean UI</li>
                      <li><i class="bi bi-check2-circle"></i> Fast interaction flow</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Responsive design</li>
                      <li><i class="bi bi-check2-circle"></i> API-based communication</li>
                      <li><i class="bi bi-check2-circle"></i> Easy to share</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo $live_site; ?>" target="_blank" rel="noopener" class="btn-view-project">
                  View live project
                </a>
                <a href="<?php echo $repo_url; ?>" target="_blank" rel="noopener" class="btn-view-project ms-2">
                  View repository
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
