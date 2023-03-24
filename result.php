<?php
    session_start();
    if (!$_SESSION['user'])
    {
        header('Location: auth.php');
    }
    require_once 'vendor/connect.php';

    $groupOne = mysqli_query($connect, "SELECT `votes` FROM `votes` WHERE `groupName` = 'groupOne'");
    $groupTwo = mysqli_query($connect, "SELECT `votes` FROM `votes` WHERE `groupName` = 'groupTwo'");
    $groupThree = mysqli_query($connect, "SELECT `votes` FROM `votes` WHERE `groupName` = 'groupThree'");
    $groupFour = mysqli_query($connect, "SELECT `votes` FROM `votes` WHERE `groupName` = 'groupFour'");
    $groupFive = mysqli_query($connect, "SELECT `votes` FROM `votes` WHERE `groupName` = 'groupFive'");
    $groupSix = mysqli_query($connect, "SELECT `votes` FROM `votes` WHERE `groupName` = 'groupSix'");
    
    $groupOne = mysqli_fetch_all($groupOne);
    $groupTwo = mysqli_fetch_all($groupTwo);
    $groupThree = mysqli_fetch_all($groupThree);
    $groupFour = mysqli_fetch_all($groupFour);
    $groupFive = mysqli_fetch_all($groupFive);
    $groupSix = mysqli_fetch_all($groupSix);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/result.css">
    <link href="js/result.js">
    <title>Результаты голосования</title>
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
                    <p class="title">Результаты голосования за лучший проект</p>

                    <p class="candidat" id="1"> 
                        <span> 
                            Группа Армана (онлайн-чат)
                        </span>
                        <span>    
                            <?php echo $groupOne[0][0]; ?> 
                        </span>
                    </p> 

                    <p class="candidat" id="2"> 
                        <span> 
                            Группа Меруерт (безопасность WI-FI)
                        </span>
                        <span>    
                            <?php echo $groupTwo[0][0]; ?> 
                        </span>
                    </p> 

                    <p class="candidat" id="3"> 
                        <span> 
                            Группа Алтая (тайное голосование)
                        </span>
                        <span>    
                            <?php echo $groupThree[0][0]; ?> 
                        </span>
                    </p> 

                    <p class="candidat" id="4"> 
                        <span> 
                            Группа Томирис (безопасный интернет)
                        </span>
                        <span>    
                            <?php echo $groupFour[0][0]; ?> 
                        </span>
                    </p> 

                    <p class="candidat" id="5"> 
                        <span> 
                            Группа Саната (двухфакторная аутендификация)
                        </span>
                        <span>    
                            <?php echo $groupFive[0][0]; ?> 
                        </span>
                    </p> 

                    <p class="candidat" id="6"> 
                        <span> 
                            Группа Арсена (шифрование Диффи-Хеллмана)
                        </span>
                        <span>    
                            <?php echo $groupSix[0][0]; ?> 
                        </span>
                    </p> 

                </div>
            </div>
        </div>
    </div>

    <?php 
        echo "<script src=\"js/result.js\"></script>";
    ?>
</body>
</html>