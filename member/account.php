<?php
include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#">Account Books</a></h2>
				<p><small>Your Pending Books</small></p>
			</div>
			<div class="entry">
				<?php
						$count=1;
						$query="SELECT * FROM list where user_id='".$_SESSION["id"]."'";
						$result=$con->query($query);
						?>

						    <table border="1" cellpadding="5" cellspacing="0">
						    <th>Sr No</th>
						    <th>Book Id</th>
						    <th>Book Name</th>
						    <th>Author</th>
						    <th>Edition</th>
						    <th>Taken Date</th>
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
							<?php } ?>
						    <?php
								$sql=$con->query("SELECT receive FROM log where id='".$row["log"]."' and realease =''");
								if($arr=$sql->fetch_assoc()){
								?>
						    	<td><?php echo $arr["receive"]; ?></td>
							<?php }
								else {?><td><A class="tryitbtn" style="width:65px;padding-top:0px;padding-bottom:1px" href="booked.php?c=b&d=a&u=<?php echo $_SESSION["id"]; ?>&b=<?php echo $row["id"]; ?>">Unbook</A></td><?php } ?>
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

<script type="text/javascript">
function show_prompt(book)
{
var name=prompt("Insert User Numb","");
window.location.assign("update.php?c=a&d=t&b="+book+"&u="+name);
}
</script>