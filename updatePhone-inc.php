<?php


	include("connect.php");
	include("functions.php");
	
	$error = "";

	if(isset($_POST['updatePhone']))
	{
		$newadd = mysqli_real_escape_string($con, $_POST['newPhone']);
		if(strlen($newPhone) < 8)
		{
			$error = " <div class=text-success;>Address too short. <br/> <a href='updatePhone.php'>Try Again ? </div> ";
		}
		else
		{
					
			$email = $_SESSION['email'];
			if(mysqli_query($con, "UPDATE users SET phone ='$newPhone' WHERE email='$email'"))
			{
				$error = "<div>Your Address was changed successfully,</div> ";
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
	<title>Update address</title>
</head>
<body style="background-color: #EEE8AA; padding: 8px; ">
	<div id="wrapper">
<?php 
include("header2.php");
 ?>

 <div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
 
<br><br>
<fieldset><legend></legend>

<a href="profile.php">Return to Profile</a>
</fieldset>
</div>
</body>
<?php 
include("footer.php");
 ?>
</html>