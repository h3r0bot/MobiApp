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

    <div class="nastavnik">
    <div class="container">
    <h1>Станьте наставником</h1>
    <h3>Вы сможете найти новых учеников и зарабатывать на своей экспертности.</h3>
    
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