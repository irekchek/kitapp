<?php
$mysql_name = 'u2007904_irek';
$mysql_host = 'localhost';
$mysql_pass = 'kitap123';
$mysql_db = 'kitap';

$mysqli = new MySQLi($mysql_host, $mysql_name, $mysql_pass, $mysql_db);
$mysqli->set_charset("utf8");
?>