<?php 
	require 'database-config.php';

	session_start();
	
	$username = "";
	$password = "";
	$role = "";
	$email ="";
	$name = "";
	$surname = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	if (isset($_POST['role'])) {
		$password = $_POST['role'];

	}
	if (isset($_POST['email'])) {
		$password = $_POST['email'];

	}
	if (isset($_POST['name'])) {
		$password = $_POST['name'];

	}
	if (isset($_POST['surname'])) {
		$password = $_POST['surname'];

	}

	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM users WHERE username=:username AND password=:password AND role=:role AND email=:email AND name=:name AND 
	surname=:surname';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password, ':role' => $role, ':email' => $email, ':name' => $name,
		':surname' => $surname));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];
        $_SESSION['sess_email'] = $row['email'];
        $_SESSION['sess_name'] = $row['name'];
        $_SESSION['sess_surname'] = $row['surname'];
		$_SESSION['sess_userpic'] = $row['ProfilePic'];


        echo $_SESSION['sess_userrole'];
			
		session_write_close();

		if( $_SESSION['sess_userrole'] == "Admin"){
			header('Location: http://localhost/companycalendar/UInterfaces/AdminPanel/pages/index.php');
		}
		
		elseif( $_SESSION['sess_userrole'] == "Manager"){
			header('Location: http://localhost/companycalendar/UInterfaces/ManagerPanel/pages/index.php');
		}
		else {
			header('Location: http://localhost/companycalendar/UInterfaces/EmployeePanel/pages/index.php');
		}
		
		
	}


?>