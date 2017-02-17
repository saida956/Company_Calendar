<?php
session_start();
include 'database-config.php';
if (isset($_POST['role']) and isset($_POST['username']) and isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$sql = " SELECT* FROM users WHERE username = '$username' AND password = '$password'  AND role = '$role'"; 

	$result = mysqli_query($dbh, $sql) or die(mysqli_error());
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $username;
	}
	else{
		echo "Invalid Login Credentials";
	}
}
 header("Location: index1.php");
?>