
<?php
mysqli_connect("localhost", "root", "") or die("Connection Failed"); 
mysqli_select_db("phpro_auth")or die("Connection Failed"); 


$id = $_GET['meetingsID'];

$query = "DELETE FROM meetings WHERE meetingsID = '".$id."'";
	if(mysqli_query($query))
	{
		 echo("<script>location.href = 'http://localhost/CompanyCalendar/UInterfaces/ManagerPanel/pages/editmeetings/editmeetings.php';</script>");
	} 
		 
	else{
		echo "fail";
		} 
		
		?>