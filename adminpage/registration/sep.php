<?php include('server.php');?>
<?php include('errors.php');?>

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
 

 
			<div class="container">
                  <div class = "header">
                    <h4>Register</h4>
                       </div>
                    <form method="post" action="index.php" style="display: flex; flex-direction: column;">
                      <!-- display validation error -->
                      <?php include('adminpage/registration/errors.php');?>
                       <!-- <div class="input-group"> -->
                          <label>Lastname</label>
                          <input type="text" name="lastname" value="<?php echo $lastname;?>">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <label>Firstname</label>
                            <input type="text" name="firstname" value="<?php echo $lastname;?>">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $email;?>">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <label>Contact Number</label>
                            <input type="text" name="contact_no" value="<?php echo $contact_no;?>">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <label>Address</label>
                            <input type="text" name="address" value="<?php echo $address;?>">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username;?>">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <label>Password</label>
                            <input type="password" name="password_1">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <label>Confirm Password</label>
                            <input type="password" name="password_2">
                        <!-- </div> -->
                        <!-- <div class="input-group"> -->
                            <button type="submit" name="register" class="btn btn-primary btn-sm">Register</button>
                        <!-- </div>  -->
                      <p><a href="index.php" class="btn btn-info btn-sm" >Sign in</a></p>   
                    </form>
                </div>

