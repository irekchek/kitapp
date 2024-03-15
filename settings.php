<?php
$mysql_name = 'root';
$mysql_host = 'localhost';
$mysql_pass = 'kitap-tat';
$mysql_db = 'kitap';


$mysqli = new MySQLi($mysql_host, $mysql_name, $mysql_pass, $mysql_db);
$mysqli->set_charset("utf8");
?>