<?php 

		include("connect.php");
		include("functions.php");

	?>
<!doctype html>

<html>
	
	<head>
		
	<title>user profile system | Home</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="icon" type="image/jpg" href="images/aico.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	<!--<meta content='10' http-equiv='refresh'/> !--> <!--Reloads Page every 10 seconds -->
	</head>
	
	
  <body id="body">


		
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

<!--<form method="POST" action="index.php" enctype="multipart/form-data">The enctype is needed to upload files or images-->
<!--<label>First Name:</label>  Label tag is new in html5-->