<?php
    session_start();

    if (!$_SESSION['user'])
    {
        header('Location: auth.php');
    }

    if ($_SESSION['user']['userVote'] == 1)
    {
        $_SESSION['massageFail'] = "Ваш голос уже зачтён";
        header('Location: profile.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blank.css">
    <title>Голосование</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__body">
                    <a href="profile.php" class="header__logo">
                        <p>SECRET VOTING</p>
                    </a>
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li>
                                <a href="vendor/logout.php" class="header__link">Выйти</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
        <div class="content">
            <div class="container">
                    <div class="content__text">
                        <p class="welcome"><?php echo $_SESSION['user']['userLogin'] ?>, пожалуйста, проголосуйте</p>
                    </div>
                    <form action="vendor/vote.php" method="post">
        
                        <input class="radio" type="radio" id="1" name="group" value="groupOne" required>
                        <label for="1">Группа 1 (Арман и онлайн-чат)</label><br>
                        <input class="radio" type="radio" id="2" name="group" value="groupTwo">
                        <label for="2">Группа 2 (Меруерт и безопасность WI-FI)</label><br>
                        <input class="radio" type="radio" id="3" name="group" value="groupThree">
                        <label for="3">Группа 3 (Алтай и тайное голосование)</label><br>
                        <input class="radio" type="radio" id="4" name="group" value="groupFour">
                        <label for="4">Группа 4 (Томирис и безопасный интернет)</label><br>
                        <input class="radio" type="radio" id="5" name="group" value="groupFive">
                        <label for="5">Группа 5 (Санат и двухфакторная аутендификация)</label><br>
                        <input class="radio" type="radio" id="6" name="group" value="groupSix">
                        <label for="6">Группа 6 (Арсен и шифрование Диффи-Хеллмана)</label><br>
        
                        <button class="button" type="submit">Отправить</button>
                    </form>

                    <?php 
                        if ($_SESSION['massageFail'])
                        {
                            echo '<p class="fail">'. $_SESSION['massageFail'] .'</p>';
                            unset($_SESSION['massageFail']);
                        }
                    ?>
            </div>
        </div>
    </div>
</body>

</html>