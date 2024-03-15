<?php

require_once('../settings.php');
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}


$query = "SELECT * FROM books";
$result = $mysqli->query($query);

$arr = array();
$i = 0;
while ($book = $result->fetch_assoc()) {
    $arr[$i] = $book;
    $i++;
}


print_r(json_encode($arr, JSON_UNESCAPED_UNICODE));
