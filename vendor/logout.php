<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['userVote']);
    header('Location: ../auth.php');
?>
