<?php
	
	$con = mysqli_connect("localhost","root","","dbname");
	
	if(mysqli_connect_errno())
	{
		echo "Error occured while connecting with database ".mysqli_connect_errno();
	}

	session_start();
	 ?>