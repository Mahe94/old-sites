<?php 
	session_start();
	
	$_SESSION = array();
	$_SESSION['error'] = "You have Successfully Logged out";
	
	header('Location:login_page.php');
?>