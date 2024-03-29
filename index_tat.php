<?php 
require_once('load_user.php'); 
$index = true;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>КИТАП - татар әдәбиятының беренче онлайн-китапханәсе</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

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
    
    <?php require_once('header_tat.php'); ?>
    
    <main>
        <div class="second_header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 ml-2">
                        <div class="row" style="margin-top: 8%;">
                            <img src="../images/kit_sin.svg" class="dark_logo">
                        </div>
                        <div class="row" style="margin-top: 2%;">
                            <h1>татар әдәбиятының<br>беренче онлайн-китапханәсе</h1>
                        </div>
                        <div class="row" style="margin-top: 7%;"> </div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="achives">
                                <div class="item_achives"><img src="../images/book-stack.svg" alt="" class="item_achives_img"><b>100 китап өстәлде</b></div>
                                <div class="item_achives"><img src="../images/earpods.svg" alt="" class="item_achives_img"><b>Аудиокитаплар эшләү</b></div>
                                <div class="item_achives"><img src="../images/star.svg" alt="" class="item_achives_img"><b>Cирәк&nbspкитап барлык</b></div>
                                <div class="item_achives"><img src="../images/design.svg" alt="" class="item_achives_img"><b>Уңайлы интерфейс</b></div>
                                <div class="item_achives"><img src="../images/wifi..svg" alt="" class="item_achives_img"><b>Офлайн&nbspяки онлайн</b></div>
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
                                    <h2 class="car_head">Данлы</h2>
                                    <h4 class="car_head_describe">Татар әдәбиятының иң данлы әсәрләре</h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner" style="margin-bottom: 5%;">
                            <div class="carousel-item active">
                                <img class="first-slide" src="../images/white.png" alt="First slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=2">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="books/books_img/Моабитская тетрадь.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h5 class="featurette-heading asd">Китап турында:</h5>
                                            <p>"Моабит дәфтәре" — татар шагыйре Муса Җәлилнең Моабит төрмәсендә иҗат ителгән шигырьләре циклы. 1946 елда элеккеге хәрби әсир Нигмат Терегулов Татарстан Язучылар берлегенә Җәлилнең алты дистәсе белән блокнот алып килә. Бер елдан соң Брюссельдә совет консуллыгыннан икенче дәфтәр килә. Ул гына да түгел, Тәңречелек-яңа эраның башында гына барлыкка килгән Ибраһим пәйгамбәр диннәренең (иудалык, христианлык һәм Ислам) нигезе булып тора дип әйтү дөреслеккә хилаф кылу булмас.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:3%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанрлар:</h5>
                                            <div class="q">Шигырьләр</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Телләр:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                        <a href="book.php?book_id=2"><img class="read_more" src="../images/button-RU.png"></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="second-slide" src="../images/white.png" alt="Second slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=1">
                                                 <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Tukay_Shurale.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">Китап турында:</h4>
                                           <p>Татар шагыйре Габдулла Тукайның "Шүрәле" әкияте Шүрәледән арынып кына калмыйча, юләрлектә калдырган яшь егетнең зирәклеге турында сөйли. Шүрәле-ул мифик җан, урман рухы. Ул кешегә охшаган озын җан иясе, ул кешеләрне үлемгә кадәр щекли торган озын бармаклы, мөгезле маңгае, уродливое һәм куркыныч зат буларак сурәтләнә. Ул урманда яши, атларга да һөҗүм итә.sss </p>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанрлар:</h5>
                                            <div class="q">Әкиятләр</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Телләр:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=1"><img class="read_more" src="../images/button-RU.png"></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                           <div class="carousel-item">
                                <img class="third-slide" src="../images/white.png" alt="Third slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=4">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Adel-Kutuy-neotoslannye-pisma.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-8 order-md-2">
                                            <h4 class="featurette-heading asd">Китап турында:</h4>
                                            <p>Китап дүрт әсәрдән тора: "Тапшырылмаган хатлар» , "Илһам" ,  "вөҗдан оны һәм сагыну". Бу иншаларның барысы да күңелле, һәркем чыннан да мөһим нәрсә турында уйланырга мәҗбүр итә: кешенең иң зур кыйммәте-гаилә турында, коточкыч кеше кылган гамәле турында – хыянәтчелек, кеше тормышының кыйммәте, Ватан турында. Иншалар үз иленә, Советлар Союзына карата мәхәббәт белән сугарылган.</p>
         </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанрлар:</h5>
                                            <div class="q">Лирик повесть</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Телләр:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=4">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            
                            <div class="carousel-item">
                                <img class="fifth-slide" src="../images/white.png" alt="Fifth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=5">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Atilla_Rasih__Moj_drug_Mansur.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">Китап турында:</h4>
                                                      <p>Китап укучыны Татарстанның күренекле язучысы белән таныштыра. Ул бүгенге көн яки үз халкының күптән түгел генә үткәне турында нәрсә генә язмасын, геройларның рухи дөньясын, аларның тормыш юлын табу проблемасының игътибар үзәгендә. Кешедә әхлакый башлангыч белән кызыксыну сәнгать осталыгы, эчкерсезлек, психологик дөреслеге белән аерылып торган язучы каләме белән бара. </p>
       

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанрлар:</h5>
                                            <div class="q">Заманча проза</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Телләр:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=5">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            <div class="carousel-item">
                                <img class="sixth-slide" src="../images/white.png" alt="Sixth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=6">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Fatih_Amirhan__Na_perepute.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                      <p>Классик татарской литературы Фатих Амирхан оставил нам в своих произведениях яркие реалистические картины жизни татар в дореволюционной России. Его проза впитала в себя живые богатства народного языка. В книгу включены повести и рассказы «Хаят», «Фатхулла хазрет», «Счастливый день», «Любовь Габдельбасыра» и др. В них с присущей писателю глубиной изображается душевная красота и нелегкая участь татарской женщины до Октября, разоблачается невежество, нравственное убожество и фанатизм служителей религии.</p>

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Классическая проза</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=6">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="seventh-slide" src="../images/white.png" alt="Seventh slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=7">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Galimdzhan_Ibragimov__Molodye_serdtsa_sbornik.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Этот роман — один из первых образцов романтизма европейского типа в татарской литературе. На фоне масштабной картины жизни всех слоев татарского общества рубежа веков писатель воссоздает историю стремления молодого поколения татар к другой жизни. «Молодые сердца» — люди, желающие изменить действительность к лучшему, освободиться от предопределенности, победить ее.</p>

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Роман</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=7">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="eighth-slide" src="../images/white.png" alt="Eighth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=8">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Gumer_Bashirov__Chest.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Роман известного татарского писателя Гумера Баширова «Честь», принадлежит к лучшим произведениям советской литературы о колхозной деревне в годы Великой Отечественной войны. Герои Г. Баширова — это те рядовые труженики, без повседневной работы которых ни одно великое дело не совершается в стране. Психологически правдивое изображение людей, проникновенный лиризм, картины природы, народные песни придают роману задушевную поэтичность.</p>

       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Исторические приключения, Роман</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=8">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="ninth-slide" src="../images/white.png" alt="Ninth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=9">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Amirhan_Eniki__Sovest_sbornik.jpeg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                           <p>Книга знакомит читателя с выдающимся старейшим писателем Татарии. О чем бы ни писал он - о сегодняшнем дне или о недавнем прошлом своего народа - в центре внимания проблемы этические, раскрывающие духовный мир героев, обретение ими своего жизненного пути. Интерес к нравственному началу в человеке движет пером писателя, которого отличают художественное мастерство, искренность, психологическая достоверность. </p>
       
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Современная проза</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=9">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
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
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel1" data-slide-to="1"></li>
                            <li data-target="#myCarousel1" data-slide-to="2"></li>
                            <li data-target="#myCarousel1" data-slide-to="3"></li>
                            <li data-target="#myCarousel1" data-slide-to="4"></li>
                            <li data-target="#myCarousel1" data-slide-to="5"></li>
                            <li data-target="#myCarousel1" data-slide-to="6"></li>
                            <li data-target="#myCarousel1" data-slide-to="7"></li>
                            <li data-target="#myCarousel1" data-slide-to="8"></li>
                        </ol>
                        <div class="container">
                            <div class="row">
                                <div class="col-12" style="margin-top: 2%;">
                                    <h2 class="car_head">Балалар өчен</h2>
                                    <h4 class="car_head_describe">Нәнилэр өчен китаплар</h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner" style="margin-bottom: 5%;">
                            <div class="carousel-item active">
                                <img class="first-slide" src="../images/white.png" alt="First slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=10">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/kozel_i_baran.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">Китап турыдна:</h4>
                                           <p>Әби белән бабай Кәҗә белән бар белән яшәсә дә, аларны ашатырга вакыт җитте. Әби - бабайларны урманга озаталар. Урманда җәнлекләр бүре башын табып, үзләре белән алып китәләр. Кич белән алар ут яндыра, аның янында бүреләр утыра һәм ботка әзерли. Бүреләр, хайваннар кулында башларын күреп, куркып качалар. Кәҗә белән сарык итен ашыйлар һәм кичерәләр.</p>
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанрлар:</h5>
                                            <div class="q">Әкиятләр</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                           <h5 class="asd">Телләр:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=10">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
 
                            <div class="carousel-item">
                                <img class="second-slide" src="../images/white.png" alt="Second slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=11">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/Kuyan_kizi.png">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">Китап турыдна:</h4>
                                           <p>"Куян кызы" әкиятендә куянның әнисе тыңламаган куян турында сөйләнә, шуның аркасында авырып китә. Айболит куянны дәваласа да, әнигә тыңларга кирәк иде - ул зур тормыш тәҗрибәсенә ия һәм һәрвакыт ярдәм итәргә әзер.</p>
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанрлар:</h5>
                                            <div class="q">Әкиятләр</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                          <h5 class="asd">Телләр:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=11">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                           
                           <div class="carousel-item">
                                <img class="third-slide" src="../images/white.png" alt="Third slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=12">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/shah_petux.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">Китап турыдна:</h4>
                                              <p>Бер ишегалдында бик танылган әтәч яши. Гел үземнән король, падишаһа, Солтан төзи. Үз тирәсенә тавык җыйдым, алар алдында матурланды. Тавыклар аның алдында гел әйләнеп торды, матур операсын мактады. Пешекче янына килеп, аны тотып ала, кисә, йолкый һәм аннан аш әзерли.</p>
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанрлар:</h5>
                                            <div class="q">Әкиятләр</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                           <h5 class="asd">Телләр:</h5>
                                            <div class="q">Татарча, <br> Русча</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=12">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                            <div class="carousel-item">
                                <img class="fourth-slide" src="../images/white.png" alt="Fourth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=3">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/su_anasi.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Легенды о "Су анасы" (водяной) возникли у татар очень давно. Считалось, что у водоёмов есть свои духи, так же, как и например у лесов или домов. Татарский классик Габдулла Тукай изложил свою версию легенды в виде детской сказки, вложив в неё поучительный мотив.</p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Сказка</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=3">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                            <div class="carousel-item">
                                <img class="fifth-slide" src="../images/white.png" alt="Fifth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=13">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/ak_bure.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Произведение «Ак буре» повествует о нелегкой жизни падишаха, у которого Див украл его любимую жену. Много лет жил падишах в горечи, и решили помочь ему сыновья. Решились они сходить в земли далекие и вернуть их матушку. </p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Сказка    </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                             <a href="book.php?book_id=13">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="sixth-slide" src="../images/white.png" alt="Sixth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=14">
                                                 <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/bala_belen_kub.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                      <p>Стихотворение-сказка Габдуллы Тукая повествует о том, что жизнь очень коротка. Мальчик встречает мотылька и интересуется его жизнью, что тот видел, что ел… Однако мотылек раскрывает все подробности его судьбы, которые, по сравнению с жизнью мальчика, оказываются не такими яркими и прекрасными.</p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Сказка</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=14">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="seventh-slide" src="../images/white.png" alt="Seventh slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=15">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/ceptotmas_urdek.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>Ночью Волк нападает на хозяйство Лесника и чуть было не съедает Барашка. Лесник идет в лес на поиски злодея. Домашние животные остаются в доме одни. Не дождавшись хозяина, они отправляют в лес на его поиски Утку, как самую быструю и ловкую. Утка оказывается очень болтливой и рассказывает всем лесным жителям, что хозяина нет дома. Медведь, Волк, Лиса, узнав о том, что дом остался без присмотра, нападают на хозяйство, и только вовремя вернувшийся хозяин спасает домашних животных.</p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Сказка</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=15">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="eighth-slide" src="../images/white.png" alt="Eighth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                             <a href="book.php?book_id=16">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/chukmar_tukmar.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                                       <p>У одной бабушки во дворе жили два петуха - Чукмар и Тукмар. Хоть и были они друзьями, но все время дрались. Бабушке это не нравилось, ругала она петухов. И когда Чукмар и Тукмар опять подрались, бабушка увела их друг от друга. Один из петухов узнал, что другого хотят сварить. Нашел петух своего друга. После этого никогда они больше не дрались.</p>
 
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Сказка</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=16">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="ninth-slide" src="../images/white.png" alt="Ninth slide">
                                <div class="container col-10">
                                    <div class="row">
                                        <div class="col-md-3 order-md-1">
                                            <a href="book.php?book_id=17">
                                            <img class="featurette-image img-fluid book_car mx-auto" src="../books/books_img/gulchechek.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-9 order-md-2">
                                            <h4 class="featurette-heading asd">О книге:</h4>
                                           <p>Гульчечек - героиня татарской волшебной сказки, которая совершила смелый побег от старой ведьмы, и использовала по дороге самые различные предметы, чтобы спастись от обернувшейся волком ведьмы. Сказочной особенностью Гульчечек оказалось возможность говорить с неживыми предметами и птицами - с деревом, с озером, со скворцом. Именно эти волшебные помощники, числом три, как и полагается в сказках, спасли Гульчечек от злой ведьмы.. </p>
       
                                        </div>
                                    </div>
                                   
                                    <div class="row" style="margin-top:5%;">
                                        <div class="col-md-3 order-md-1">
                                            <h5 class="asd">Жанры:</h5>
                                            <div class="q">Сказка</div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:2%;">
                                        <div class="col-md-3">
                                            <h5 class="asd">Языки:</h5>
                                            <div class="q">Татарский, <br> Русский</div>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="book.php?book_id=17">
                                            <img class="read_more" src="../images/button-RU.png">
                                            </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once('footer_tat.php'); ?>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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