<?php
// signup.php
// TODO:
// Proper email validation using regular expressions
$tracer .= "<i>Inside signup.php</i><br />";
// A registratiion of a new user
// Check to see if the user has entered data in the form
if(isset($_POST['signupform']))
	{
	// Validate the data
		$valid = true;
		if($_POST['firstname'] == "")
		{
			$valid = false;
			$error_message .= "You must type a name<br />\n";
		}
		if($_POST['email'] == "")
		{
			$valid = false;
			$error_message .= "You must type an email<br />\n";
		}
    elseif(!preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]{2,4}+$/", $_POST['email']))
    {
     	$valid = false;
			$error_message .= "Unvalid email<br />\n";
    }
		if($_POST['login'] != "")
		{
			$check_query = "select * from member where login = '".$_POST['login']."'";
			$check_result = mysql_query($check_query);
			$check_number = mysql_num_rows($check_result);
			if($check_number > 0)
			{
				$valid = false;
				$error_message .= "The login has been taken<br />\n";
			}
		}
		else
		{
			$valid = false;
			$error_message .= "You must type a login<br />\n";
		}
		if($_POST['pw'] == "")
		{
			$valid = false;
			$error_message .= "You must type a password<br />\n";
		}
	} // if (user input)
	if($valid == true)
	{
		// Insert into database
		$main_out .= "You have filled out the form succesfully...<br />";
		$main_out .= "The database will be updated shortly...";
	}
	// The web form
	if(!isset($_POST['firstname']) || ($valid == false))
	{
		$main_out .= "<table>";
		$main_out .= "<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\">\n";
		$main_out .= "<tr><td>Type your name</td><td><input type=\"text\" name=\"firstname\" value=\"".$_POST['firstname']."\"></td></tr>\n";
		$main_out .= "<tr><td>Type your email</td><td><input type=\"text\" name=\"email\"></td></tr>\n";
		$main_out .= "<tr><td>Type your login</td><td><input type=\"text\" name=\"login\"></td></tr>\n";
		$main_out .= "<tr><td>Type your password</td><td><input type=\"password\" name=\"pw\"></td></tr>\n";
		$main_out .= "<tr><td></td><td><input type=\"submit\" value=\"Register\" name=\"signupform\"></td></tr>\n";
		$main_out .= "</form>";
		$main_out .= "</table>";
		// Adding the error message to the output
		if($error_message != "")
			$main_out .= "<br />".$error_message;
	}
	$tracer .= "<i>End of signup.php</i><br />";
?>

