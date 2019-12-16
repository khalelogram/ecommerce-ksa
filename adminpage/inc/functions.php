<?php

include 'db.php';

function createProduct(){
	global $dbconnection;
	$prodname = $_POST['prodname'];
	$proddesc = $_POST['proddesc'];
	$prodcat = $_POST['prodcat'];
	$prodprice = $_POST['prodprice'];
	$prodquant = $_POST['prodquant'];

	$query = "INSERT INTO `products`(`prod_name`, `prod_cat`, `prod_price`, `prod_desc`, `prod_quantity`) VALUES ('$prodname','$prodcat','$prodprice','$proddesc','$prodquant')";

	$result = mysqli_query($dbconnection, $query);
	header('location: tshirt.php');
	
	if (!$result) {
		return "Failed to Add Product";
	}else{
		return "Successfully Added Product";

	}
}
//*https://stackoverflow.com/questions/28400953/updating-database-field-in-php-when-link-is-pressedZ*//
function updateTable(){
	global $dbconnection;
	$prodid = $_POST['prodid'];
	$prodname = $_POST['prodname'];
	$proddesc = $_POST['proddesc'];
	$prodcat = $_POST['prodcat'];
	$prodprice = $_POST['prodprice'];
	$prodquant = $_POST['prodquant'];


	$query = "UPDATE `products` SET `prod_name`='$prodname',`prod_cat`='$prodcat',`prod_price`='$prodprice',`prod_desc`='$proddesc',`prod_quantity`='$prodquant' WHERE `products`.`prod_id` = '$prodid'";

	$result = mysqli_query($dbconnection, $query);

}
if(isset($_GET['del'])){
		$id = $_GET['del'];

		mysqli_query($db, "DELETE FROM products WHERE prod_id=$id");
		header('location: tshirt.php');
}	
?>