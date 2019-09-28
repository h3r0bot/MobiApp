<?php
header('Content-Type: text/html; charset=utf-8');

$view = empty($_GET['view']) ? 'main' : $_GET['view'];

switch ($view) {
    case 'main':
    //   $games = get_games();
    //   $adverts = get_adverts();
    //   $_SESSION['switch'] = 0;//обнуление переключателя уведомлений
    //   $index_title = "GameBox: покупка, продажа и обмен игр";
    break;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <link href="/fontawesome/css/all.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>


<body>

    <?php
    include ('views/blocks/navbar.php');
    ?>
    < <div class="container">
        <div class="row">
            <h1>Календарь мероприятий</h1>
        </div>
        <p>Платформа, помогающая человеку и сообществу коллег развивать себя и других. Каждый одновременно и
            ученик - если у него есть образовательный запрос/цель и учитель - если готов делиться свой экспертизой.
            Здесь вы можете развиваться как наставник, искать себе учеников и консультировать индивидуально. Или
            разрабатывать собственные онлайн курсы для неограниченного количества участников. Также вы можете
            находить себе наставников по любым темам. От ораторского мастерства до программирования на Python.
        </p>
        </div>
        <div class="container">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-online-kurs-tab" data-toggle="pill" href="#pills-online-kurs"
                        role="tab" aria-controls="pills-online-kurs" aria-selected="true">Онлайн-курс</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-module-tab" data-toggle="pill" href="#pills-module" role="tab"
                        aria-controls="pills-module" aria-selected="false">Модуль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-school-mts-tab" data-toggle="pill" href="#pills-school-mts" role="tab"
                        aria-controls="pills-school-mts" aria-selected="false">Школа Мтс</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-vebinar-tab" data-toggle="pill" href="#pills-vebinar" role="tab"
                        aria-controls="pills-vebinar" aria-selected="false">Вебинары</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-trening-tab" data-toggle="pill" href="#pills-trening" role="tab"
                        aria-controls="pills-trening" aria-selected="false">Тренинги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-mitap-tab" data-toggle="pill" href="#pills-mitap" role="tab"
                        aria-controls="pills-mitap" aria-selected="false">Митапы</a>
                </li>
            </ul>



            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-online-kurs" role="tabpanel"
                    aria-labelledby="pills-online-kurs-tab">
                    <div class="row justify-content-between">
                        <div class="card" style="width: 18rem;">
                            <img src="http://webapp/img/icon-6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <img src="http://webapp/img/icon-6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="http://webapp/img/icon-6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-module" role="tabpanel" aria-labelledby="pills-module-tab">
                </div>
                <div class="tab-pane fade" id="pills-school-mts" role="tabpanel" aria-labelledby="pills-school-mts-tab">
                </div>
                <div class="tab-pane fade" id="pills-vebinar" role="tabpanel" aria-labelledby="pills-vebinar-tab">
                </div>
                <div class="tab-pane fade" id="pills-trening" role="tabpanel" aria-labelledby="pills-trening-tab">
                </div>
                <div class="tab-pane fade" id="pills-mitap" role="tabpanel" aria-labelledby="pills-mitap-tab"></div>
            </div>

        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>