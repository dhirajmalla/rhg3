<?php

	// about.php
	$main_out.="<div id='newsHeading'><img src=\"".$_GRAF."about.jpg\" alt=\"About\"></div>";
	$main_out .= "<div id=\"imageDescription\">";

	//$main_out .= "<img src=\"".$_GRAF."linetop.jpg\" alt=\"Left\"><br/><br/>";
	$main_out .= "<img src=\"".$_PHOTO."about.jpg\" alt=\"About\"><br/><br/>";
	
	
	/*
	$query = "select * from  about";
  	$result = mysql_query($query);
	if ($result){
		$data = mysql_fetch_assoc($result);
		$main_out .=$data['about'];					
	}
	*/
	
	//PDO
	$sth = $conn->prepare("select * from  about");
	$sth->execute();
	$data = $sth->fetchALL();
	foreach ($data as $row):
		$main_out .=$row['about'];					
	endforeach;		
	
	$main_out .= "</div>";

?>
