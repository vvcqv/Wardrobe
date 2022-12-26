<?php
include("connection.php");
$name = trim($_POST['name']); // удаление пробелов
$login = trim($_POST['login']); // удаление пробелов
$password = trim($_POST['password']); // удаление пробелов
if (mb_strlen($name) < 1 || mb_strlen($name) > 32) {
    echo "Недопустимая длина имени";
    exit();
} else if (mb_strlen($login) < 1 || mb_strlen($login) > 32) {
    echo "Недопустимая длина логина";
    exit();
} else if (mb_strlen($password) < 1 || mb_strlen($password) > 32) {
    echo "Недопустимая длина пароля";
    exit();
}

$check = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login'");
if ($check) {
    $row = mysqli_fetch_assoc($check);
    if ($login == $row['login']) {
        echo ('Такой логин занят');
        exit();
    } else {
        //$password = md5($password . "polytech");

        $query = "INSERT INTO `users` (`name`, `login`, `password`) VALUES ('$name','$login','$password')";
        $result = mysqli_query($link, $query);
        header('Location: /');
    }
}
