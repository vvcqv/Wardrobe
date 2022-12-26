<?php
if (isset($_COOKIE['user']) && isset($_COOKIE['cart'])) {
setcookie('user', 'login', time() - 3600 * 24 * 7 * 30, "/");
setcookie('cart', 'id', time() - 3600 * 24 * 7 * 30, "/");
}
header('Location: /');
