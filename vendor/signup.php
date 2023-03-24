<?php
    session_start();

    require_once 'connect.php';

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $email = md5(filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING)."emailsalti");
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $passwordRepeat = filter_var(trim($_POST['password-repeat']), FILTER_SANITIZE_STRING);
    $group = filter_var(trim($_POST['group']), FILTER_SANITIZE_STRING);

    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    $check_group = mysqli_query($connect, "SELECT * FROM `users` WHERE `group` = '$group'");
    $check_group = mysqli_fetch_all($check_group);
    
    if (count($check_group) >= 5)
    {
        $_SESSION['messageFail'] = 'В группе уже 5 человек';
        header('Location: ../register.php');
        exit();
    }

    if (mysqli_num_rows($check_email) > 0)
    {
        $_SESSION['messageFail'] = 'Данный адрес эл.почты занят';
        header('Location: ../register.php');
        exit();
    }

    if ($password === $passwordRepeat)
    {
        $password = md5($password."saltimalti");
        mysqli_query($connect, "INSERT INTO `users` (`login`, `password`, `email`, `group`) VALUES ('$login', '$password', '$email', '$group')");

        $_SESSION['messageSuccess'] = 'Регистрация прошла успешно';
        header('Location: ../auth.php');
        exit();
    }
    else 
    {
        $_SESSION['messageFail'] = 'Пароли не совпадают';
        header('Location: ../register.php');
        exit();
    }
?>