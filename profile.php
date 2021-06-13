<?php
session_start();
if (!$_SESSION['user']) {
  header('Location: /');
}
$id = $_SESSION['user']['id'];
?>
<?php
if (isset($_FILES['file']['name'])) {
  $total_files = count($_FILES['file']['name']);
  for ($key = 0; $key < $total_files; $key++) {
    if (isset($_POST['submit']) and $_FILES) {
      move_uploaded_file($_FILES['file']['tmp_name'][$key], "uploads/" . $id . "_" . $_FILES['file']['name'][$key]);
    }
  }
}
?>
<!-- СКРИПТЫ НЕ ТРОГАТЬ -->

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Авторизация и регистрация</title>
  <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/main.css">
  <link type="text/css" rel="stylesheet" href="css/vkladki.css">
  <script type="text/javascript" src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <script type="text/javascript" src="js/1.js"></script>

  <link type="text/css" rel="stylesheet" href="css/wa-mediabox.css">
  <script type="text/javascript" src="js/wa-mediabox.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <style>
    :root {
      --main-color: #4a76a8;
    }

    .bg-main-color {
      background-color: var(--main-color);
    }

    .text-main-color {
      color: var(--main-color);
    }

    .border-main-color {
      border-color: var(--main-color);
    }
  </style>
</head>

