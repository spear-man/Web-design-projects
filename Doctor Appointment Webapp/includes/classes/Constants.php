<?php
// error display class
// static allow no instance cration and uses :: replacing ->
class Constants 
{
	public static $passwordsdontmatch = "your passwords don't match";
	public static $passwordchar = "your password must  be between 6 to 10 character";
	public static $emaildontmatch= "your emails don't match";
	public static $emailtaken = "this emails is already in use";
	public static $emailinvalid = "your emails is invalid";
	public static $lastnamechar = "your last name must be between 2 and 25 characters";
	public static $firstnamechar= "your first must be between 2 and 25 characters";
	public static $usernamechar = "your username must be between 5 and 25 characters";
	public static $usernametaken = "this username already exists";

// login
	public static $loginfailed = "this username or password was incorrect";

}
?>