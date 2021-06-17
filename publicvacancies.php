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
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/1.js"></script>
</head>

<body>

<div class="mx-auto container flex items-center" id="nav">
        <div class="w-full pt-2 p-4">

            <div class="mx-auto md:p-6 md:w-1/2">
                <div class="flex flex-wrap justify-between">
    
                    <form action="vacansii.php"  method="GET">
    
                        <input type="submit" class="mt-5 mb-16 transition duration-500 bg-blue-300 hover:bg-blue-500 text-white text-l py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Вернуться к вакансиям">
                      </form>
  <!-- Вакансии -->
  <form action="vendor/PublicNews.php" method="post" enctype="multipart/form-data">
  <label class="block text-gray-700 text-l font-bold mb-2">ФИО</label>
    <input type="text" name="FIO" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-96 sm:w-auto md:w-96 lg:w-96 py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Введите свое полное имя">
    <p>
      <label class="block text-gray-700 text-l font-bold mb-2">Название вакансии</label>
      <input type="text" name="Name" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-96 sm:w-auto md:w-96 lg:w-96 py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Введите название вакансии">
    <p>
      <label class="block text-gray-700 text-l font-bold mb-2">Заработная плата</label>
      <input type="number" name="Wage" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-96 sm:w-auto md:w-96 lg:w-96 py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Укажите размер заработной платы">
    <p>
      <label class="block text-gray-700 text-l font-bold mb-2">Контактные данные</label>
      <input type="text" name="Contact" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-96 sm:w-auto md:w-96 lg:w-96 py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Укажите свои контактные данные">
    <p>
      <textarea name="Requirements" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-96 sm:w-auto md:w-96 lg:w-96 py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Требования к работнику" style="margin: 0px;" required></textarea>
    <p>
      <input type="submit" name="submit" class="mt-5 mx-28 mb-10 transition duration-500 bg-blue-400 hover:bg-blue-600 text-white text-l py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Создать вакансию">
    <p>
  </form>
</body>

</html>