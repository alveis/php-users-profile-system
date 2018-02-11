<?php
include("connect.php");
include("functions.php");


	if(isset($_SESSION['email'])){
	?>
	<?php 
		$em = $_SESSION['email'];

	$sql = "SELECT id, firstName, address, lastName, Wallet, phone,  balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$uid = $row[ "id" ];
		$fn = $row[ "firstName" ];
		$ln = $row[ "lastName" ] ;
		$w = $row["Wallet"] ;
		$b = $row["balance"] ;
		$add = $row["address"];
		$id = $row["id"];
		$phone = $row["phone"];
	}
		
		} else {
		echo "0 results" ;
	}
	$con->close();
	?>


<!DOCTYPE html>
<html>
		<head>
				<title><?php echo "$fn $ln 's profile" ;  ?></title>
					<link rel="icon" type="image/png" href="images/aico.jpg">
					<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
					<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">

		</head>



<body id="body">
<div id="wrapper">


<!-- headers and notifications -->
<?php include("header2.php");	$error = "";	echo "$error"; ?>
<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
<div id="profile2">	<?php if (isset($_GET['Login_succesful']) === true) {	echo "you are logged in as <strong>$fn ,$ln ";	} ?></div>
		
				
<div id="profile1">							
    	<?php echo "<strong>$fn $ln 's </strong><em>profile</em>" ;  ?>
		<div id="profile1_1">Badge:<span id="profile1_2"> Beginner</span></div>
		<br/> 
</div>

<!-- <div> <?php echo "<img src='uploads/$id.jpg'>" ?> </div> -->



		

