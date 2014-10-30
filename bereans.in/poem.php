<?php
	include 'head.php';
	include 'header.php';
	
	$db = mysqli_connect("localhost", "root", "", "resource") or die(mysql_error()) ; 
 	
 	$result = mysqli_query($db, "SELECT * FROM poem ORDER BY date DESC");
 	$menu = array();

?>

<div class="divide50"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Latest Poems</h2>
	
			<?php
				while($row = mysqli_fetch_array($result)) {
					$menu [] = array(
						'id' => $row['no'],
						'title' => $row['title']
					);
				?>	
		
				<article>
				    <h2><a href="#" <?php echo 'id='.$row['no'].'>'.$row['title'];?> - <?php echo $row['poet'];?></a></h2>
				 
				    <div class="row">
					<div class="group2 col-sm-6 col-md-6"></div>
					<div class="group2 col-sm-6 col-md-6">
						  <span class="glyphicon glyphicon-time"></span> 
						  	<?php echo date("M d,Y", strtotime($row['date'])); ?>                 
					</div>
				    </div>
				    
				   
				    <p> <?php echo $row['content']; ?></p>
				   
				    <hr>
				 
				    <br />
				</article>
				<div class="divide50"></div>
	
				<?php
				}
			?>
		</div>
		
		<div class="col-md-4">	
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h4>Latest Poems</h4>
		   		</div>
		   		 <ul class="list-group">
		   		 	<?php 
		   		 		foreach($menu as $m) {
		   		 		?>
					<li class="list-group-item"> <?php echo '<a href="#'. $m['id']. '">'. $m['title'].'</a>'; ?></li>
						<?php
						}
					?>
		   		 </ul>
				</div>
			</div>
		</div>
	</div>
</div>
			
<?php
	mysqli_close($db);
	include 'footer.php';
?>

	
