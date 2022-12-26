<?php include "header.php" ?>

<div class="content">

    <div class="contacts__centered">

        <div class="contacts__title">КОНТАКТЫ</div>

        <div class="contacts__body">

            <div class="contacts__row">

                <div class="contacts__left">

                    <div class="contacts__subtitle">Телефоны:</div>

                    <div class="contacts__subbody">

                        <?php



                        $result = mysqli_query($link, "SELECT * FROM `contacts`");

                        if ($result) {

                            while ($row = mysqli_fetch_assoc($result)) {

                                echo ($row['number'] . '<br>');

                            }

                        }

                        $result = mysqli_query($link, "SELECT * FROM `links`");

                        ?>

                    </div>

                </div>

                <div class="contacts__right">



                </div>

            </div>

            <div class="contacts__bottom">

                <a href="https://vk.com/moscowpolytech">

                    <img src="img/vk.jpg" alt="">

                </a>

            </div>

        </div>

    </div>

</div>

<?php include "footer.php" ?>

</body>



</html>