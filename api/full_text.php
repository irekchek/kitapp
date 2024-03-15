<?php

require_once('../settings.php');
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}

if(!isset($_GET['id'])){
    die();
}

$id = strip_tags($_GET['id']);

$query = "SELECT * from books WHERE book_id='$id'";
$result = $mysqli->query($query);

if($result->num_rows == 0){
    die();
}


$book = $result->fetch_assoc();

$full_text = file_get_contents('../books/books_text/books_txt/' . $book['text'] . '_tat.txt');
echo json_encode($full_text, JSON_UNESCAPED_UNICODE);