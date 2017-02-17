
<?php

    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="admin"){
      header('Location: index.php?err=2');
    }

mysqli_connect("localhost", "root", "") or die("Connection Failed"); 
mysqli_select_db("phpro_auth")or die("Connection Failed"); 


$id = $_GET['id'];

$query = "DELETE FROM task WHERE taskID = '".$id."'";
	if(mysqli_query($query))
	{
		 echo("<script>location.href = 'http://localhost/CompanyCalendar/UInterfaces/ManagerPanel/pages';</script>");
	} 
		 
	else{
		echo "fail";
		} 
		
		?>