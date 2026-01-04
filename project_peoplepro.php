<?php
$pageTitle = "PeoplePro HRM | Portfolio";

/**
 * Auto screenshots (WordPress mshots)
 * These will generate live page screenshots without you downloading images.
 * Source pages verified:
 * - https://peopleprohrm.com/
 * - https://peopleprohrm.com/demo/login
 * - https://peopleprohrm.com/demo/documentation
 * - https://peopleprohrm.com/demo/password/reset
 */

$img_slider_1 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fpeopleprohrm.com%2F?w=1400";
$img_slider_2 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fpeopleprohrm.com%2Fdemo%2Flogin?w=1400";
$img_slider_3 = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fpeopleprohrm.com%2Fdemo%2Fdocumentation?w=1400";

$img_thumb_1  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fpeopleprohrm.com%2F?w=600";
$img_thumb_2  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fpeopleprohrm.com%2Fdemo%2Flogin?w=600";
$img_thumb_3  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fpeopleprohrm.com%2Fdemo%2Fdocumentation?w=600";
$img_thumb_4  = "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fpeopleprohrm.com%2Fdemo%2Fpassword%2Freset?w=600";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "includes/head.php"; ?>
</head>

<body class="index-page">

  <?php // require_once "includes/navbar.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">PeoplePro HRM</li>
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
                      <img src="<?php echo $img_slider_1; ?>" alt="PeoplePro HRM screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="PeoplePro HRM screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="PeoplePro HRM screenshot 3" class="img-fluid">
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
                <span>MySQL</span>
                <span>Admin panel</span>
                <span>HRM & payroll</span>
                <span>Attendance</span>
                <span>Project management</span>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE (content) -->
          <div class="col-lg-6" data-aos="fade-left">
            <div class="portfolio-details-content">

              <div class="project-meta">
                <div class="badge-wrapper">
                  <span class="project-badge">Enterprise HRM system</span>
                </div>

                <div class="date-client">
                  <div class="meta-item">
                    <i class="bi bi-code-slash"></i>
                    <span>PHP web application</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-building"></i>
                    <span>PeoplePro HRM</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">PeoplePro HRM</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://peopleprohrm.com/demo/login" target="_blank" rel="noopener">Live demo (login)</a>
                <span class="mx-2">•</span>
                <a href="https://peopleprohrm.com/demo/documentation" target="_blank" rel="noopener">Documentation</a>
                <span class="mx-2">•</span>
                <a href="https://peopleprohrm.com/" target="_blank" rel="noopener">Main website</a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  PeoplePro is an HR management system that combines core HR operations with payroll, attendance,
                  finance tools, and project management modules. It helps organizations manage employee records,
                  daily HR workflows, and team productivity from one dashboard.
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
                          <li>Role-based access (admin / staff / client) via demo login</li>
                          <li>Employee & HR management from a central dashboard</li>
                          <li>Attendance and leave workflow</li>
                          <li>Payroll and finance-related utilities</li>
                          <li>Project and task tracking + support ticket system</li>
                          <li>Documentation and setup guidance included</li>
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
                          <li><strong>Backend:</strong> PHP (Laravel-based structure)</li>
                          <li><strong>Database:</strong> MySQL</li>
                          <li><strong>Frontend:</strong> Bootstrap-based admin UI</li>
                          <li><strong>Core modules:</strong> HRM, payroll, attendance, finance, projects</li>
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
                          <li>Keeping a complex dashboard UX easy for non-technical users.</li>
                          <li>Ensuring modules (HR, payroll, projects) stay consistent with shared data.</li>
                          <li>Making the system responsive while handling large tables and forms.</li>
                          <li>Maintaining performance with multiple modules and reporting pages.</li>
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
                          <li>Add deeper reporting exports (PDF/Excel) and scheduled reports.</li>
                          <li>Improve onboarding flow (guided setup for company, departments, roles).</li>
                          <li>Optimize dashboard charts and table load using caching.</li>
                          <li>Add audit logs for sensitive HR/payroll changes.</li>
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
                          <li>Demo login (Admin / Staff / Client)</li>
                          <li>Documentation (modules + setup guide)</li>
                          <li>HR core (employee, leave, attendance)</li>
                          <li>Payroll & finance utilities</li>
                          <li>Projects, tasks, and tickets</li>
                          <li>Role-based access and permissions</li>
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
                      <li><i class="bi bi-check2-circle"></i> HR management (employees, roles, records)</li>
                      <li><i class="bi bi-check2-circle"></i> Attendance & leave workflow</li>
                      <li><i class="bi bi-check2-circle"></i> Payroll & finance tools</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Project & task tracking</li>
                      <li><i class="bi bi-check2-circle"></i> Support tickets</li>
                      <li><i class="bi bi-check2-circle"></i> Documentation included</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://peopleprohrm.com/demo/login" target="_blank" rel="noopener" class="btn-view-project">
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
