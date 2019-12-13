<?php include('server.php');?>
<?php include('errors.php');?>


  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="400" style="background-color: #716D6D;">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php" rel="tooltip" title="Designed & Developed by Jess Del Rosario" data-placement="bottom">
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

<!-- LOG IN -->
          <div class = "header">
              <h4><?php if (isset($_SESSION['username'])): ?>
                    <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
                    <p><a href="index.php?logout='1'" style="color:red;">Log out</a></p>
                  <?php endif  ?>
                  </h4>
                </div>
                <div class = "content">
                  <?php if(isset($_SESSION['success'])): ?> 
                    <div class="error success">
                      <h3>
                        <?php
                          echo $_SESSION['success'];
                          unset ($_SESSION['success']);
                        ?>
                      </h3>
                    </div>
                  <?php endif ?>

                  
                    
            </div>
<!-- LOG IN -->

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
          <li>
            <button class="btn btn-warning" data-toggle="modal" data-target="#loginModal">
              Log in
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>


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
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="now-ui-icons ui-1_simple-remove"></i>
          </button>
          <h4 class="title title-up">Log In</h4>
        </div>
        <div class="modal-body">
          <form method="post" style="display: flex; flex-direction: column;">
            Username: <input type="text" name="username" placeholder="Username">
            Password: <input type="password" name="password" placeholder="***********">
          </form>

            <div class="container">
              <div class = "header">
                <h2>Login</h2>
              </div>
                <form method="post" action="index.php">
                  <!-- display validation error -->
                  <?php include('adminpage/registration/errors.php');?>
                  <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username">
                  </div>
                  <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password">
                  </div> 
                  <div class="input-group">
                    <button type="submit" name="login" class="btn btn-primary btn-sm">Login</button>
                  </div>
                  <!-- <p>Not yet a member?<a href="register.php">Sign up</a></p> -->
                 </form>
              </div>
    
    </div>
          <p class="text-center">Not yet a member? <a href="" data-toggle="modal" data-target="#signupModal">Sign up here.</a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button id="submitBtn" type="submit" class="btn btn-warning">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="now-ui-icons ui-1_simple-remove"></i>
          </button>
          <h4 class="title title-up">Sign Up</h4>
        </div>
        <div class="modal-body">
          <form method="post" style="display: flex; flex-direction: column;">
            Name:<input id="inputName" type="text" placeholder="Your full name here...">
            Username: <input type="text" name="username" placeholder="Username">
            Password: <input type="password" name="password" placeholder="***********">
            Email:<input id="inputEmail" type="Email" placeholder="@domain.com">
            Contact Number: <input id="inputNumber" type="Number" placeholder="09*********">
            Select Gender<select>
              <option selected="selected" hidden="">Gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </form>


<!-- SIGN UP -->
              <div class="container">
                  <div class = "header">
                    <h4>Register</h4>
                       </div>
                    <form method="post" action="index.php">
                      <!-- display validation error -->
                      <?php include('adminpage/registration/errors.php');?>
                      <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username;?>">
                      </div>
                      <div class="input-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $email;?>">
                      </div>
                      <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password_1">
                      </div>
                      <div class="input-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_2">
                      </div>
                      <div class="input-group">
                        <button type="submit" name="register" class="btn btn-primary btn-sm">Register</button>
                      </div>
                      <p><a href="index.php" class="btn btn-info btn-sm" >Sign in</a></p>   
                    </form>
                </div>
<!-- SIGN UP -->


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button id="submitBtn" type="submit" class="btn btn-warning">Register</button>
        </div>
      </div>
    </div>
  </div>


  <script>
    function scrollToSuggestion() {

      if ($('.section-contact-us').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-contact-us').offset().top
        }, 1000);
      }
    }
  </script>