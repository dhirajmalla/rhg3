<?php

session_start();

// MAIN OUTPUT VARIABLES
$out = "";
$tracer = "<div id=\"trace_layer\">";


// PATHS
//$_PREFIX= "../"; // change this to "" when this page is becomming the index
$_PREFIX= ""; // change this to "" when this page is becomming the index


$_INC 		= $_PREFIX."inc/";
$_PAGES 	= $_PREFIX."pages/";
$_IMG 		= $_PREFIX."img/";
$_GRAF 		= $_PREFIX."img/graphics/";
$_ICON 		= $_PREFIX."img/icons/";
$_PHOTO 	= $_PREFIX."img/photos/";
$_JS 			= $_PREFIX."js/";
$_CSS 		= $_PREFIX."style/";
$_SWF 		= $_PREFIX."swf/";
$_SND 		= $_PREFIX."snd/";


// FUNCTION DEPENDENT INCLUDES
include($_INC."db_connect.php");
include($_INC."session_handler.php");

// PAGE SECTION CONTENT INCLUDES
// BANNER
// Defines $banner_out
include($_PAGES."banner.php");


// SEARCH FORM
// Search the website or...?
// include($_PAGES."search.php");


// LOGIN FORM
// Defines $login_out
//******include($_PAGES."login.php");



// GLOBAL MENU
// Defines $gmenu_out
include($_PAGES."global_menu.php");


// LOCAL MENU
// Defines $lmenu_out
 include($_PAGES."local_menu.php");


// MAIN FIELD
// switch($_SESSION['page'])
// Defines $main_out
include($_PAGES."mainfield.php");


// MASH-UP
// Defines $mashup_out
//******include($_PAGES."mashup.php");


// FOOTER
// Defines $footer_out
include($_PAGES."footer.php");


// LAYOUT INCLUDE
// Combines all includded pages output variables into $out
// Defines $out

include($_PAGES."layout.php");


// END TRACE LAYER
$tracer .= "</div>";


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>3r</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_CSS."style.css"; ?>" />
<script language="JavaScript" type="text/javascript" src="<?php echo $_JS."functions.js"; ?>"></script>
</head>

<body>
<?php
	echo $out;
  //if( (isset($_SESSION['ranklevel'])) && ($_SESSION['ranklevel']==10) )
 		//echo $tracer;
?>
</body>
</html>



