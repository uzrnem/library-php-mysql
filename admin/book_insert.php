<?php
include '../inc/db.php';
include '../inc/notadmin.php';

$book=$_POST['name'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$copies=$_POST['copies'];
if(strlen($book)==0){header("index.php?e=Enter Content Name");}
if(strlen($author)==0){header("index.php?e=Enter Author Namae");}
if(strlen($edition)==0){header("index.php?e=Enter Content Edition");}
if(strlen($copies)==0){header("index.php?e=Enter Content Copies");}

	$query="INSERT INTO book(name, author,edition,copies) VALUES('".$book."', '".$author."', '".$edition."', '".$copies."')";
	if($con->query($query))
		{
			$here=$con->insert_id();
			$buk="";
			for ($i=1; $i<=$copies; $i++)
			  {
			  	$con->query("INSERT INTO `library`.`list` (book, status) VALUES ('".$here."', 'Available')");
			  	$buk.=",".$con->insert_id();
			  }
			if ($con->query("UPDATE book SET numbs='".$buk."' WHERE id=".$here))
				header("location:book.php?e=Inserted Succesfully&numbs=".$buk);
		}
	else
		header("location:book.php?e=Something Went Wronge");
//$con->close();
$con->close();
?>