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

    case 'katalog':

    break;

    case 'proect':

    break;

    case 'nastavnik':

    break;

    case 'profile':

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

    <div class="background-images">
        <div class="container">
            <div class="row">
                <div class=" col-6">
                    <h1>Продуктовый дизайнер UX/UI</h1>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6>60% пройдено</h6><br>
                    <h6>начислено 55 баллов</h6>
                </div>
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="avatar-nastavnic">
                        <img class="sensei-face-1"
                            src="https://mtscu.ru/uploads/2019/05/2foto-avramenko-marija-kopija-274x300.jpg" alt="">
                        <p>Мария Авраменко<br>Руководитель онлайн-школы</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Описания</h2>
                <P>Вам не хватает комплексных знаний, чтобы качественно выполнять свою часть работы по созданию и
                    сопровождению цифрового продукта – разработку, маркетинг, аналитику, проектирование интерфейсов или
                    тестирование?

                    Вы работаете в смежных направлениях и вам нужны базовые знания по UI/UX?

                    Вы хотите сменить профессию и задумываетесь о том, чтобы стать UI/UX дизайнером?

                    Получите необходимые знания по продуктовому дизайну UI/UX и прокачайте навыки под руководством
                    экспертов МТС.</P>

                <div class="lessons">
                    <h3>Основы веб-дизайна</h3>
                    <p>Создание любого веб-ресурса начинается с проектирования его интерфейса, который должен быть не
                        только удобным и понятным для пользователя, но и отвечать целям и задачам, что стоят перед
                        сайтом. Несмотря на то, что художественное оформление интерфейса отступает на второй план, его
                        грамотное использование позволит усилить удобство сайта, сделать его запоминаемым и
                        оригинальным. <br> <br>Урок пройден
                        <img class="avatar-users"
                            src="http://kpoplove.koreadaily.com/wp-content/uploads/2017/08/twice.jpg" width="50px"
                            alt="">
                    </p>
                </div>
                <div class="lessons">
                    <h3>Теория цвета
Описание</h3>
                    <p>пройденПо умолчанию цвет монитора черный. Основные цвета — красный, синий и зеленый — добавляются к черному и образуют все остальные цвета. Если сложить три основных цвета, получится белый. Такая цветовая модель называется RGB.

Некоторые уроки веб-дизайна с нуля начинаются с описания цветового круга, который является главным помощником любого веб-дизайнера.
<br> <br>Урок пока не пройден
                        <img class="avatar-users"
                            src="http://kpoplove.koreadaily.com/wp-content/uploads/2017/08/twice.jpg" width="50px"
                            alt="">
                    </p>
                </div>
                <div class="lessons">
                    <h3>Форма объектов</h3>
                    <p>Урок пока не пройден <br>
Все без исключения объекты обладают формой. Мы можем создать объект без цвета или текстуры, но информацию о форме опустить невозможно. Наиболее часто используемыми простыми формами в веб-дизайне являются: линия, прямоугольник, треугольник и круг.

Линия может выполнять две функции: соединение и разделение других объектов. <br> <br>Урок пока не пройден
                        <img class="avatar-users"
                            src="http://kpoplove.koreadaily.com/wp-content/uploads/2017/08/twice.jpg" width="50px"
                            alt="">
                    </p>
                </div>
            </div>
            <div class="backround-users col-4">
                <div class="row listens justify-content-around">
                    <p>4 слушателя</p>
                    <img class="avatar-users" src="https://pp.userapi.com/c852032/v852032356/e9f6b/ZJklLSH735k.jpg"
                        width="50px" alt="">
                    <img class="avatar-users" src="http://photar.ru/wp-content/uploads/2017/11/fake1.jpg" width="50px"
                        alt="">
                    <img class="avatar-users" src="https://twizz.ru/wp-content/uploads/2019/02/bez-nazvaniya-14.jpg"
                        width="50px" alt="">
                    <img class="avatar-users" src="http://kpoplove.koreadaily.com/wp-content/uploads/2017/08/twice.jpg"
                        width="50px" alt="">

                </div>
                <button type="button" class="thapis btn btn-danger btn-lg mx-auto" style="margin-top:100px">Записаться
                    курс</button>
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
            </script>
            <script src="https://drive.google.com/drive/folders/1GplQJIzxL9QRf4rS5C1_OPfOeUIn7pyL?usp=sharing"></script>
</body>

</html>