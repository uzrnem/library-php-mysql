<?php
include "../inc/db.php";
include '../inc/notadmin.php';

$query="SELECT id FROM member where username='".$_GET["pass"]."'";
$result=$con->query($query);
//
if($result->fetch_row())
	echo "1";
?>