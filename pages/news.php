<?php
	// News.php
	$main_out.="<div id='newsHeading'><img src=\"".$_GRAF."news.jpg\" alt=\"News\"></div>";
	$main_out .= "<div id=\"imageDescription\">";
	
	//PDO
	$sth = $conn->prepare("select * from  news order by date desc");
	$sth->execute();
	$data = $sth->fetchALL();
	$c=1;
	foreach ($data as $row):
		$main_out .= "<img src=\"".$_GRAF."linetop.jpg\" alt=\"Left\"><br/><br/>";
				
				$main_out .= "<table>";
				$main_out .= "<tr><td>".$row['title']."</td><tr>";
				$main_out .= "<tr><td>".$row['description']."</td><tr>";
				$main_out .= "<tr><td><img class='newsImage'  src=\"".$_PHOTO.$row['image']."\" alt='image'/></td><tr>";
				$main_out .= "</table>";
				$c=+1;
	endforeach;		


	/*$query = "select * from  news order by date desc";
  	 $result = mysql_query($query);
	 if ($result){
	 	$c=1;
		while (($data = mysql_fetch_assoc($result)) ){

				$main_out .= "<img src=\"".$_GRAF."linetop.jpg\" alt=\"Left\"><br/><br/>";
				
				$main_out .= "<table>";
				$main_out .= "<tr><td>".$data['title']."</td><tr>";
				$main_out .= "<tr><td>".$data['description']."</td><tr>";
				$main_out .= "<tr><td><img class='newsImage'  src=\"".$_PHOTO.$data['image']."\" alt='image'/></td><tr>";
				$main_out .= "</table>";
				$c=+1;
			}

	 }*/
	 
	 
/*	//$main_out.="<p>News<img id=\"productimage\" src=\"".$_PHOTO."andreas.jpg\" alt=\"1\"></p>";
	$main_out.="<div id='newsHeading'><img src=\"".$_GRAF."news.jpg\" alt=\"News\"></div>";
	$main_out .= "<div id=\"imageDescription\">";
	//for ($i=0;$i<=5;$i++)
	//{
		$main_out .= "<img src=\"".$_GRAF."linetop.jpg\" alt=\"Left\">";
		$main_out .= "<br/><br/>HEARTMADE <br/>";
		$main_out .= "Julie Fagerholt Heartmade is known as the most exclusive of the Danish design brands. Illustration for Heartmade new collection.
 <br/><br/><br/>";
		$main_out .= "<img src=\"".$_PHOTO."news2.jpg\" alt='image'/><br/><br/><br/>";
	//}*/
	
	$main_out .= "</div>";

?>
