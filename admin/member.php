<?php
	include 'head.php';
?>
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="blue">
				<h2><a href="#">Insert Member and Staff</a></h2>
				<p><small>Insert Peoples For Library Use</small></p>
			</div>
			<div class="entry">

			<form name="lbs_form" id="lbs_form" method="post" action="member_insert.php" onsubmit="return validate_member()">
			<table align="center" border="0" cellspacing="5" cellpadding="0">
			  <tr>
			    <td>Member Name</td>
			    <td><input type="text" name="name" id="name" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Member Class</td>
			    <td>
					<select name="class" id="class">
						<option value=""></option>
						<option value="SE">SE</option>
						<option value="TE">TE</option>
						<option value="BE">BE</option>
						<option value="Staff">Staff</option>
					</select>
			    </td>
			  </tr>
			  <tr>
			    <td>Member Numb</td>
			    <td><input type="text" name="numb" id="numb" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Contact Numb</td>
			    <td><input type="text" name="mobile" id="mobile" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Username</td>
			    <td><input type="text" name="username" id="username" size="30" onblur="check(this.value)" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td>Password</td>
			    <td><input type="text" name="password" id="password" size="30" maxlength="30" /></td>
			  </tr>
			  <tr>
			    <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
			  </tr>
			</table>
			</form>
			</div>
			<p class="links"><a> Thanks For Coming</a> </p>

			<?php
			include "../inc/db.php";
			$query="SELECT * FROM member ORDER BY id DESC";
			$result=$con->query($query);
			?>

			    <table border="1" cellpadding="5" cellspacing="0">
			    <th>Id</th>
			    <th>Member Name</th>
			    <th>Class</th>
			    <th>Numb</th>
			    <th>Mobile</th>
			    <th>Username</th>
			    <th>Password</th>
			    </tr>

				<?php while($row=$result->fetch_row()){ ?>
			    <tr>
			    <td><?php echo $row[0]; ?></td>
			    <td><?php echo $row[3]; ?></td>
			    <td><?php echo $row[4]; ?></td>
			    <td><?php echo $row[5]; ?></td>
			    <td><?php echo $row[6]; ?></td>
			    <td><?php echo $row[1]; ?></td>
			    <td><?php echo $row[2]; ?></td>
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
function validate_member()
{
	if(document.getElementById("username").value=="")
	{
		alert("Please Enter Username");
		document.getElementById("username").focus();
		return false;
	}
	else if(document.getElementById("password").value=="")
	{
		alert("Please Enter Password");
		document.getElementById("password").focus();
		return false;
	}
	else if(document.getElementById("name").value=="")
	{
		alert("Please Enter Member Name");
		document.getElementById("name").focus();
		return false;
	}
	else if(document.getElementById("class").value=="")
	{
		alert("Please Enter Author Name");
		document.getElementById("class").focus();
		return false;
	}
	else if(document.getElementById("numb").value=="")
	{
		alert("Please Enter Member Numb");
		document.getElementById("numb").focus();
		return false;
	}
	else if(document.getElementById("mobile").value=="")
	{
		alert("Please Enter Mobile Numb");
		document.getElementById("mobile").focus();
		return false;
	}
}

	function check(pass)
	{
		var xmlhttp;
		if (window.XMLHttpRequest)
			xmlhttp=new XMLHttpRequest();
		else
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

		xmlhttp.open("GET","check.php?pass="+pass,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				if(xmlhttp.responseText=="1")
				{
					alert("Username Already Exist");
					document.getElementById("username").value="";
				}
			}
		}
	}
</script>
