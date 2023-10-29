-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 15 2020 г., 18:11
-- Версия сервера: 5.7.22-22-log
-- Версия PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `a343072_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts_paw`
--

CREATE TABLE `posts_paw` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_ee` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_ee` text NOT NULL,
  `image` text NOT NULL,
  `image_min` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts_paw`
--

INSERT INTO `posts_paw` (`id`, `title_ru`, `title_ee`, `text_ru`, `text_ee`, `image`, `image_min`) VALUES
(15, 'Название ру', 'Название эст', 'Описание ру', 'Название эст', 'img/posts/5c33b877a0762.jpg', 'img/posts/5c33b877a076acopy.jpg'),
(16, 'Название', 'nimi', 'Описание статьи', 'artikli kirjeldus', 'img/posts/5c33b8b6ac1b0.jpg', 'img/posts/5c33b8b6ac1b8copy.jpg'),
(17, 'Название только на русском', '', 'Описание только на русском', '', 'img/posts/5c33b8e9e4e42.jpg', 'img/posts/5c33b8e9e4e4bcopy.jpg'),
(18, '', 'Название только на эстонском', '', 'Описание только на эстонском', 'img/posts/5c33b91a19977.png', 'img/posts/5c33b91a1997ecopy.png'),
(19, 'Название Клуб', 'Название Клуб', 'Текст с описанием scriptjs/script\r\n<br><br>\r\nТекст с описанием\r\nbrbr\r\nТекст с описанием\r\n<h3>Заголовок</h3>\r\nntrccc', 'Текст с описанием scriptjs/script\r\n<br><br>\r\nТекст с описанием\r\nbrbr\r\nТекст с описанием', 'img/posts/5c365757f3326.jpg', 'img/posts/5c365757f332bcopy.jpg'),
(21, 'Название', 'Название', 'Текст описание <br><br>\r\nТекст\r\n<h3> Заголовок </h3>\r\nТекст', 'Текст описание <br><br>\r\nТекст\r\n<h3> Заголовок </h3>\r\nТекст', 'img/posts/5c365dc0a04b3.jpg', 'img/posts/5c365dc0a04b9copy.jpg'),
(23, 'Рядом', '', 'Команда рядом', '', 'img/posts/5c3665c1cf1bf.jpg', 'img/posts/5c3665c1cf1c4copy.jpg'),
(25, 'Название', '', 'Обычный текст <br><br>\r\n<b> жирный текст </b>\r\n</p><h3> Заголовок </h3><p class=\'lead\'>\r\nПункт 1 <br>\r\nПункт <br>', '', 'img/posts/5c366b0b4c5a7.jpg', 'img/posts/5c366b0b4c5b0copy.jpg'),
(26, 'Тест', 'Test', 'Описание', 'Opisanee', 'img/posts/5c7ff10065ce5.jpg', 'img/posts/5c7ff10065cebcopy.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts_paw`
--
ALTER TABLE `posts_paw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts_paw`
--
ALTER TABLE `posts_paw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
