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
</head>

<body id="body" style="text-align: center;">
	<div id="wrapper">
<?php 
include("header2.php");
 ?>
					



<form style="background: ; padding: 20px; align-items: center;" action="updateaccount-inc.php" method="post">
	<input type="text" name="b" placeholder="Acct Balance <?php echo "$b"; ?>" disabled><br>
	<div style=" "> 
			<h1 style="color: green; padding: 24px; "> Update Your Bitcoin Wallet Address</h1><br>
	</div>

	<label for="uw"> Enter New wallet address below</label><br>
	<input type="text" name="newwallet" placeholder="<?php echo "$w"; ?>" autofocus autosave><br>
	<input type="submit" name="updatewallet" value="Update Wallet"/><br/>

</form>
<h5 >Cancel ? </h5>
<a href="profile.php">Return to Your Profile</a>

</div>
</body>
<?php 
include("footer.php");
 ?>
</html>