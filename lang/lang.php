<?php
	if(isset($_GET["Lang"]))
	{
		if($_GET["Lang"]=="hd")
		{
			include( "./lang/hd.php" );
			$_SESSION["Lang"]="hd";
		}
		else
		{
			include( "./lang/en.php" );
			$_SESSION["Lang"]="en";
		}
	}
	else if(isset($_SESSION["Lang"]))
	{
		if($_SESSION["Lang"]=="hd")
			include( "./lang/hd.php" );
		else
			include( "./lang/en.php" );
	}
	else
	{
		include( "./lang/hd.php" );
		$_SESSION["Lang"]="hd";
	}
?>