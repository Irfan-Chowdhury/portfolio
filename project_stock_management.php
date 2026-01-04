<?php
$pageTitle = "Stock management system | Portfolio";

/**
 * TODO: Replace these with real screenshots from the GitHub repo.
 * I kept placeholders for now, so the template works instantly.
 */
$img_slider_1 = "https://user-images.githubusercontent.com/32363317/90465835-09f6b900-e132-11ea-876e-494280a6f8ae.png";
$img_slider_2 = "https://user-images.githubusercontent.com/32363317/90465892-2eeb2c00-e132-11ea-87ab-338df3203e1d.png";
$img_slider_3 = "https://user-images.githubusercontent.com/32363317/90465899-33afe000-e132-11ea-870a-59f2e3d03a25.png";

$img_thumb_1  = "https://user-images.githubusercontent.com/32363317/90465911-3dd1de80-e132-11ea-9772-b1575a1b4cfa.png";
$img_thumb_2  = "https://user-images.githubusercontent.com/32363317/90465957-58a45300-e132-11ea-9793-850776c00332.png";
$img_thumb_3  = "https://user-images.githubusercontent.com/32363317/90465967-5e019d80-e132-11ea-8f3f-2346acdd01fe.png";
$img_thumb_4  = "https://user-images.githubusercontent.com/32363317/90465974-63f77e80-e132-11ea-8de7-5b23140b1778.png";
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
            <li class="current">Stock management system</li>
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
                      <img src="<?php echo $img_slider_1; ?>" alt="Stock management system screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="Stock management system screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="Stock management system screenshot 3" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_1; ?>" alt="Stock management thumbnail 1" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_2; ?>" alt="Stock management thumbnail 2" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_3; ?>" alt="Stock management thumbnail 3" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_4; ?>" alt="Stock management thumbnail 4" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- Tech stack badges -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>Laravel</span>
                <span>PHP</span>
                <span>MySQL</span>
                <span>Bootstrap</span>
                <span>Inventory</span>
                <span>Sales & invoices</span>
                <span>Reports</span>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">

              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">Management system</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>Laravel web application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-box-seam"></i>
                    <span>Stock management</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">Stock management system</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://github.com/Irfan-Chowdhury/Stock-Management-System-Laravel" target="_blank" rel="noopener">Source code (github)</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  This is a stock management web app built with Laravel. It helps manage products, stock in/out,
                  sales, invoices, and reporting so a business can track inventory clearly and avoid mistakes.
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
                          <li>Dashboard overview (summary of stock and sales)</li>
                          <li>Manage products, categories, and stock</li>
                          <li>Sales flow with invoice/receipt</li>
                          <li>Track stock in/out to reduce errors</li>
                          <li>Reports for business decisions</li>
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
                          <li><strong>Backend:</strong> Laravel (PHP)</li>
                          <li><strong>Database:</strong> MySQL</li>
                          <li><strong>Frontend:</strong> Bootstrap (responsive)</li>
                          <li><strong>Core modules:</strong> inventory, sales, invoices, reports</li>
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
                          <li>Keeping stock updates accurate (reduce over-selling)</li>
                          <li>Designing clean CRUD screens that work on mobile</li>
                          <li>Generating invoices and reports in a simple flow</li>
                          <li>Validation to prevent wrong data entry</li>
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
                          <li>Add role-based access (admin/manager/staff)</li>
                          <li>Add barcode scanning for faster sales</li>
                          <li>Add export (pdf/excel) for reports and invoices</li>
                          <li>Improve performance with caching + indexing</li>
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
                          <li>Dashboard</li>
                          <li>Products / categories</li>
                          <li>Stock in / stock out</li>
                          <li>Sales & invoices</li>
                          <li>Reports</li>
                          <li>Settings / users (if enabled)</li>
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
                      <li><i class="bi bi-check2-circle"></i> Product and stock tracking</li>
                      <li><i class="bi bi-check2-circle"></i> Sales flow with invoices</li>
                      <li><i class="bi bi-check2-circle"></i> Dashboard summary</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Reports for analysis</li>
                      <li><i class="bi bi-check2-circle"></i> Responsive UI</li>
                      <li><i class="bi bi-check2-circle"></i> CRUD management screens</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://github.com/Irfan-Chowdhury/Stock-Management-System-Laravel" target="_blank" rel="noopener" class="btn-view-project">
                  View source code
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
