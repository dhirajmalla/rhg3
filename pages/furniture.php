<?php
	// products.php

 	 $query = "select * from description where product_fk=".$_GET['s']." order by photoname ";
	 $tracer .= "<p>$query</p>";
  	 $result = mysql_query($query);
		 if ($result){
		 		$data = mysql_fetch_assoc($result);
				$main_out .= "<p><img id=\"productimage\" src=\"".$_PHOTO.$data['photoname']."\" alt=\"1\"></p>";
				//$main_out .= "<p id=\"imageDescription\"><span class=\"productDescriptionHead\">".$_GET['productname']."</span><p id=\"imageDetail\"></p></p>";
				$main_out .= "<p id=\"imageDescription\"><span class=\"productDescriptionHead\">".$_GET['productname']."</span></p>";
				$main_out .= "<p id=\"imageDetail\"></p>";
				$main_out .= "<img id=\"leftarrow\" src=\"".$_GRAF."leftarrow.jpg\" alt=\"Left\">";
				$main_out .= "<img id=\"rightarrow\"  src=\"".$_GRAF."rightarrow.jpg\" alt=\"Right\">";
				
				// GET into LI and can be used for Java Script  (for Image)
				$main_out .= "<ul id=\"productImageList\">";
				$main_out .= "<li>".$data['photoname']."</li>";
				while ($data = mysql_fetch_assoc($result)){
				 	$main_out .= "<li>".$data['photoname']."</li>";
  				}
				$main_out .= "</ul>";

				// GET into LI again and can be used for Java Script (for description)

				$query = "select * from description where product_fk=".$_GET['s']." order by photoname ";
				$result = mysql_query($query);
				$data = mysql_fetch_assoc($result);
				$main_out .= "<ul id=\"productImageDetails\">";
				$main_out .= "<li>".$data['description']."</li>";
				while ($data = mysql_fetch_assoc($result)){
				 	$main_out .= "<li>".$data['description']."</li>";
  				}
				$main_out .= "</ul>";

		}else {
			$main_out .= "<p><img id=\"productimageStage\" src=\"".$_PHOTO."streger.jpg\" alt=\"1\"></p>";
		 }
?>
