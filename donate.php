<?php
session_start();
include_once 'keys.php';
$string_json = file_get_contents("data/donation.json");
$donation_data = json_decode($string_json);

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (isset($_POST['donate'])) {

  // var_dump($_POST);
  // die;

  $amount = (int) $_POST['amount'] > (int) $_POST['other-amount'] ? (int) $_POST['amount'] : (int) $_POST['other-amount'];

  // print_r($_POST);
  // die;

  if (!isset($_POST['amount']) && !isset($_POST['other-amount']) || $amount <= 0) {
    $error = "Kindly enter or select a valid amount";
  } else {

    $_SESSION['amount'] = $amount;
    $_SESSION['phoneNumber'] = $_POST['phoneNumber'];


    header('location: https://api.gmpayapp.com/api/v2/transactions/init?phone=' . $_POST['phoneNumber'] . '&amount=' . $amount . '&return=' . $actual_link . '&merchant=' . $api_key);
  }
}

if (isset($_GET['status']) && $_GET['status'] == 'failed') {
  $error = "Sorry your transaction has failed, transaction ID was " . $_GET['tnx'];
}

if (isset($_GET['status']) && $_GET['status'] == 'success') {
  if (isset($_SESSION['amount'])) {
    $donation_data->totalReceived = $donation_data->totalReceived + $_SESSION['amount'];
    file_put_contents(__DIR__ . "/data/donation.json", json_encode($donation_data));
  }
  $success = "Thanks for your donation !";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Donate | ABLCUG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <style>
    .form-check-input {
      height: 1em !important;
    }
  </style>

  <!-- =======================================================
  * Template Name: Sailor - v4.10.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'includes/header.php' ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Donate</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Donate</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="d-none">
          <div class="card text-white bg-primary">

            <div class="card-body overflow-visible text-center">
              <h5 class="card-title">We have received with thanks.</h5>
              <div>
                <p
                  class="overflow-visible fs-1 mb-0 fw-bold animate__animated  animate__pulse animate__infinite animate__slow">
                  <?php echo $donation_data->symbol . " " . number_format($donation_data->totalReceived); ?>
                </p>

              </div>
            </div>
          </div>
        </div>

        <?php if (isset($error)) { ?>
          <div class="alert alert-danger mt-3" role="alert">
            <?php echo $error; ?>
          </div>
        <?php } ?>


        <?php if (isset($success)) { ?>
          <div class="alert alert-success mt-3" role="alert">
            <?php echo $success; ?>
          </div>
        <?php } ?>

        <div class="row mt-5">

          <div class="col-lg-4 	d-none d-lg-block d-xl-block d-xxl-block">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_wyrwqyr9.json"
              background="transparent" speed="1" class="img-fluid" loop autoplay></lottie-player>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <h5>Donation Form</h5>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" role="form">
              <div class="row mb-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="col-12 mt-3">
                  <input type="number" class="form-control" name="phoneNumber"
                    placeholder="Phone Number for Mobile Money : 256..." required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Amount</label>
                <div class="row">
                  <div class="col ">
                    <div class="form-check">
                      <input class="form-check-input" value="10000" type="radio" name="amount">
                      <label class="form-check-label">
                        <?php echo $donation_data->symbol; ?> 10,000
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" value="50000" type="radio" name="amount">
                      <label class="form-check-label">
                        <?php echo $donation_data->symbol; ?> 50,000
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" value="500000" type="radio" name="amount">
                      <label class="form-check-label">
                        <?php echo $donation_data->symbol; ?> 500,000
                      </label>
                    </div>
                  </div>
                </div>




                <div class="form-group mt-4">
                  <input type="number" name="other-amount" class="form-control" id="name" placeholder="Other Amount">
                </div>
              </div>

              <!-- <div class="mb-3">
                <h5>
                  Credit Card Information
                </h5>
                <div class="row">
                  <div class="col-6 ">
                    <div class="form-group">
                      <input placeholder="Credit Card Number" type="text" class="form-control " name="card-number">

                    </div>
                    <div class="form-group mt-3">
                      <input placeholder="Expiration Date format MM/YY" type="text" class="form-control"
                        name="card-expiration">
                    </div>


                  </div>
                  <div class="col-6 form-group">
                    <div class="form-group">
                      <input placeholder="CVV" type="number" class="form-control" name="card-cvv">

                    </div>
                    <div class="form-group mt-3">
                      <input placeholder="Billing Zip Code" type="number" class="form-control" name="card-zip">

                    </div>

                  </div>
                </div>


              </div> -->



              <div class="text-center mt-5"><button type="submit" name="donate" class="btn btn-primary">Donate</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'; ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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