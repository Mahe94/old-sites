<?php 
	include 'head.php';
	if(session_id() == '') {
		session_start();
	}
	if(!isset($_SESSION['login'])) {
		$_SESSION['error'] = "Please Login";
		header('Location:login_page.php');
	}
	include 'header.php';
?>

<div class="divide50"></div>
<div class="container">
<center>
	<h2>	ADMIN PAGE </h2>
	<hr>
	</center>
	<form enctype="multipart/form-data" name="home_page" method="POST" action="home_page.php">
		<h3>Home Page</h3>
		<table class="primary">
		  <tr>
			    <td colspan="2" align="center" class="noborder" style="color:green;">
			     	<?php
						if(isset($_SESSION['changes']))
							echo $_SESSION['changes'];
						unset($_SESSION['changes']);
				?>
			    </td>
			  </tr>
		  <tr>
		    <tr>
		            <td>
			      Main Image:</font>
			    </td>
		    	    
			    <td>
			      <input type="file" name="image" >
			      <font class="error"></font>
			    </td>
		     	    
		     </tr>
		  </tr>
		  
		  <tr>
		    <td>
		      Description:</font>
		    </td>
		    <td>
		      <input type="text" name="description" size="80" maxlength="80"
		      value="" >
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		    <td>
		      Though of the Week:</font>
		    </td>
		    <td>
		      <input type="text" name="thought" size="80" maxlength="80"
		      value="" >
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		  	<td>
		  		<br/>
			</td>
		  </tr>
		  
		  
		  <tr>
		    <td>
		      <h4>Upcoming Events:</h4>
		    </td>
		  </tr>
		  
		  <tr>
		    <td>
		      Image 1:</font>
		    </td>
		    <td>
			      <input type="text" name="image11" size="80" maxlength="80"
			      value="" >
			      <font class="error"> or
			      </font>
			    </td>
			    
			    
			    <td>
			      <input type="file" name="image12" >
			      <font class="error"></font>
			    </td>
		  </tr>
			
		  <tr>
		    <td>
		      Title 1:</font>
		    </td>
		    <td>
		      <input type="text" name="title1" size="80" maxlength="80"
		      value="" >
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		    <td>
		      Description 1:</font>
		    </td>
		    <td>
		      <textarea name="description1" size="80" cols="78" rows="4"></textarea>
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		    <td>
		      Image 2:</font>
		    </td>
		    <td>
			      <input type="text" name="image21" size="80" maxlength="80"
			      value="" >
			      <font class="error"> or
			      </font>
			    </td>
			    
			    
			    <td>
			      <input type="file" name="image22" >
			      <font class="error"></font>
			    </td>
		  </tr>
			
		  <tr>
		    <td>
		      Title 2:</font>
		    </td>
		    <td>
		      <input type="text" name="title2" size="80" maxlength="80"
		      value="" >
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		    <td>
		      Description 2:</font>
		    </td>
		    <td>
		      <textarea type="text" name="description2" size="80" cols="78" rows="4"></textarea>
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		    <td>
		      Image 3:</font>
		    </td>
		    <td>
			      <input type="text" name="image31" size="80" maxlength="80"
			      value="" >
			      <font class="error"> or
			      </font>
			    </td>
			    
			    
			    <td>
			      <input type="file" name="image32" >
			      <font class="error"></font>
			    </td>
		  </tr>
			
		  <tr>
		    <td>
		      Title 3:</font>
		    </td>
		    <td>
		      <input type="text" name="title3" size="80" maxlength="80"
		      value="" >
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		    <td>
		      Description 3:</font>
		    </td>
		    <td>
		      <textarea type="text" name="description3" size="80" cols="78" rows="4"></textarea>
		      <font class="error">
		      </font>
		    </td>
		  </tr>
		  
		  <tr>
		  	<td>
		  		<br/>
			</td>
		  </tr>
		  
		  
		  <tr>
		    <td colspan="2" align="center" class="noborder">
		      <input type="submit" value="Submit" class="button btn btn-primary">
		    </td>
		  </tr>
		  
		</table>
		
		</form>
		
		<hr>
		<div class="divide50"></div>
		
	
	
	<form enctype="multipart/form-data" name="home_page" method="POST" action="article_add.php" id="article">
		<h3>Article</h3>
		<table class="primary">
			<tr>
       				<td colspan="2" align="center" class="noborder" style="color:green;">
					<?php
						if(isset($_SESSION['added_a']))
							echo $_SESSION['added_a'];
						unset($_SESSION['added_a']);
					?>
				</td>
			</tr>
			
	
			<tr>
				<td>
					Title:</font>
				</td>
				<td>
					<input type="text" name="title" size="80" maxlength="80" value="" >
				        <font class="error">
				        </font>
				</td>
			</tr>
			
			<tr>
				<td>
					Author:</font>
				</td>
				<td>
					<input type="text" name="name" size="80" maxlength="80" value="" >
				        <font class="error">
				        </font>
				</td>
			</tr>
			
			<tr>
				<td>
					Date:</font>
				</td>
				<td>
					<input type="text" name="date" size="80" maxlength="80" value="" >
				        <font class="error">
				        </font>
				</td>
			</tr>
			
			<tr>
		    		<td>
		      			Content:</font>
		    		</td>
		    		<td>
		      			<textarea type="text" name="content" cols="78" rows="10" height="20px"></textarea>
		      			<font class="error">
		      			</font>
		    		</td>
		  	</tr>
		  	
		  	<tr>
		  	<td>
		  		<br/>
			</td>
		 	 </tr>	
		  	
		  	<tr>
		    <td colspan="2" align="center" class="noborder">
		      <input type="submit" value="Submit" class="button btn btn-primary">
		    </td>
		  </tr>
		  
		</table>
		
	</form>
	<hr>
	<div class="divide50"></div>
	
	<form enctype="multipart/form-data" name="home_page" method="POST" action="poem_add.php" id="poem">
		<h3>Poem</h3>
		<table class="primary">
			<tr>
       				<td colspan="2" align="center" class="noborder" style="color:green;">
					<?php
						if(isset($_SESSION['added_p']))
							echo $_SESSION['added_p'];
						unset($_SESSION['added_p']);
					?>
				</td>
			</tr>
			
	
			<tr>
				<td>
					Title:</font>
				</td>
				<td>
					<input type="text" name="title" size="80" maxlength="80" value="" >
				        <font class="error">
				        </font>
				</td>
			</tr>
			
			<tr>
				<td>
					Poet:</font>
				</td>
				<td>
					<input type="text" name="name" size="80" maxlength="80" value="" >
				        <font class="error">
				        </font>
				</td>
			</tr>
			
			<tr>
				<td>
					Date:</font>
				</td>
				<td>
					<input type="text" name="date" size="80" maxlength="80" value="" >
				        <font class="error">
				        </font>
				</td>
			</tr>
			
			<tr>
		    		<td>
		      			Content:</font>
		    		</td>
		    		<td>
		      			<textarea type="text" name="content" cols="78" rows="10" height="20px"></textarea>
		      			<font class="error">
		      			</font>
		    		</td>
		  	</tr>
		  	
		  	<tr>
		  	<td>
		  		<br/>
			</td>
		 	 </tr>	
		  	
		  	<tr>
		    <td colspan="2" align="center" class="noborder">
		      <input type="submit" value="Submit" class="button btn btn-primary">
		    </td>
		  </tr>
		  
		</table>
		
	</form>
					
	<center>
		<a class="btn btn-warning" href="logout.php">Logout</a>
	</center>
</div>
		
<div class="divide50"></div>
       
<?php
	$_SESSION['login'] = 1;
	include 'footer.php';
?>
