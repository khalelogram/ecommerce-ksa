<?php 
	
	session_start();

	$prodname = "";
	$proddesc = "";
	$prodcat = "";
	$prodprice = "";
	$prodquant = "";
	$image = "";
	$prodid = 0;
	$edit_state = false;

	$db = mysqli_connect('localhost', 'root', '', 'ecommerce_db');

	// == SAVE

	if(isset($_POST['save'])){
		$prodname = $_POST['prodname'];
		$proddesc = $_POST['proddesc'];
		$prodcat = $_POST['prodcat'];
		$prodprice = $_POST['prodprice'];
		$prodquant = $_POST['prodquant'];
	  	$image = $_FILES['image']['name'];
		$target = "shoes-web/".basename($image);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

		$query = "INSERT INTO `products`(`prod_name`, `prod_cat`, `prod_price`, `prod_desc`, `prod_quantity`,`prod_img`) VALUES ('$prodname','$prodcat','$prodprice','$proddesc','$prodquant','$image')";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "Product Added";
		header('location: shoes.php');
	}
	}
	// == DELETE

	if(isset($_GET['del'])){
		$id = $_GET['del'];

		mysqli_query($db, "DELETE FROM products WHERE prod_id=$id");
		$_SESSION['msg'] = "Product Deleted";
		header('location: shoes.php');
	}

	// == UPDATE

	if(isset($_POST['update'])){
		$prodname = mysqli_real_escape_string($db,$_POST['prodname']);
		$proddesc = mysqli_real_escape_string($db,$_POST['proddesc']);
		$prodcat = mysqli_real_escape_string($db,$_POST['prodcat']);
		$prodquant = mysqli_real_escape_string($db,$_POST['prodquant']);
		$prodprice = mysqli_real_escape_string($db,$_POST['prodprice']);
		$prodid = mysqli_real_escape_string($db,$_POST['prodid']);
		$image = $_FILES['image']['name'];
		$target = "shoes-web/".basename($image);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

		mysqli_query($db, "UPDATE products SET prod_name ='$prodname', prod_cat ='$prodcat',prod_price ='$prodprice',prod_desc ='$proddesc',prod_quantity ='$prodquant',prod_img ='$image' WHERE prod_id = '$prodid'");
		$_SESSION['msg'] = "Product '$prodname' Updated";
		header('location: shoes.php');
	}
	}
	$result = mysqli_query($db, "SELECT * FROM products");

 ?>