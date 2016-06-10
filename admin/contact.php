<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>


<?php
	// products.php
	
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

	 //$pid=$_GET['pid'];
	 
	 $query = "select * from  contact  order by contactid";
  	 $result = mysql_query($query);
	 if ($result){
			$main_out= "<table border=1>";
			$main_out .= "<tr>";
			$main_out .="<th>S/n</th>";
			$main_out .="<th>Name</th>";
			$main_out .="<th width='200'>Phone</th>";
			$main_out .="<th width='200'>Photo Name</th>";
			$main_out .= "</tr>";
			$c=1;
			while ($data = mysql_fetch_assoc($result)){
				$main_out .= "<tr>";
				$main_out .="<td>".$c."</td>";
				$main_out .="<td>".$data['name']."</td>";
				$main_out .="<td>".$data['phone']."</td>";
				$main_out .="<td>".$data['image']."</td>";
				$main_out .="<td><a href='editsubproductform.php?did=".$data['contactid']."'>Edit</a></td>";
				$main_out .= "</tr>";
				$c=$c+1;
			}
			$main_out .= "</table>";

	 }
	 

	 echo $main_out;
?>
