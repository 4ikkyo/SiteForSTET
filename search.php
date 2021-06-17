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
  <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="js/search.js"></script>
</head>

<body style=""> <!-- width: 70%; margin: auto;-->
  <!-- Верхнее меню -->
  <nav class="bg-light">
    <div class="container d-flex flex-wrap">
      <div class="flex h-full">
        <nav class="flex w-72 bg-blue-100 md:16 lg:w-72">
          <div class="w-full flex mx-auto ">
            <div class="justify-center text-gray-900 text-lg border-dashed" style="width: 100%;">
              <ul class="nav me-auto">
                <li><a class=" flex  items-center h-11">
                  </a>
                </li>
                <li class="nav-item"><a href="../profile.php" class="relative flex  items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">
                    <span class=" ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                      </svg>
                    </span>
                    <span class="ml-2  tracking-wide truncate hidden lg:block"> Домой</span>
                  </a>
                </li>
                <li class="nav-item"><a href="../vacansii.php" class="relative flex  items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">
                    <span class=" ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                      </svg>
                    </span>
                    <span class="ml-2  tracking-wide truncate hidden lg:block">
                      Вакансии</a>
                </li>
                <li class="nav-item"><a href="../search.php" class="relative flex  items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">
                    <span class=" ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                      </svg>
                    </span>
                    <span class="ml-2  tracking-wide truncate hidden lg:block">
                      Поиск</a>
                </li>
              </ul>
              <ul class="nav">
                <li class="nav-item"><a href="vendor/logout.php" class="relative flex  items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">
                    <span class=" ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                      </svg>
                    </span>
                    <span class="ml-2  tracking-wide truncate hidden lg:block">
                      Выход</a>
                </li>
              </ul>
            </div>
        </nav>
        <!-- Верхнее меню -->


        <div class="px-6 py-4 flex-1 overflow-y-scroll w-full ">

          <div class="inline-flex flex-col justify-center relative text-gray-500">
            <div class="relative">
              <input id="search-text" onkeyup="tableSearch()" type="text" class="form-control p-2 pl-8 rounded border border-gray-200 bg-gray-200 focus:bg-white focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent" placeholder="Поиск" />
              <svg class="w-4 h-4 absolute left-2.5 top-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>
          </div>

            <table id="info-table" class="table w-full">
              <?php
              require_once "vendor/connect.php";
              //Получаем данные
              $sql = mysqli_query($connect, "SELECT * FROM users");
              while ($result = mysqli_fetch_array($sql)) {
                echo '<tr>';
                echo '<td>';
                echo '<div class="border-b border-gray-600 py-3 flex items-start mb-4 text-sm w-full">';
                echo "<img src={$result['avatar']} class='cursor-pointer w-10 h-10 rounded-3xl mr-3'>";
                echo '<div class="flex-1 overflow-hidden">';
               // echo '<div>';
               // echo '<span class="text-black-300 cursor-pointer hover:underline">User</span>';
               // echo '</div>';
                echo "<a href='/user.php/?id={$result['id']}'><span class='font-bold text-black-300 cursor-pointer hover:underline'>{$result['full_name']}</span></a>";
                // echo '<tr align="center">';
                // echo  "<td><a href='/user.php/?id={$result['id']}'> <img  width='200' alt=''> </a></td>";
                // echo  "<td><a href='/user.php/?id={$result['id']}'>{$result['full_name']}</a></td>";
                // echo '</tr>';
                echo '</div>';
                echo '</div>';
                echo '</td>';
                echo '</tr>';
              }
              ?>
            </table>
        </div>
</body>

</html>