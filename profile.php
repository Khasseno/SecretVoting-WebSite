<?php
    session_start();

    if (!$_SESSION['user'])
    {
        header('Location: auth.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="css/profile.css">
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
                    <p class="welcome">Добро пожаловать, <?php echo $_SESSION['user']['userLogin'] ?>!</p>
                    <br>    
                    <p class="votings__list">Доступные голосования</p>
                </div>

                <ul class="open__votings__list">
                    <li>
                        <a href="voting.php" class="voting">Лучший проект</a>
                    </li>
                </ul>

                <br>
                <br>
                <br>


                <div class="content__text">
                    <p class="votings__list">Результаты голосования</p>
                </div>

                <ul class="open__votings__list">
                    <li>
                        <a href="result.php" class="voting">Лучший проект</a>
                    </li>
                </ul>


                <br>
                <br>
                <br>
                <div class="content__text">
                    <?php
                        if ($_SESSION['massageSuccess'])
                        {
                            echo '<p class="success">'. $_SESSION['massageSuccess'] .'</p>';
                            unset($_SESSION['massageSuccess']);
                        }
                    ?>


                    <!-- <p class="fail"> <?php $_SESSION['massageFail'] ?></p> -->
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
    </div>
</body>
</html>