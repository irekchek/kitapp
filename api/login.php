<?php

require_once('../settings.php');
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}

if(!isset($_POST['login']) || !isset($_POST['password'])){
    die();
}

$login = strip_tags($_POST['login']);
$password = strip_tags($_POST['password']);

$query = "SELECT * from users WHERE login='$login' AND password='$password'";
$result = $mysqli->query($query);

if($result->num_rows == 0){
    die();
}

$user = $result->fetch_assoc();
echo json_encode($user, JSON_UNESCAPED_UNICODE);