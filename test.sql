-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 19 2021 г., 02:01
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `public`
--

CREATE TABLE `public` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `public`
--

INSERT INTO `public` (`id`, `iduser`, `text`, `time`) VALUES
(3, 10, '', '2021-06-09 17:36:58'),
(4, 10, '', '2021-06-09 17:37:10'),
(5, 10, '', '2021-06-09 17:38:01'),
(6, 10, '<p>sdsdsdf</p>\r\n', '2021-06-09 17:38:54'),
(8, 10, '', '2021-06-09 17:41:39'),
(9, 10, '<h1>Всем привет дорогие друзья с вами я <strong>Максим</strong><br />\r\n&nbsp;</h1>\r\n', '2021-06-09 17:42:07'),
(10, 10, '<p>а</p>\r\n', '2021-06-09 17:49:11'),
(11, 10, '<p>23234</p>\r\n', '2021-06-09 17:50:32'),
(12, 10, '<p>24342</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>fsd</td>\r\n			<td>fsdsdf</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-06-09 17:52:42'),
(13, 10, '<p><strong>АПОШЩХ</strong></p>\r\n\r\n<p><em><strong>ВКПРКЕВИНЕГМНУК</strong></em></p>\r\n', '2021-06-09 18:53:47'),
(14, 10, '<p>ФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІФІВІ</p>\r\n', '2021-06-09 18:55:24'),
(15, 10, '<p>фыкехкнгвенговенор</p>\r\n', '2021-06-13 18:13:21'),
(16, 10, '<p>Всем привет&nbsp;</p>\r\n', '2021-06-13 20:58:32');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `pol` text,
  `nachobuch` date DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `pol`, `nachobuch`, `birthday`, `phone`) VALUES
(2, 'Иванов Иван Иванович', 'test', 'test@local.ru', '$2y$10$mE5ayLH0WZZ4jaoAzE3vTeWIruxMCKt2eFSulHwXfpKQD6CaTl/1a', 'uploads/15698233144.png', NULL, NULL, NULL, NULL),
(10, '223', '223', '123@gmail.com', '$2y$10$GMCOL0/z2pT7kO3XfhkdWO1PmrTrwumSnX3EiYu3Ar7nN/8CfM4Mm', 'uploads/162316650915698232564.png', NULL, '2021-06-04', NULL, NULL),
(12, 'Владимир В П', 'Vladimir', '123@gmail.com', '$2y$10$lFxHsZMfeSPYBLz3Epf1wOzRtp7rNUE92Ak6f1O2Mw9dHYeeBb17C', 'uploads/1623172800', NULL, NULL, NULL, NULL),
(13, '332', '332', '332@GMAIL.COM', '$2y$10$SKecjBwf3nttrtj3Z5G49uUPGKLjGESW3e0t5kO..R4zFxQXXlAhm', 'uploads/1623265030', NULL, NULL, NULL, NULL),
(15, '444', '444', '444@gmail.com', '$2y$10$HEq94ZFlJPxreta7/Vhp8uVKW7eTfkeL3NZbAT0Oh4wC/pVyw3VdS', 'default/1.png', NULL, NULL, NULL, NULL),
(16, '555', '555', '555@gmail.com', '$2y$10$Q5t1fHIM4decZhRbPMGFzeXzTbUi/OJ0Gvxj5w0jCFmnZ791aR6km', 'uploads/1623513881123.png', NULL, NULL, NULL, NULL),
(17, '', '', '', '$2y$10$pTuoShhbnk96b4G5pYxa.u/p5rdhbuMKbPLW1L9N8BX.XxL7oL0Hy', 'default/1.png', NULL, NULL, NULL, NULL),
(22, 'Сновида Максим Михайлович', 'snovida', 'snovida2003@gmail.com', '$2y$10$drzSIa7qFXh.skrfRC8bDuq92lR9cod7bU3tqJW5KXKbZ0egv3Oua', 'uploads/162396599223412.png', 'Студент', '2020-02-13', '2003-02-13', 79789);

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `ID` int NOT NULL,
  `FIO` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Wage` int NOT NULL,
  `Contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Requirements` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`ID`, `FIO`, `Name`, `Wage`, `Contact`, `Requirements`) VALUES
(3, 'ФИО', '234', 3542, '234', 'dfgdf'),
(4, 'ФИО', '234', 3542, '234', 'dfgdf'),
(8, '213', '123', 123, '123', '123'),
(9, 'ewr', 'wer', 1, 'wer', 'wer'),
(10, 'Сновида Максим Михайлович', 'Требуется программист', 50000, '+79789463372', 'блп-бла-бла');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `public`
--
ALTER TABLE `public`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
