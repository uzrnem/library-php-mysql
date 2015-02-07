<?php
include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#">Log Page</a></h2>
				<p><small>Your Previous Log</small></p>
			</div>
			<div class="entry">
				<table border="1" cellpadding="5" cellspacing="0">
					<tr>
						<th>Sr No</th>
						<th>Book Id</th>
						<th>Book Name</th>
						<th>Author</th>
						<th>Edition</th>
						<th>Taken Date</th>
						<th>Return Date</th>
					</tr>
							<?php $count=1;
									$user=$_SESSION["id"];
								$sql=$con->query("SELECT * FROM log where user_id='".$user."' ORDER BY id ASC");
							while($row=$sql->fetch_assoc()){ ?>
						    <tr>
						    <td><?php echo $count; $count=$count+1; ?></td>
							<td><?php echo $row["book_id"]; ?></td>

						    <?php
								$sql5=$con->query("SELECT * FROM book where id='".$row["book"]."'");
								if($arr=$sql5->fetch_assoc()){
								?>
						    	<td><?php echo $arr["name"]; ?></td>
						    	<td><?php echo $arr["author"]; ?></td>
						    	<td><?php echo $arr["edition"]; ?></td>
							<?php } ?>
								<td><?php echo $row["receive"]; ?></td>
						    	<td><?php echo $row["realease"]; ?></td>
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