<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход на голосование</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <h1>Авторизация</h1>
        <form action="vendor/login.php" method="post">
            <input type="email" name="email" placeholder="Введите почту" required>
            <input type="password" name="password" placeholder="Введите пароль" required>

            <?php
                if ($_SESSION['messageFail'])
                {
                    echo '<p class="error">' . $_SESSION['messageFail'] . '</p>';
                    unset($_SESSION['messageFail']);
                }
            ?>

            <button type="submit">Войти</button>
        </form>


        <div class="member">
            Не зарегистрированы? <a href="./register.php">Зарегистрируйтесь здесь</a>
        </div>

        <?php
            if ($_SESSION['messageSuccess'])
            {
                echo '<p class="success">' . $_SESSION['messageSuccess'] . '</p>';
                unset($_SESSION['messageSuccess']);
            }
        ?>
    </div>
</body>

</html>