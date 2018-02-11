<?php


	include("connect.php");
	include("functions.php");
	
	$error = "";

	if(isset($_POST['updatewallet']))
	{
		
		$wallet = mysqli_real_escape_string($con, $_POST['newwallet']);
		if(strlen($wallet) < 8)
		{
			$error ="This does not look like a wallet address, please recheck the values you entered <a href =profile.php>Return to profile</a> <br> <a href='updateaccount.php'>Try Again ?</a> " ;
		}
		else
		{
					
			$email = $_SESSION['email'];
			if(mysqli_query($con, "UPDATE users SET wallet='$wallet' WHERE email='$email'"))
			{
				$error = "Your Wallet Address was changed successfully, <a href='profile.php'>click here</a> to go to the profile";
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
	<title>password change status</title>
</head>
<body style="background: #ccffcc;">

<div id="wrapper">
	

<?php 
include("header2.php");
 ?>

 <div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
 
</div>
</body>
<?php 
include("footer.php");
 ?>
</html>