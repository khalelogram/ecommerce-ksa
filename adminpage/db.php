<?php

$dbconnection = mysqli_connect("localhost", "root", "", "ecommerce_db");

if ($dbconnection->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>