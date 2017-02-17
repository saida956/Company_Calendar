
<?php
mysqli_connect("localhost", "root", "") or die("Connection Failed"); 
mysqli_select_db("phpro_auth")or die("Connection Failed"); 


$id = $_GET['eventsID'];

$query = "DELETE FROM events WHERE eventsID = '".$id."'";
	if(mysqli_query($query))
	{
		 echo("<script>location.href = 'http://localhost/CompanyCalendar/UInterfaces/ManagerPanel/pages/EditEvents/editevents.php';</script>");
	} 
		 
	else{
		echo "fail";
		} 
		
		?>