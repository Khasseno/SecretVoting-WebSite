<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'test';

    $connect = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$connect)
    {
        die('Ошибка подключения к базе данных');
    }

?>
