<?php
	// Contact.php
	$main_out.="<div id='newsHeading'><img src=\"".$_GRAF."contact.jpg\" alt=\"Contact\"></div>";
	$main_out .= "<div id=\"imageDescription\">";

	//PDO
	$sth = $conn->prepare("select * from  contact order by contactid");
	$sth->execute();
	$data = $sth->fetchALL();
	foreach ($data as $row):
		$main_out .= "<img src=\"".$_GRAF."linetop.jpg\" alt=\"Left\"><br/><br/>";
		$main_out .= "<table><tr><td width=80>";
		$main_out .= "<img class='contactImage'  src=\"".$_PHOTO.$row['image']."\" alt='image'/><br/><br/>";
		$main_out .= "</td><td>";
		$main_out .=$row['name']."<br/>";
		$main_out .=$row['firmname']."<br/>";
		$main_out .=$row['phone']."<br/>";
		$main_out .=$row['email']."<br/>";
		$main_out .="<a href=\"http://".$row['web']."\" target=\"_blank\">".$row['web']."</a><br/>";
		$main_out .= "</td></tr></table>";
	endforeach;
	 
	$main_out .= "</div>";

?>
