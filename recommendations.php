<?php
require_once('load_user.php');
require_once('settings.php');
$recommend = true;

if(!isset($_SESSION['user_id'])){
    header("Location: login.php?need=1");
}

$user_id = $_SESSION['user_id'];
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}

$query = "SELECT * FROM users WHERE user_id=$user_id";
$result = $mysqli->query($query);
$interview = $result->fetch_assoc()['interview'];


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>КИТАП – первая онлайн-библиотека татарской литературы</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/recommendations.css" rel="stylesheet">


</head>

<body>





<?php require_once('header.php'); ?>
<main>
    <div class="container" style="margin-top: 3em; background-color: white; border-radius: 12px; padding-left: 3em; padding-right:3em; padding-top: 1%; padding-bottom:1em; border: 8px solid #feb386;
    border-radius: 18px;
    border-style: double;">
        <?php
        if(isset($_GET['interview_was_successfully_passed']) && $_GET['interview_was_successfully_passed'] == 1){
            echo '<div class="alert alert-dismissible fade show" role="alert" style="border: none; background-color: #caffc7;">
                            <h5 class="alert-heading">Опрос успешно пройден!</h5>
                            <hr>
                            <p class="mb-0" style="font-size: 0.9rem">Теперь наш алгоритм сможет точнее подбирать произведения, основанные на ваших предпочтениях.</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
        }

        ?>

        <!-- Button trigger modal -->

        <h2 style="width: 100%; text-align: center;">Алгоритм</h2>

        <div class="row" style="margin-top: 2em; text-align: justify; background-color: #FEF5FF; padding: 15px; border-radius: 8px;" >

            <p style=""> <img src="images/SmartChoice.png" style="float: left; height: 7em; padding-right: 1em;"> - это алгоритм, который рекомендует читателю татарскую литературу на основе его предпочтений. Мы разрабатывали его около 70 человеко-часов и потратили 11 энергетиков. Наша команда постарались учесть абсолютно все детали, чтобы приблизить алгоритм к идеалу.</p>
            <img src="images/Схема.png" style="width: 100%; margin-top: 2em;">
        </div>

        <div class="row" style="justify-content: center; margin-top: 5em;">
            <h2>Ваши Рекомендации</h2>
        </div>

        <div class="row" style="margin-top: 1em; justify-content: left;">
            <div class="hs__wrapper">
                <div class="hs__header">
                    <h3 class="hs__headline">Рекомендованные книги (жанры)</h3>
            <?php

            $query = "SELECT * FROM users WHERE user_id=$user_id";
            $result = $mysqli->query($query);
            $new_recommend_str = $result->fetch_assoc()['recommend_genres'];
            $new_recommend_arr = explode("," ,  $new_recommend_str);

            echo '
                        <div class="hs__arrows"><a class="arrow disabled arrow-prev"><img src="images/right-arrow-car-genres.png"> </a><a class="arrow arrow-next"><img src="images/right-arrow-car-genres.png"></a></div> </div> <ul class="hs">';

            foreach ($new_recommend_arr as $item) {
                $query = "SELECT * FROM books WHERE genre='$item' ORDER BY RAND() LIMIT 8";
                $result = $mysqli->query($query);
                while ($user_recommend = $result->fetch_assoc()) {
                    echo '<li class="hs__item"> <a href=book.php?book_id=';
                    echo $user_recommend['book_id'];
                    echo '> <img class="hs__item__image" src="books/books_img/';
                    echo $user_recommend['img'];
                    echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                    echo $user_recommend['name'];
                    echo '</span><span class="hs__item__subtitle">';
                    echo $user_recommend['author'];
                    echo '</span></div> </li>';
                }
            }
            $N = count($new_recommend_arr);
            $N = 12 - $N;
            $query = "SELECT * FROM books ORDER BY RAND() LIMIT $N";
            $result = $mysqli->query($query);
            while ($user_recommend = $result->fetch_assoc()) {
                echo '<li class="hs__item"> <a href=book.php?book_id=';
                echo $user_recommend['book_id'];
                echo '> <img class="hs__item__image" src="books/books_img/';
                echo $user_recommend['img'];
                echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                echo $user_recommend['name'];
                echo '</span><span class="hs__item__subtitle">';
                echo $user_recommend['author'];
                echo '</span></div> </li>';
            }


                echo '</ul> </div>';
                $result->free();
            ?>

                </div>
                <div class="row" style="margin-top: 1em; justify-content: left;">
                    <div class="hs__wrapper">
                        <div class="hs__header">
                            <h3 class="hs__headline">Рекомендованные книги (авторы)</h3>
                            <?php

                            $query = "SELECT * FROM users WHERE user_id=$user_id";
                            $result = $mysqli->query($query);
                            $new_recommend_str = $result->fetch_assoc()['recommend_authors'];
                            $new_recommend_arr = explode("," ,  $new_recommend_str);

                            echo '
                        <div class="hs__arrows"><a class="arrow disabled arrow-prev"><img src="images/right-arrow-car-genres.png"> </a><a class="arrow arrow-next"><img src="images/right-arrow-car-genres.png"></a></div> </div> <ul class="hs">';

                            foreach ($new_recommend_arr as $item) {
                                $query = "SELECT * FROM books WHERE author='$item' ORDER BY RAND()";
                                $result = $mysqli->query($query);
                                while ($user_recommend = $result->fetch_assoc()) {
                                    echo '<li class="hs__item"> <a href=book.php?book_id=';
                                    echo $user_recommend['book_id'];
                                    echo '> <img class="hs__item__image" src="books/books_img/';
                                    echo $user_recommend['img'];
                                    echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                                    echo $user_recommend['name'];
                                    echo '</span><span class="hs__item__subtitle">';
                                    echo $user_recommend['author'];
                                    echo '</span></div> </li>';
                                }
                            }
                            $N = count($new_recommend_arr);
                            $N = 12 - $N;
                            $query = "SELECT * FROM books ORDER BY RAND() LIMIT $N";
                            $result = $mysqli->query($query);
                            while ($user_recommend = $result->fetch_assoc()) {
                                echo '<li class="hs__item"> <a href=book.php?book_id=';
                                echo $user_recommend['book_id'];
                                echo '> <img class="hs__item__image" src="books/books_img/';
                                echo $user_recommend['img'];
                                echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                                echo $user_recommend['name'];
                                echo '</span><span class="hs__item__subtitle">';
                                echo $user_recommend['author'];
                                echo '</span></div> </li>';
                            }


                            echo '</ul> </div>';
                            $result->free();
                            ?>
                        </div>
    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php require_once('footer.php'); ?>


