<?php
include("connection.php");
if (isset($_GET['id'])) $id = $_GET['id'];
if (isset($_COOKIE['user'])) $login = $_COOKIE['user'];
$result = mysqli_query($link, "SELECT * FROM `products` WHERE `id` = '$id' ");
if ($result) {
    $product = mysqli_fetch_assoc($result);
    $product_price = $product['price'];
}
if (isset($id) && isset($login)) {
$result = mysqli_query($link, "SELECT * FROM `cart` WHERE `cart_id_products` = '$id' AND `cart_login` = '$login' ");
if (mysqli_num_rows($result)) {
    $cart = mysqli_fetch_assoc($result);
    $cart_count = $cart['cart_count'];
    $cart_price = $cart['cart_price'];
    $cart_price = $cart_price + $product_price;
    $cart_count++;
    mysqli_query($link, "UPDATE `cart` SET `cart_count`='$cart_count' , `cart_price` = '$cart_price' WHERE `cart_id_products`='$id' AND `cart_login` = '$login' ");
} else {
    $result = mysqli_query($link, "INSERT INTO `cart` (`cart_id_products`, `cart_price`, `cart_count`, `cart_login`) VALUES ('$id','$product_price','1','$login')");
}
}
header('Location: /productpage.php?id=' . $id . '');
