<?php

require_once('settings.php');

if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}


$subject = $_POST['subject'];

if (isset($_POST['surname'])) $surname = $_POST['surname'];
else $surname = NULL;

if (isset($_POST['name'])) $name = $_POST['name'];
else $name = NULL;

$review = $_POST['review'];

$query = "INSERT INTO review (subject, surname, name, review) VALUES ('$subject', '$surname', '$name', '$review')";

$result = $mysqli->query($query);
if (!$result) {
    echo $mysqli->error;
    die();
}
header("Location: index.php?review=1");
?>