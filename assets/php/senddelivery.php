<?php
include("connection.php");
if (isset($_POST['phone']))$phone = $_POST['phone'];
if (isset($_POST['adress'])) $adress = $_POST['adress'];
if (isset($_COOKIE['user'])) $userlogin = $_COOKIE['user'];
$usercart = mysqli_query($link, "SELECT * FROM `cart` WHERE `cart_login` = '$userlogin' ORDER BY `cart_id` DESC");
if ($usercart) {
    $usercartnumrows = mysqli_num_rows($usercart);
    $cart_id_products = array();
    $cart_count = array();
    $i = 0;
    $order_id_products = 'str';
    $order_products_count = 'str';
    $cart_price = 0;
    while ($usercartrow = mysqli_fetch_array($usercart)) {
        $cart_id_products[$i] = $usercartrow['cart_id_products']; // 6 5
        $cart_count[$i] = $usercartrow['cart_count']; // 1 1
        $cart_price += $usercartrow['cart_price'];
        $i++;
    } // 0 -> 6 \ 1 -> 5
    $i--; // 1
    $ifirst = $i;
    $stridproduct = '';
    for ($k = $i; $k >= 0; $k--) {
        $stridproduct .= $cart_id_products[$k];
        $strcount .= $cart_count[$k];
        if ($k != 0) {
            $stridproduct .= "-";
            $strcount .= "-";
        }
    }
    $cart_price += 300;
    $date = date("Y-m-d");
    if (isset($stridproduct) && isset($strcount))$zapros = mysqli_query($link, "INSERT INTO `orderdb` (`date`, `order_id_products`, `order_price`, `order_products_count`, `order_phone`, `order_adress`, `order_login`) VALUES ('$date', '$stridproduct', '$cart_price', '$strcount', '$phone', '$adress', '$userlogin')");
    $usercart = mysqli_query($link, "DELETE FROM `cart` WHERE `cart_login` = '$userlogin' ");
    header('Location: /cart.php?id=' . $_COOKIE['cart']);
}
