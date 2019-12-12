
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
        <a class="navbar-brand" href="#" rel="tooltip" title="Desgined & Developed by Jess Del Rosario" data-placement="bottom">
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
              <a class="dropdown-item" href="shop.php">
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


<!-- CONTENT -->
<!-- Header -->
<?php
  include 'header.php';
?>
<!-- END Header -->
  <br>
  <div class="row introduction align-content-stretch">
    <div class="col-md-6 introduction_text" style="width: 100%;">
      <h2 class="intro_title" style="font-family: 'Baskervville'">What we are</h2>
      <h5 class="intro" style="font-family: 'Baskervville'">HeartMade is an organization built to help local and aspiring artists to grow. HeartMade's goal is to be a platform which aims to help the Philippines' local artists to make a living through their creations.</h5>
      <h5 class="intro2" style="font-family: 'Baskervville'">We hope to be an organization which inspires both adults and the young to dive into the art scene and pull out the inner artists in them.</h5>
    </div>
    <div class="col-md-6 intro_carousel" style="width: 1000px;">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block" src="./examples/slide.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h4 style="color: black; font-family: 'Baskervville'">We create.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block" src="./examples/slide1.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h4 style="color: black; font-family: 'Baskervville'">We inspire.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block" src="./examples/slide2.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h4 style=" font-family: 'Baskervville'">We develop talents.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block" src="./examples/slide3.jpg" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
              <h4 style="font-family: 'Baskervville'">We deliver.</h4>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <i class="now-ui-icons arrows-1_minimal-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <i class="now-ui-icons arrows-1_minimal-right"></i>
        </a>
      </div>
    </div>  
  </div>
  <br>
  <br>

  <div class="content" style="display: flex;">
    <div class="content_image">
      <img src="assets/img/frontlogo.png">
    </div>
    <div class="content_text">
      <h1 style="font-family: 'Dancing script'">How we started</h1>
      <h5 style="font-family: 'Baskervville'">The idea of HeartMade was conceptualized by Pauline Bactad with the goal of starting a merchandise for herself. She finetuned it together with her partner and co-founder, Jess Del Rosario to be a startup which aims to help the whole art scene in the country.</h5>
    </div>
  </div>
<!-- CONTENT END -->


<!-- TEAM LIST -->

  <div class="section section-team text-center">
          <div class="container">
              <h2 class="title">Here is our team</h2>

              <div class="team">
                  <div class="row" style="justify-content: center;">
                      <div class="col-md-4">
                          <div class="team-player">
                              <img src="assets/img/jess.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised" height="160" width="160">
                              <h4 class="title">Jess Del Rosario</h4>
                              <p class="category text-primary">Web Designer & Developer</p>
                              <p class="description">Jess Del Rosario is a graduate of Business Administration from the University of Caloocan City and previously worked as a technical recruiter. He decided to shift careers after six months due to the frustration of not having to do what he really wanted to do.</p>
                              <a href="https://www.facebook.com/jessdrosario" class="btn btn-info btn-icon btn-round" target="_blank"><i class="fab fa-facebook-square"></i></a>
                              <a href="https://www.linkedin.com/in/jess-delrosario/" class="btn btn-info btn-icon btn-round" target="_blank"><i class="fab fa-linkedin"></i></a>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="team-player">
                              <img src="assets/img/pau.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised" height="160" width="160">
                              <h4 class="title">Pauline Bactad</h4>
                              <p class="category text-primary">Traditional&Digital Artist</p>
                              <p class="description">Pauline Bactad is a self-taught artist since she was young. She is a graduate of Fine Arts from the University of Santo Tomas and is currently a freelance graphic designer, traditional and digital artist.</p>
                              <a href="https://www.facebook.com/vangoghsdaughter" class="btn btn-info btn-icon btn-round" target="_blank"><i class="fab fa-facebook"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </div>
<!-- TEAM END -->


  <!-- Contact US  -->
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
                        <input type="Email" class="form-control" placeholder="Email...">
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
    <!-- CONTACT US -->

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- END FOOTER -->

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