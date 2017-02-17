<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Signup-CompanyCalendar </title>

   <style>
		@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
		@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

		body{
			margin: 0;
			padding: 0;
			background: #fff;

			color: #fff;
			font-family: Arial;
			font-size: 12px;
		}

		.body{
			position: absolute;
			top: -20px;
			left: -20px;
			right: -40px;
			bottom: -40px;
			width: auto;
			height: auto;
			background-image: url(background.jpg);
			background-size: cover;
			<!---webkit-filter: blur(5px);-->
			z-index: 0;
		}

		.grad{
			position: absolute;
			top: -20px;
			left: -20px;
			right: -40px;
			bottom: -40px;
			width: auto;
			height: auto;
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
			z-index: 1;
			opacity: 0.7;

		}

		.header{
			position: absolute;
		    top: calc(48% - 144px);
			left: calc(47% - 255px);
			z-index: 2;
		}

		.header div{
			float: left;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 50px;
			font-weight: 200;

		}

		.header div span{
			color: #5379fa !important;
		}

		.signup{
			position: absolute;
			top: calc(50% - 75px);
		    left: calc(54% - 50px);
			height: 150px;
			width: 270px;
			padding-left: 150px;
			z-index: 2;
		}

		.signup input[type=text]{
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
		}
		.signup input[type=radio]{
			width: 15px;
			height: 15px;
			background: transparent;
			

		}
		.signup input[type=password]{
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
			margin-top: 10px;
		}
		.signup input[type=email]{
			width: 250px;
			height: 30px;
			background: transparent;
			border: 1px solid rgba(255,255,255,0.6);
			border-radius: 2px;
			color: #fff;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 4px;
		}

		.signup input[type=submit]{
			width: 260px;
			height: 35px;
			background: #fff;
			border: 1px solid #fff;
			cursor: pointer;
			border-radius: 2px;
			color: #a18d6c;
			font-family: 'Exo', sans-serif;
			font-size: 16px;
			font-weight: 400;
			padding: 6px;
			margin-top: 10px;
		}

		.signup input[type=button]:hover{
			background-color: yellow;
			opacity: 0.5;
		}

		.signup input[type=button]:active{
			opacity: 0.6;

		}

		.signup input[type=text]:focus{
			outline: none;
			border: 1px solid rgba(255,255,255,0.9);
		}
		.signup input[type=email]:focus{
			outline: none;
			border: 1px solid rgba(255,255,255,0.9);
		}
		.signup input[type=password]:focus{
			outline: none;
			border: 1px solid rgba(255,255,255,0.9);
		}

		.signup input[type=button]:focus{
			outline: none;
		}
		.signup label[for=signed]{
			background: transparent;
			color: rgba(255,255,255,0.6);
			font-family: 'Exo', sans-serif;
			font-size: 13px;
			padding-top: 20px;
		}
		a:link{ color: rgba(255,255,255,0.9);}
		a:visited{color:green;}
		a:hover{color:hotpink;}
		a:active{color:blue;}

		::-webkit-input-placeholder{
		   color: rgba(255,255,255,0.6);
		}

		::-moz-input-placeholder{
		   color: rgba(255,255,255,0.6);
		}
</style>

    <script src="js/prefixfree.min.js"></script>

</head>
<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<!--<div>Company<span>Calendar</span></div>-->
			 <a="" href="http://localhost/view2"><img src="http://localhost/CompanyCalendar/login/logo.png" alt="Mountain View" style="width:;height:;">			 	
							   
		</div>
		<div>	
		<br>
	
	<form action="signup.php" method="post">
			
		<div class="signup">	
  			<fieldset>

					<input type="text" name="name" class="form-control" placeholder="Name" required autofocus><br/>
					<input type="text" name="lastname" class="form-control" placeholder="Last Name" required autofocus><br/>
					<input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
					<input type="password" name="password" class="form-control" placeholder="Password" required><br/>
					<input type="email" name="email" class="form-control" placeholder="E-Mail" required><br/>
					<input type="radio" name="role" value="Admin">Admin</input>
					<input type="radio" name="role" value="Employee">Employee</input>
					<input type="radio" name="role" value="Manager">Manager</input>
					<input type="submit" value="Sign up">
									
					<?php
                        if(isset($_POST['submit'])){
                        	if(isset($_POST['role'])){
	                        	if(role == 'Admin'){
	                        		header("Location: C:\xampp\htdocs\CompanyCalendar\UInterfaces\AdminPanel\pages\viewTasks\viewTasks.php");
	                        	}
	                        	elseif(role=='Employee'){
	                        		header("Location: UInterfaces\EmployeePanel\pages\viewTasks\viewTasks.php");
	                        	}
	                        	elseif(role=='Manager'){
	                        		header("Location: UInterfaces\ManagerPanel\pages\viewTasks\viewTasks.php");
	                        	}
	                        }
                        }
                        $errors = array(
                            1=>"Can not sign up",
                            2=>"Please sign up to access this area"
                            );
                        $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                        if ($error_id == 1) {
                            	echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                            }
                        elseif ($error_id == 2) {
                            	echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                            }
                    ?> 

			</fieldset>
			<label for="signed">If you are already signed up, please click <a href="index1.php">HERE</a> to LOG IN.</label>
		</div>
	</form>
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>
</html>