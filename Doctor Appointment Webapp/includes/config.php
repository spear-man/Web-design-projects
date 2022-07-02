<?php
	ob_start(); //turns on output buffering
	session_start(); //initialize session to maintain to prevent loggin

	// connect to db server, username , password ,db name
	$con = mysqli_connect("localhost", "root", "", "docapp_db");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>