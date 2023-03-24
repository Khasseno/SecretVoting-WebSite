<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'test');

    if (!$connect)
    {
        die('Ошибка подключения к базе данных');
    }

?>