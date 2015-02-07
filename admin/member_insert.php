<?php
include '../inc/db.php';
include '../inc/notadmin.php';

	$query="INSERT INTO member(username, password,name,class,numb,mobile) VALUES('".$_POST["username"]."','".$_POST["password"]."','".$_POST["name"]."','".$_POST["class"]."','".$_POST["numb"]."','".$_POST["mobile"]."')";
	if($con->query($query))
		header("location:member.php?e=Inserted Succesfully");
	else
		header("location:member.php?e=Try Again, Something Went Wronge");
?>