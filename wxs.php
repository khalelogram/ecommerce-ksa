<?php
include 'db.php';

  $query = "SELECT * FROM products";

  $result = mysqli_query($dbconnection, $query);

  if(!$result)
  {
    die(mysqli_error());
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo.png">
  <link rel="icon" type="image/png" href="assets/img/logo1.jpeg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Heart Made
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Baskervville|Caveat|Dancing+Script&display=swap" rel="stylesheet">
  <style>
    .content-center span{
      display: none;
    }
  </style>

</head>

<body id="body" class="index-page sidebar-collapse">
  <!-- Navbar -->
  <?php include "navbar.php" ?>
  <!-- End Navbar -->
<!-- Header -->
<?php include 'header.php'; ?>
  <!-- END HEADER -->
  
  <!-- SHOPPING SECTION -->
<div class="container" style="margin-top: 25px;">
  <div class="d-flex">
    <div id="carouselExampleControls" class="carousel slide col-lg-6" data-ride="carousel"  style="height: 507.38px; max-width: 507.38px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./products/hats/hat_wavexstarrynight.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./products/hats/hat_wavexstarrynight1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./products/hats/hat_wavexstarrynight2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./products/hats/hat_wavexstarrynight3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="product">
      <h1 id="title">The Wave x Starrynight</h1>
      <h2 id="price">₱700.00</h2>
      <h4 id="artist">Artist: Pauline Bactad</h4>
      <p id="description"><h3>Description:</h3>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <form class="d-flex" style="flex-direction: column; max-width: 250px;">
        <input type="submit" name="" style="max-width: 150px;" class="btn btn-block btn-success" value="Order">
      </form>
    </div>
  </div>
</div>  

<!-- CONTACT SECTION -->
  <div class="section section-contact-us text-center">
      <div class="container">
          <h2 class="title">Have a suggestion?</h2>
          <p class="description" style="color: black; font-weight: 500">Your feedback is very important to us.</p>

          <div class="row">
              <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                  <div class="input-group input-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="now-ui-icons users_circle-08"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="First Name...">
                  </div>

                  <div class="input-group input-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="now-ui-icons ui-1_email-85"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Email...">
                  </div>

                  <div class="textarea-container">
                      <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                  </div>

                  <div class="send-button">
                      <a href="#pablo" class="btn btn-round btn-block btn-lg" style="background-image: url(assets/img/yellowbg.jpeg); font-weight: bold; color: black;">Send Message</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!-- END CONTACT SECTION -->

<!-- FOOTER SECTION -->
<?php include 'footer.php'; ?>
<!-- Start Modal -->
<!-- included in navbar -->




  <!--   Core JS Files   -->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    var typed3 = new Typed('#header_content', {
    strings: ['Where you are <i>recognized.</i>', 'Where creativity is <i>developed.</i>', 'Where talent is <i>valued.</i>'],
    typeSpeed: 50,
    backSpeed: 35,
    smartBackspace: true, // this is a default
    loop: true
    });

  </script>
</body>

</html>