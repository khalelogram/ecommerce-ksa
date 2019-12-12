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
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="400" style="background-color: #716D6D;">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php" rel="tooltip" title="Desgined & Developed by Jess Del Rosario" data-placement="bottom">
          <img src="assets/img/logo1.jpeg" alt="logo" height="50px" width="50px">
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              <i class="now-ui-icons design_app"></i>
              <p>Menu</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="#">
                <i class="now-ui-icons shopping_cart-simple"></i> Shop
              </a>
              <a class="dropdown-item" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
                <i class="now-ui-icons business_badge"></i> Book an artist
              </a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToSuggestion()">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Contact Us</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/HeartmadeP" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/HeartMade.PB" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/heart.made.pb" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
<!-- Header -->
<?php include 'header.php'; ?>
  <!-- END HEADER -->
  
  <!-- SHOPPING SECTION -->

<div class="row" style="padding: 100px;">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img style="width: 363px; height: 207px;" class="card-img-top"  src="assets/img/personalized_wave.jpg"  alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Shirts</h3>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="d-flex justify-content-center card-footer">
                <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/shoes_starrynight.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Shoes</h3>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="d-flex justify-content-center card-footer">
                <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/hat_wavexstarrynight1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Hats</h3>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="d-flex justify-content-center card-footer">
                <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/pants_starrynight.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Pants</h3>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="d-flex justify-content-center card-footer">
                <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/mural_starrynight.jpg" alt="">
                <div class="card-body">
                <h4 class="card-title">
                  <h3>Mural Services</h3>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="d-flex justify-content-center align-items-end card-footer">
                <input class="btn btn-warning btn-lg d-flex" value="See More" type="submit" name="Shirts">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img style="width: 363px; height: 207px;" class="card-img-top" src="assets/img/personalized_oilpaint.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <h3>Others</h3>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="d-flex justify-content-center card-footer">
                <input class="btn btn-warning btn-lg" value="See More" type="submit" name="Shirts">
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
<!-- END CONTACT SECTION -->

<!-- FOOTER SECTION -->
<?php include 'footer.php'; ?>
<!-- Start Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="now-ui-icons ui-1_simple-remove"></i>
          </button>
          <h4 class="title title-up">Book an artist</h4>
        </div>
        <div class="modal-body">
          <form method="post" style="display: flex; flex-direction: column;">
            Name:<input id="inputName" type="text" placeholder="Your full name here...">
            Email:<input id="inputEmail" type="Email" placeholder="@domain.com">
            Contact Number: <input id="inputNumber" type="Number" placeholder="09*********">
            <br>
            <select>
              <option selected="selected" hidden="">Select Your Request</option>
              <option>Traditional</option>
              <option>Digital/Logo</option>
              <option>Mural</option>
              <option>Web Design</option>
              <option>Graphic Design</option>
            </select>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button id="submitBtn" type="submit" class="btn btn-warning">Submit</button>

        </div>
      </div>
    </div>
  </div>





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

    function scrollToSuggestion() {

      if ($('.section-contact-us').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-contact-us').offset().top
        }, 1000);
      }
    }

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