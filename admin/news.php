<html>
<body>

<?php


if (isset($_POST['B1'])){
	$response="";
	
	/*$user="rhg3_dk";
	$pw="fYhmQ7z2";
	$db="rhg3_dk";
	$host="rhg3.dk.mysql";
	*/
	$pw="";
	$user="root";
	$host="localhost";
	$db="rhg3";
	
	$dat=$_POST['dat'];
	$tit=$_POST['tit'];
	$des=$_POST['des'];
	$img=$_FILES['uploaded']['name'];
	
	
	mysql_connect($host,$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");
	
	$query = "INSERT INTO news(title,description,date,image) VALUES ('$tit','$des','$dat','$img')";
	//mysql_query($query);

	$target = "../img/photos/"; 
	$target = $target . basename( $_FILES['uploaded']['name']) ; 
	$ok=1;  
	
	
	if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))  
	{ 
		$result = mysql_query($query);	
		echo "The file ". basename( $_FILES['uploaded']['name']). " has been uploaded "; 
	}  else 
	{ 	
		echo "Sorry, there was a problem uploading your file."; 
	}



	mysql_close();

}else{
	$out="";
	$out.='<form enctype="multipart/form-data" method="POST" action="addData.php">';
	$out.='<table border=0>';

	$out.='<tr><td>Date</td> <td><input type="text" name="dat" size="15"> yyyy-mm-dd</td></tr>';
	$out.='<tr><td>Title</td> <td><input type="text" name="tit" size="50"></td></tr>';
	$out.='<tr><td></td> <td><textarea name="des" rows="10" cols="50" >type details here</textarea></td></tr>';
	$out.='<tr><td>Please choose a file:</td><td><input name="uploaded" type="file" /></td></tr>';
	$out.='<tr><td><input type="submit" value="Submit" name="B1"> <input type="reset" value="Reset" name="B2">  </td></tr>';

	$out.='</table>';
	$out.='</form>';
}

echo $out;
?>




<a href="http://www.rhg3.dk">return to Home page</a>
</body>
</html>