<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		session_start();
		header("location:profile.php?Login_succesful");
		exit();
	}
	
	$error = "";

	if(isset($_POST['submit']))
	{
	
	    $email = mysqli_real_escape_string($con, $_POST['email']);
	    $password = mysqli_real_escape_string($con, $_POST['password']);
		$checkBox = isset($_POST['keep']);
		
		if(email_exists($email,$con))
		{
			$result = mysqli_query($con, "SELECT password FROM users WHERE email='$email'");
			$retrievepassword = mysqli_fetch_assoc($result);
			
			if(!password_verify($password, $retrievepassword['password']))
			{
				$error = "Password is incorrect";
				header("location:login.php?login_failed_&reason_invalid_password");
			}
			else
			{
				$_SESSION['email'] = $email;
				
				if($checkBox == "on")
				{
					setcookie("email",$email, time()+3600);
				
									}
				
				header("location: profile.php?Login_succesful");
			}
			
			
		}
		else
		{
			$error = "Email Does not exists";
		}
		
	
	}
	header("Location:../index.php");
	exit();

?>


<!doctype html>

<html>
	
	<head>
		
	<title>Login Page</title>
	<link rel="stylesheet" href="css/styles.css"  />
	
	</head>
	
	
	<body>
		<div id="wrapper">
		
		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
  </body>


 <?php 
include("footer.php");
  ?>
  </html>