<?php
$pageTitle = "CartPro | Portfolio";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "includes/head.php"; ?>
</head>

<body class="index-page">


  <?php
  // ✅ Auto-screenshots (no manual image hosting needed)
  // If any screenshot does not load on your server, replace these URLs with your own uploaded images.
  $shot_home    = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fshuddhokhamar.com%2F?w=1200";
  $shot_shop    = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fshuddhokhamar.com%2Fshop%2F?w=1200";
  $shot_about   = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fshuddhokhamar.com%2Fabout-us%2F?w=1200";
  $shot_contact = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fshuddhokhamar.com%2Fcontact-us%2F?w=1200";
  $shot_faq     = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fshuddhokhamar.com%2Ffaq%2F?w=1200";
  $shot_track   = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fshuddhokhamar.com%2Forder-tracking%2F?w=1200";
  ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Shuddho khamar</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <!-- ✅ LEFT SIDE (screenshots) -->
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
                      <img src="<?php echo $shot_home; ?>" alt="Shuddho khamar home page" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $shot_shop; ?>" alt="Shuddho khamar shop page" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $shot_about; ?>" alt="Shuddho khamar about page" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $shot_contact; ?>" alt="Contact page" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $shot_faq; ?>" alt="FAQ page" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $shot_track; ?>" alt="Order tracking page" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $shot_shop; ?>" alt="Shop page" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- ✅ Tech stack badges (for your portfolio) -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>PHP (Laravel)</span>
                <span>MySQL</span>
                <span>Bootstrap</span>
                <span>Payment integration</span>
                <span>Order tracking</span>
              </div>
            </div>
          </div>

          <!-- ✅ RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">
              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">Organic farm e-commerce</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>PHP web application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-shop"></i>
                    <span>Shuddho khamar</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">Shuddho khamar</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://shuddhokhamar.com/" target="_blank" rel="noopener">Live website</a>
                <span class="mx-2">•</span>
                <a href="https://shuddhokhamar.com/shop/" target="_blank" rel="noopener">Shop</a>
                <span class="mx-2">•</span>
                <a href="https://shuddhokhamar.com/order-tracking/" target="_blank" rel="noopener">Order tracking</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  Shuddho khamar is an organic farm and home-delivery e-commerce concept that focuses on fresh and authentic food
                  items (dairy, honey, meat, poultry, spices, seasonal fruits, and more). The experience includes browsing by category,
                  ordering online, and tracking orders.
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
                        <p>
                          The platform presents a farm-to-home online store. Product areas include cattle and qurbani cows,
                          different meats, poultry (chicken/duck), milk, ghee, honey, spices, seasonal fruits, and mustard oil.
                          The website also includes order tracking and clear contact information.
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
                        <i class="bi bi-stack me-2"></i> Main technology stack (portfolio build)
                      </button>
                    </h2>

                    <div id="portfolio-details-collapse-2" class="accordion-collapse collapse"
                      data-bs-parent="#portfolio-details-projectAccordion">
                      <div class="accordion-body">
                        <ul class="mb-0">
                          <li><strong>Backend:</strong> Laravel (PHP)</li>
                          <li><strong>Database:</strong> MySQL</li>
                          <li><strong>Frontend:</strong> Bootstrap + custom UI components</li>
                          <li><strong>Modules:</strong> product catalog, category filtering, cart/checkout, order tracking</li>
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
                          <li>Designing a clean category structure for many product types (dairy, meats, poultry, spices, fruits).</li>
                          <li>Keeping product browsing fast (search, filter, pagination, optimized images).</li>
                          <li>Building a simple order tracking experience that users can understand.</li>
                          <li>Making the UI fully responsive and easy to use on mobile.</li>
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
                          <li>Add advanced search + smarter filters (price, category, availability).</li>
                          <li>Add customer accounts (order history, address book, faster checkout).</li>
                          <li>Add admin dashboard analytics (sales, top products, stock alerts).</li>
                          <li>Improve performance with caching + image optimization.</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Key pages -->
                  <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#portfolio-details-collapse-5" aria-expanded="false"
                        aria-controls="portfolio-details-collapse-5">
                        <i class="bi bi-window me-2"></i> Important pages covered
                      </button>
                    </h2>

                    <div id="portfolio-details-collapse-5" class="accordion-collapse collapse"
                      data-bs-parent="#portfolio-details-projectAccordion">
                      <div class="accordion-body">
                        <ul class="mb-0">
                          <li>Home + featured categories</li>
                          <li>Shop listing + categories</li>
                          <li>Product details + images</li>
                          <li>Order tracking</li>
                          <li>About + contact</li>
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
                      <li><i class="bi bi-check2-circle"></i> Category-based product browsing</li>
                      <li><i class="bi bi-check2-circle"></i> Clean product details layout</li>
                      <li><i class="bi bi-check2-circle"></i> Mobile-friendly responsive UI</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Order tracking page</li>
                      <li><i class="bi bi-check2-circle"></i> Contact info visibility</li>
                      <li><i class="bi bi-check2-circle"></i> Performance-focused structure</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://shuddhokhamar.com/" target="_blank" rel="noopener" class="btn-view-project">View Live Project</a>

                
              </div>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <?php require_once 'includes/footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <?php require_once "includes/scripts.php"; ?>

</body>

</html>
