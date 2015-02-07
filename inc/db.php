<?php
$host = 'mysqldb';
$user = 'root';
$pass = 'root';
$dbname = 'library';

// check the MySQL connection status
$con = new mysqli($host, $user, $pass, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    //echo "Connected to MySQL server successfully!";
}
?>