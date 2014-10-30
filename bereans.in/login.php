<?php 
	if(session_id() == '') {
		session_start();
	}
	$username = $_POST['username'];
	$password = $_POST['pwd'];
	
	if($username == 'mahe' && $password == '0000') {
		$_SESSION['login'] = 1;
		if(isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		header('Location:admin.php');
	}
	else {
		$_SESSION['error'] = "Wrong Username or password";		
		header('Location:login_page.php');
	}
	
?>
