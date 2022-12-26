<?php
include("connection.php");
$login = trim($_POST['login']); // удаление пробелов
$password = trim($_POST['password']); // удаление пробелов

//$password = md5($password . "polytech");

$conn = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
$result = mysqli_query($conn, $query);

if ($result) {

    $userfetch = mysqli_fetch_assoc($result);
    if (count($userfetch) == 0) {
        echo "Пользователь не найден";
    } else {
        setcookie('user', $userfetch['login'], time() + 3600 * 24 * 7 * 30, "/");
        setcookie('cart', $userfetch['id'], time() + 3600 * 24 * 7 * 30, "/");
        header('Location: /');
    }
}
mysqli_close($conn);
