<?php include("assets/php/connection.php") ?>
<!DOCTYPE html>

<head>
    <title>Главная</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include "header.php" ?>
    <div class="content">
        <div class="registration__main">
            <?php if (!isset($_COOKIE['user'])) : ?>
                <div class="title" style="margin-bottom: 1em;margin-top:1em">Создание нового пользователя</div>
                <div class="registration__form">
                    <form action="assets/php/regcheck.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Ваше Имя" required><br>
                        <input type="text" name="login" id="login" placeholder="Логин" required><br>
                        <input type="password" name="password" id="password" placeholder="Пароль" required><br>
                        <input type="submit" value="Регистрация">
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