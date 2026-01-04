<?php
$pageTitle = "University course and result management system | Portfolio";

/**
 * Images provided by you (GitHub user-images)
 * You can swap any of these anytime.
 */
$img_slider_1 = "https://user-images.githubusercontent.com/32363317/91577081-0d781480-e96a-11ea-9150-9d2910557dc4.png"; // 01
$img_slider_2 = "https://user-images.githubusercontent.com/32363317/91577149-22ed3e80-e96a-11ea-9892-66e0c50e1bd4.png"; // 02
$img_slider_3 = "https://user-images.githubusercontent.com/32363317/91577181-2aace300-e96a-11ea-85fd-02e2586cc697.png"; // 03

$img_thumb_1  = "https://user-images.githubusercontent.com/32363317/91577203-326c8780-e96a-11ea-809a-1ee1f5cda1d7.png"; // 04
$img_thumb_2  = "https://user-images.githubusercontent.com/32363317/91577236-3e584980-e96a-11ea-9a76-cc6fc2b0d166.png"; // 05
$img_thumb_3  = "https://user-images.githubusercontent.com/32363317/91577273-4adca200-e96a-11ea-8a88-53a1691d3d80.png"; // 06
$img_thumb_4  = "https://user-images.githubusercontent.com/32363317/91577295-5203b000-e96a-11ea-9b41-1a45f01103de.png"; // 07
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
            <li class="current">University course and result management system</li>
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
                      <img src="<?php echo $img_slider_1; ?>" alt="University course and result management system screenshot 1" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_2; ?>" alt="University course and result management system screenshot 2" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                      <img src="<?php echo $img_slider_3; ?>" alt="University course and result management system screenshot 3" class="img-fluid">
                    </div>
                  </div>

                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

              <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-2 mt-3">
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_1; ?>" alt="University project thumbnail 1" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_2; ?>" alt="University project thumbnail 2" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_3; ?>" alt="University project thumbnail 3" class="img-fluid glightbox">
                  </div>
                  <div class="col-3">
                    <img src="<?php echo $img_thumb_4; ?>" alt="University project thumbnail 4" class="img-fluid glightbox">
                  </div>
                </div>
              </div>

              <!-- Tech stack badges (update these if needed) -->
              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>Web application</span>
                <span>University system</span>
                <span>Course management</span>
                <span>Result management</span>
                <span>Student records</span>
                <span>Admin panel</span>
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
                    <span>University management web app</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-mortarboard"></i>
                    <span>Course & result</span>
                  </div>
                </div>
              </div>

              <h2 class="project-title text-center">University course and result management system</h2>

              <div class="project-website">
                <i class="bi bi-link-45deg"></i>
                <a href="https://github.com/Irfan-Chowdhury/University-Course-and-Result-Management-System" target="_blank" rel="noopener">
                  Source code (github)
                </a>
              </div>

              <div class="project-overview">
                <p class="lead">
                  This project helps a university manage courses, teachers, students, and results in one place.
                  The goal is to reduce manual work, keep data organized, and generate results easily.
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
                          <li>Manage departments, courses, and semester/term data</li>
                          <li>Manage teachers and course assignments</li>
                          <li>Manage students and enrollments</li>
                          <li>Input marks/grades and publish results</li>
                          <li>Keep records clean and searchable</li>
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
                          <li><strong>Backend:</strong> (update from repo when confirmed)</li>
                          <li><strong>Database:</strong> (update from repo when confirmed)</li>
                          <li><strong>Frontend:</strong> (update from repo when confirmed)</li>
                          <li><strong>Modules:</strong> course, student, teacher, results</li>
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
                          <li>Keeping result calculation consistent (no wrong totals/grades)</li>
                          <li>Validation to stop duplicate entries (same student/course/term)</li>
                          <li>Designing clean forms for large data input</li>
                          <li>Making the system easy for admin users</li>
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
                          <li>Add role-based access (admin/teacher/student)</li>
                          <li>Add pdf result sheet and transcript export</li>
                          <li>Add notifications (result published, enrollment confirmed)</li>
                          <li>Add reports and analytics (pass rate, course performance)</li>
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
                          <li>Department and course management</li>
                          <li>Teacher assignment</li>
                          <li>Student enrollment</li>
                          <li>Result entry and publishing</li>
                          <li>Search and reporting</li>
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
                      <li><i class="bi bi-check2-circle"></i> Course and department management</li>
                      <li><i class="bi bi-check2-circle"></i> Student enrollment tracking</li>
                      <li><i class="bi bi-check2-circle"></i> Teacher course assignment</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="feature-list">
                      <li><i class="bi bi-check2-circle"></i> Result input and publishing</li>
                      <li><i class="bi bi-check2-circle"></i> Organized records and search</li>
                      <li><i class="bi bi-check2-circle"></i> Clean responsive UI</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="https://github.com/Irfan-Chowdhury/University-Course-and-Result-Management-System" target="_blank" rel="noopener" class="btn-view-project">
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
