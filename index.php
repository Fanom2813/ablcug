<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | ABLCUG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.10.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php include 'includes/header.php' ?>

  <!-- ======= Hero Section ======= -->
  <?php
  $string_json = file_get_contents("data/slider.json");
  if (!empty($string_json)) {
    $slides = json_decode($string_json);
  ?>
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <?php
          foreach ($slides as $key => $value) {
          ?>
            <div class="carousel-item <?php if ($key == 0) {
                                        echo 'active';
                                      } ?>" style="background-image: url(assets/img/slide/<?php echo $value->image; ?>)">
              <div class="carousel-container">
                <div class="container">
                  <?php echo $value->html; ?>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </section><!-- End Hero -->
  <?php } ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6">
            <h2>About</h2>
            <h3>Our Organization</h3>
            <p>Animals and Birds Life Care Organization (ABLCO) is a fully registered Non-Governmental Organization, established to render advocacy and transformational development services into the animals and birds sub-sector in Uganda</p>
            <p>advocating for local, and national policy changes relating to the improvement of all birds and animal welfare issues</p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <img class="img-fluid rounded" src="assets/img/image_20.jpg" />
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6 pt-4 pt-lg-0">
            <img class="img-fluid rounded" src="assets/img/image_21.jpg" />
          </div>
          <div class="col-lg-6">
            <h3>Our Activities</h3>
            <p>The Organisation carries out various activities in guardiance to its objectives and they include:</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Sensitization programs</a></h4>
              <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Research & documentation</a></h4>
              <!-- <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> -->
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">Tooling programs</a></h4>
              <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> -->
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">Partnership Programs</a></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> -->
            </div>
          </div>
          <!-- <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div> -->

        </div>
    </section><!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->

    <?php
    $string_json = file_get_contents("data/gallery.json");
    if (!empty($string_json)) {
      $gallery = json_decode($string_json);
    ?>

      <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <?php
                foreach ($gallery->categories as $key => $value) {
                ?>
                  <li data-filter=".filter-<?php echo $value; ?>"><?php echo $value; ?></li>
                <?php } ?>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

          <?php
          // var_dump($gallery->images);
                foreach ($gallery->images as $key => $value) {
                ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $value->category?>">
              <div class="portfolio-wrap">
                <img src="<?php echo $value->image; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $value->name; ?></h4>
                  <p><?php echo $value->category?></p>
                  <div class="portfolio-links">
                    <a href="<?php echo $value->image; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $value->name; ?>"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>

        </div>
      </section><!-- End Portfolio Section -->
    <?php } ?>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'; ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>