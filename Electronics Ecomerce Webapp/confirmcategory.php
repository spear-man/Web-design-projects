<?php
	//check to see if user is loged in 
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("Location:index.php?page=admin");
	}

	// check to see if user has submited the add category form
	if(!isset($_POST['submit']))
	{
		header("Location:index.php?page=admin");
	}

	// set add category session
	$_SESSION['addcategory'] ['name'] = $_POST['name'];

?>

<!---confirm added category -->
<h1>confirm category name</h1>
<p>you entered: <?php echo $_POST['name']; ?> </p>
<P><a href="index.php?page=entercategory">correct, continue</a> | <a href="index.php?page=addcategory">go back</a></P>