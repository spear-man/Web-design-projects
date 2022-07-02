<?php
//loggin button clicked
	if(isset($_POST['loginbutton']))
	{
		// get username and passwor from form
		$username = $_POST['loginusername'];
		$password = $_POST['loginpassword'];

		// call login function
		$result = $account->login($username, $password);

		// redirect to index.php
		if($result == true)
		{
			// session when user is logged in
			$_SESSION['userloggedin'] = $username;
			header("Location: index.php");
		}

	}
?>