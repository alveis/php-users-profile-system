

<!DOCTYPE html>
<html>
<head>
	<title>Withdraw</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.js" ></script>
	<script type="text/javascript" src="scripts/npm.js" ></script>
	<script type="text/javascript" src="scripts/jquery-3.2.1.slim.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	</head>
</head>
<body>
		
		<nav class="navbar navbar-default">
				<div class="container-fluid">	
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="index.php"><img src="images/hico.jpg">Home</a> </li>
								
								<li><?php if(isset($_SESSION['email'])){
									echo '<a href="profile.php" ><img src="images/pico2.jpg">My Profile</a>'; } ?></ </li>
								
								<li><?php if(isset($_SESSION['email'])){
									echo '<a href="portfolio.php" ><img src="images/portfolio.jpg">Portfolio</a>'; } ?></ </li>
								
								
								
								<li><a href="forum.php" >Forum</a> </li>
								
							
								<li><a href="contact.php"><img src="images/contact.jpg">Contact Us</a> </li>
								
								<li><a href="about.php">About Us</a> </li>
								
								<li><?php if(!isset($_SESSION['email'])){
									echo '<a href="register.php" >Register</a>'; } ?></li>
								
								<li><?php if(!isset($_SESSION['email'])){
									echo '<a href="login.php" >Login</a>'; } ?></ </li>
								
								<li><?php if(isset($_SESSION['email'])){
									echo '<a href="Logout.php">Logout </a>';	} ?></ </li>
							

							</ul>
						</div>
							<div style="background: #cc3333; padding: 1px; border-radius: 8px;"></div>
				</div>
			</nav>
		
	

</body>

</html>
