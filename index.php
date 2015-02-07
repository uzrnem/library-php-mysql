<?php
include 'inc/notgetout.php';
include 'lang.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo LIB." ".MNG;?></title>
<link rel="icon" href="images/library.png" type="image" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
	<h1><?php echo LIB;?></h1>
	<p><a href="#"><?php echo MNG;?></a></p>
</div>
<!-- end header -->
<!-- star menu -->
<div id="menu">
	<ul>
		<li class="current_page_item"><a href="#">For</a></li>
		<li><a href="#"><?php echo INFO;?></a></li>
		<li><a href="#"><?php echo TEC;?></a></li>
		<li><a href="#"><?php echo DEP;?></a></li>
	</ul>
</div>
<!-- end menu -->
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="title">
				<h2><a href="#"><?php echo LIB." ".MNG;?></a></h2>
				<p><small>Posted on December 24th, 2014 by <a href="#">Bhagyesh Sunil Patel</a></small></p>
			</div>
			<div class="entry">
				<p><?php echo PFL;?></p>
			</div>
			<p class="links"><a><?php echo TOR;?></a> </p>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<div id="search">
			<h2><?php echo MSI;?></h2>
				<form method="post" action="min.php" onsubmit="return member()">
					<label><?php echo USR;?> : </label>
					<input type="text" name="mu" id="mu"/><font color="red" size="5px"><sup>*</sup></font><br />
					<label><?php echo PAS;?> : </label>
					<input type="password" name="mp" id="mp"/><font color="red" size="5px"><sup>*</sup></font><br/>
					<?php
						if(isset($_GET["m"]))
							{ ?>
					<font color="red">
					<?php if($_GET["m"]==1)
							{ echo "Enter Username";}
						elseif($_GET["m"]==2)
							{ echo "Enter Password";}
							else
							{ echo "Wronge Username or Password";}
					?></font><br/>
							<?php	}	?>
					<input type="submit" value="<?php echo LIN;?> "/>
				</form><br><br>
		</div>
		<ul>
			<li>
				<h2><?php echo ADS;?></h2>
				<form method="post" action="ain.php" onsubmit="return admin()">
					<label><?php echo USR;?> :</label>
					<input type="text" name="au" id="au"/><font color="red" size="5px"><sup>*</sup></font><br />
					<label><?php echo PAS;?> : </label>
					<input type="password" name="ap" id="ap"/><font color="red" size="5px"><sup>*</sup></font><br/>
					<?php
						if(isset($_GET["a"]))
							{ ?>
					<font color="red">
					<?php if($_GET["a"]==1)
							{ echo "Enter Username";}
						elseif($_GET["a"]==2)
							{ echo "Enter Password";}
							else
							{ echo "Wronge Username or Password";}
					?></font><br/>
							<?php	}	?>
					<input type="submit" value="<?php echo LIN;?>"/>
				</form>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<div id="extra" style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p class="legal"> Copyright &copy; 2014-<?php echo date("Y"); ?>.<a href="#">Gisue Corporation</a> All Rights Reserved. </p>
<br><p><a href="?Lang=en">English</a> - <a href="?Lang=hd">हिन्दी</a></p>
</div>
<!-- end footer -->
<div align=center></div></body>
</html>
<script language="javascript">

function admin()
{
	if(document.getElementById("au").value=="")
	{
		alert("Please Enter Username");
		document.getElementById("au").focus();
		return false;
	}
	else if(document.getElementById("ap").value=="")
	{
		alert("Please Enter Password");
		document.getElementById("ap").focus();
		return false;
	}
}
function member()
{
	if(document.getElementById("mu").value=="")
	{
		alert("Please Select Username");
		document.getElementById("mu").focus();
		return false;
	}
	else if(document.getElementById("mp").value=="")
	{
		alert("Please Select Password");
		document.getElementById("mp").focus();
		return false;
	}
}