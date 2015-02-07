<?php
	include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#">Insert Books</a></h2>
				<p><small>Insert new Book or Books</small></p>
			</div>
			<div class="entry">

			<form name="lbs_form" id="lbs_form" method="post" action="book_insert.php" onsubmit="return validate_content()">
			<table align="center" border="0" cellspacing="5" cellpadding="5">
			  <tr>
			    <td colspan="2" align="center">
					</td>
			  </tr>
			  <tr>
			    <td>Content Name</td>
			    <td><input type="text" name="name" id="name" size="30" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td>Author Name</td>
			    <td><input type="text" name="author" id="author" size="30" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td>Content Edition</td>
			    <td><input type="text" name="edition" id="edition" size="30" maxlength="10" /></td>
			  </tr>
			  <tr>
			    <td>Content Copies</td>
			    <td><input type="text" name="copies" id="copies" size="30" maxlength="100" /></td>
			  </tr>
			  <tr>
			    <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
			  </tr>
			</table>
			</form>
			</div>
			<p class="links"><a> Thanks For Coming</a> </p>
				<?php
						$query="SELECT * FROM book ORDER BY id DESC";
						$result=$con->query($query);
						?>

						    <table border="1" cellpadding="5" cellspacing="0">
						    <th>Id</th>
						    <th>Book Name</th>
						    <th>Author</th>
						    <th>Edition</th>
						    <th>Copies</th>
						    </tr>

							<?php while($row=mysql_fetch_row($result)){ ?>
						    <tr>
						    <td><?php echo $row[0]; ?></td>
						    <td><?php echo $row[1]; ?></td>
						    <td><?php echo $row[2]; ?></td>
						    <td><?php echo $row[3]; ?></td>
						    <td><?php echo $row[4]; ?></td>
			    			 </tr>
							<?php } ?>
   				</table>
		</div>
	</div>
	<!-- end content -->
<?php
	include 'tail.php';
?>

<script language="javascript">
function validate_content()
{
	if(document.getElementById("name").value=="")
	{
		alert("Please Enter Book Name");
		document.getElementById("name").focus();
		return false;
	}
	else if(document.getElementById("author").value=="")
	{
		alert("Please Enter Author Name");
		document.getElementById("author").focus();
		return false;
	}
	else if(document.getElementById("edition").value=="")
	{
		alert("Please Select Edition Category");
		document.getElementById("edition").focus();
		return false;
	}
	else if(document.getElementById("copies").value=="")
	{
		alert("Please Enter Number of Copies Amount");
		document.getElementById("copies").focus();
		return false;
	}
}
</script>