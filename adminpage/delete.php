<?php

include 'db.php';

if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($dbconnection, "DELETE FROM products WHERE prod_id=$id");
		header('location: tshirt.php');
}	
?>