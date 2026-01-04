<?php
$pageTitle = "PeoplePro SaaS | Portfolio";

/**
 * Images collected from peopleprohrmsaas.com (landing + documentation)
 * (You can later download + host them in your own assets folder if you want)
 */
$img_slider_1 = "https://peopleprohrmsaas.com/landlord/images/hero/202310010734541.png";
$img_slider_2 = "https://peopleprohrmsaas.com/docs-landlord/assets/images/landlord/1.admin_dashboard.png";
$img_slider_3 = "https://peopleprohrmsaas.com/docs-landlord/assets/images/landlord/2.general_setting.png";

$img_thumb_1  = "https://peopleprohrmsaas.com/docs-landlord/assets/images/landlord/paymentSetting.png";
$img_thumb_2  = "https://peopleprohrmsaas.com/docs-landlord/assets/images/landlord/mailSetting.png";
$img_thumb_3  = "https://peopleprohrmsaas.com/docs-landlord/assets/images/landlord/datatable1.png";
$img_thumb_4  = "https://peopleprohrmsaas.com/docs-landlord/assets/images/landlord/datatable2.png";
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
            <li class="current">PeoplePro SaaS</li>
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
                      <img src="<?php echo $img_slider_1; ?>" alt="PeoplePro SaaS screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="PeoplePro SaaS screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="PeoplePro SaaS screenshot 3" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_1; ?>" alt="PeoplePro thumbnail 1" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_2; ?>" alt="PeoplePro thumbnail 2" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_3; ?>" alt="PeoplePro thumbnail 3" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_4; ?>" alt="PeoplePro thumbnail 4" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- Tech stack badges -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>PHP (Laravel)</span>
                <span>Multi-tenant SaaS</span>
                <span>Payroll</span>
                <span>Attendance</span>
                <span>Project management</span>
                <span>Payment gateways</span>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">

              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">HRM SaaS platform</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>PHP web application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-building"></i>
                    <span>PeoplePro SaaS</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">PeoplePro SaaS</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://peopleprohrmsaas.com" target="_blank" rel="noopener">Live website</a>
                <span class="mx-2">•</span>
                <a href="https://peopleprohrmsaas.com/central-documentation" target="_blank" rel="noopener">Documentation</a>
                <span class="mx-2">•</span>
                <a href="https://peopleprohrmsaas.com/pages/privacy-and-policy" target="_blank" rel="noopener">Privacy</a>
                <span class="mx-2">•</span>
                <a href="https://peopleprohrmsaas.com/pages/terms-%26-conditions" target="_blank" rel="noopener">Terms</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  PeoplePro SaaS is a multi-tenant HR management platform that combines payroll, attendance tracking,
                  and project management in one dashboard-driven system. It is built as a PHP Laravel solution and
                  targets businesses that want to manage teams, operations, and subscriptions efficiently.
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
                          <li>Multi-tenant, multi-database SaaS structure for separate client environments.</li>
                          <li>Central admin dashboard with key business metrics (clients, packages, received amount).</li>
                          <li>HR modules: employees, payroll, leave, attendance, recruitment, performance.</li>
                          <li>Project and task management to support cross-team collaboration.</li>
                          <li>System settings: general configuration, mail, and payment integrations.</li>
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
                          <li><strong>Database:</strong> Multi-database (tenant databases), PDO MySQL supported</li>
                          <li><strong>Frontend:</strong> Admin dashboard UI + settings screens</li>
                          <li><strong>Payments:</strong> Supports common gateways (for SaaS billing workflows)</li>
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
                          <li>Designing a clear admin experience while the system has many modules.</li>
                          <li>Managing SaaS complexity: tenants, subscriptions, and separate databases.</li>
                          <li>Keeping settings (mail/payment) safe and easy to configure for non-technical users.</li>
                          <li>Maintaining speed in dashboard pages with large tables and exports.</li>
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
                          <li>Add deeper analytics dashboards (HR trends, attendance patterns, payroll insights).</li>
                          <li>Improve onboarding wizard for faster tenant setup and configuration.</li>
                          <li>Enhance role-based permissions UX and tenant-level security controls.</li>
                          <li>Optimize large table performance with server-side pagination and caching.</li>
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
                          <li>Admin dashboard (subscription value, received amount, clients, packages)</li>
                          <li>General settings (branding, timezone, currency, layout)</li>
                          <li>Payment settings (gateway credentials)</li>
                          <li>Mail settings (SMTP configuration)</li>
                          <li>Datatable tools (search, export, print, column controls)</li>
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
                      <li><i class="bi bi-check2-circle"></i> HRM + payroll in one system</li>
                      <li><i class="bi bi-check2-circle"></i> Attendance and leave management</li>
                      <li><i class="bi bi-check2-circle"></i> Multi-tenant SaaS ready</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Project and task management</li>
                      <li><i class="bi bi-check2-circle"></i> Admin settings (mail + payments)</li>
                      <li><i class="bi bi-check2-circle"></i> Table export and filtering tools</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://peopleprohrmsaas.com" target="_blank" rel="noopener" class="btn-view-project">
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