<body> <!--style="width: 70%; margin: auto;" -->
  <!-- Верхнее меню -->
  <nav class="bg-light">
    <div class="container d-flex flex-wrap">
      <div class="flex">
        <nav class="flex w-72 bg-blue-100 md:16 lg:w-72">
          <div class="w-full flex mx-auto ">
            <div class="justify-center text-gray-900 text-lg border-dashed">
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
                <li class="nav-item"><a href="../publicvacancies.php" class="relative flex  items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800 pr-6">
                    <span class=" ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                      </svg>
                    </span>
                    <span class="ml-2  tracking-wide truncate hidden lg:block">
                      Опубликовать вакансии</a>
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

        <!-- Профиль -->
        <div>
          <div class="bg-white">

            <!-- End of Navbar -->

            <div class="container mx-auto my-5 p-5">
              <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-200 md:w-4/12 md:mx-4">
                  <!-- Profile Card -->
                  <div class="bg-white p-1 border-4 border-blue-100 ">
                    <div class="image overflow-hidden">
                      <img class="h-auto w-full mx-auto" src="<?= $_SESSION['user']['avatar'] ?>" alt=""> <!-- Аватарка -->
                    </div>
                    <h1 class="mx-5 text-gray-900 font text-lg leading-8 my-1"><?= $_SESSION['user']['full_name'] ?></h1><!-- Имя пользователя -->
                    <li class="flex items-center py-3">
                      <span class=text-base>Статус:</span>
                      <span class="ml-auto"><span class="bg-blue-300 py-1 px-2 rounded text-white ">Студентка</span></span>
                    </li>
                    <li class="flex items-center py-3">
                      <span>Начало обучения:</span>
                      <span class="ml-auto">01.09.2018</span>
                    </li>
                    </ul>
                  </div>
                  <!-- End of profile card -->
                  <div class="my-4"></div>

                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                  <!-- Profile tab -->
                  <!-- About Section -->
                  <div class="bg-white p-5 shadow-sm rounded-sm">
                    <div class="px-12 flex items-center space-x-3 font-semibold text-gray-800 leading-8">
                      <span clas="text-green-500">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                      </span>
                      <span class="tracking-wide text-xl">Дополнительная информация</span>
                      <li class="flex items-center py-7"></li>
                    </div>
                    <div class="text-gray-700">
                      <div class="grid md:grid-cols-1 text-base">
                        <div class="grid grid-cols-2">

                          <div class="border-l-2 border-blue-200 mt-9 mx-7 py-2 px-4 font-semibold">Контактый телефон:</div>
                          <div class="mt-9 px-1 py-2">+7(978)888-88-88</div>
                        </div>
                        <div class="grid grid-cols-2">
                          <div class="border-l-2 border-blue-200 mx-7 py-2 px-4 font-semibold">Адрес проживания:</div>
                          <div class="px-1 py-2">Севастополь, ул. Адмирала Юмашева</div>
                        </div>
                        <div class="grid grid-cols-2">
                          <div class="border-l-2 border-blue-200 mx-7 py-2 px-4 font-semibold">Почта:</div>
                          <div class="px-1 py-2">
                            <a class="text-blue-800" href="mailto:jane@example.com">pochta@gmail.com</a><!-- Имейл -->
                          </div>
                        </div>
                        <div class="grid grid-cols-2">
                          <div class="border-l-2  border-blue-200 mx-7 py-2 px-4 font-semibold">Дата рождения:</div>
                          <div class="px-1 py-2">01.01.2002</div>
                        </div>
                      </div>
                    </div>


                    <!-- End of about section -->

                    <div class="my-4"></div>

                  </div>
                  <!-- End of profile tab -->
                </div>
              </div>
            </div>
          </div>
          <form align="center">
            <!-- Аватарка -->
            <!--<a href="#"><?= $_SESSION['user']['email'] ?></a> -->
          </form>

          <!-- Кнопка загрузить фото -->
          <form method="post" action="" enctype="multipart/form-data" align="center">
            <input class="transition duration-500 bg-blue-200 hover:bg-blue-400 text-white text-l py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="file" name="file[]" accept=".jpg, .png" multiple>
            <input class="transition duration-500 bg-blue-200 hover:bg-blue-400 text-white text-l py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Загрузить">
          </form>
          <!-- Кнопка загрузить фото -->

          <!-- Скрипт отображения загруженных фото -->
          <div id="gallery" style="width:50%; margin-left: auto; margin-right: auto;">
            <!-- тут типо эти все фотографии должны быть оформлены в рамочку ну хз оформите -->
            <?php //Отсюда ничего не трогаем
            $path = scandir("uploads");
            foreach ($path as $f) {
              if (strpos($f, $id . "_") === 0) {
                echo "<a data-mediabox='gallery-1' href='uploads/$f'><img  src='uploads/$f' width=20% /></a>";
              }
            }
            ?>
          </div>
          <!-- Скрипт отображения загруженных фото -->

          <!-- Вкладки -->
          <div class="tabs ">
            <input type="radio" name="inset" value="" id="tab_1" checked>
            <label for="tab_1" class="items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">Вкладка №1</label>

            <input type="radio" name="inset" value="" id="tab_2">
            <label for="tab_2" class="items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">Вкладка №2</label>

            <input type="radio" name="inset" value="" id="tab_3">
            <label for="tab_3" class="items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">Вкладка №3</label>

            <input type="radio" name="inset" value="" id="tab_4">
            <label for="tab_4" class="items-center h-12 hover:bg-blue-200 text-white-600 hover:text-white-800">Вкладка №4</label>
            <!-- Вкладки -->

            <div id="txt_1">
              <!-- Что будет отображаться в 1-ой вкладке -->
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


            <div id="txt_2">
              <!-- Что будет отображаться в 2-ой вкладке -->
              <p>Вторая вкладка</p>
              <a href="uploads/1.pdf" data-mediabox="my-gallery-name" data-iframe="true" data-title=""> <img src="image-thumb.jpg" alt="Image" /> </a>
            </div>

            <div id="txt_3">
              <!-- Что будет отображаться в 3-ей вкладке -->
              <p>Размеры содержимого вкладок</p>
              <p>могут отличаться по высоте!</p>
            </div>

            <div id="txt_4">
              <!-- Что будет отображаться в 4-ой вкладке -->
              <img src="image/logo.png" width="533" height="77" alt="Лого">
            </div>
          </div>
        </div>
</body>

</html>