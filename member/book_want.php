<?php
include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#">Booking Books</a></h2>
<?php
	$book=0;
	$user=$_SESSION["id"];
	$query="SELECT * FROM list where user_id='".$user."'";
	$result=$con->query($query);
	while($row=$result->fetch_assoc())
	{
		$book=$book+1;
	}
?>
				<p><small>You can Book <?php echo (4-$book); ?> books</small></p>
			</div>
			<div class="entry">
				<?php
						$count=1;
						$query="SELECT * FROM list where status='Available'";
						$result=$con->query($query);
						?>

						    <table border="1" cellpadding="5" cellspacing="0">
						    <th>Sr No</th>
						    <th>Book Id</th>
						    <th>Book Name</th>
						    <th>Author</th>
						    <th>Edition</th>
						    <?php if($book<4) { ?>
						    <th>Book</th>
						    <?php } ?>
						    </tr>

							<?php while($row=$result->fetch_assoc()){ ?>
						    <tr>
						    <td><?php echo $count; $count=$count+1; ?></td>
						    <td><?php echo $row["id"]; ?></td>

						    <?php
								$sql=$con->query("SELECT * FROM book where id='".$row["book"]."'");
								if($arr=$sql->fetch_assoc()){
								?>
						    	<td><?php echo $arr["name"]; ?></td>
						    	<td><?php echo $arr["author"]; ?></td>
						    	<td><?php echo $arr["edition"]; ?></td>
							<?php }  if($book<4) { ?>
						    <td><A class="tryitbtn" style="width:65px;padding-top:0px;padding-bottom:1px" href="process.php?b=<?php echo $row["id"]; ?>">book</A>
						    </td><?php } ?>
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