<?php
if($interview == false){

?>

<div class = 'starterRecWin' id = 'startQues'>
    <form action="interview_form.php" method = 'POST'>
        <div class="selectByGenres">
            <div class="recText"><span>Выберите жанры, которые вам нравятся</span></div>
            <div class="selectLikeGenres">
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span>Рассказы</span>
                        </div>
                        <input type="checkbox" name="genres[]" value="Рассказы">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span>Сказки</span>                </div>
                        <input type="checkbox" name="genres[]" value="Сказки">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span>Повести</span>                </div>
                        <input type="checkbox" name="genres[]" value="Повести">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>            <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span class = 'selectBookImgSmall'>Зарубежная <br> литература</span>
                        </div>
                        <input type="checkbox" name="genres[]" value="Зарубежная литература">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span>Поэзия</span>                </div>
                        <input type="checkbox" name="genres[]" value="Поэзия">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span>Статьи</span>                </div>
                        <input type="checkbox" name="genres[]" value="Статьи">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span>Новеллы</span>                </div>
                        <input type="checkbox" name="genres[]" value="Новеллы">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span class = 'selectBookImgSmall'>Фантастика</span>                </div>
                        <input type="checkbox" name="genres[]" value="Фантастика">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>
                <div class = 'genresToSelect'>

                    <label>
                        <div class="selectBookImg">
                            <span>Романы</span>                </div>
                        <input type="checkbox" name="genres[]" value="Романы">
                        <div class="fakeCheckBox"><div class="checkMark"></div></div>
                    </label>
                </div>

            </div>
            <hr>
            <div class = 'selectByAuthor'>
                <div class="selectByAuthorText"><span>Выберите авторов, которые вам интересны</span></div>
                <div class="selectLikeAuthors">
                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/tukay.jpg" alt="">
                            </div>
                            <div class="selText">Габдулла Тукай</div>
                            <input type="checkbox" name="authors[]" value="Габдулла Тукай">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>
                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/jalil.jpg" alt="">
                            </div>
                            <div class="selText">Муса Джалиль</div>
                            <input type="checkbox" name="authors[]" value="Муса Джалиль">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>
                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/alish.jpg" alt="">
                            </div>
                            <div class="selText">Абдулла Алиш</div>
                            <input type="checkbox" name="authors[]" value="Абдулла Алиш">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>

                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/galiev.jpg" alt="">
                            </div>
                            <div class="selText">Шаукат Галиев</div>
                            <input type="checkbox" name="authors[]" value="Шаукат Галиев">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>
                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/Nasiri.jpg" alt="">
                            </div>
                            <div class="selText">Каюм Насыри</div>
                            <input type="checkbox" name="authors[]" value="Каюм Насыри">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>

                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/taktash.jpg" alt="">
                            </div>
                            <div class="selText">Хади Такташ</div>
                            <input type="checkbox" name="authors[]" value="Хади Такташ">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>
                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/karim.jpg" alt="">
                            </div>
                            <div class="selText">Фатих Карим</div>
                            <input type="checkbox" name="authors[]" value="Фатих Карим">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>
                    <div class = 'authorToSelect'>
                        <label>
                            <div class="selectBookImg">
                                <img src="./authors/authors_img/isanbet.jpg" alt="">
                            </div>
                            <div class="selText">Наки Исанбет</div>
                            <input type="checkbox" name="authors[]" value="Наки Исанбет">
                            <div class="fakeCheckBox"><div class="checkMark"></div></div>
                        </label>
                    </div>

                </div>
            </div>
        </div>

        <hr>
        <input type="submit" value = 'ОТПРАВИТЬ' class = 'submitFirstS'>
    </form>
</div>
<div class="blackLay"></div>
<link rel="stylesheet" href="./css/recommendations_filter.css">


<?php } ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="js/recomendations.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="/js/holder.min.js"></script>
<script src="/js/bootstrap.bundle.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>

