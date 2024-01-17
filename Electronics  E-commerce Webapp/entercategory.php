<?php
	//check to see if user is loged in 
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:index.php?page=admin");
	}

	// check to see if user has submited the add category form
	if(!isset($_SESSION['addcategory'] ['name']))
	{
		header("Location:index.php?page=admin");
	}

	//enter the new category
	$newcategory_sql = "INSERT INTO category (name) VALUES ('".mysqli_real_escape_string($dbconnect,$_SESSION['addcategory']['name'])."')";
	$newcategory_qry = mysqli_query($dbconnect,$newcategory_sql);
	unset($_SESSION['addcategory'] ['name']);
?>
<p>New category had been entered</p>
<p><a href="index.php?page=admin">return to admin</a></p>