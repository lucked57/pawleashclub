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
-- Структура таблицы `Video`
--

CREATE TABLE `Video` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ee` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `text_ee` text NOT NULL,
  `video_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Video`
--

INSERT INTO `Video` (`id`, `title_ru`, `title_en`, `title_ee`, `text_ru`, `text_en`, `text_ee`, `video_link`) VALUES
(1, 'World Dog Show 2016', 'World Dog Show 2016', 'World Dog Show 2016', 'Победитель (BEST IN SHOW) Всемирной выставки WORLD DOG SHOW 2016 ФАЙН ЛЕДИ с ЗОЛОТОГО ГРАДА! Хендлер и дрессировщик: Екатерина Зайцева. Порода: русский черный терьер.', 'Winner (BEST IN SHOW) of the World Exhibition WORLD DOG SHOW 2016 FINE LADY s GOLDEN GRADA! Handler and trainer: Ekaterina Zaitseva. Breed: Russian black terrier.', 'Maailmanäituse WORLD DOG SHOW 2016 FINE LADY s GOLDEN GRADA võitja (BEST IN SHOW)! Händler ja treener: Ekaterina Zaitseva. Tõug: vene must terjer.', 'https://www.youtube.com/embed/qQ3HvU4vHXA'),
(4, 'Tallinn winner 2020', 'Tallinn winner 2020', 'Tallinn winner 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. Black russian terrier. Handler JELIZAVETA OSIPSUK.', 'Dog Show \"Tallinn Winner 2020\", Таллин. Black russian terrier. Handler JELIZAVETA OSIPSUK.', 'Dog Show \"Tallinn Winner 2020\", Таллин. Black russian terrier. Handler JELIZAVETA OSIPSUK.', 'https://www.youtube.com/embed/NUQSUUjVjmE'),
(5, 'Tallinn winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. Jack russell terrier. Handler JELIZAVETA OSIPSUK', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. Jack russell terrier. Handler JELIZAVETA OSIPSUK', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. Jack russell terrier. Handler JELIZAVETA OSIPSUK', 'https://www.youtube.com/embed/ge9esgqya0M'),
(6, 'Tallinn winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AMERICAN AKITA. Handler JELIZAVETA OSIPSUK.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AMERICAN AKITA. Handler JELIZAVETA OSIPSUK.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AMERICAN AKITA. Handler JELIZAVETA OSIPSUK.', 'https://www.youtube.com/embed/nceYZPzv-oU'),
(7, 'Tallinn winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AUSTRALIAN SHEPHERD DOG. Handler JELIZAVETA OSIPSUK.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AUSTRALIAN SHEPHERD DOG. Handler JELIZAVETA OSIPSUK.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AUSTRALIAN SHEPHERD DOG. Handler JELIZAVETA OSIPSUK.', 'https://www.youtube.com/embed/XCeRJqqB9zE'),
(8, 'Tallinn Winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AUSTRALIAN maxellende poodle. Owner, groomer and handler Anna Katsar.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AUSTRALIAN maxellende poodle. Owner, groomer and handler Anna Katsar.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. AUSTRALIAN maxellende poodle. Owner, groomer and handler Anna Katsar.', 'https://www.youtube.com/embed/g3KzFuBoChk'),
(9, 'Tallinn winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. scottish terrier. Handler Ekaterina Boiko.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. scottish terrier. Handler Ekaterina Boiko.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. scottish terrier. Handler Ekaterina Boiko.', 'https://www.youtube.com/embed/RiHkTktx4EM'),
(10, 'Tallinn winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. toller papillon. Handler Victoria Pavlenkova.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. toller papillon. Handler Victoria Pavlenkova.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. toller papillon. Handler Victoria Pavlenkova.', 'https://www.youtube.com/embed/6uSlkv0BHUY'),
(11, 'Tallinn Winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. cinderella papillon. Handler Veronica Bohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. cinderella papillon. Handler Veronica Bohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. cinderella papillon. Handler Veronica Bohina.', 'https://www.youtube.com/embed/XJ-dvV-ET5Y'),
(12, 'Tallinn Winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. SAULES DARZI WEIMARANER. Handler Veronica Dohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. SAULES DARZI WEIMARANER. Handler Veronica Dohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. SAULES DARZI WEIMARANER. Handler Veronica Dohina.', 'https://www.youtube.com/embed/jEB9TI9gLQE'),
(13, 'Tallinn Winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. BOSTON TERRIER. Handler Veronica Dohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. BOSTON TERRIER. Handler Veronica Dohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. BOSTON TERRIER. Handler Veronica Dohina.', 'https://www.youtube.com/embed/_p5w3xwvUgA'),
(14, 'Tallinn Winner 2020', 'Tallinn winner 2020', 'Tallinna Võitja 2020', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. russian black terrier. Handler Veronica Dohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. russian black terrier. Handler Veronica Dohina.', 'Международная выставка собак \"Tallinn Winner 2020\", Таллин. russian black terrier. Handler Veronica Dohina.', 'https://www.youtube.com/embed/YFi1Q6yRP9A');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Video`
--
ALTER TABLE `Video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Video`
--
ALTER TABLE `Video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
