<?php 
include("connect.php");
include("functions.php");

	$error = "";

 ?>
<!doctype html>

<html>
	
	<head>
		
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	</head>
	
	
	<body id="body">
			<div id="wrapper">
<?php 
include("header2.php");

 ?>
	
	


			
			<div id="formDiv" >
				
				
			<div style="text-align: center;">
					<form method="POST" action="Register-inc.php" enctype="multipart/form-data">
				<p>
				<label for="fname">My First Name is :</label>
				<input type="text" name="fname" class="inputFields" required autofocus />
				
				<label>My Last Name is :</label>
				<input type="text" name="lname"  class="inputFields" required/></p><br/>
				
				<label>I want to use this Email:</label><br/>
				<input type="text" name="email"  class="inputFields" required/><br><br/>
				
				<label>My Password should be :</label><br/>
				<input type="password" name="password" class="inputFields"  required/>
				
				<label>Password Confirmation:</label><br/>
				<input type="password" name="passwordConfirm"  class="inputFields" required/><br/><br/>
			

<!--
				<label>Address:</label><br/>
				<input type="text" name="Address" id="Address"/><br/>
				
				<label>Image:</label><br/>
				<input type="file" name="image" id="imageupload"/><br/><br/>
				
-->			
				<input type="checkbox" name="conditions" />
				<label>I agree with terms and conditions</label><br/><br/>
				
				<input type="submit"  class="theButtons"  name="submit" value="click to Register" />

				
				
				</form><br>
				<p style="align-content:center; background: #c0c0c0; border: 50px; border-radius: 24px; ">
					<a href="login.php">Login Here if already Registered</a>
				</p><br>
			</div>
		
		</div>
		
	
	</body>
<?php 
include("footer.php");
 ?>


</html>

<!--<form method="POST" action="index.php" enctype="multipart/form-data">The enctype is needed to upload files or images-->
<!--<label>First Name:</label>  Label tag is new in html5-->