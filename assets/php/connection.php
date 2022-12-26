<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "clothing";
$link = new mysqli($host, $user, $pass, $db);
if (mysqli_connect_error()) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}
mysqli_set_charset($link, "windows-1251");
