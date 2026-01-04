<?php
$pageTitle = "Device sandbox simulator | Portfolio";

/**
 * Auto screenshots (WordPress mshots)
 * Uses live URL screenshots without downloading images.
 */
$img_slider_1 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fdevice-sandbox-simulator-client.vercel.app%2F?w=1400";
$img_slider_2 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fgithub.com%2FIrfan-Chowdhury%2Fdevice-sandbox-simulator-client?w=1400";
$img_slider_3 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fwww.figma.com%2Fdesign%2FQZsqOF9WUXFeu69tzunrbT%2FDevice-Sandbox%3Fnode-id%3D0-1%26p%3Df%26t%3DwweuRiKRaFbEVNvT-0?w=1400";

$img_thumb_1  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fdevice-sandbox-simulator-client.vercel.app%2F?w=600";
$img_thumb_2  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fgithub.com%2FIrfan-Chowdhury%2Fdevice-sandbox-simulator-client?w=600";
$img_thumb_3  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fgithub.com%2FIrfan-Chowdhury%2Fdevice-sandbox-simulator-client%23readme?w=600";
$img_thumb_4  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fwww.figma.com%2Fdesign%2FQZsqOF9WUXFeu69tzunrbT%2FDevice-Sandbox%3Fnode-id%3D0-1%26p%3Df%26t%3DwweuRiKRaFbEVNvT-0?w=600";
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
                      <img src="<?php echo $img_slider_1; ?>" alt="Device sandbox screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="Device sandbox screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="Device sandbox screenshot 3" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_1; ?>" alt="Device sandbox thumbnail 1" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_2; ?>" alt="Device sandbox thumbnail 2" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_3; ?>" alt="Device sandbox thumbnail 3" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_4; ?>" alt="Device sandbox thumbnail 4" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- Tech stack badges -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>React</span>
                <span>JavaScript</span>
                <span>Bootstrap</span>
                <span>Axios</span>
                <span>Drag & drop ui</span>
                <span>Device simulator</span>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">

              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">Frontend web app</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>Web application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-phone"></i>
                    <span>Device sandbox simulator</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">Device sandbox simulator</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://device-sandbox-simulator-client.vercel.app" target="_blank" rel="noopener">Live demo</a>
                <span class="mx-2">•</span>
                <a href="https://github.com/Irfan-Chowdhury/device-sandbox-simulator-client" target="_blank" rel="noopener">Repository</a>
                <span class="mx-2">•</span>
                <a href="https://www.figma.com/design/QZsqOF9WUXFeu69tzunrbT/Device-Sandbox?node-id=0-1&p=f&t=wweuRiKRaFbEVNvT-0" target="_blank" rel="noopener">Figma</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  This project is a device sandbox simulator web app. The main goal is to test and preview a device-like
                  experience in the browser, with a clean UI and interactive components.
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
                          <li>Live demo deployed on Vercel</li>
                          <li>Interactive device-like layout inside the browser</li>
                          <li>Clean, responsive interface</li>
                          <li>Source code available on GitHub</li>
                          <li>Design reference in Figma</li>
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
                          <li><strong>Frontend:</strong> React</li>
                          <li><strong>Styling:</strong> Bootstrap</li>
                          <li><strong>HTTP:</strong> Axios</li>
                          <li><strong>UX:</strong> Interactive UI (sandbox / simulator feel)</li>
                          <li><strong>Design:</strong> Figma file</li>
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
                          <li>Keeping the UI smooth while simulating a device-like view.</li>
                          <li>Making the layout responsive across screen sizes.</li>
                          <li>Keeping components reusable and easy to maintain.</li>
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
                          <li>Add more device presets (mobile, tablet, desktop frames).</li>
                          <li>Add export or share mode for sandbox previews.</li>
                          <li>Improve performance by optimizing heavy UI sections.</li>
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
                          <li>Main device sandbox screen</li>
                          <li>Interactive components / controls</li>
                          <li>Responsive layout behavior</li>
                          <li>Design reference (Figma)</li>
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
                      <li><i class="bi bi-check2-circle"></i> Live demo deployment</li>
                      <li><i class="bi bi-check2-circle"></i> Responsive UI</li>
                      <li><i class="bi bi-check2-circle"></i> Clean layout & components</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> GitHub source code</li>
                      <li><i class="bi bi-check2-circle"></i> Figma design reference</li>
                      <li><i class="bi bi-check2-circle"></i> Interactive sandbox feel</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://device-sandbox-simulator-client.vercel.app" target="_blank" rel="noopener" class="btn-view-project">
                  View live project
                </a>
              </div>

              <div class="mt-3 small text-muted">
                Note: auto screenshots can be blank the first time (mshots is generating). Refresh once or twice.
                Figma screenshots may show a login screen if access is restricted.
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
