<?php

// login.php
$tracer .= "<i>Enter the login-php</i><br />";
$login_out = "";
// If login form is filled out: test user login
if(isset($_POST['login']))
{
  $query = "select * from member where login='".$_POST['login']."' and pw='".$_POST['pw']."'";
  $tracer .= "<p>$query</p>";
  $result = mysql_query($query);
  if(mysql_num_rows($result)==1)
  {
    $data=mysql_fetch_assoc($result);
    $_SESSION['rank']=$data['rank'];
    $_SESSION['username']=$data['login'];
  }
  else
  {
    $login_out .= "<p>User login failed</p>";
  }
}

// If user is logged in: show username
// Provide logout link
if(isset($_SESSION['rank']))
{
  $login_out .= "<p>Hello ".$_SESSION['username']."</p>";
  $login_out .= "<p><a href=\"".$_SERVER['PHP_SELF']."?logout=yes\">Logout</a></p>";
}
// If user is not logged in:
// A loginform
else
{
  $login_out .= "<table class=\"loginform\">";
  $login_out .= "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" class=\"loginform\">";
  $login_out .= "<tr><td>Login</td><td><input name=\"login\" type=\"text\" size=\"10\"></td></tr>";
  $login_out .= "<tr><td>Password</td><td><input name=\"pw\" type=\"password\" size=\"10\"></td></tr>";
  $login_out .= "<tr><td></td><td><input value=\"Login\" type=\"submit\"></td></tr>";
  $login_out .= "</form>";
  $login_out .= "</table>";
}

$tracer .= "<i>End of the login-php</i><br />";
?>
