<?php
	//check to see if user is loged in 
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:index.php?page=admin");
	}

	$_SESSION['editcategory']['name']=$_POST['name'];
?>

<h1>Edit category</h1>
<p>Updated category name: <?php echo $_SESSION['editcategory']['name']; ?></p>
<p><a href="index.php?page=editcategoryupdate">Confirm | <a href="index.php?page=editcategory">go back</a> | <a href="index.php?page=admin">Back to admin panel</a></p>