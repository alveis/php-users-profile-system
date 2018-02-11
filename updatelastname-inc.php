<?php


	include("connect.php");
	include("functions.php");
	
	$error = "";

	if(isset($_POST['updateLastname']))
	{
		$newLast = mysqli_real_escape_string($con, $_POST['newLast']);
		if(strlen($newLast) < 4)
		{
			$error = " <div class=text-success;>Enter at least 4 characters </div> ";
		}
		else
		{
					
			$email = $_SESSION['email'];
			if(mysqli_query($con, "UPDATE users SET lastName ='$newLast' WHERE email='$email'"))
			{
				$error = "<div>Your Last Name was changed successfully,</div> ";
			}
			
		}
	}
	
	
	if(logged_in())
	{
		
		
	?>
		
		
		<?php
	}else
	{
		header("location: profile.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Lastname</title>
</head>
<body style="background: #ccffcc;">

<div id="wrapper">
	<?php 

		include("header2.php");
			
?>

<br><br>
<fieldset><legend></legend>

<a href="profile.php">Return to Profile</a>
</fieldset>
</div>
</body>
</html>