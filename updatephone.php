<?php  
include("connect.php");


$em = $_SESSION['email'];

$sql = "SELECT phone FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$phone = $row[ "phone" ];
	}
} else {
		
	}
	$con->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Persornal Info</title>
	<link rel="stylesheet" href="css/styles.css"  />	
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
</head>

<body style="padding-left: 60px; padding-right: 100PX;  font-size: 14px; padding-bottom: 60px; font-family: sans-serif; background:#ccffcc; ">

<div id="wrapper">
	<?php 
include("header2.php");
	 ?>
	




<form style="background: grey; padding: 20px; align-items: center;" action="updatePhone-inc.php" method="post">

	<label for="newlast"> Change Your Phone Number</label><br>
	<input type="text" name="newPhone" placeholder="<?php echo "$phone"; ?>" autofocus ><br><br>
	<input type="submit" name="updatePhone" value="Update Phone Number"/><br/><br/>
	
	<a href="profile.php">Return to Your Profile</a>
	

</form>
</div>
</body>
<?php 
include("footer.php");
 ?>
</html>