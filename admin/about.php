<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a {
	text-decoration:none;
	color:#000;
}
form{
	border:1px solid #399;
	width:500px;
}

-->
</style>
<?php
	// about.php
	
	$main_out="";

	/*$user="rhg3_dk";
	$pw="fYhmQ7z2";
	$db="rhg3_dk";
	$host="rhg3.dk.mysql";
	*/
	$pw="";
	$user="root";
	$host="localhost";
	$db="rhg3";

	
	$link = mysql_connect($host, $user, $pw);
	mysql_select_db($db, $link);


if (isset($_POST['uploadBut'])){
	
	$query = "update about set about='".$_POST['about']."' ";
	mysql_query($query);	
	echo "update completed!!!";

}elseif (isset($_POST['uploadButPot'])){

	$target = "../img/photos/"; 	
	$target = $target . "about.jpg";
	
	move_uploaded_file($_FILES['uploaded']['tmp_name'], $target);

	echo "upload completed!!!";

}else{
	
	 $query = "select * from about";
  	 $result = mysql_query($query);
	 if ($result){
		$data = mysql_fetch_assoc($result);	
		$main_out .='<form enctype="multipart/form-data" action="about.php" method="POST">';
		$main_out .= "<table>";
		$main_out .= "<tr><td>Write about RHG3</td></tr>";
		$main_out .="<tr><td><textarea name ='about'  rows=5 cols=50>".$data['about']."</textarea></td>";
		$main_out .= '<tr><td><input  name ="uploadBut" type="submit" value="Update" /></td></tr>';
		$main_out .= '</table> <br /><br /><br />';

		$main_out .='<table>';
		$main_out .='<tr><td>Please choose Image</td><td><input name="uploaded" type="file" /></td></tr>';
		$main_out .='<tr><td><input  name ="uploadButPot" type="submit" value="Upload" /></td></tr>';
		$main_out .='</table>';
		$main_out .='</form>';

		echo $main_out ;
	}

}

?>
