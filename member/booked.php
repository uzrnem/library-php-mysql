<?php
include '../inc/db.php';
include '../inc/notmember.php';
session_start();

if($_GET["c"]=="b"&&$_GET["d"]=="a"&&$_GET["u"]==$_SESSION["id"])
{
	if ($con->query("UPDATE list SET status='Available',user_id='' WHERE id=".$_GET["b"]))
    	header("location:account.php?e=Record updated Successfully");
    else
    	header("location:account.php?e=Record updated Unsuccessfully");
}
?>