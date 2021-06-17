<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <!-- Форма регистрации -->
        <div class="mx-auto container flex items-center" id="nav">
            <div class="w-full pt-2 p-4">

                <div class="mx-auto md:p-6 md:w-1/2">
                    <div class="flex flex-wrap justify-between">
                        <h1 class="text-2xl text-orange-500 hover:text-orange-500 transition duration-500 p-4">
                            <i class="fas fa-sign-in-alt fa-fw fa-lg"></i>
                            Регистрация
                        </h1>
                        <a href="#home" class="mt-8 text-orange-400 hover:text-orange-600 transition duration-500">
                            <svg class="opacity-70 w-6 h-6 inline-block align-bottom" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Главная страница
                            <i class="fas fa-chevron-circle-left fa-fw"></i>
                        </a>
                    </div>

                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    ФИО
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                                        </svg>

                                    </div>
                                    <input id="full_name" name="full_name" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Введите свое полное имя" />
                                </div>
                                <strong class="text-red-500 text-xs italic"></strong>
                            </div>

                            <div class="mb-4">
                                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Логин
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <input id="username" name="login" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Введите свой логин" />
                                </div>
                                <strong class="text-red-500 text-xs italic"></strong>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Почта
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>
                                    <input id="email" name="email" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Введите адрес своей почты" />
                                </div>
                                <strong class="text-red-500 text-xs italic"></strong>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Пароль
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <input name="password" id="password" type="password" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Введите пароль">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password_confirm" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Подтверждение пароля
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <input name="password_confirm" id="password_confirm" type="password" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Подтвердите пароль">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="avatar" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Изображение профиля
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    </div>
                                    <input name="avatar" id="avatar" type="file" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Подтвердите пароль">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="pol" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Пол
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <select id="pol" name="pol">
                                        <option>Студент</option>
                                        <option>Студентка</option>
                                    </select>
                                </div>
                                <strong class="text-red-500 text-xs italic"></strong>
                            </div>

                            <div class="mb-4">
                                <label for="nachobuch" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Дата начала обучения
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <input type="date" id="nachobuch" name="nachobuch" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out"/>
                                </div>
                                <strong class="text-red-500 text-xs italic"></strong>
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Телефон
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <input id="phone" name="phone" maxlength="12" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Введите свой контактный телефон" />
                                </div>
                                <strong class="text-red-500 text-xs italic"></strong>
                            </div>

                            <div class="mb-4">
                                <label for="birthday" class="block text-gray-700 text-sm font-bold mb-2">
                                    <span class="text-red-500">&nbsp;*</span>
                                    Дата ождения
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <input type="date" id="birthday" name="birthday" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out"/>
                                </div>
                                <strong class="text-red-500 text-xs italic"></strong>
                            </div>
                            
                            <div class="mb-4 mt-4 text-center">
                                <button type="submit" class="transition duration-500 bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Зарегистрироваться
                                </button>
                            </div>
                            <hr>
                            <div class="mt-8">
                                <p class="text-sm">
                                    Есть аккаунт?
                                    <a class="font-bold text-sm text-orange-500 hover:text-orange-800" href="index.php">
                                        Авторизоваться
                                    </a>
                                </p>
                                <?php
                                if ($_SESSION['message']) {
                                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                                }
                                unset($_SESSION['message']);
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>