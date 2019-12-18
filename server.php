<?php
	
	$lastname = "";
	$firstname = "";
	$email = "";
	$contact_no = "";
	$address = "";
	$username = "";
	$errors = array();
	//connect to the database
	$db = mysqli_connect('localhost','root', '', 'ecommerce_db');


	//if the register button is clicked
	if (isset($_POST['register'])) {
		
		$lastname = mysqli_real_escape_string($db,$_POST['lastname']);
		$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$contact_no = mysqli_real_escape_string($db,$_POST['contact_no']);
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

		// ensure that form fields are filled properly
		if (empty($lastname)) {
			array_push($errors, "Lastname is required");	
		}
		if (empty($firstname)) {
			array_push($errors, "Firstname is required");	
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($contact_no)) {
			array_push($errors, "Contact Number is required");
		}
		if (empty($username)) {
			array_push($errors, "Username is required");	
		}
		if (empty($address)) {
			array_push($errors, "Address is required");	
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors,"The password did not match");
		}

		// if there are no errors,save user to database
		if(count($errors) == 0){
			$password = md5($password_1);//encrypt password before storing to in database
			$sql = "INSERT INTO users (lastname,firstname,email,contact_no,address,username,password) VALUES 
			('$lastname','$firstname','$email','$contact_no','$address','$username','$password')";
			// echo $sql;
			$result = mysqli_query($db,$sql);
			if(!$result) {
				exit("Query Failed:" . mysqli_error($db));
			}
		}
}

	//log user from login page
	if (isset($_POST['login'])) {
		//echo json_encode($_POST);
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		//ensure that form fields are filled
		if (empty($username)) {
			array_push($errors, "Username is required !");
		}
		if (empty($password)) {
			array_push($errors, "Password is required !");
		}

		if (count($errors) == 0) {
			$password = md5($password); //encrypt password
			$query = "SELECT * FROM  users WHERE username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('Location:index.php'); //redirect to home page
			
			}else{
				array_push($errors, "The username or password did not match");

			}

		}
	}



	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php');
	}

?>