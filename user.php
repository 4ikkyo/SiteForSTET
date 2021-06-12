<?php
session_start();
require_once "vendor/connect.php";
if (!$_SESSION['user']) {
  header('Location: /');
}
$user = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `users` WHERE id = '".(int)$_GET['id']."'"));
$id = $_GET['id'];
?>
<!-- СКРИПТЫ НЕ ТРОГАТЬ -->

<html lang="en">

<head>
  <meta charset="UTF-8"> 
  <title>Авторизация и регистрация</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

<!-- Верхнее меню -->
<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="../profile.php" class="" aria-current="page">Домой</a></li>
        <li class="nav-item"><a href="../vacansii.php" class="">Вакансии</a></li>
		<li class="nav-item"><a href="../publicvacancies.php" class="">Опубликовать вакансии</a></li>
        <li class="nav-item"><a href="../search.php" class="">Поиск</a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="vendor/logout.php" class="">Выход</a></li>
      </ul>
    </div>
  </nav>
  <!-- Верхнее меню -->
 

 <!-- Профиль -->
 
  <form align="center">
    <img src="../<?= $user['avatar'] ?>" width="200" alt=""> <!-- Аватарка -->
    <h2 style="margin: 10px 0;"><?= $user['full_name'] ?></h2> <!-- Имя пользователя -->
    <a href="#"><?= $user['email'] ?></a> <!-- Имейл -->
  </form>


<!-- Скрипт отображения загруженных фото -->
  <div style="width:50%; margin-left: auto; margin-right: auto;">
    <?php
    $path = scandir("uploads");
    foreach ($path as $f) {
      if (strpos($f, $id) === 0) {
        echo "<a target='image' href='../uploads/$f'><img  src='../uploads/$f' width=20% /></a>";
      }
    }
    ?>
  </div>
<!-- Скрипт отображения загруженных фото -->

<div id="txt_1"> <!-- Что будет отображаться в 1-ой вкладке -->
  <?php
        require_once "vendor/connect.php";
        //Получаем данные
        $sql = mysqli_query($connect, "SELECT * FROM public WHERE `iduser` = $id;");
        while ($result = mysqli_fetch_array($sql)) {
            echo  "<a align='right'>{$result['time']}</a>";
            echo '<section>';
            echo '<form align= "center">';
            echo  "{$result['text']}";
            echo '</form>';
            echo '<hr>';
            echo '</section>';
        }
  ?>
 </div>
 
     <div id="txt_2">	<!-- Что будет отображаться в 2-ой вкладке -->
        <p>Вторая вкладка</p>
    </div>
	
    <div id="txt_3">    <!-- Что будет отображаться в 3-ей вкладке -->
        <p>Размеры содержимого вкладок</p>
        <p>могут отличаться по высоте!</p>
    </div>
	
    <div id="txt_4">    <!-- Что будет отображаться в 4-ой вкладке -->
        <img src="image/logo.png" width="533" height="77" alt="Лого">
    </div>
</div>

</body>

</html>