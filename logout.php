<?php
	
	session_start();
	session_destroy();
	setcookie("email",'',time()-3600);
	if(isset($_SESSION['email'])){
		header("location: login.php?user_logged_out");
		exit;
	
}else {
	header("location: login.php?user_not_previously_logged_in");
exit;
}
?>