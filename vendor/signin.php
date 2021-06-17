<?php

    session_start();
    require_once 'connect.php';
	
    $login = $_POST['login'];
    $password = $_POST['password'];
	
	$query = "SELECT * FROM users WHERE `login` = '$login'";
	$result = $connect->query($query);
	$row = $result->fetch_assoc();
	
	if (password_verify($password, $row['password'])) {

        $_SESSION['user'] = [
            "id" => $row['id'],
            "full_name" => $row['full_name'],
            "avatar" => $row['avatar'],
            "email" => $row['email'],
            "pol" => $row['pol'],
            "birthday" => $row['birthday'],
            "nachobuch" => $row['nachobuch'],
            "phone" => $row['phone']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }

    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($row);
    ?>
</pre>
