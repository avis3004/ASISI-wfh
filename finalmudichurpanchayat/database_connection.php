<?php
ini_set("error_reporting", E_ALL & ~E_DEPRECATED);
$mysql_hostname = "208.91.198.197:3306";
$mysql_user = "mpanchayat";
$mysql_password = "Mudichur@123";
$mysql_database = "panchayat";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
?>