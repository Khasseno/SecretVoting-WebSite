<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация на голосование</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <h1>Регистрация</h1>
        <form action="vendor/signup.php" method="post">
            <input type="text" name="login" placeholder="Введите логин" required>
            <input type="email" name="email" placeholder="Введите почту" required>
            <input type="password" name="password" placeholder="Введите пароль" required>
            <input type="password" name="password-repeat" placeholder="Повторите пароль" required>
            
            <select class="select" name="group" required>
                <option value="groupOne">Группа Армана</option>
                <option value="groupTwo">Группа Меруерт</option>
                <option value="groupThree">Группа Алтая</option>
                <option value="groupFour">Группа Томирис</option>
                <option value="groupFive">Группа Саната</option>
                <option value="groupSix">Группа Арсена</option>
            </select>
            <?php
                if ($_SESSION['massageFail'])
                {
                    echo '<p class="error">' . $_SESSION['messageFail'] . '</p>';
                    unset($_SESSION['messageFail']);
                }
            ?>

            <button type="submit">Зарегистрироваться</button>
        </form>


        <div class="member">
            Уже заригестрированы? <a href="./auth.php">Войдите здесь</a>
        </div>
    </div>
</body>

</html>