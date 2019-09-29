<?php
header('Content-Type: text/html; charset=utf-8');

include('db_fns.php');
db_connect();

$create_users_table = "CREATE TABLE users (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(30) NOT NULL,
    user_surname VARCHAR(30) NOT NULL
)";

$create_students_table = "CREATE TABLE students (
    student_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(30) NOT NULL,
    student_surname VARCHAR(30) NOT NULL,
    user_id INT(6) NULL
)";

$create_mentors_table = "CREATE TABLE mentors (
    mentor_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    mentor_name VARCHAR(30) NOT NULL,
    mentor_surname VARCHAR(30) NOT NULL,
    user_id INT(6) NULL
)";

$create_courses_table = "CREATE TABLE courses (
    course_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(30) NOT NULL,
    course_category VARCHAR(30) NOT NULL,
    course_specialty VARCHAR(30) NOT NULL,
    user_id INT(6) NULL,
    mentor_id INT(6) NULL
)";

$create_course_tasks_table = "CREATE TABLE course_tasks (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(30) NOT NULL,
    course_id INT(6) NULL
)";

mysql_query($create_users_table);
mysql_query($create_students_table);
mysql_query($create_mentors_table);
mysql_query($create_courses_table);
mysql_query($create_course_tasks_table);

session_start();
// session_unset();
// $_SESSION['user_id'] = 0;
// echo $_SESSION['user_id'];

$user_id = 1;
$user_pass = 123;

if($_POST['submit'])
{
    if($user_id == $_POST['user'] && $user_pass == $_POST['pass'])
        {
            $_SESSION['user_id'] = $user_id;
            // header("Location: /profile");
            // exit();
        } else if($user_id != $_POST['user'] || $user_pass != $_POST['pass'] || empty($_POST['user']) || empty($_POST['pass'])){
            // header("Location: /main");
            // exit();
        }
}

$view = empty($_GET['view']) ? 'main' : $_GET['view'];

switch ($view) {
    case 'main':
    $_SESSION['login'] = false;
    break;

    case 'katalog':

    break;

    case 'proect':

    break;

    case 'nastavnik':

    break;

    case 'profile':
        $_SESSION['login'] = true;
        if($_SESSION['user_id'] = $user_id)
        {
            // header("Location: /profile");
        } else {
            // header("Location: /main");
        }
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
    
    <title>МТС Карьера</title>
</head>


<body>

    <?php
    include ('views/blocks/navbar.php');

    include ($_SERVER['DOCUMENT_ROOT'].'/views/pages/'.$view.'.php');

    include ('views/blocks/footer.php');
    ?>

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