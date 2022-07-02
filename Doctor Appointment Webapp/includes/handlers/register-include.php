<?php
// clean user input using function
function cleanformusername($inputtext)
{
	$inputtext =strip_tags($inputtext);
	$inputtext =str_replace("","", $inputtext);
	return $inputtext;
}

// clean useremails etc
function cleanformstring($inputtext)
{
	$inputtext =strip_tags($inputtext);
	$inputtext =str_replace("","", $inputtext);
	//converl first char to upercase
	$inputtext =ucfirst(strtolower($inputtext));
	return $inputtext;
}

// clean password function
function cleanformpassword($inputtext)
{
	$inputtext =strip_tags($inputtext);
	return $inputtext;
}


//detect register btn click
if(isset($_POST['registerbutton']))
{
	//pull value from form and clean them
	$username =cleanformusername($_POST['username']);
	$firstname =cleanformstring($_POST['firstname']);
	$lastname =cleanformstring($_POST['lastname']);
	$email =cleanformstring($_POST['email']);
	$email2 =cleanformstring($_POST['email2']);
	$password =cleanformpassword($_POST['password']);
	$password2 =cleanformpassword($_POST['password2']);

	// if registration is successfull redirect to index page
	$successfull = $account ->register($username, $firstname, $lastname, $email, $email2, $password, $password2);
	if($successfull == true)
	{
		$_SESSION['userloggedin'] = $username;
		header("location: index.php");
	}

}

?>