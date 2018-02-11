<?php


	include("connect.php");
	include("functions.php");
	
	$error = "";

	if(isset($_POST['updatefirstname']))
	{
		$newFirst = mysqli_real_escape_string($con, $_POST['newFirst']); 
		if(strlen($newFirst) < 4)
		{
			$error = " <div class=text-success;>Enter at least 4 characters </div> ";
		}
		else
		{
					
			$email = $_SESSION['email'];
			if(mysqli_query($con, "UPDATE users SET firstName ='$newFirst' WHERE email='$email'"))
			{
				$error = "Your First Name was changed successfully";
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
	<title>Update Firstname</title>
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