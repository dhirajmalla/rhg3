<?php

// mainfield.php
$tracer.="<i>Inside the mainfield</i><br />";
$main_out = "";


// Trace $_SESSION['page']
$tracer.="SESSION[page] = ".$_SESSION['page']."<br />\n";

switch($_SESSION['page']) {
	case ("news"):	
				include($_PAGES."news.php");
				break;

	case ("about"): 	
				include($_PAGES."about.php");
				break;
	case ("contact"): 	
				include($_PAGES."contact.php");
				break;

	
}

$tracer.="<i>End of the mainfield</i><br />";
?>

