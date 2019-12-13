<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<div class="container">
    	<div class = "header">
			<h4>Register</h4>
		</div>
			<form method="post" action="register.php">
				<!-- display validation error -->
				<?php include('errors.php');?>
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


	<!-- JS FILES -->
	<script src="js/core/jquery.min.js" type="text/javascript"></script>
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap.min.js" type="text/javascript"></script>

    <script src="js/plugins/bootstrap-switch.js"></script>

    <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>

    <script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

    <script  src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <script src="js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>

</body>
</html>