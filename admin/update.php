<?php
include '../inc/db.php';
include '../inc/notadmin.php';
if(!isset($_GET["c"])&&!isset($_GET["d"]))
	header("location:index.php");
if($_GET["c"]=="o"&&$_GET["d"]=="a")
{
	if ($con->query("UPDATE list SET status='Available' WHERE id=".$_GET["b"]))
    	header("location:Outdated.php?e=Record updated successfully");
    else
    	header("location:Outdated.php?e=Record updated Unsuccessfully");
}
else if($_GET["c"]=="a"&&$_GET["d"]=="o")
{
	if ($con->query("UPDATE list SET status='Outdated' WHERE id=".$_GET["b"]))
    	header("location:Available.php?e=Record updated successfully");
    else
    	header("location:Available.php?e=Record updated Unsuccessfully");
}
else if($_GET["c"]=="a"&&$_GET["d"]=="t")
{
	if ($con->query("UPDATE list SET status='Taken',user_id='".$_GET["u"]."' WHERE id=".$_GET["b"]))
		{
			if($con->query("INSERT INTO log(user_id, book_id, receive, book) VALUES('".$_GET["u"]."', '".$_GET["b"]."', '".date("h:i:s M d,Y")."', '".$_GET["i"]."')"))
			{
				$here=$con->insert_id();
				$con->query("UPDATE list SET log='".$here."' WHERE id=".$_GET["b"]);
				header("location:Available.php?e=Record updated successfully");
			}
  			else
  			  	header("location:Available.php?e=Record updated Unsuccessfully");
		}
    else
    	header("location:Available.php?e=Record updated Unsuccessfully");
}
else if($_GET["c"]=="b"&&$_GET["d"]=="t")
{
	if ($con->query("UPDATE list SET status='Taken' WHERE id=".$_GET["b"]))
		{
			if($con->query("INSERT INTO log(user_id, book_id, receive, book) VALUES('".$_GET["u"]."', '".$_GET["b"]."', '".date("h:i:s M d,Y")."', '".$_GET["i"]."')"))
			{
				$here=$con->insert_id();
				$con->query("UPDATE list SET log='".$here."' WHERE id=".$_GET["b"]);
				header("location:booked.php?e=Record updated successfully");
			}
  			else
  			  	header("location:booked.php?e=Record updated Unsuccessfully");
		}
    else
    	header("location:booked.php?e=Record updated Unsuccessfully");
}

else if($_GET["c"]=="b"&&$_GET["d"]=="a")
{
	if ($con->query("UPDATE list SET status='Available',user_id='' WHERE id=".$_GET["b"]))
    	header("location:booked.php?e=Record updated Successfully");
    else
    	header("location:booked.php?e=Record updated Unsuccessfully");
}
else if($_GET["c"]=="t"&&$_GET["d"]=="a")
{
	if ($con->query("UPDATE list SET status='Available',user_id='' WHERE id=".$_GET["b"]))
		{
			$result=$con->query("SELECT log FROM list where id=".$_GET["b"]);
			while($row=$result->fetch_assoc())
			{

			if($con->query("UPDATE log SET realease='".date("h:i:s M d,Y")."' WHERE id=".$row["log"]))
				header("location:Taken.php?e=Record updated successfully");
  			else
  			  	header("location:Taken.php?e=Record updated Unsuccessfully");
  			}
		}
    else
    	header("location:Taken.php?e=Record updated Unsuccessfully");
}
else if($_GET["c"]=="t"&&$_GET["d"]=="o")
{
	if ($con->query("UPDATE list SET status='Outdated',user_id='' WHERE id=".$_GET["b"]))
		{
			$result=$con->query("SELECT log FROM list where id=".$_GET["b"]);
			while($row=$result->fetch_assoc())
			{

			if($con->query("UPDATE log SET realease='".date("h:i:s M d,Y")."' WHERE id=".$row["log"]))
				header("location:Taken.php?e=Record updated successfully");
  			else
  			  	header("location:Taken.php?e=Record updated Unsuccessfully");
  			}
		}
    else
    	header("location:Taken.php?e=Record updated Unsuccessfully");
}
?>