<?php
   // define database related variables
   $database = 'phpro_auth';
   $host = 'localhost';
   $user = 'root';
   $pass = '';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);
   echo "I am inside phpro_auth";

   if(!$dbh){
      
      die("Connection failed: ". mysqli_connect_error());
   }
   
?>