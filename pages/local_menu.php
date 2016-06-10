<?php
//local_menu.php

	/*$pw="lund";
	$user="andreas";
	$host="andreaslund.dk";
	$db="andreas_data";
	
	$link = mysql_connect($host, $user, $pw);
	mysql_select_db($db, $link);*/

	 //$pid=$_GET['pid'];
	 
	 /*$query = "select * from  contact order by contactid";
  	 $result = mysql_query($query);
	 if ($result){
			$lmenu_out = "<ul id=\"lMenu\">";
			while ($data = mysql_fetch_assoc($result)){
				$lmenu_out  .="<li><a href=http://".$data['web']." target=_blank><img src=\"".$_GRAF.$data['menuimage']."\" alt='menu'/></a></li>";
			}
			$lmenu_out .= "</ul>";

	 }
	 */
	 
	 //PDO
	$sth = $conn->prepare("select * from  contact order by contactid");
	$sth->execute();
	$data = $sth->fetchALL();
	$lmenu_out = "<ul id=\"lMenu\">";
	foreach ($data as $row):
			$lmenu_out  .="<li><a href=http://".$row['web']." target=_blank><img src=\"".$_GRAF.$row['menuimage']."\" alt='menu'/></a></li>";
	endforeach;
	$lmenu_out .= "</ul>";
	 
/*

//$lmenu_out = "<ul id=\"lMenu\" class=".$_GET['p'] .">";
$lmenu_out = "<ul id=\"lMenu\">";

$lmenu_out .= "<li><a href=\"http://www.formatdesign.dk\"><img src=\"".$_GRAF."mem1.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"http://www.designvaerk.dk\"><img src=\"".$_GRAF."mem2.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"http://www.torilbaekmark.dk\"><img src=\"".$_GRAF."mem3.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"http://www.rikkehagen.dk\"><img src=\"".$_GRAF."mem4.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"http://www.mariannebritt.dk\"><img src=\"".$_GRAF."mem5.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"http://www.mlinnebjerg.dk\"><img src=\"".$_GRAF."mem6.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"http://www.andreaslund.dk\"><img src=\"".$_GRAF."mem7.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"http://www.nygardsmaria.dk\"><img src=\"".$_GRAF."mem8.jpg\" alt=\"menu\" /></a></li>";
$lmenu_out .= "<li><a href=\"#\"><img src=\"".$_GRAF."mem9.jpg\" alt=\"menu\" /></a></li>";

$lmenu_out .= "</ul>";

*/

?>
