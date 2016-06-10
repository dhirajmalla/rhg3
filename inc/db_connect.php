<?php
// db_connect.php
include("db_var.php");
/*$link = mysql_connect($host, $user, $pw);
mysql_select_db($db, $link);
*/

// PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=rhg3", $user, $pw);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
