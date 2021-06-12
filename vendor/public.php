<?php

    session_start();
    if (!$_SESSION['user']) {
        header('Location: /');
    }
    $id = $_SESSION['user']['id'];
    require_once 'connect.php';

    $text = $_POST['text'];

    mysqli_query($connect, "INSERT INTO `public` (`id`, `iduser`, `text`) VALUES (NULL, '$id', '$text')");

    header('Location: ../profile.php');
?>
