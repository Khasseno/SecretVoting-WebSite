<?php
    session_start();

    require_once 'connect.php';
    
    $vote = $_POST['group'];
    if ($vote != $_SESSION['user']['userGroup'])
    {
        $id = $_SESSION['user']['userID'];
        mysqli_query($connect, "UPDATE `votes` SET `votes` = `votes` + 1 WHERE `groupName` = '$vote'");
        mysqli_query($connect, "UPDATE `users` SET `vote` = '1' WHERE `id` = '$id'");
        $_SESSION['user']['userVote'] = 1;
        $_SESSION['massageSuccess'] = "Ваш голос учтён! Спасибо за участие!";
        header('Location: ../profile.php');
        exit();
    }
    else
    {
        $_SESSION['massageFail'] = "Вы проголосовали за свою группу";
        header('Location: ../voting.php');
        exit();
    }
?>