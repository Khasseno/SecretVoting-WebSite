<?php
    session_start();
    require_once 'connect.php';

    $results = mysqli_query("SELECT * FROM `votes`");
    $results = mysqli_fetch_all($results);

    $groupOne = $results[0][1];
    $groupTwo = $results[1][1];
    $groupThree = $results[2][1];
    $groupFour = $results[3][1];
    $groupFive = $results[4][1];
    $groupSix = $results[5][1];
?>