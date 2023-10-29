-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 15 2020 г., 18:12
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
-- Структура таблицы `Typeschool`
--

CREATE TABLE `Typeschool` (
  `id` int(11) NOT NULL,
  `type_ru` varchar(255) NOT NULL,
  `type_ee` varchar(255) NOT NULL,
  `type_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Typeschool`
--

INSERT INTO `Typeschool` (`id`, `type_ru`, `type_ee`, `type_en`) VALUES
(1, 'Школа щенка', 'Kutsikakool', ''),
(2, 'Школа юного хендлера', 'NOOR KÄSITLEJA KOOL', ''),
(3, 'Фитнес для собак', 'Fitness koertele', ''),
(4, 'Танцы с собаками', 'Koertega tantsimine', ''),
(5, 'Спортивная дрессировка собак', 'Spordikoerte koolitus', ''),
(6, 'Коррекция поведения собаки', 'Koera käitumise korrigeerimine', ''),
(7, 'Школа груминга', 'Hoolitsuskool', ''),
(8, 'Индивидуальные тренировки', 'Individuaalne koolitus', ''),
(9, 'Хендлинг', 'Käitlemine', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Typeschool`
--
ALTER TABLE `Typeschool`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Typeschool`
--
ALTER TABLE `Typeschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
