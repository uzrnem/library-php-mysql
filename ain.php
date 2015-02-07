<?php
include 'inc/db.php';

$Username=$_POST['au'];
$Password=$_POST['ap'];
if(strlen($Username)==0){header("index.php?a=1");}
if(strlen($_POST['ap'])==0){header("index.php?a=2");}
$sql = "select id from admin where username='".$Username."' and password='".$Password."'";
$result = $con->query($sql,$con);
$records = mysql_num_rows($result);
$row = $result->fetch_assoc();
if ($records==0)
{
	header("location:index.php?a=3");
}
else
{

	session_start();
	$_SESSION["Username"]=$Username;
	$_SESSION["class"]="admin";
	header("location:admin/index.php");
}
$con->close();

?>