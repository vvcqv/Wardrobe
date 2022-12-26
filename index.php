 <?php include "header.php";
    ?>
 <div class="main">
     <div class="slider__div">
         <input checked type="radio" id="desktop" name="respond">
         <article id="slider">
             <input checked type="radio" name="slider" id="switch1">
             <input type="radio" name="slider" id="switch2">
             <input type="radio" name="slider" id="switch3">
             <input type="radio" name="slider" id="switch4">
             <div id="slides">
                 <div id="overflow">
                     <div class="image">
                         <article><img src="/img/slide2.jpg"></article>
                         <article><img src="/img/slide1.jpg"></article>
                         <article><img src="/img/slide3.jpg"></article>
                         <article><img src="/img/slide4.jpg"></article>
                     </div>
                 </div>
             </div>
             <div id="controls">
                 <label for="switch1"></label>
                 <label for="switch2"></label>
                 <label for="switch3"></label>
                 <label for="switch4"></label>
             </div>
             <div id="active">
                 <label for="switch1"></label>
                 <label for="switch2"></label>
                 <label for="switch3"></label>
                 <label for="switch4"></label>
             </div>
         </article>
     </div>
     <div class="container">
         <div class="title">НОВЫЕ ТОВАРЫ</div>
         <div class="title__view"><a href="all.php">ПОСМОТРЕТЬ ВСЕ</a></div>
         <div class="newproducts">
             <?php
                $result = mysqli_query($link, "SELECT * FROM `products` ORDER BY id DESC LIMIT 8");
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
                    } while ($productcounter < 8);
                    echo ('</a></div>');
                    $rowcounter++;
                }
                ?>
         </div>
     </div>
 </div>
 <?php include "footer.php" ?>
 </body>

 </html>