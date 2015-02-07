<?php
include "../inc/db.php";
include '../inc/notadmin.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Admin - LMS</title>
<link rel="icon" href="../inc/library.png" type="image" />
<LINK rel="stylesheet" type="text/css" href="../inc/stdtheme.css">
<link href="../css/default.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/menus/jquery.min.js"></script>
</head>
<body>
<!-- start header -->
<div id="header">
	<h1>Library</h1>
	<p><a href="../getout.php">Management System<small>(LogOut)</small></a></p>
</div>
<!-- end header -->
<!-- star menu -->
<div id="menu">
	<ul>
		<li class="current_page_item"><a href="index.php">Home</a></li>
		<li class=""><a href="list.php">List</a></li>
		<li><a href="available.php">Available</a></li>
		<li><a href="taken.php">Taken</a></li>
		<li><a href="booked.php">Booked</a></li>
		<li><a href="outdated.php">Outdated</a></li>
	</ul>
</div>
<!-- end menu -->