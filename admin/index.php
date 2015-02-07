<?php
include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#">List Books</a></h2>
				<p><small>List of Bunch Books</small></p>
			</div>
			<div class="entry">
				<?php
						$count=1;
						$query="SELECT * FROM book";
						$result=$con->query($query);
						?>
						    <table border="1" cellpadding="5" cellspacing="0">
						    <th>Sr No</th>
						    <th>Book Id</th>
						    <th>Book Name</th>
						    <th>Author</th>
						    <th>Edition</th>
						    <th>Copies</th>
						    </tr>

							<?php while($row=$result->fetch_assoc()){ ?>
						    <tr>
						    <td><?php echo $count; $count=$count+1; ?></td>
						    <td><?php echo $row["id"]; ?></td>
						    <td><?php echo $row["name"]; ?></td>
						    <td><?php echo $row["author"]; ?></td>
						    <td><?php echo $row["edition"]; ?></td>
						    <td><?php echo $row["copies"]; ?></td>
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