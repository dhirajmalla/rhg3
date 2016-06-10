<?php

//global_menu.php

$tracer .= "<i>Enter the globlemenu-php</i><br />";

$gmenu_out="";
//$gmenu_out = "<div id='globalImage'><img src=\"".$_GRAF."background.jpg\" alt=\"Left\"></div>";
$gmenu_out .= "<ul id=\"gMenu\" class=".$_SESSION['page'] .">";

$gmenu_out .= "<li class=\"furniture\"><a href=\"".$_SERVER['PHP_SELF']."?p=news\"><img src=\"".$_GRAF."menu_news.jpg\" alt=\"News\" /></a></li>";
$gmenu_out .= "<li class=\"furniture\"><a href=\"".$_SERVER['PHP_SELF']."?p=contact\"><img src=\"".$_GRAF."menu_contact.jpg\" alt=\"contact\" /></a></li>";
$gmenu_out .= "<li class=\"furniture\"><a href=\"".$_SERVER['PHP_SELF']."?p=about\"><img src=\"".$_GRAF."menu_about.jpg\" alt=\"About\" /></a></li>";


$gmenu_out .= "</ul>";

$tracer .= "<i>End the globlemenu-php</i><br />";
?>

