<?php include('inc/header.php'); ?>
<?php include('registration/server.php'); 

if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $name = $record['username'];
        $address = $record['address'];
        $id =   $record['id'];
    }

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/profile.css">

<div class="container-fluid p-0">
<!-- Bootstrap row -->
<div class="row" id="body-row">
   
<?php include('inc/sidebar.php'); ?>
    <!-- MAIN -->
    <div class="col">
      

    <!--     <h1>
            <tbody>
            <?php while ($row = mysqli_fetch_array($results)) : ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['address']; ?></td>

                    <td>
                        <a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            
        </tbody>
            Company Name
            <small class="text-muted">Version 2.1</small>
        </h1>
        
       
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
         -->


        <div class="card">
            <h4 class="card-header">Admin Profile 
                <div><p>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#createaccount">
                    Create Account
                    </button>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editprofile">
                      Edit Profile
                    </button>
                    <a href="registration/index.php?logout='1'" class="btn btn-sm btn-info" >Log out</a>
                    </p>
                </div>
                <!-- Button trigger modal -->



<!--EDIT PROFILE Modal -->
<div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
                <!-- display validation error -->
                <div class="form-group">
                <?php include('errors.php');?>
                    <label>Lastname <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>">
                    </label>
                    <label>Firstname <input type="text" class="form-control" name="firstname" value="<?php echo $lastname;?>">
                    </label>
                    <label>Email <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                    </label>
                    <label>ContactNumber <input type="text" class="form-control" name="contact_no" value="<?php echo $contact_no;?>">
                    </label>
                    <label>Address <input type="text" class="form-control" name="address" value="<?php echo $address;?>">
                    </label><br>
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                    <label>Password <input type="password" class="form-control" name="password_1">
                    </label>
                    <label>Confirm Password <input type="password" class="form-control" name="password_2">
                    </label>
                    <button type="submit" name="register" class="btn btn-primary btn-sm">Confirm</button>
                </div> 
         </div>
      </div>
      <div class="modal-footer">
    </div>
  </div>
</div>

<!--CREATE ACCOUNT Modal -->
<div class="modal fade" id="createaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register new Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="">
                <!-- display validation error -->
                <div class="form-group">
                <?php include('errors.php');?>
                    <label>Lastname <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>">
                    </label>
                    <label>Firstname <input type="text" class="form-control" name="firstname" value="<?php echo $lastname;?>">
                    </label>
                    <label>Email <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                    </label>
                    <label>ContactNumber <input type="text" class="form-control" name="contact_no" value="<?php echo $contact_no;?>">
                    </label>
                    <label>Address <input type="text" class="form-control" name="address" value="<?php echo $address;?>">
                    </label><br>
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                    <label>Password <input type="password" class="form-control" name="password_1">
                    </label>
                    <label>Confirm Password <input type="password" class="form-control" name="password_2">
                    </label>
                    <button type="submit" name="register" class="btn btn-primary btn-sm">Create</button>
                </div> 
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            </h4>
            <div class="card-body">
                <ul>
                   <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php if (isset($_SESSION['username'])): ?>
                                    <p>Welcome !!<br> <strong><?php echo $_SESSION['username'];?></strong></p>
                                    <?php endif  ?>
                                    </h5>
                                    <h6>
                                        Person Position
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
                </ul>
            </div>
        </div>
       


    </div><!-- Main Col END -->
    
</div><!-- body-row END -->
  
  
</div><!-- container -->





<?php include ('inc/footer.php'); ?>
