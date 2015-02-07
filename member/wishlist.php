<?php
include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#">Wishlist Books</a></h2>
				<p><small>List of Wish Books</small></p>
			</div>
			<div class="entry">
				<table border="1" cellpadding="5" cellspacing="0">
				   <th>Sr No</th>
				   <th>Book Name</th>
				   <th>Author</th>
				   <th>Edition</th>
				   <th>Remove From Wishlist</th>
				  </tr>
				<?php
					$count=1;
					$query="SELECT * FROM wishlist where user_id='".$_SESSION["id"]."'";
					$result=$con->query($query);
					while($row=$result->fetch_assoc()){ ?>
				  <tr>
			        <td><?php echo $count; $count=$count+1; ?></td>
					<?php
					if($arr=$con->fetch_assoc($con->query("SELECT * FROM book where id='".$row["book_id"]."'"))){ ?>
					<td><?php echo $arr["name"]; ?></td>
					<td><?php echo $arr["author"]; ?></td>
					<td><?php echo $arr["edition"]; ?></td>
							<?php } ?>

					<td><A class="tryitbtn" style="width:65px;padding-top:0px;padding-bottom:1px" href="update.php?o=r&b=<?php echo $row["id"]; ?>">Remove</A></td>
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