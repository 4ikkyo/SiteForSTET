<?php
session_start();
if (!$_SESSION['user']) {
  header('Location: /');
}
$id = $_SESSION['user']['id'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Поиск</title>
    <link rel="stylesheet" href="assets/css/main.css">
	  <script src="js/search.js"></script>
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
  
  
<div align="center">
  <input class="form-control" type="text" placeholder="Поиск" id="search-text" onkeyup="tableSearch()"> <!--Поисковая строчка-->
</div>

    <div>
	<table id="info-table" class="table" align="center">
        <?php
        require_once "vendor/connect.php";
        //Получаем данные
        $sql = mysqli_query($connect, "SELECT * FROM users");
        while ($result = mysqli_fetch_array($sql)) {
			echo '<tr align="center">';
			echo	"<td><a href='/user.php/?id={$result['id']}'> <img src={$result['avatar']} width='200' alt=''> </a></td>";
			echo	"<td><a href='/user.php/?id={$result['id']}'>{$result['full_name']}</a></td>";
			echo '</tr>';
        }
        ?>
		</table>
    </div>
</body>

</html>