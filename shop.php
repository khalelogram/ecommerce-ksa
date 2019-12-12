<?php
include 'db.php';
include 'readmoreFunction.php';

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
<div class="d-flex flex-wrap ">
  <div class="d-flex flex-column align-items-start col-lg-4 col-md-6 col-sm-12" style="padding: 20px;">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100" style="width: 363px;">
        <img style="width: 363px; height: 207px;" class="card-img-top"  src="assets/img/personalized_wave.jpg"  alt="">
        <div class="card-body">
          <h4 class="card-title">
            <h3>Shirts</h3>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <span id="dots">...</span><span id="more">Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button onclick="readMore()" id="myBtn">Read more</button>
        </div>
        <div class="d-flex justify-content-center card-footer">
          <a href="shirts.php"><input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts"></a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100" style="width: 363px;">
        <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/shoes_starrynight.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            <h3>Shoes</h3>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <span id="dots1">...</span><span id="more1">Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button onclick="readMore1()" id="myBtn1">Read more</button>
        </div>
        <div class="d-flex justify-content-center card-footer">
          <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column align-items-start col-lg-4 col-md-6 col-sm-12" style="padding: 20px;">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100" style="width: 363px;">
        <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/hat_wavexstarrynight1.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            <h3>Hats</h3>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <span id="dots2">...</span><span id="more2">Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button onclick="readMore2()" id="myBtn2">Read more</button>
        </div>
        <div class="d-flex justify-content-center card-footer">
          <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100" style="width: 363px;">
        <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/pants_starrynight.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            <h3>Pants</h3>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <span id="dots3">...</span><span id="more3">Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button onclick="readMore3()" id="myBtn3">Read more</button>
        </div>
        <div class="d-flex justify-content-center card-footer">
          <a href="pants.php"><input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex flex-column align-items-start col-lg-4 col-md-6 col-sm-12" style="padding-top: 20px; padding-right: 40px; padding-left: 20px;">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100" style="width: 363px;">
        <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/mural_starrynight.jpg" alt="">
          <div class="card-body">
          <h4 class="card-title">
            <h3>Mural Services</h3>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <span id="dots4">...</span><span id="more4">Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button onclick="readMore4()" id="myBtn4">Read more</button>
        </div>
        <div class="d-flex justify-content-center align-items-end card-footer">
          <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100" style="width: 363px;">
        <img style="width: 363px; height: 207px;"class="card-img-top" src="assets/img/personalized_oilpaint.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            <h3>Others</h3>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <span id="dots5">...</span><span id="more5">Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button onclick="readMore5()" id="myBtn5">Read more</button>
        </div>
        <div class="d-flex justify-content-center card-footer">
          <input class="btn btn-warning btn-lg" value="See More" type="submit" name="Shirts">
        </div>
      </div>
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
</div>
<!-- END CONTACT SECTION -->

<!-- FOOTER SECTION -->
<?php include 'footer.php'; ?>
<!-- Start Modal -->
<!-- included modal in navbar -->





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