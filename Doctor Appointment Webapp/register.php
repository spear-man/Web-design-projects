<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	//pass con variable for database
	$account = new Account($con);

	include("includes/handlers/register-include.php");
	include("includes/handlers/login-include.php");

//keep input value after submition to prevent reinputing again
	function getinputval($name)
	{
		if(isset($_POST[$name]))
		{
			echo $_POST[$name];
		}
	}
?>

<html>
<head>
    <title>MTANDAO-DOC</title>
	<link href="images/favicon.ico" type="image/ico" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/register.js" type="text/javascript"></script> 
</head>

<body>
	<!-- show login form by defalut instead of both -->
	
	<?php
	// chech whether login submit button has been hit then display apropriate page
	if(isset($_POST['registerbutton']))
	{
		echo '<script>
		$(document).ready(function()
		{
			// jquery object with hidelogin selecter to hide register and login form
				$("#loginform").hide();
				$("#registerform").show();
		});

	</script>';
	}
	else
	{
		echo '<script>
		$(document).ready(function()
		{
			// jquery object with hidelogin selecter to hide register and login form
				$("#loginform").show();
				$("#registerform").hide();
		});

	</script>';
	}
	?>
	

	<div id="background">
		
		<div id="logincontainer">
			

			<div id="inputcontainer">
			
				<form id="loginform" action="register.php" method="POST">
				<center><img src="assets/images/1.gif" alt=""></center>
				

					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(constants::$loginfailed);?>
						<label for="loginusername">Username</label>
						<input id="loginusername" name="loginusername" type="text" value="<?php getinputval('loginusername') ?>" required>
					</p>

					<p>
						<label for="loginpassword">Password</label>
						<input id="loginpassword" name="loginpassword" type="password"  required>
					</p>

					<button type="submit" name="loginbutton">LOGIN</button>

					<!-- switch btn loggin and sugn up menus -->
					<div class="hasaccounttext">
						<span id="hidelogin">Don't have an account? <span style="color:red">signup here!</span></span>
					</div>

				</form>

		<!------------------------------------------------------------------------------->

				<form id="registerform" action="register.php" method="POST">
				<center><img src="assets/images/1.gif" alt=""></center>
					<h2>Create An Account</h2>
					<p>
						<!--pull error from geterror function in account.php and display to user -->
						<?php echo $account->getError(constants::$usernamechar);?>
						<?php echo $account->getError(constants::$usernametaken);?>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" value="<?Php getinputval('username')?>" required>
					</p>

					
					<p>
						<!--pull error from geterror function in account.php and display to user -->
						<?php echo $account->getError(constants::$firstnamechar);?>
						<label for="firstname">First name</label>
						<input id="firstname" name="firstname" type="text" value="<?Php getinputval('firstname')?>" required>
					</p>

					
					<p>
						<!--pull error from geterror function in account.php and display to user -->
						<?php echo $account->getError(constants::$lastnamechar );?>
						<label for="lastname">Last name</label>
						<input id="lastname" name="lastname" type="text"   value="<?Php getinputval('lastname')?>" required>
					</p>

					
					<p>
						<!--pull error from geterror function in account.php and display to user -->
						<?php echo $account->getError(constants::$emaildontmatch);?>
						<?php echo $account->getError(constants::$emailinvalid);?>
						<?php echo $account->getError(constants::$emailtaken);?>
						<label for="email">Email</label>
						<input id="email" name="email" type="text"  value="<?Php getinputval('email')?>"  required>
					</p>

					<p>
						<label for="email2">Confirm email</label>
						<input id="email2" name="email2" type="email" value="<?Php getinputval('email2')?>" required>
					</p>


					<p>
						<!--pull error from geterror function in account.php and display to user -->
						<?php echo $account->getError(constants::$passwordsdontmatch);?>
						<?php echo $account->getError(constants::$passwordchar);?>
						<label for="password">password</label>
						<input id="password" name="password" type="password" required>
					</p>

					<p>
						<label for="password2">Confirm password</label>
						<input id="password2" name="password2" type="password" required>
					</p>

					<button type="submit" name="registerbutton">SIGN UP</button>

					<!-- switch btn loggin and sugn up menus -->
					<div class="hasaccounttext">
						<span id="hideregister">Already have an account?<span style="color:red"> Login here!</span></span>
					</div>
					
				</form>

			</div>

		</div>

	</div>
</body>
</html>