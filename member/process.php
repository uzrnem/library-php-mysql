<?php
	include '../inc/db.php';
	include '../inc/notmember.php';

	$count=1;
	$query="SELECT * FROM list where user_id='".$user."'";
	$result=$con->query($query);
	while($row=$result->fetch_assoc())
	{
		$count=$count+1;
	}
	if($count<=4)
	{
		header("location:book_want.php?e=Now You Cant Book Books");
		die();
	}
	
	$user=$_SESSION["id"];
	if ($con->query("UPDATE list SET status='Booked',user_id='".$user."' WHERE id=".$_GET["b"]))
		header("location:book_want.php?e=Record updated successfully");
    else
    	header("location:book_want.php?e=Record updated Unsuccessfully");
?>