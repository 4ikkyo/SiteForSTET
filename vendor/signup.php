<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $pol = $_POST['pol'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $nachobuch = $_POST['nachobuch'];

    if ($password === $password_confirm) {

        if ($_FILES['avatar']['name'] == NULL){
            $path = 'default/1.png';
        } else {
            $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        }
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = password_hash($password, PASSWORD_BCRYPT);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `pol`, `nachobuch`, `birthday`, `phone`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path', '$pol', '$nachobuch', '$birthday', '$phone')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
