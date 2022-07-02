<?php
	class Account {
		private $con;
		//error array
		private $errorArray;

		public function __construct($con)
		{
			// pass $con variable asigned as con for database access
			$this->con = $con;
			$this->errorArray = array();
		}

		//user login function
		public function login($un, $pw)
		{
			$pw = md5($pw);

			// check if password is already in table
			$query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");
			//check number of rows
			if(mysqli_num_rows($query) == 1)
			{
				return true;
			}
			else
			{
				//print login failed error if error ocures
				array_push($this->errorArray, constants::$loginfailed);
				return false;
			}
		}

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
		{
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);

			//check error array if its empty b4 inserting data in db
			if(empty($this->errorArray) == true)
			{
				return $this->insertuserdetails($un, $fn, $ln, $em, $pw);
			}
			else
			{
				return false;
			}

		}

		//get errors during validation and output to user for correction
		public function getError($error)
		{
			//in_array check if a given parameter exists
			if(!in_array($error, $this->errorArray))
			{
			//if no error set to empty string
				$error = "";
			}
			// string within string use '' not ""
			return "<span class='errorMessage'> $error </span>";

		}

		// data instertion into the database
		private function insertuserdetails($un, $fn, $ln, $em, $pw)
		{
			$encryptedpw = md5($pw); 
			$profilepic ="assets/images/profile_pic/head.png";
			$date = date("Y-m-d"); // caps on years
			// insert the details into database  using query| $this ->con is used since its the class variable declared on top
			$result = mysqli_query($this->con, "INSERT INTO users VALUES('', '$un', '$fn', '$ln', '$em', '$encryptedpw', '$date', '$profilepic')");
			return $result;
		}

		private function validateUsername($un) 
		{
			//check length
			if(strlen($un) > 25 || strlen($un) <5)
			{
				array_push($this->errorArray,constants::$usernamechar );
				return;
			}
			
			// chech username if it has been used already 
			$checkusernamequery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
			//check number of rows
			if(mysqli_num_rows($checkusernamequery) != 0)
			{
				array_push($this->errorArray, constants::$usernametaken);
				return;
			}
		}

		private function validateFirstName($fn)
		{
			//check length
			if(strlen($fn) > 25 || strlen($fn) <2)
			{
				array_push($this->errorArray,constants::$firstnamechar);
				return;
			}	
		}

		private function validateLastName($ln)
		{
			//check length
			if(strlen($ln) > 25 || strlen($ln) <2)
			{
				array_push($this->errorArray,constants::$lastnamechar );
				return;
			}	
		}

		private function validateEmails($em, $em2) {
			if($em != $em2)
			{
				array_push($this->errorArray,constants::$emaildontmatch);
			}
			
			//check format of email
			if(!filter_var($em, FILTER_VALIDATE_EMAIL))
			{
				array_push($this->errorArray,constants::$emailinvalid);
			}

			// chech if email has been used
			$checkemailquery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
			//check number of rows
			if(mysqli_num_rows($checkemailquery) != 0)
			{
				array_push($this->errorArray, constants::$emailtaken);
				return;
			}

		}

		private function validatePasswords($pw, $pw2)
		{
			// check matching password
			if($pw != $pw2)
			{
				array_push($this->errorArray,constants::$passwordsdontmatch);
			}

			// check password lenght
			if(strlen($pw) > 10 || strlen($pw) <6)
			{
				array_push($this->errorArray,constants::$passwordchar);
				return;
			}
		}


	}
?>