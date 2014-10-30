<?php
	session_start();
	
	$title = $_POST['title'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$content = $_POST['content'];
	
	mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
 	mysql_select_db("resource") or die(mysql_error()) ; 
 

        mysql_query("INSERT INTO `poem`(title, poet, date, content) VALUES ('$title', '$name', STR_TO_DATE('$date', '%d/%m/%y'), '$content')") ; 
        $_SESSION['added_p'] = "Poem added";
      	header("Location:admin.php#poem");
?>
