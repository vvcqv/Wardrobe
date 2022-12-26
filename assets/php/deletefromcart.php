<?php
include("connection.php");
$id = $_GET['id'];
$login = $_COOKIE['user'];
$result = mysqli_query($link, "SELECT * FROM `cart` WHERE `cart_id_products` = '$id' AND `cart_login` = '$login'");
if (mysqli_fetch_array($result) > 0) {
    $delete = mysqli_query($link, "DELETE FROM `cart` WHERE `cart_id_products` = '$id' AND `cart_login` = '$login'");
}
header('Location: /productpage.php?id=' . $id . '');
