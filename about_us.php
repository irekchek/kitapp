<?php
require_once('load_user.php');
$about_us = true;
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/about_us.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<div class="irek">
    <?php require_once('header.php'); ?>

    <main>
        <div class="container" style="margin-top: 3em; background-color: white; border-radius: 12px; padding-left: 3em; padding-right:3em; padding-top: 1%; padding-bottom:1em; border: 8px solid #feb386;
    border-radius: 18px;
    border-style: double;">
            <div class="row" style="justify-content: center;">
                <h2>О проекте</h2>
            </div>
            <div class="row" style="margin-top: 1em; text-align: justify;">
                <p style=""><img src="../images/Logo_book.png" style="float: left; height: 3em; padding-right: 1em;"> -
                    это
                    <mark class="red">онлайн-библиотека</mark>
                    татарской литературы, с помощью которой люди могут не только читать культовые произведения татарских
                    классиков, но и публиковать свои собственные произведения. Главная цель нашего проекта -
                    популяризация татарского языка и литературы,
                    <mark class="red">реализация талантов</mark>
                    молодых
                    писателей. Благодаря проекту, читать произведения могут люди не только из
                    Татарстана, но и из других регионов, стран. Удобство пользования проектом позволяет пользоваться им
                    в любое время, в любом месте.
                    В отличие от других сайтов, именно наш обладает огромной базой произведений,
                    удобным интерфейсом и возможностью добавлять свои произведения, чего не еще не
                    было до этого в сфере татарского языка.
                </p>
            </div>
            <div class="row" style="margin-top: 5%; justify-content: center;">
                <h3>Наша Команда</h3>
            </div>
            <div class="row" style="text-align: center; margin-top: 1%;">
                <div class="team_item col-lg-6">
                    <img class="rounded-circle" src="../images/Irek.jpg" width="210" height="210">
                    <div class="text_team" style="margin-top: 5%;">
                        <h5>Галиев Ирек</h5>
                        <h6 class="text-muted">Руководитель</h6>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="team_item col-lg-6">
                    <img class="rounded-circle" src="images/Karim.png" width="210" height="210">
                    <div class="text_team" style="margin-top: 5%;">
                        <h5>Насыбуллин Карим</h5>
                        <h6 class="text-muted">Программист</h6>
                    </div>
                </div>
            </div>

            <span id="progress"></span>
            <div class="row" style="margin-top: 5em; justify-content: center;">
                <h3>Наши Достижения</h3>
            </div>

            <div class="row" style="margin-top: 2%; background-color: #fff7e8; border-radius: 12px; padding: 1em;">
                <div class="team_item col-md-7">
                    <h4 class="baytik-heading">IT-Jump PRO</h4>
                    <p style="text-align: justify;">В августе 2019 года мы посетили смену “It-Jump PRO” в
                        образовательном лагере “Байтик”. На этой смене и зародился наш проект. Пройдя все отборочные
                        этапы, мы дошли до финального этапа в IT-парке. В итоге, наш проект взял гран-при, что дало нам
                        толчок для дальнейшего развития сайта. В лицее мы продолжили упорно работать над проектом и
                        посещать занятия по созданию сайтов. Мы собираемся регулярно добавлять новые произведения,
                        обновлять наш проект и создавать другие.</p>
                </div>
                <div class="col-md-5">
                    <img class="diploma img-fluid" src="../images/baytik_gran-pri.jpg">
                </div>
            </div>

            <div class="row" style="margin-top: 2%; background-color: #fff7e8; border-radius: 12px; padding: 1em; ">
                <div class="col-md-12">

                    <img class="diploma1" src="images/diploms_lobach.png">
                    <h4 class="baytik-heading" style=" text-align: justify; font-size: 1.4rem;">Конференция им.
                        Н.И.Лобачевского</h4>
                    <p style="text-align: justify; margin-top: 1em;">21 января 2020 года мы решили поучавсвовать в
                        Конференция им. Н.И.Лобачевского. Подготовка заняла много времени, но в итоге мы успели добавить
                        новую информацию на сайт и были готовы к выступлению. Выступление проходило в заочном формате и
                        мы заняли 2 место.</p>
                </div>
            </div>


            <div class="row" style="margin-top: 2%; background-color: #fff7e8; border-radius: 12px; padding: 1em;">
                <div class="team_item col-md-6">
                    <h4 class="baytik-heading">Start Бу Хакатон</h4>
                    <p style="text-align: justify;">26-27 сентября в доме "Сәләт" прошёл Start Бу Хакатон, посвящённый
                        Р.Г.Бухараеву. Мы выбрали трек "Рекомендации книг" и за 2 дня реализовали алгоритм подбора книг
                        на нашем сайте. Мы получили огромный опыт и удостоились 1 места.</p>
                </div>
                <div class="col-md-6">
                    <img class="diploma img-fluid" src="images/diplomHakatonUnion.png">
                </div>
            </div>


            <div class="row" style="margin-top: 2%; background-color: #fff7e8; border-radius: 12px; padding: 1em; ">
                <div class="col-md-12">

                    <img class="diploma1" src="images/diplomUniverUnion.png">
                    <h4 class="baytik-heading" style=" text-align: justify; font-size: 1.4rem;">Университет Талантов</h4>
                    <p style="text-align: justify; margin-top: 1em;">14 декабря завершился Финальный этап проектной
                        олимпиады от Университета Талантов. Наша команда получила бесценный опыт и отличные советы по
                        улучшению проекта. На этой олимпиаде мы удостоились 2 места.</p>
                </div>
            </div>


            <span id="better"></span>
            <div class="row" style="margin-top: 5em; justify-content: center;">
                <h3>Помогите "КИТАП" стать лучше</h3>
            </div>
            <div class="row" style="margin-top: 1em; text-align: justify;">
                <p>Наша электронная библиотека бесплатна и открыта для всех читателей. Если вы хотите помочь проекту, то
                    <a href="add_book.php" style="color: orange;">добавьте книгу</a>, которой ещё нет в нашей библиотеке
                    или свяжитесь с нами и посоветуйте, что нужно изменить и добавить. </p>
            </div>


            <div class="row" style="margin-top: 5%; justify-content: center;">
                <h3>Наши партнёры</h3>
            </div>
            <div class="row" style="text-align: center; margin-top: 30px;">

                <div class="team_item col-md-4">
                    <a class="href_partner" href="http://baigysh.tatar">
                        <img src="images/partner1.png" alt="Электронная библиотека" width="170">
                        <div class="text_partner" style="margin-top: 1em;">
                            <h5 style="color:#363636;">TatSoft</h5>
                            <h6 class="text-muted">Синтез татарской речи</h6>
                        </div>
                    </a>
                </div>

                <div class="team_item col-md-4">
                    <a class="href_partner" href="http://baigysh.tatar">
                        <img src="images/partner2.png" alt="Электронная библиотека" width="170">
                        <div class="text_partner" style="margin-top: 1em;">
                            <h5 style="color:#363636;">Әйдә! Online</h5>
                            <p class="text-muted">Изучение татарского языка</p>
                        </div>
                    </a>
                </div>

                <div class="team_item col-md-4">
                    <a class="href_partner" href="http://baigysh.tatar">
                        <img src="images/partner3.png" alt="Электронная библиотека"  height="170" >
                        <div class="text_partner" style="margin-top: 1em;">
                            <h5 style="color:#363636;">Bayğış</h5>
                            <h6 class="text-muted">Электронная библиотека</h6>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </main>

    <?php require_once('footer.php'); ?>
</div>
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