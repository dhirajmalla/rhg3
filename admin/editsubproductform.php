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
table{
	border:1px solid #399;
}


table{
	position:absolute;
	top:100px;
	left:400px;
}

h2 {
	border:1px solid #A89;
	text-align:center;
}
-->
</style>


<?php
	
	$out="";
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



	If (isset ($_POST['B1'])){
	
		$did=$_POST['did'];
		$nam=$_POST['nam'];
		$firmname=$_POST['firmname'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$web=$_POST['web'];

		//mysql_connect($host,$username,$password);
		//@mysql_select_db($database) or die( "Unable to select database");

		$query = "update contact set name='".$nam."',firmname='".$firmname."',email='".$email."',web='".$web."',phone='".$phone."' where contactid= ".$did;
		mysql_query($query);


	}elseif (isset ($_POST['B2'])){

		$did=$_POST['did'];
		$img=$_FILES['uploadedImg']['name'];
	
		
		$query = "update contact set image='".$img."' where contactid= ".$did;
		//mysql_query($query);

		$target = "../img/photos/"; 
		$target = $target . basename( $_FILES['uploadedImg']['name']) ; 
		$ok=1;  
		
		if(move_uploaded_file($_FILES['uploadedImg']['tmp_name'], $target))  
		{ 
			$result = mysql_query($query);	
			echo "The file ". basename( $_FILES['uploadedImg']['name']). " has been uploaded "; 
		}  else 
		{ 	
			
echo $img;
echo $target;
			//echo "Sorry, there was a problem uploading your file."; 
		}	
	}elseIf (isset ($_POST['B3'])){

		$did=$_POST['did'];
		$img=$_FILES['uploadedMenu']['name'];
	
		$query = "update contact set menuimage='".$img."' where contactid= ".$did;
		//mysql_query($query);

		$target = "../img/photos/"; 
		$target = $target . basename( $_FILES['uploadedMenu']['name']) ; 
		$ok=1;  
		
		if(move_uploaded_file($_FILES['uploadedMenu']['tmp_name'], $target))  
		{ 
			$result = mysql_query($query);	
			echo "The file ". basename( $_FILES['uploadedMenu']['name']). " has been uploaded "; 
		}  else 
		{ 	
			echo "Sorry, there was a problem uploading your file."; 
		}		
	}else{
		$did=$_GET['did'];
	 }

	 $query = "select * from  contact where contactid= ".$did;
	 $result = mysql_query($query);
	 if ($result){
			$data = mysql_fetch_assoc($result);
			$nam=$data['name'];
			$firmname=$data['firmname'];
			$phone=$data['phone'];
			$email=$data['email'];
			$image=$data['image'];
			$web=$data['web'];
			$menuimage=$data['menuimage'];
	 }


	$out.="<form enctype='multipart/form-data' method='POST' action='editsubproductform.php' >";
    	$out.="<table>";
        	$out.="<tr><td><input type='hidden' name='did' value='". $did."'></td></tr>";
        	$out.="<tr><td>Name</td><td><input type='text' name='nam' value ='". $nam."'></td></tr>";
	$out.="<tr><td>Firm</td><td><input type='text' name='firmname' value ='". $firmname."'></td></tr>";
        	$out.="<tr><td>Phone</td><td><input type='text' name='phone' value ='". $phone."'></td></tr>";
	$out.="<tr><td>email</td><td><input type='text' name='email' value ='".$email."'></td></tr>";
	$out.="<tr><td>Web</td><td><input type='text' name='web' value ='". $web."'></td></tr>";
	$out.="<tr><td><input type='submit' value='Edit' name='B1'/></td></tr>";
	$out.="<tr><td>&nbsp;</td></tr>";
	$out.="<tr><td>Image</td><td><img src='../img/photos/". $image."'/></td></tr>";
	$out.="<tr><td>Please choose a file:</td><td><input name=\"uploadedImg\" type=\"file\" />&nbsp;&nbsp;<input type='submit' value='Upload' name='B2'/></td></tr>";
	$out.="<tr><td>&nbsp;</td></tr>";
	$out.="<tr><td>Menu Image</td><td><img src='../img/graphics/". $menuimage."'/></td></tr>";
	$out.="<tr><td>Please choose a file:</td><td><input name=\"uploadedMenu\" type=\"file\" />&nbsp;&nbsp;<input type='submit' value='Upload'  name='B3'/></td></tr>";
    	$out.="</table>";
	$out.="</form>";

	echo $out;

?>

<a href="http://localhost/rhg3">Home page | </a>
<a href="http://localhost/rhg3/admin">Admin</a>