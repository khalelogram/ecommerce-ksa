<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
	<!-- <link rel="stylesheet" type="text/css" href="style.css1"> -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	
		<div class="container">
		
		<div class = "header">
			<h2>Login</h2>
		</div>

		<form method="post" action="index.php">
			<!-- display validation error -->
			<?php include('errors.php');?>
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