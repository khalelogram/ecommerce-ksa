<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="style.css1">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<div class = "header">
			<h2>Home Page</h2>
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

			<?php if (isset($_SESSION['username'])): ?>
				<p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
				<p><a href="index.php?logout='1'" style="color:red;">Log out</a></p>
			<?php endif  ?>
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