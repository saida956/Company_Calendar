<?php
    //include 'dbhandler.php';  
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    
    
    
    
    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

    /*** mysql password ***/
    $mysql_password = '';

    /*** database name ***/
    $mysql_dbname = 'phpro_auth';

    try
    {
        //$dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        $dbh = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_dbname);
        /*** $message = a message saying we have connected ***/
        if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }


        /*** prepare the insert ***/
       // $query = "INSERT INTO users(username, password,name,surname,email,role) VALUES ('$username', '$password','$name','$lastname','$email','$role')";
       // $stmt = mysqli_prepare($dbh, $query) or die(mysqli_error($dbh));
        $stmt = $dbh->prepare("INSERT INTO users(username, password,name,surname,email,role) VALUES ('$username', '$password','$name','$lastname','$email','$role')");
        $stmt -> bind_param('ssssss', $username, $password, $name, $lastname, $email, $role);
        /*** bind the parameters ***/

        //mysqli_stmt_bind_param($stmt, 'ssssss', $username, $password, $name, $surname, $email, $role);
        


        /*** execute the prepared statement ***/
        if ( !mysqli_execute($stmt) ) {
            die( 'stmt error: '.mysqli_stmt_error($stmt) ); 
        }

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
            
            echo("<script>location.href = 'http://localhost/CompanyCalendar/UInterfaces/AdminPanel/pages/editusers/editusers.php';</script>");
        mysqli_close($dbh);
    }
    
    
    
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        if( $e->getCode() == 23000)
        {
            header('Location: addusers.php?err=5');
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            header('Location: addusers.php?err=5');
        }
    }
    //header("Location: index1.php");

?>