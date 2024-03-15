<?php
require_once('load_user.php');
require_once('settings.php');
$index = true;

if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте: ";
    echo $mysqli->connect_error;
    exit;
}

$query = "SELECT * FROM books";
$result = $mysqli->query($query);
$books_kol = mysqli_num_rows($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>КИТАП – электронная библиотека татарской литературы</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <link rel="shortcut icon" href="images/logo_icon_brauser.png" type="image/png">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">



</head>

<body>

<?php require_once('header.php'); ?>

<main>
    <div class="second_header">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 ml-2">
                    <div class="row" style="margin-top: 8%;">
                        <img src="../images/kit_sin.svg" class="dark_logo">
                    </div>
                    <div class="row" style="margin-top: 2%;">
                        <h1>электронная библиотека<br>татарской литературы</h1>
                    </div>
                    <div class="row" style="margin-top: 7%;"></div>
                    <div class="row" style="margin-top: 5%;">
                        <div class="achives">
                            <div class="item_achives"><img src="../images/book-stack.svg" alt=""
                                                           class="item_achives_img"><b><?php echo $books_kol;
                                    if ($books_kol % 10 >= 5 || $books_kol % 10 == 0) {
                                        echo ' книг';
                                    } else if ($books_kol % 10 == 1) {
                                        echo ' книга';
                                    } else {
                                        echo ' книги';
                                    }
                                    ?> добавлена</b></div>
                            <div class="item_achives"><img src="../images/earpods.svg" alt=""
                                                           class="item_achives_img"><b>Разработка аудиокниг</b></div>
                            <div class="item_achives"><img src="../images/star.svg" alt="" class="item_achives_img"><b>Доступность
                                    редких&nbspкниг</b></div>
                            <div class="item_achives"><img src="../images/design.svg" alt=""
                                                           class="item_achives_img"><b>Удобный интерфейс</b></div>
                            <div class="item_achives"><img src="../images/wifi..svg" alt="" class="item_achives_img"><b>Онлайн
                                    и офлайн</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <img class="monument_img" src="../images/monument_jalil.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        if (isset($_GET['review']))
            echo '<div class="alert alert-dismissible fade show" role="alert" style=" border:1px solid green; margin-top: 20px; background-color: #caffc7;">
                            <h5 class="alert-heading">Отзыв успешно доставлен</h5>
                            <p style="font-size: 0.9rem;">Спасибо, вы делаете КИТАП лучше!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
        ?>
        <div class="row">
            <div class="col-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                    </ol>
                    <div class="container">
                        <div class="row">
                            <div class="col-12" style="margin-top: 2%;">
                                <h2 class="car_head">Популярное</h2>
                                <h4 class="car_head_describe">Самые популярные произведения татарской литературы</h4>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-inner" style="margin-bottom: 5%;">
                        <?php
                        $query = "SELECT * FROM books WHERE briefly != '' ORDER BY views DESC LIMIT 8";
                        $result = $mysqli->query($query);

                        $ind = 0;
                        while ($book = $result->fetch_assoc()) {
                            echo '<div class="carousel-item ';
                            if ($ind == 0) {
                                echo 'active';
                                $ind++;
                            }
                            echo '">
                            <img src="../images/white.png">
                            <div class="container col-10">
                                <div class="row">
                                    <div class="col-md-3 order-md-1">
                                        <a href="book.php?book_id=' . $book['book_id'] . '">
                                            <img class="featurette-image img-fluid book_car mx-auto"
                                                 src="books/books_img/' . $book['img'] . '">
                                        </a>
                                    </div>
                                    <div class="col-md-9 order-md-2">
                                        <h5 class="featurette-heading asd">О книге:</h5>
                                        <p>' . $book['briefly'] . '</p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:3%;">
                                    <div class="col-md-3 order-md-1">
                                        <h5 class="asd">Жанр:</h5>
                                        <div class="q">' . $book['genre'] . '</div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:2%;">
                                    <div class="col-md-3">
                                        <h5 class="asd">Язык:</h5>
                                        <div class="q">' . $book['language'] . '</div>
                                    </div>
                                    <div class="col-md-9">
                                        <a href="book.php?book_id=' . $book['book_id'] . '" class="read_online-button">
                                <div class="face-primary">Читать</div>
                                <div class="face-secondary">🡲</div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>';
                        }

                        ?>


                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container book_add_container">
                    <div class="row" style="justify-content: center; margin-bottom: 1em;">
                        <h3 class="car_head">Оставьте отзыв о сайте!</h3>
                        <p class="car_head_describe" style="font-size: 1.1rem;">КИТАП находится на стадии
                            Бета-тестирования. Нам очень важно ваше мнение!</p>
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="review_form.php">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="subject" style="margin-top: 0.5em;">
                                    <label>Тема:</label>
                                    <input type="text" name="subject" class="genre" required>
                                </div>

                                <div class="surname" style="margin-top: 0.5em;">
                                    <label>Фамилия:</label>
                                    <input type="text" name="surname" class="genre">
                                </div>

                                <div class="name" style="margin-top: 0.5em;">
                                    <label>Имя:</label>
                                    <input type="text" name="name" class="genre">
                                </div>

                                <p style="margin-top: 2em; color: #ce7900;">*ФИ необязательно</p>

                            </div>
                            <div class="col-md-8">
                                <div class="book_describe">
                                    <label>Отзыв:</label>
                                    <textarea type="text" name="review" required> </textarea>
                                </div>
                            </div>
                            <?php if (isset($_GET['error'])) {
                                echo '<p style="color: red;">Неверные данные</p>';
                            }
                            ?>
                        </div>
                        <div class="row" style="justify-content: center;">
                            <button type="submit" class="read_online-button">
                                <div class="face-primary">Отправить</div>

                                <div class="face-secondary">❤</div>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once('footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../js/holder.min.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
</body>

</html>