<?php
require_once('load_user.php');
require_once('settings.php');
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('Location: /login.php');
    die();
}

// О нет!! переменная connect_errno существует, а это значит, что соединение не было успешным!
if ($mysqli->connect_errno) {
    // Соединение не удалось. Что нужно делать в этом случае?
    // Можно отправить письмо администратору, отразить ошибку в журнале,
    // информировать пользователя об ошибке на экране и т.п.
    // Вам не нужно при этом раскрывать конфиденциальную информацию, поэтому
    // просто попробуем так:
    echo "Извините, возникла проблема на сайте";
    // На реальном сайте этого делать не следует, но в качестве примера мы покажем
    // как распечатывать информацию о подробностях возникшей ошибки MySQL
    echo "Ошибка: Не удалась создать соединение с базой MySQL и вот почему: \n";
    echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    // Вы можете захотеть показать что-то еще, но мы просто выйдем
    exit;
}


$genre = $_POST['genres'];
$author = $_POST['authors'];
$N = count($genre);
for($i = 0; $i < $N; $i++){

    $query = "SELECT recommend_genres FROM users WHERE user_id=$user_id";
    $result = $mysqli->query($query);
    $new_recommend_str = $result->fetch_assoc()['recommend_genres'];
    $new_recommend_arr = explode("," ,  $new_recommend_str);

        array_push($new_recommend_arr, $genre[$i]);
        $new_recommend_str = implode(",", $new_recommend_arr);
        $new_recommend_str = ltrim($new_recommend_str, ",");
        $query = "UPDATE users SET recommend_genres='$new_recommend_str' WHERE user_id=$user_id";
        $mysqli->query($query);
}

$N = count($author);
for($i = 0; $i < $N; $i++){

    $query = "SELECT recommend_authors FROM users WHERE user_id=$user_id";
    $result = $mysqli->query($query);
    $new_recommend_str = $result->fetch_assoc()['recommend_authors'];
    $new_recommend_arr = explode("," ,  $new_recommend_str);

    array_push($new_recommend_arr, $author[$i]);
    $new_recommend_str = implode(",", $new_recommend_arr);
    $new_recommend_str = ltrim($new_recommend_str, ",");
    $query = "UPDATE users SET recommend_authors='$new_recommend_str' WHERE user_id=$user_id";
    $mysqli->query($query);
}



$query = "UPDATE users SET interview=true WHERE user_id=$user_id";
$mysqli->query($query);

header("Location: /recommendations.php?interview_was_successfully_passed=1");
?>