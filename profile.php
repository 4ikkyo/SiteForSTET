<?php
session_start();
if (!$_SESSION['user']) {
  header('Location: /');
}
$id = $_SESSION['user']['id'];
?>
<?php
if (isset($_POST['submit']) and $_FILES) {
  move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $id . "_" . $_FILES['file']['name']);
}
?>
<!-- СКРИПТЫ НЕ ТРОГАТЬ -->

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Авторизация и регистрация</title>
  <link type="text/css" rel="stylesheet" href="css/main.css">
  <link type="text/css" rel="stylesheet" href="css/vkladki.css">
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <script src="js/1.js"></script>
</head>

<body style="width: 70%; margin: auto;">
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
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">   <!-- Аватарка -->
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2> <!-- Имя пользователя -->
    <a href="#"><?= $_SESSION['user']['email'] ?></a> <!-- Имейл -->
  </form>

<!-- Кнопка загрузить фото -->
  <form method="post" action="" enctype="multipart/form-data" align="center">
    <input type="file" name="file"><br>
    <input type="submit" name="submit" value="Загрузить">
  </form>
<!-- Кнопка загрузить фото -->

<!-- Скрипт отображения загруженных фото -->
  <div style="width:50%; margin-left: auto; margin-right: auto;"> <!-- тут типо эти все фотографии должны быть оформлены в рамочку ну хз оформите -->
    <?php //Отсюда ничего не трогаем
    $path = scandir("uploads");
    foreach ($path as $f) {
      if (strpos($f, $id) === 0) {
        echo "<a target='image' href='uploads/$f'><img  src='uploads/$f' width=20% /></a>";
      }
    }
    ?>
  </div>
 <!-- Скрипт отображения загруженных фото -->
 
 <!-- Вкладки -->
<div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Вкладка №1</label>

    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Вкладка №2</label>

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Вкладка №3</label>

    <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Вкладка №4</label>
 <!-- Вкладки -->
 
    <div id="txt_1">  <!-- Что будет отображаться в 1-ой вкладке -->
  <div class="container">
    <div style="text-align: center;">
      <a href="#openModal"><button>Добавить запись</button></a> <!-- Кнопка добавить запись -->
    </div>
    <form method="post" action="vendor/public.php" enctype="multipart/form-data">
      <div id="openModal" class="modal">
        <div class="modal-dialog">
          <div class="modal-body" style="display: flex; flex-direction: column;">
            <a href="#close" title="Close" class="close" style="height: 3px; margin-left: auto;">×</a>
            <textarea name="text"></textarea>
            <button type="submit" style="margin: auto;">Создать</button>
            <script>
              CKEDITOR.replace('text');
            </script>
          </div>
        </div>
      </div>
    </form>
  </div>
 <!-- Скрипт отображения всех добавленных записей в 1-ой вкладке -->
    <?php
        require_once "vendor/connect.php";
        //Получаем данные
        $sql = mysqli_query($connect, "SELECT * FROM public WHERE `iduser` = $id;");
        while ($result = mysqli_fetch_array($sql)) {
            echo  "<a align='right'>{$result['time']}</a>";
            echo '<section>';
            echo '<form>';
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