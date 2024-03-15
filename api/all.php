<?php

require_once('../settings.php');
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}


$data = array();


$query = "SELECT * from users";
$result = $mysqli->query($query);

$arr = array();
$i = 0;
while ($user = $result->fetch_assoc()) {
    $arr[$i] = $user;
    $i++;
}

$data["users"] = $arr;


$query = "SELECT * from books";
$result = $mysqli->query($query);

$arr = array();
$i = 0;
while ($book = $result->fetch_assoc()) {
    $arr[$i] = $book;
    $i++;
}


$data["books"] = $arr;

print_r(json_encode($data, JSON_UNESCAPED_UNICODE));


//$users = json_encode($result->fetch_all(), JSON_UNESCAPED_UNICODE);
