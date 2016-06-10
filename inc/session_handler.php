<?php

// session_handler.php
$tracer .= "<i>Inside session handler file:</i><br />";
// Clear all sessions
if( (isset($_GET['clear'])) && ($_GET['clear']=="yes") )
{
	if(isset($_SESSION['page'])) unset($_SESSION['page']);
	if(isset($_SESSION['sub'])) unset($_SESSION['sub']);
	if(isset($_SESSION['rank'])) unset($_SESSION['rank']);
	if(isset($_SESSION['username'])) unset($_SESSION['username']);
		if(isset($_SESSION['system_in'])) unset($_SESSION['system_in']) ;
	
	// Trace
	$tracer .= "Unsetting...<br />";
	$tracer .= "SESSION[page] = ".$_SESSION['page']."<br />";
	$tracer .= "SESSION[sub] = ".$_SESSION['sub']."<br />";
	$tracer .= "SESSION[rank] = ".$_SESSION['rank']."<br />";
	$tracer .= "SESSION[username] = ".$_SESSION['username']."<br />";
}
if( (isset($_GET['logout']))&&($_GET['logout']=="yes") )
{
	if(isset($_SESSION['page'])) unset($_SESSION['page']);
  if(isset($_SESSION['rank'])) unset($_SESSION['rank']);
	if(isset($_SESSION['username'])) unset($_SESSION['username']);
	if(isset($_SESSION['system_in'])) unset($_SESSION['system_in']) ;
}
// $_SESSION['page']
// The content of the mainfield relies on this variable
if(!isset($_SESSION['page']))
	$_SESSION['page']="default";
elseif(isset($_GET['p']))
	$_SESSION['page'] = $_GET['p']; 
$tracer .= "SESSION[page] has been set to: ".$_SESSION['page']."<br />";

// $_SESSION['sub']
if(isset($_GET['sub']))
	$_SESSION['sub'] = $_GET['sub'];  
 
//  _SESSION['system_in']
$_SESSION['system_in'] = "F";

$tracer .= "<i>End of session handler file</i><br /><br />";

?>

