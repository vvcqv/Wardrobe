<?php
include("connection.php");
$id = $_GET['id'];
$login = $_COOKIE['user'];
$result = mysqli_query($link, "SELECT * FROM `cart` WHERE `cart_id_products` = '$id' AND `cart_login` = '$login'");
if ($row = mysqli_fetch_assoc($result)) {
    $colvotovara = $row['cart_count'];
    $cenatovara = $row['cart_price'];
    if ($colvotovara == '1') {
        $delete = mysqli_query($link, "DELETE FROM `cart` WHERE `cart_id_products` = '$id' AND `cart_login` = '$login'");
    } else {
        $cart_price__one = $cenatovara / $colvotovara;
        $colvotovara--;

        $cart_price = $cart_price__one * $colvotovara;
        $deinc = mysqli_query($link, "UPDATE `cart` SET `cart_count` = '$colvotovara', `cart_price` = '$cart_price' WHERE `cart_id_products` = '$id' AND `cart_login` = '$login' ");
    }
}
header('Location: /cart.php?id=' . $id . '');
