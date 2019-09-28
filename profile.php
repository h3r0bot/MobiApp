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
     
        <div class="row">
          
            <div class="kek col-3">  <div class="navigation-profile">
          
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              
                    <img src="./images.png" alt="" width="150px">
                    
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                        aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-envelope-open-text"> </i> Каталог знаний</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-comments"> </i> Сообщество</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-user-tie"> </i> Наставники</a>
           
                </div>
                </div>
            </div>
            
            <div class="lol col-9">
                <div class="tab-content" id="v-pills-tabContent">  <hr>
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    
                        aria-labelledby="v-pills-home-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        ...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        ...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        ...</div>
                </div>
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
        <script src="https://drive.google.com/drive/folders/1GplQJIzxL9QRf4rS5C1_OPfOeUIn7pyL?usp=sharing"></script>
</body>

</html>