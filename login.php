<?php

	include("connect.php");
	include("functions.php");
	
 ?>
<!doctype html>

<html>
	
	<head>
		
	<title>Login Page</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	
	</head>
	
	
	<body id="body">
		

		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
		
		<div id="wrapper">
			
		<?php 
		include("header2.php");

		 ?>
			<div style="background: yellow; padding-left: 36px;">
						<?php

		if(logged_in())
	{
		session_start();
		header("location:profile.php?user_already_logged_in");
				$error ="You are already Logged in";
				echo $error ;
		
			}elseif (isset($_GET['user_logged_out']) === true) {
		echo "you are now logged out" ;
			}
			
						?>	
			</div>
					
			<div id="formDiv">
				
				<form method="POST" action="login-inc.php">
				
				<label>Email:</label><br/>
				<input type="text" class="inputFields"  name="email" required autofocus /><br/><br/>
				
				
				<label>Password:</label><br/>
				<input type="password" class="inputFields"  name="password" required/><br/><br/>
				
				<input type="checkbox" name="keep" />
				<label>Keep me logged in</label><br/><br/>
			   
				<input type="submit" name="submit" class="theButtons" value="login" />

				
				
				</form>
				<br>
				<a href="changepassword.php">Reset Password</a>
			
			<br><br> 
			<p>Not Yet Registered ? </p>
			<p><a style="background: #c0c0c0; color: #990066; padding: 4px; " href="register.php">Click Here to Register</a> </p>
			</div>
		
		</div>
		
	</body>
<?php 
Include("footer.php");
 ?>

</html>