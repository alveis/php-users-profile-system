<?php  
include("connect.php");


$em = $_SESSION['email'];

$sql = "SELECT id, firstName, lastName, Wallet, balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$uid = $row[ "id" ];
		$fn = $row[ "firstName" ];
		$ln = $row[ "lastName" ] ;
		$w = $row["Wallet"] ;
		$b = $row["balance"] ;
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

<body id="body">

<div id="wrapper">
	<?php 
include("header2.php");
	 ?>
	




<form style="background: grey; padding: 20px; align-items: center;" action="updatelastname-inc.php" method="post">

	<label for="newlast"> Change Your last Name</label><br>
	<input type="text" name="newLast" placeholder="<?php echo "$ln"; ?>" autofocus ><br><br>
	<input type="submit" name="updateLastname" value="Update last Name"/><br/><br/>
	
	<a href="profile.php">Return to Your Profile</a>
	

</form>
</div>
</body>
<?php 
include("footer.php");
 ?>
</html>