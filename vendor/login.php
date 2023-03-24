<?php
    session_start();

    require_once 'connect.php';

    $email = md5(filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING)."emailsalti");
    $password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING)."saltimalti");
    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    
    
    
    if (mysqli_num_rows($check_user) > 0)
    { 
        $user = mysqli_fetch_assoc($check_user); 
        
        $_SESSION['user'] = [
            "userID" => $user['id'],
            "userLogin" => $user['login'],
            "userGroup" => $user['group'],
            "userVote" => $user['vote']
        ];
        header('Location: ../profile.php');
        exit();
    }
    else
    {
        $_SESSION['messageFail'] = 'Неверный логин или пароль';
        header('Location: ../auth.php');
        exit();
    }   
    
?>