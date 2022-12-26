  <?php include "header.php" ?>
  <div class="content">
      <?php
        $id = $_GET['id'];
        $result = mysqli_query($link, "SELECT * FROM `products` WHERE `id` = '$id'");
        $product = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) :
        ?>
      <div class="productpage__twosides">
          <div class="productpage__left">
              <div class="productpage__image">
                  <img src="img/products/<?= $product['image'] ?>">
              </div>
          </div>
          <div class="productpage__right">
              <div class="productpage__title"><?= $product['title'] ?></div>
              <div class="productpage__price"><?= $product['price'] ?> руб.</div>

              <form action="" method="post">
                  <div class="visiblesizes">
                      <input type="radio" name="size" value="s" id="size1">
                      <label for="size1" class="size">S</label>
                      <input type="radio" name="size" value="m" id="size2">
                      <label for="size2" class="size">M</label>
                      <input type="radio" name="size" value="l" id="size3">
                      <label for="size3" class="size">L</label>
                  </div>
                  <?php
                    if (isset($_COOKIE['user'])) {
                        $login = $_COOKIE['user'];
                        $result = mysqli_query($link, "SELECT * FROM `cart` WHERE `cart_id_products` = '$id' AND `cart_login` = '$login' ");
                    }
                    if (!isset($_COOKIE['user'])) {
                        echo ('<a class="productpage__addtocart" style="color:white;" href="auth.php">В КОРЗИНУ</a>');
                    } else {
                        if (mysqli_fetch_assoc($result) > 0) {
                            echo ('<a class="productpage__addtocart" href="assets/php/deletefromcart.php?id=' . $id . '">УДАЛИТЬ ИЗ КОРЗИНЫ</a>');
                        } else {
                            echo ('
                            <a class="productpage__addtocart" href="assets/php/addtocart.php?id=' . $id . '">В КОРЗИНУ</a>');
                        }
                    } ?>
              </form>

              <div class="productpage__rightdown">
                  <div class="productpage__description">Описание:<br><br><?= $product['description'] ?></div>
              </div>
          </div>
      </div>
  </div>
  <?php else : ?>
  <div class="productpage__exists">
      <div class="title">Увы,но такого товара нет :(</div>
  </div>
  <?php endif; ?>
  </div>
  <?php include "footer.php" ?>
  </body>

  </html>