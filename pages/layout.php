<?php
// layout.php

// Compose page

// Outer frame
$out .= "<div id=\"frame\">\n";
	// Banner
	$out .= "<div id=\"banner_layer\">\n";
		$out .= $banner_out; // from banner.php
  $out .= "</div>\n";
  // Global menu
  $out .= "<div id=\"globalmenu_layer\">\n";
		$out .= $gmenu_out; // from globalmenu.php
  $out .= "</div>\n";
  
  // 3 columns **************************************
  	
    // Column 1: local menu
	$out .= "<div id=\"localmenu_layer\">\n";
		$out .= $lmenu_out; // from localmenu.php
		// Login
		$out .= "<div id=\"login_layer\">\n";
			//$out .= $login_out;
		$out .= "</div>\n";
    $out .= "</div>\n";
    
	// Column 2: Main content area
    $out .= "<div id=\"main_layer\">\n";
			$out .= $main_out; // from mainfield.php
    $out .= "</div>\n";
	
	// Column 3: Mashup column
    $out .= "<div id=\"mashup_layer\">\n";
			//$out .= $mashup_out; // from mashup.php
    $out .= "</div>\n";
  
  // End of 3 columns *********************************
    
  // Footer
  $out .= "<div id=\"footer_layer\">\n";
		$out .= $footer_out; // from footer.php
  $out .= "</div>\n";

//Language Selection
  $out .= "<div id=\"language_layer\">\n";
		//$out .= "<span  class='boldText'>EN</span> | <a href='danish/indexmain.php'>DN</a>"; // plain text
  $out .= "</div>\n";

	
// End of outer frame    
$out .= "</div>\n";

?>
