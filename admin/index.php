<html>
<head>
<title></title>

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
table, tr, td, th{
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

</head>

<body>

<?php

$mainout="<h2>CMS for RHG3</h2><br/>";
if (isset($_POST['subBut'])){
	
	if ( ($_POST['user']=='rhg3') && ($_POST['pw']=='3ghr')   ){
		$mainout.="<table>";
		$mainout.='<tr><th><a href="news.php">News</a></th></tr>';
		$mainout.='<tr><th><a href="contact.php">Contact</a></th></tr>';
		$mainout.='<tr><th><a href="about.php">About</a></th></tr>';
		$mainout.="</table>";
	}else{
		$mainout.='Invalid user/password!!';
		$mainout.="<form method='POST' action='index.php'>";
		$mainout.="<table>";
		$mainout.="<tr><td>User</td><td><input type='text' name='user'></td></tr>";
		$mainout.="<tr><td>Password</td><td><input type='password' name='pw'></td></tr>";
		$mainout.="<tr><td><input type='submit' name='subBut' value='Login'></tr>";
		$mainout.="</table>";
		$mainout.="</form>";

	}
}else{
	$mainout.="<form method='POST' action='index.php'>";
	$mainout.="<table>";
	$mainout.="<tr><td>User</td><td><input type='text' name='user'></td></tr>";
	$mainout.="<tr><td>Password</td><td><input type='password' name='pw'></td></tr>";
	$mainout.="<tr><td><input type='submit' name='subBut' value='Login'></tr>";
	$mainout.="</table>";
	$mainout.="</form>";

}

echo $mainout;
?>


</body>
</html>