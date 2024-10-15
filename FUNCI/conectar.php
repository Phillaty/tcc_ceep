<?php
$host = "localhost";
$db   = "tcc";
$user = "root";
$pass = "";
 
$conecta = mysql_connect("$host", "$user", "$pass")or print (mysql_error());
mysql_select_db($db);
?>