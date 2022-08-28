<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "id19468576_root";
	$dbpass = "Im@*boy1998abhi";
	$dbname = "id19468576_carrentalp";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>