<?php include "header.php" ?>
<div class="content">

    <?php
    if (isset($_COOKIE['user'])) :
        $cart_price_all = 0;
        $cartid = $_COOKIE['cart'];
        $login = $_COOKIE['user'];
        $cartresult = mysqli_query($link, "SELECT * FROM `cart` WHERE `cart_login`='$login' ORDER BY `cart_id` DESC");
        if (mysqli_num_rows($cartresult)) {
            while ($rowsincart = mysqli_fetch_assoc($cartresult)) {
                $cart_id_products = $rowsincart['cart_id_products'];
                $productresult = mysqli_query($link, "SELECT * FROM `products` WHERE `id`= '$cart_id_products'");
                if ($productrow = mysqli_fetch_assoc($productresult)) {
    ?>
                    <div class="itemrow">
                        <div class="itemrowleft">
                            <div class="cart__itemimage"><img src="img/products/image<?= $rowsincart['cart_id_products'] ?>.jpg"></div>
                            <div class="cart__title">
                                <div class="cart__title__a">

                                    <a href="productpage.php?id=<?= $rowsincart['cart_id_products'] ?>"><?= $productrow['title'] ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="itemrowright">
                            <div class="cart__counter">
                                <a class="minuscounter" href="assets/php/cartcounterminus.php?id=<?= $rowsincart['cart_id_products'] ?>"><img src="/img/minus.png" alt=""></a>
                                <div class="varcounter"><?= $rowsincart['cart_count'] ?></div>
                                <a class="pluscounter" href="assets/php/cartcounterplus.php?id=<?= $rowsincart['cart_id_products'] ?>"><img src="/img/plus.png" alt=""></a>
                            </div>
                            <div class="cart__sum"><?php echo ($rowsincart['cart_price']);
                                                    $cart_price_all = $cart_price_all + $rowsincart['cart_price'];
                                                    ?> ??????.</div>
                            <div class="cart__delete"><a href="assets/php/incartdeletebutton.php?id=<?= $cart_id_products ?>">??????????????</a>
                            </div>
                        </div>
                    </div>
                    




            <?php
                }
            }
			?>
			<div class="itemrow">
                        <div class="itemrowleft">
                            <div class="cart__itemimage"><img src="img/delivery.png"></div>
                            <div class="cart__title">
                                <div class="cart__title__a">

                                    <a href="">????????????????</a>
                                </div>
                            </div>
                        </div>
                        <div class="itemrowright">
                            <div class="cart__counter">



                            </div>
                            <div class="cart__sum">300 ??????.</div>
                            <div class="cart__delete">
                            </div>
                        </div>
                    </div>
			<?php

            ?>
            <div class="cart__centered">
                <div class="cart__price">??????????: <?= $cart_price_all + 300 ?> ??????.</div>
            </div>
            <div class="cart__centered">
                <div class="cart__delivery"><a href="delivery.php?id=<?= $cartid ?>" class="cart__delivery__button">????????????????
                        ??????????</a></div>
            </div>
        <?php } else { ?>
            <div class="cart__title__empty">?????????????? ????????????</div>
        <?php  }
        ?>

    <?php else : ?>
        <div class="title" style="margin-bottom: 1em;margin-top:1em">?????? ?????????????????? ?????????????? ???? ???????????? ????????????????????????????!
        </div>
    <?php endif; ?>
</div>
<?php include "footer.php" ?>
</body>

</html>