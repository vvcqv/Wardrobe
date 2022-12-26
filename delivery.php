<?php include "header.php" ?>
<div class="content">
    <div class="delivery__centered">
        <div class="title" style="margin-top: 1em;margin-bottom: 1em;">Оформление заказа</div>
        <form class="delivery__form" action="assets/php/senddelivery.php" method="POST">
            <input id="phone" name="phone" type="text" required placeholder="Телефон"><br>
            <script>
                $(function () {
                    $("#phone").mask("8(999) 999-9999");
                });
            </script>
            <input type="text" id="adress" name="adress" required placeholder="Адрес" maxlength="255"><br>
            <input type="submit" value="Отправить">
        </form>
    </div>
</div>
<?php include "footer.php" ?>
</body>

</html>