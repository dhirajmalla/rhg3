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
	
	$user="rhg3_dk";
	$pw="fYhmQ7z2";
	$db="rhg3_dk";
	$host="rhg3.dk.mysql";
	
	$link = mysql_connect($host, $user, $pw);
	mysql_select_db($db, $link);

	 $did=$_GET['did'];
	 
	 $query = "select * from  contact where contactid= ".$did;
	 $result = mysql_query($query);
	 if ($result){
			$data = mysql_fetch_assoc($result);
			$des=$data['name'];
			$firmname=$data['firmname'];
			$desdan=$data['phone'];
			$email=$data['email'];
			$image=$data['image'];
			$web=$data['web'];
			$menuimage=$data['menuimage'];
	 }

?>
<form action="edititem.php" method="POST">   
    <table>
        	<tr><td><input type="hidden" name="did" value=<?php echo $did; ?>></td></tr>
        	<tr><td>Name</td><td><input type="text" name="des" > (<?php echo $des; ?>)</td></tr>
	<tr><td>Firm</td><td><input type="text" name="firmname" > (<?php echo $firmname; ?>)</td></tr>
        	<tr><td>Phone</td><td><input type="text" name="desdan" > (<?php echo $desdan; ?>)</td></tr>
	<tr><td>email</td><td><input type="text" name="email" > (<?php echo $email; ?>)</td></tr>
	<tr><td>Web</td><td><input type="text" name="web" > (<?php echo $web; ?>)</td></tr>
	<tr><td><input type="submit" value="Edit"  name="B1"/></td></tr>	
	<tr><td>&nbsp;</td></tr>	
	<tr><td>Image</td><td><img src="../img/photos/<?php echo $image; ?>"/></td></tr>
	<tr><td>Please choose a file:</td><td><input name="uploadedImg" type="file" />&nbsp;&nbsp;<input type="submit" value="Upload"  name="B2"/></td></tr>
	<tr><td>&nbsp;</td></tr>	
	<tr><td>Menu Image</td><td><img src="../img/graphics/<?php echo $menuimage; ?>"/></td></tr>
	<tr><td>Please choose a file:</td><td><input name="uploadedMenu" type="file" />&nbsp;&nbsp;<input type="submit" value="Upload"  name="B3"/></td></tr>
        	<tr><td><input type="submit" value="Edit" /></td></tr>
    </table>
</form>

