<?php
	$response="";
	
	$username="root";
	$password="";
	$database="rhg3";
	
	$dat=$_POST['dat'];
	$tit=$_POST['tit'];
	$des=$_POST['des'];
	$img=$_FILES['uploaded']['name'];
	
	
	mysql_connect("localhost",$username,$password);
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


?>



<html>
<body>
<a href="http://www.rhg3.dk">return to Home page</a>
</body>
</html>