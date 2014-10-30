<?php
	if(session_id() == '') {
		session_start();
	}
	include 'head.php';
	include 'header.php';
?>

<div class="divide50"></div>
<div class="container">
	<center>
		<h2>	ADMIN LOGIN </h2>
		<form name="loginform" method="POST" action="login.php">
			
			<table class="primary">
			  <tr>
			    <td colspan="2" align="center" class="noborder" style="color:red;">
			     	<?php
						if(isset($_SESSION['error']))
							echo $_SESSION['error'];
						$_SESSION = array();
				?>
			    </td>
			  </tr>
			  <tr>
			    <td>
			      Username:</font>
			    </td>
			    <td>
			      <input type="text" name="username" size="20" maxlength="20"
			      value="" >
			      <font class="error"></font>
			    </td>
			  </tr>
			  <tr>
			    <td>
			      Password:</font>
			    </td>
			    <td>
			      <input type="password" name="pwd" size="20" maxlength="20"
			      value="" >
			      <font class="error">
			      </font>
			    </td>
			  </tr>
			
			  <tr>
			    <td colspan="2" align="center" class="noborder">
			      <input type="submit" value="Login" class="button btn btn-primary">
			    </td>
			  </tr>
			</table>
			    </td>
			  </tr>
			</table>
			
			</form>
		</center>
	</div>
	
<div class="divide50"></div>

<?php
	include 'footer.php';
?>
