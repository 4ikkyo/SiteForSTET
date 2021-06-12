<?php

    session_start();
    require_once 'connect.php';

    $FIO = $_POST['FIO'];
    $Name = $_POST['Name'];
    $Wage = $_POST['Wage'];
    $Contact = $_POST['Contact'];
    $Requirements = $_POST['Requirements'];

    mysqli_query($connect, "INSERT INTO `vacancies` (`ID`, `FIO`, `Name`, `Wage`, `Contact`, `Requirements`) VALUES (NULL, '$FIO', '$Name', '$Wage', '$Contact', '$Requirements')");

    header('Location: ../vacansii.php');
?>
