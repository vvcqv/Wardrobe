<?php include "header.php" ?>
<div class="content">
    <div class="sort"></div>
    <div class="items">
        <?php
        if (isset($_GET['brand'])) { $brandname = $_GET['brand']; }
        if (isset($_GET['type'])) { $typename = $_GET['type']; }
        if (isset($typename)) $types = mysqli_query($link, "SELECT * FROM `products` WHERE `type` = '$typename'");
        if (isset($brandname)) $brands = mysqli_query($link, "SELECT * FROM `products` WHERE `brand` = '$brandname'");
        if ($brands) {
        ?><div class="title"><?= $brandname ?></div>
            <?php
            $result = mysqli_query($link, "SELECT * FROM `products` WHERE `brand`='$brandname' ORDER BY id DESC");
        } else {
            if (isset($types)) {
                $result = mysqli_query($link, "SELECT * FROM `products` WHERE `type`='$typename' ORDER BY id DESC");
                if ($typename == 'cloth') {
                    echo ('
                    <div class="title">ОДЕЖДА</div>
                    ');
                }
                if ($typename == 'shoes') {
                    echo ('
                    <div class="title">ОБУВЬ</div>
                    ');
                }
            } else {
                $result = mysqli_query($link, "SELECT * FROM `products` ORDER BY id DESC");
            ?>
                <div class="title">НОВЫЕ ТОВАРЫ</div>
        <?php
            }
        }


        $rowsin = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {
            $rowcounter = 1;
            $i = 0;
            do {
                $id[$i] = $row["id"];
                $title[$i] = $row["title"];
                $price[$i] = $row["price"];
                $image[$i] = $row["image"];
                $i++;
            } while ($row = mysqli_fetch_array($result));
            echo ('<div class="product__row">');
            $productcounter = 0;
            do {
                echo ('<div class="product__card" id="' . $id[$productcounter] . '"><a href="/productpage.php?id=' . $id[$productcounter] . '">');
                echo ('<div class="product__image"><img src="/img/products/' . $image[$productcounter] . '"></div>');
                echo ('<div class="product__title">' . $title[$productcounter] . '</div>');
                echo ('<div class="product__price">' . $price[$productcounter] . ' руб.</div>');
                echo ('</div>');
                $productcounter++;
            } while ($productcounter < $rowsin);
            echo ('</a></div>');
            $rowcounter++;
        }
        ?>
    </div>

</div>
<?php include "footer.php" ?>
</body>

</html>