<?php include "header.php" ?>
<div class="content">
    <div class="registration__main">
        <?php if (!isset($_COOKIE['user'])) : ?>
            <div class="title" style="margin-bottom: 1em;margin-top:1em">Авторизация</div>
            <div class="registration__form">
                <form action="assets/php/authcheck.php" method="post">
                    <input type="text" name="login" id="login" placeholder="Логин" required><br>
                    <input type="password" name="password" id="password" placeholder="Пароль" required><br>
                    <input type="submit" value="Вход">
                </form>
            </div>
        <?php else : ?>
            <div class="title" style="margin-bottom: 1em;margin-top:1em">Вы уже авторизованы!</div>
        <?php endif; ?>
    </div>
</div>
<?php include "footer.php" ?>
</body>

</html>