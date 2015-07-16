<?php

function Connect()
{
	$host = "localhost";
	$dbname = "advweb_webapp";
	$uname = "root";
	$passwd = "";
	
	$conn = new mysqli($host, $uname, $passwd, $dbname);
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	return $conn;
}
?>