<?php
session_start();
if (!$_SESSION['user']) {
  header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Публикация вакансий</title>

</head>

<body>
  <form action="vacansii.php" method="GET">
        <input type="submit" value="Вакансии" />
  </form>
  <!-- Вакансии -->
  <form action="vendor/PublicNews.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="FIO" placeholder="Введите свое полное имя">
    <p>
      <label>Название вакансии</label>
      <input type="text" name="Name" placeholder="Введите название вакансии">
    <p>
      <label>Заработная плата</label>
      <input type="number" name="Wage" placeholder="Укажите размер заработной платы">
    <p>
      <label>Контактные данные</label>
      <input type="text" name="Contact" placeholder="Укажите свои контактные данные">
    <p>
      <textarea name="Requirements" placeholder="Требования к работнику" style="margin: 0px; width: 400px; height: 320px;" required></textarea>
    <p>
      <input type="submit" name="submit" value="Создать вакансию">
    <p>
  </form>
</body>

</html>