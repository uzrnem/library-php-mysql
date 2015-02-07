<?php
include '../inc/db.php';
include '../inc/notmember.php';

session_start();

if($_GET["o"]=="a")
{
	session_start();
	if($con->query("INSERT INTO wishlist(user_id, book_id) VALUES('".$_SESSION["id"]."', '".$_GET["b"]."')"))
		header("location:index.php?e=Record updated successfully");
    else
    	header("location:index.php?e=Record updated Unsuccessfully");
}
else if($_GET["o"]=="r")
{
	if ($con->query("DELETE FROM `library`.`wishlist` WHERE `wishlist`.`id` = ".$_GET["b"]." LIMIT 1"))
    	header("location:wishlist.php?e=Record updated Successfully");
    else
    	header("location:wishlist.php?e=Record updated Unsuccessfully");
}
?>