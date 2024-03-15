<?php

require_once('../settings.php');

if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}

if (isset($_POST['theme'])) $theme = $_POST['theme'];
else $theme = NULL;

if (isset($_POST['surname'])) $surname = $_POST['surname'];
else $surname = NULL;

if (isset($_POST['name'])) $name = $_POST['name'];
else $name = NULL;

if (isset($_POST['text'])) $text = $_POST['text'];
else $text = NULL;

$query = "INSERT INTO review (subject, surname, name, review) VALUES ('$theme', '$surname', '$name', '$text')";

$result = $mysqli->query($query);
if (!$result) {
    echo $mysqli->error;
    die();
}