<script>
    window.addEventListener('DOMContentLoaded', () => {

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
                if (entry.intersectionRatio > 0) {
                    document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.add('active');
                } else {
                    document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.remove('active');
                }
            });
        });

        // Track all sections that have an `id` applied
        document.querySelectorAll('section[id]').forEach((section) => {
            observer.observe(section);
        });

    });
</script>
<script>

    // work in progress - needs some refactoring and will drop JQuery i promise :)
    var instance = $(".hs__wrapper");
    $.each( instance, function(key, value) {

        var arrows = $(instance[key]).find(".arrow"),
            prevArrow = arrows.filter('.arrow-prev'),
            nextArrow = arrows.filter('.arrow-next'),
            box = $(instance[key]).find(".hs"),
            x = 0,
            mx = 0,
            maxScrollWidth = box[0].scrollWidth - (box[0].clientWidth / 2) - (box.width() / 2);

        $(arrows).on('click', function() {

            if ($(this).hasClass("arrow-next")) {
                x = ((box.width() / 2)) + box.scrollLeft() - 10;
                box.animate({
                    scrollLeft: x,
                })
            } else {
                x = ((box.width() / 2)) - box.scrollLeft() -10;
                box.animate({
                    scrollLeft: -x,
                })
            }

        });

        $(box).on({
            mousemove: function(e) {
                var mx2 = e.pageX - this.offsetLeft;
                if(mx) this.scrollLeft = this.sx + mx - mx2;
            },
            mousedown: function(e) {
                this.sx = this.scrollLeft;
                mx = e.pageX - this.offsetLeft;
            },
            scroll: function() {
                toggleArrows();
            }
        });

        $(document).on("mouseup", function(){
            mx = 0;
        });

        function toggleArrows() {
            if(box.scrollLeft() > maxScrollWidth - 10) {
                // disable next button when right end has reached
                nextArrow.addClass('disabled');
            } else if(box.scrollLeft() < 10) {
                // disable prev button when left end has reached
                prevArrow.addClass('disabled')
            } else{
                // both are enabled
                nextArrow.removeClass('disabled');
                prevArrow.removeClass('disabled');
            }
        }

    });
</script>




<script>
    $(document).ready(function(){
        $("#read_online").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
</script>
</body>

</html>