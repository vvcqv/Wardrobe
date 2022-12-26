<?php include("assets/php/connection.php");
?>
<!DOCTYPE html>

<head>
    <title>Wardrobe</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bars">
        <div class="leftside">
        </div>
        <div class="middleside">
            <div class="header">
                <div class="container">
                    <div class="logo">
                        <!--<img src="logo.png" alt="">-->
                        <a href="/">Wardrobe</a>
                    </div>

                    <div class="menu">
                        <ul class="ulmenu">
                            <li class="limenu"><a href="all.php">ПОСЛЕДНЕЕ</a>
                            </li>
                            <li class="limenu"><a href="brands.php">БРЕНДЫ</a>
                                <!--<ul class="ulsubmenu">
                                    <li><a href="brands.php">ВСЕ БРЕНДЫ</a></li>
                                    <?php
                                    $result = mysqli_query($link, "SELECT * FROM `brands` ORDER BY `name`");
                                    if ($result) {
                                        while ($brands = mysqli_fetch_assoc($result)) {

                                    ?><li><a href="all.php?brand=<?= $brands['name'] ?>"><?= $brands['name'] ?></a></li><?php
                                                                                                                    }
                                                                                                                }
                                                                                                                        ?>

                                </ul> -->
                            </li>
                            <li class="limenu"><a href="all.php?type=cloth">ОДЕЖДА</a>
                            </li>
                            <li class="limenu"><a href="all.php?type=shoes">ОБУВЬ</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="rightside">
            <div class="account">
                <div class="account__content">
                    <?php if (!isset($_COOKIE['user'])) : ?>
                        <div class="log"><a href="auth.php">Вход</a></div>
                        <div class="reg"><a href="registration.php">Регистрация</a></div>
                    <?php else : ?>
                        <div class="exit"><a href="assets/php/exit.php">Выход</a></div>
                    <?php endif; ?>

                </div>
                <div class="account__cart">

                    <?php if (!isset($_COOKIE['user'])) : ?>
                        <a href="auth.php">
                            <div class="cart">
                                <div class="cart__icon"><img src="img/cart.png" alt=""></div>
                            </div>
                        </a>

                    <?php else : ?>
                        <a href="cart.php?id=<?php if(isset($_COOKIE['user'])) { echo($_COOKIE['cart']);} ?>">
                            <div class="cart">
                                <div class="cart__icon"><img src="img/cart.png" alt=""></div>
                                <div class="cart__count">
                                    <div class="circlecount">
                                        <div class="numbercount" id="numbercount">
                                            <?php
											if(isset($_COOKIE['user'])) {
                                            if($cart_login = $_COOKIE['user'])
                                            $result = mysqli_query($link, "SELECT * FROM `cart` WHERE `cart_login` = '$cart_login'");
                                            $cart_counter = 0;
                                            while ($row = mysqli_fetch_array($result)) {
                                                $cart_counter = $cart_counter + $row['cart_count'];
                                            } 
                                            if (($cart_counter >= 0) && ($cart_counter <= 9)) {
                                                echo ($cart_counter);
                                            } else {
                                                echo ('<style>.numbercount {
                                                font-size:0.8em;
                                                top:0.1em;
                                                left:0.175em;
                                                }</style>' . $cart_counter);
                                            }
}
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>