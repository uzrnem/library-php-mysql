<?php
	include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#">List Outdated Books</a></h2>
				<p><small>List of Unavailable Books of Library</small></p>
			</div>
			<div class="entry">
				<?php
						$count=1;
						include "../inc/db.php";
						$query="SELECT * FROM list where status='Outdated'";
						$result=$con->query($query);
						?>

						    <table border="1" cellpadding="5" cellspacing="0">
						    <th>Sr No</th>
						    <th>Book Id</th>
						    <th>Book Name</th>
						    <th>Author</th>
						    <th>Edition</th>
						    <th>Updates</th>
						    </tr>

							<?php while($row=$result->fetch_assoc()){ ?>
						    <tr>
						    <td><?php echo $count; $count=$count+1; ?></td>
						    <td><?php echo $row["id"]; ?></td>

						    <?php
								include "../inc/db.php";
								$sql=$con->query("SELECT * FROM book where id='".$row["book"]."'");
								if($arr=$sql->fetch_assoc()){
								?>
						    	<td><?php echo $arr["name"]; ?></td>
						    	<td><?php echo $arr["author"]; ?></td>
						    	<td><?php echo $arr["edition"]; ?></td>
							<?php } ?>
						    <td>
						    	<A class="tryitbtn" style="width:65px;padding-top:0px;padding-bottom:1px" href="update.php?c=o&d=a&b=<?php echo $row["id"]; ?>">Available</A></td>
			    			 </tr>
							<?php } ?>
   				</table>
			</div>
		</div>
	</div>
	<!-- end content -->
<?php
	include 'tail.php';
?>