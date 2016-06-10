<?php
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
	
	
	
$did=$_POST['did'];
$des=$_POST['des'];
$desdan=$_POST['desdan'];


mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "update conntact set name='".$des."',phone='".$desdan."' where contactid= ".$did;
mysql_query($query);

mysql_close();


?>



<html>
<body>
<a href="http://www.rhg3.dk/admin">return to Home page</a>
</body>
</html>