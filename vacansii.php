<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Публикация вакансий</title>
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
    <form action="publicvacancies.php" method="GET">
        <input type="submit" value="Создать вакансию" />
    </form>
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
    <div>
        <?php
        require_once "vendor/connect.php";
        //Получаем данные
        $sql = mysqli_query($connect, "SELECT * FROM vacancies");
        while ($result = mysqli_fetch_array($sql)) {
            echo '<section>';
            echo '<form align= "center">';
            echo  "<a>{$result['FIO']}</a>";
            echo  "<h2>{$result['Name']}</h2><p>";
            echo  "<h4 align='right'>{$result['Wage']}</h4>";
            echo  "<small>{$result['Contact']}</small><p>";
            echo  "<small>{$result['Requirements']}</small>";
            echo '</form>';
            echo '<hr>';
            echo '</section>';
        }
        ?>
    </div>
</body>

</html>