<p id="profile3">Click on any Item to update it</p>
<div id="profile4" >
<fieldset id="profile4_1" >
	<legend>
		<div id="profile4_2">
			<img src="images/pico.jpg"><strong> Personal</strong> <em>-Info</em>
		</div>
	</legend>
						

	<div id="profile5">
		<fieldset id="profile5_1">	
			First Name 
		</fieldset>
		<span id="profile5_2">
			::
		</span>

		<fieldset id="profile5_3">
			<a href="updatefirstname.php">
				<?php  echo $fn  ;  ?>
			</a> 
		</fieldset>
	</div>
	<br />

								<span id="profile6"></span><br>

						<div id="profile7">
							<fieldset style="display: inline-block; float: left; background-color:      #006666; "> 
								Last Name
							</fieldset>
							<span style="background-color: #BDB76B; padding: 4px;">
								::
						    </span> 
							<fieldset style="float: right; background-color: #cccccc;">
								<a style="padding-left: 8px; padding-right: 8px; " href="updatelastname.php"> 
									<?php echo $ln ; ?>		
								</a>
							</fieldset>
						</div> <br />

								<span style="background-color: #339966; padding-right: 600pt;"></span><br>

						<div style="display: inline-block; background-color: ; ">
							<fieldset style="float: left; background-color: #006666">
								 E-mail
							</fieldset>
							<span style="background-color: #BDB76B; padding: 4px;">
								::
						    </span>
							<fieldset style="float: right; background-color: #00FFFF; "> 
								<a style="padding-left: 8px; padding-right: 8px; " href="updateemail.php">
									<?php echo $em; ?> 
								</a>
							</fieldset>
						</div><br />

								<span style="background-color: #339966; padding-right: 600pt;"></span><br>

						<div style="display: inline-block; background-color: ; ">
							<fieldset style="float: left; background-color: #006666;"> Address 
							</fieldset>
							<span style="background-color: #BDB76B; padding: 4px;">::</span>
							<fieldset style="background-color: #cccccc; float: right;">
								<a style="padding-left: 8px; padding-right: 8px; " href="updateaddress.php">
									<b> <?php if (strlen($add)<=5){ echo "Update your Address";}else{ echo " <em><b>I live at: </b></em> " . $add ; } ?>
										
									</b  ?>
								</a>
							</fieldset></div>

							<span style="background-color: #339966; padding-right: 600pt;"></span><br>

						<div style="display: inline-block; background-color: ; ">
							<fieldset style="float: left; background-color: #006666;"> Phone No
							</fieldset>
							<span style="background-color: #BDB76B; padding: 4px;">::</span>
							<fieldset style="background-color: #cccccc; float: right;">
								<a style="padding-left: 8px; padding-right: 8px; " href="updatephone.php">
									<b> <?php if (strlen($phone)<=5){ echo "Update your Phone No";}else{ echo $phone ; } ?>
										
									</b  ?>
								</a>
							</fieldset></div>

								<span style="background-color: #339966; padding-right: 600px auto;"></span><br>


						<legend>
							<a style="background: green; font-size: 16px; text-align: center; color: orange; padding: 4px; " href="changepassword.php"> Change Your password </a>
						</legend>

		</fieldset><br>


		<fieldset style="background: ; color: black; padding-left: 5pt;" > 

					<legend>
						<div style="  background: rgb(100,1,100); font-size: 24px; padding: 12px; color: black ; "><img src="images/aico.jpg"><strong> Account</strong> <em>-Info</em> 
						</div>
					</legend>
					
					
				<div style="display: inline-block; background-color: ; font-size: 18px; ">
					<fieldset style="float: left; background-color: #333366; font-size: 20px; padding: 2px;  "> Bitcoin Wallet
						<span style="background-color: #BDB76B; padding: 4px;">::</span>
					</fieldset>
						<fieldset style="float: right; background-color: #99cccc; padding: 2px; font-size: 20px; font-family: arial; font-style: bold; color: black; "><a href="updateaccount.php"><b><?php if (strlen($w)<=3){ echo "Update your Wallet Address";}else{ echo $w; } ?></b></a> 
						</fieldset> 
				</div>

						<span style="background-color: #339966; padding-right: 600pt;"></span><br>

					<div style="display: inline-block; background-color: ; "> 
						<fieldset style="float: left; background-color: #003333;"> Bitcoin Balance
							<span style="background-color: #BDB76B; padding: 2px;">::</span>
						</fieldset>
							<div style="background: #663300; display: inline-block;">
								<fieldset style="float: right;"><?php echo  $b ; echo "BTC";  ?> 
								</fieldset> 
							</div> 
					</div>	

						<span style="background-color: #339966; padding-right: 600pt;"></span>		

					<div style="display: inline-block; background-color: ; "> <fieldset style="float: left; background-color: #003333;"> Withdrawable Balance<span style="background-color: #BDB76B; padding: 2px;">::</span></fieldset><div style="background: #33cc66; display: inline-block;"><fieldset style="float: right;"><?php echo  $b ; echo "BTC";  ?> </fieldset> </div> 
					</div>	

						<span style="background-color: #339966; padding-right: 600pt;"></span>			

				<!-- 	<div style="display: inline-block; background-color: ; "><fieldset style="float: left; background-color: #2F4F4F;">Active 	Investments<span style="background-color: #BDB76B; padding: 2px;">::</span></fieldset> <div style="background: #C71585 ; display: inline-block;"><fieldset style="float: right;"> <?php echo  "$b " ; echo "BTC"; ; ?> </fieldset> </div> 
					</div>	
 -->
					
		</fieldset><br>



		<fieldset style="background: #c3c3c3;"><legend><div style=" background: rgb(1,100,100); font-size: 24px; padding: 12px; color: black ; ">
						<img src="images/mico.jpg"><strong> Manage </strong> <em>-Stock</em> </div></legend>

							<div style="padding: 12px; font-color: grey; background-color: #A52A2A; font-size: 18px;  display: inline-block; opacity: 10px; ">
								<a  href="withdraw.php"><b>Withdraw</b> </a>
							</div>
							<div style="background-color: #43CD80; color: #8B4726;  display: inline-block; padding: 16px; font-size: 20px;">
								<a  href="invest.php"><b>Invest</b> </a>
							</div>
							
						
		</fieldset>
</div>
		

	</div>	
	</div>	
	
</body>
</html>

				
		 
				

<?php
	}  else{?> 

<!DOCTYPE html>
<html>
<head>
	<title>Please Login</title>
	<link rel="stylesheet" href="css/styles.css"  />
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

			<div style="padding-left: 60px; background: #ccff99;" id="wrapper">
			<?php
echo "<br>" ;
	echo "you are not supposed to be here! ";

	echo "<div><h2> please <a href = login.php><b><b> Login</b ></b></a> to view your Profile</h2> </div>";

	echo "<div><h2>  <a href = Register.php><b><b> Or Click here to Register </b ></b></a> </h2> </div> ";
	echo "<div><h2><a href = index.php><b><b>Back Home</b></b></a> </h2> </div>";	

				
				}
				?>
				</div>
</div>

</body>

<?php 
include("footer.php");
 ?>

</html>
