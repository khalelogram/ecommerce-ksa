<?php
include 'adminpage/inc/db.php';

  $tshirt = "SELECT * FROM `products` WHERE `prod_cat` = 'tshirt' LIMIT 4";
$result2 = mysqli_query($dbconnection, $tshirt);

  if(!$result2)
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
<div id="load_data_table" class="container d-flex flex-wrap justify-content-around col-12" style="padding-top: 15px;">
 <?php while ($row = mysqli_fetch_array($result2)): ?>
  
    <div class="card" style="width: 18rem; ">
      <?php echo '<img src="adminpage/shirts-web/'.$row['prod_img'].'"width="290" height="200" />'; ?>
      <div class="card-body">
        <p class="card-title"><?php echo "<h5>".$row['prod_name']."</h5>";?></p>
        <p class="card-text"><?php echo $row['prod_desc'];?></p>
        <p class="card-text">PHP <?php echo $row['prod_price'];?></p>
        <p class="card-text">Quantity:<?php echo $row['prod_quantity'];?></p>
        <a href="#" class="btn btn-primary">View Item</a>
      </div>
    </div>
  
  <?php endwhile; ?>  
  </div>
  <div class="container d-flex justify-content-center" id="remove_row">
        <div><button type="button" name="btn_more" data-vid="<?php echo $prod_id; ?>" id="btn_more" class="btn btn-primary btn-lg">Load More</button></div>
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
  <script>
   $(document).ready(function(){
        $(document).on('click', '#btn_more', function(){
             var last_video_id = $(this).data("vid");
             $('#btn_more').html("Loading...");
             $.ajax({
                  url:"ajax_more.php",
                  method:"POST",
                  data:{last_video_id:last_video_id},
                  dataType:"text",
                  success:function(data)
                  {
                       if(data != '')
                       {
                            $('#remove_row').remove();
                            $('#load_data_table').append(data);
                       }
                       else
                       {
                            $('#btn_more').html("No Data");
                       }
                  }
             });
        });
   });
</script>
</body>

</html>