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
-- Структура таблицы `gallery_paw`
--

CREATE TABLE `gallery_paw` (
  `id` int(11) NOT NULL,
  `img_full` text NOT NULL,
  `img_min` text NOT NULL,
  `id_albom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery_paw`
--

INSERT INTO `gallery_paw` (`id`, `img_full`, `img_min`, `id_albom`) VALUES
(5, 'img/gallery/5c45bdd18da02.jpg', 'img/gallery/5c45bdd18da0ccopy.jpg', 1),
(7, 'img/gallery/5c45bdd195bc5.jpg', 'img/gallery/5c45bdd195bd1copy.jpg', 1),
(8, 'img/gallery/5c45bdd1c3965.jpg', 'img/gallery/5c45bdd1c3970copy.jpg', 1),
(9, 'img/gallery/5c45bdd208d8c.jpg', 'img/gallery/5c45bdd208d97copy.jpg', 1),
(42, 'img/gallery/5f53cf4e03352.jpg', 'img/gallery/5f53cf4e03393copy.jpg', 5),
(43, 'img/gallery/5f53d04da2a5d.jpg', 'img/gallery/5f53d04da2a9ccopy.jpg', 5),
(44, 'img/gallery/5f53d04dd21d9.jpg', 'img/gallery/5f53d04dd221ccopy.jpg', 5),
(45, 'img/gallery/5f53d04e0884b.jpg', 'img/gallery/5f53d04e0888ecopy.jpg', 5),
(47, 'img/gallery/5f53d07ecf219.jpg', 'img/gallery/5f53d07ecf259copy.jpg', 5),
(48, 'img/gallery/5f53d10af14b7.jpg', 'img/gallery/5f53d10af14fecopy.jpg', 6),
(49, 'img/gallery/5f53d10b47e9d.jpg', 'img/gallery/5f53d10b47ee2copy.jpg', 6),
(50, 'img/gallery/5f53d10b482f4.jpg', 'img/gallery/5f53d10b48333copy.jpg', 6),
(51, 'img/gallery/5f53d10b48672.jpg', 'img/gallery/5f53d10b486b1copy.jpg', 6),
(52, 'img/gallery/5f53d12275bcc.jpg', 'img/gallery/5f53d12275c0ecopy.jpg', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery_paw`
--
ALTER TABLE `gallery_paw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery_paw`
--
ALTER TABLE `gallery_paw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
