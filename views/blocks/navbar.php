<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a href="/main">
            <img class="navbar-brand" src="./logo-career_mts.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item <?php if($view == 'katalog') echo 'active'; ?>">
                    <a class="nav-link" href="/catalog">Каталог знаний <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if($view == 'proect') echo 'active'; ?>">
                    <a class="nav-link" href="/proect">О проекте</a>
                </li>
                <li class="nav-item <?php if($view == 'nastavnik') echo 'active'; ?>">
                    <a class="nav-link" href="/nastavnik">Наставникам</a>
                </li>
            </ul>
            <div class="border"></div>
            <span class="navbar-text">
                <ul class="navbar-nav mr-auto">
<<<<<<< HEAD
                    <?php
                    if($_SESSION['login'] == false)
                    {
                        echo
                        '
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-sign-in-alt"></i> Вход
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">                            
                                <form>
                                    <span class="sign-in-item">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm" name="user" placeholder="user">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm" name="pass" placeholder="pass">
                                        </div>                                    
                                        <a href="/profile" class="btn btn-primary btn-sm btn-red">Войти</a>
                                        <!-- <button type="submit" class="btn btn-primary btn-sm btn-red">Войти</button> -->
                                    </span>
                                </form>
                                <!-- <span class="sign-in-item">
                                    <script src="//ulogin.ru/js/ulogin.js"></script>
                                    <div id="uLogin"
                                        data-ulogin="display=panel;theme=flat;fields=first_name,last_name;providers=vkontakte,facebook,google;redirect_uri=http%3A%2F%2Fmobiapp%2F;mobilebuttons=0;">
                                    </div>
                                </span> -->
                            </div>
                        </li>
                        ';
                    } else if($_SESSION['login'] == true && $view != 'profile') {
                        echo
                        '
                        <li class="nav-item ">
                            <a class="nav-link" href="/profile"><i class="fas fa-user"></i> Профиль</a>
                        </li>
                        ';
                    } else if($_SESSION['login'] == true && $view == 'profile') {
                        echo
                        '
                        <li class="nav-item active">
                            <a class="nav-link" href="/profile"><i class="fas fa-user"></i> Профиль</a>
                        </li>
                        ';
                    }
                    ?>                    
=======
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sign-in-alt"></i> Вход
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <form>
                            <span class="sign-in-item">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Example label</label>
                                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Example input">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Another label</label>
                                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput2" placeholder="Another input">
                                </div>
                              </span>
                            </form>
                            <!-- <span class="sign-in-item">
                                <script src="//ulogin.ru/js/ulogin.js"></script>
                                <div id="uLogin"
                                    data-ulogin="display=panel;theme=flat;fields=first_name,last_name;providers=vkontakte,facebook,google;redirect_uri=http%3A%2F%2Fmobiapp%2F;mobilebuttons=0;">
                                </div>
                            </span> -->
                        </div>
                    </li>
>>>>>>> master
                </ul>
            </span>
        </div>
    </div>
</nav>
<div class="grid"></div>
<?php
if($view != profile) echo
'
<div class="text container"><p>Непрерывное совместное развитие</p>
    <div class="border-red"></div>
</div>
';
?>