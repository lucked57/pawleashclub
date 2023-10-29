-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 15 2020 г., 18:10
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
-- Структура таблицы `Alboms`
--

CREATE TABLE `Alboms` (
  `id` int(11) NOT NULL,
  `albom_ru` varchar(255) NOT NULL,
  `albom_ee` varchar(255) NOT NULL,
  `albom_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Alboms`
--

INSERT INTO `Alboms` (`id`, `albom_ru`, `albom_ee`, `albom_en`) VALUES
(1, 'Школа щенка', 'puppy school ee', 'puppy school'),
(5, 'Юный хендлер', 'young ee handler', 'young handler'),
(6, 'Фото 2020', 'Photo 2020', 'Photo 2020');

-- --------------------------------------------------------

--
-- Структура таблицы `Calender`
--

CREATE TABLE `Calender` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type_ru` varchar(255) NOT NULL,
  `type_ee` varchar(255) NOT NULL,
  `type_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Calender`
--

INSERT INTO `Calender` (`id`, `date`, `status`, `type_ru`, `type_ee`, `type_en`) VALUES
(52, '2020-09-14 14:00:00', 'Свободно', 'Индивидуальные тренировки', '', ''),
(53, '2020-09-14 15:00:00', 'Свободно', 'Индивидуальные тренировки', '', ''),
(54, '2020-09-14 16:00:00', 'Свободно', 'Индивидуальные тренировки', '', ''),
(56, '2020-09-14 17:00:00', 'Свободно', 'Хендлинг', '', ''),
(57, '2020-09-14 18:00:00', 'Свободно', 'Школа щенка', '', ''),
(58, '2020-09-14 19:00:00', 'Свободно', 'Коррекция поведения собаки', '', ''),
(59, '2020-09-15 16:00:00', 'Свободно', 'Хендлинг', '', ''),
(60, '2020-09-15 17:00:00', 'Свободно', 'Хендлинг', '', ''),
(61, '2020-09-15 18:00:00', 'Свободно', 'Школа юного хендлера', '', ''),
(62, '2020-09-15 19:00:00', 'Свободно', 'Индивидуальные тренировки', '', ''),
(63, '2020-09-15 20:00:00', 'Свободно', 'Индивидуальные тренировки', '', ''),
(64, '2020-09-16 18:00:00', 'Занято', 'Индивидуальные тренировки', '', ''),
(65, '2020-09-16 19:00:00', 'Занято', 'Индивидуальные тренировки', '', ''),
(71, '2020-09-17 16:00:00', 'Свободно', 'Индивидуальные тренировки', '', ''),
(72, '2020-09-17 17:00:00', 'Свободно', 'Индивидуальные тренировки', '', ''),
(73, '2020-09-17 18:00:00', 'Свободно', 'Школа юного хендлера', '', ''),
(74, '2020-09-18 18:00:00', 'Свободно', 'Коррекция поведения собаки', '', ''),
(75, '2020-09-18 19:00:00', 'Свободно', 'Коррекция поведения собаки', '', ''),
(81, '2020-09-17 19:00:00', 'Занято', 'Индивидуальные тренировки', '', ''),
(82, '2020-09-17 20:00:00', 'Занято', 'Индивидуальные тренировки', '', ''),
(83, '2020-09-14 19:00:00', 'Свободно', 'Школа щенка', '', ''),
(84, '2020-09-14 20:00:00', 'Свободно', 'Школа щенка', '', '');

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

-- --------------------------------------------------------

--
-- Структура таблицы `HomePage`
--

CREATE TABLE `HomePage` (
  `id` int(11) NOT NULL,
  `text_1_ru` text NOT NULL,
  `text_1_ee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `HomePage`
--

INSERT INTO `HomePage` (`id`, `text_1_ru`, `text_1_ee`) VALUES
(1, ' <h2 class=\"featurette-heading text-warning\">Спортивно-Дрессировочный Центр  <span class=\"text-muted\">„PawLeash Club“</span></h2>\r\n                    <p class=\"lead\">\r\n                  В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!\r\n                    <br>\r\n                    Просторный зал, хорошая вентиляция и яркое освещение – все, что нужно для качественной тренировки. Зал общей площадью 230 м2 оснащен зеркальными стенами, чтобы максимально проработать все возможные ракурсы в движении и при этом не дезориентировать собаку в пространстве. Зал также оборудован специальным амортизирующим резиновым напольным покрытием, которое позволяет снизить нагрузку на суставы и повысить выносливость собаки, тем самым увеличив продолжительность тренировки без вреда для здоровья. Благодаря высокотехнологичному покрытию, которое легко моется и не накапливает в себе пыль, нам удается поддерживать идеальную чистоту в зале.\r\n                    <br>\r\n                    В нашем Центре Вас ждут: хендлинг-зал, столы для груминга, профессионально оборудованная фитнес зона с необходимым оборудованием, отдельное помещение груминг-салона, зал для семинаров и мастер-классов, зона отдыха, огороженная площадка для выгула собак, просторная парковка и многое другое! К Вашим услугам персональные тренеры, квалифицированные инструкторы, профессиональные грумеры.\r\n                     </p>\r\n/*****/\r\n <h2 class=\"featurette-heading\">PawLeash Club предлагает:</h2>\r\n                         <ul style=\"list-style: disc;\" class=\"ml-5 lead\">\r\n                            <li>Школа „Smart Paw“ для щенков разных пород и возрастов</li>\r\n                            <li>Группа социализации</li>\r\n                            <li>Бытовая дрессировка (курс общего послушания) „Управляемая городская собака“ </li>\r\n                            <li>Коррекция проблемного поведения </li>\r\n                            <li>Занятия по выставочному хендлингу. Подготовка собак к выставкам и обучение владельцев показу своей собственной собаки в ринге (занятия проводятся как в группе, так и индивидуально)</li>\r\n                            <li>Услуги профессиональных хендлеров (выставочный тренинг щенков и взрослых собак для работы в рингах как с профессиональным хендлером, так и с владельцем)</li>\r\n                            <li>Школа юного хендлера</li>\r\n                            <li>Груминг собак (выставочный груминг, pet-груминг</li>\r\n                            <li>Передержка собак (а также передержка с основными элементами дрессировки)</li>\r\n                            <li>Фитнес для собак, направленный на физическое развитие собаки, и специальные упражнения для коррекции экстерьера</li>\r\n                            <li>Спортивная дрессировка собак (в том числе кинологический фристайл- танцы с собакой)</li>\r\n                        </ul>\r\n/*****/\r\n<h2 class=\"featurette-heading text-warning\">Преимущества нашего клуба:</h2>\r\n                  \r\n                     <ul style=\"list-style: disc;\" class=\"ml-5 lead\">\r\n                            <li>Индивидуальный подход и деликатное обращение</li>\r\n                            <li>Настрой и адаптация собаки к выставке или соревнованиям</li>\r\n                            <li>Планирование шоу карьеры с учетом качества собаки, Ваших пожеланий и возможностей</li>\r\n                            <li>Полный комплекс: От груминга до занятий фитнесом под наблюдением тренера клуба «PawLeash Club»</li>\r\n                            <li>Услуга догситтера</li>\r\n                            <li>Организация проведения семинаров и мастер классов с участием лучших специалистов в кинологии</li>\r\n                            <li>Предоставление в аренду профессионального хендлинг-зала для Ваших целей</li>\r\n                            <li>Организация выездных туров по Эстонии и за рубеж, а также сопровождение и показ Вашей собаки</li>\r\n                        </ul>\r\n\r\n/*****/\r\nВ нашем зале есть возможность полной имитации выставочного ринга, с воссозданием шумовых эффектов, гула или резких звуков, или же звуков расслабления, позволяющих владельцу и собаке сконцентрироваться на отработке тех или иных навыков. Зал работает согласно расписанию занятий, а также по предварительной договоренности. К групповым занятиям в зале допускается не более 6-8 собак, поэтому, пожалуйста, записывайтесь на занятия заранее по адресу электронной почты pawleashclub@gmail.com или по телефонам 56869123 (рус, англ), 51907212 (эст, рус, англ) Предварительная запись необходима для того, чтобы вашей собаке (по размеру или породе) было удобно заниматься в зале и внимания тренера хватало каждому в отдельности. Обращаем Ваше внимание, что в случае отмены занятия необходимо предупредить администрацию или тренера не позднее чем за 24 часа до начала занятия. В противном случае занятие будет считаться использованным!', '<h2 class=\"featurette-heading text-warning\">Spordikoolituskeskus  <span class=\"text-muted\">„PawLeash Club“</span></h2>\r\n                    <p class=\"lead\">\r\n                  PawLeashi klubikeskuses satub teie lemmikloom spetsialistide kätte, mille tulemus on märgatav vaid mõne tunni pärast. Meil on hea meel sõpradega oma koeraga ja õpetada talle midagi uut!\r\n                    <br>\r\n                    Avar tuba, hea ventilatsioon ja särav valgustus - kõik, mida vajate kvaliteetseks koolituseks. 230 m2 kogupindalaga saal on varustatud peegli seintega, et töötada maksimaalselt välja kõik võimalikud liikumisnurgad ja samal ajal mitte desorienteerida koera ruumis. Saalis on ka spetsiaalne löögikindel kummist põrandakate, mis võimaldab vähendada liigeste koormust ja suurendada koera vastupidavust, suurendades sellega treeningu kestust ilma tervist kahjustamata. Tänu kõrgtehnoloogilisele pinnale, mida on kerge puhastada ja mis ei kogune tolmu, suudame hallis täielikult säilitada puhtuse.\r\n                    <br>\r\n                    Meie keskuses ootate: käsiruum, peibutamislauad, professionaalselt varustatud spordisaal koos vajaliku varustusega, eraldi salongi salongi ruum, seminarisaalide ja töötubade saal, puhkeala, tarastatud ala koera jalutamiseks, suur parkimine ja palju muud ! Teie teenistuses on isiklikud treenerid, kvalifitseeritud instruktorid, professionaalsed hooldajad.\r\n                     </p>\r\n/*****/\r\n <h2 class=\"featurette-heading\">PawLeash Club pakub:</h2>\r\n                         <ul style=\"list-style: disc;\" class=\"ml-5 lead\">\r\n                            <li>Kool \"Smart Paw\" erinevate tõugude ja vanuses kutsikate jaoks</li>\r\n                            <li> Sotsialiseerimisrühm </ li>\r\n                            <li> Kodused treeningud (üldine kuulekuse kursus) \"Juhitav linnakook\" </ li>\r\n                            <li> Probleemi käitumise parandamine </ li>\r\n                            <li> Näituse käitlemise klassid. Koerte ettevalmistamine näituste ja koolituste omanike jaoks, et näidata oma koera ringis (klassid peetakse nii grupis kui ka individuaalselt) </ li>\r\n                            <li> Professionaalsete käitlejate teenused (näitusekoolitus kutsikate ja täiskasvanud koerte jaoks, kes töötavad nii professionaalse käitleja kui ka omanikuga rõngastena) </ li>\r\n                            <li> Junior Handleri kool </ li>\r\n                            <li> Koerade hooldamine (näitusel hoolitsemine, lemmikloomade hooldus </ li>\r\n                            <li> Koerte ülemäärane kokkupuude (ja ka ülemäärane kokkupuude koolituse põhielementidega) </ li>\r\n                            <li> Koerte sobivus koera füüsiliseks arenguks ja spetsiaalsed harjutused välisilme parandamiseks </ li>\r\n                            <li> Koerte spordialane väljaõpe (sh koerte freestyle-tantsimine) </ li>\r\n                        </ul>\r\n/*****/\r\n <h2 class=\"featurette-heading text-warning\">Meie klubi eelised:</h2>\r\n                  \r\n                     <ul style=\"list-style: disc;\" class=\"ml-5 lead\">\r\n                            <li>Individuaalne lähenemine ja delikaatne käitlemine</li>\r\n                            <li>Koera meeleolu ja kohanemine näituse või võistlusega</li>\r\n                            <li>Näituskarjääri planeerimine, võttes arvesse koera kvaliteeti, teie soove ja võimalusi</li>\r\n                            <li>Täielik valik: alates peibutamisest treeningklassidesse PawLeash Club treeneri järelevalve all</li>\r\n                            <li>Koerte teenus</li>\r\n                            <li>Seminaride ja meistriklasside korraldamine parimate ekspertide osalusel kineetikas</li>\r\n                            <li>Professionaalse käsitsemisruumi rentimine teie jaoks</li>\r\n                            <li>Välisreiside korraldamine Eestis ja välismaal, samuti teie koera näitamine ja näitamine</li>\r\n                        </ul>\r\n/*****/\r\nMeie saalis on võimalus näidata ringhäälingu täielikku jäljendamist koos heliefektide, hum või heli või lõõgastava heli taastamisega, võimaldades omanikul ja koeral keskenduda teatud oskuste väljatöötamisele. Saal töötab vastavalt klasside ajakavale, samuti eelnevalt kokkuleppele. Saalis ei tohi grupiklassidesse lubada rohkem kui 6-8 koera, seega palume eelnevalt registreeruda klassidesse e-posti aadressil pawleashclub@gmail.com või helistades 56869123 (ru, en), 51907212 (ee, ru, en) Eelregistreerimine on vajalik teie koera jaoks ) oli mugav treenida jõusaalis ja treeneri tähelepanu oli igaühele piisav. Pange tähele, et klassi tühistamise korral on vaja teavitada administratsiooni või treenerit hiljemalt 24 tundi enne klassi algust. Vastasel juhul kasutatakse õppetundi!');

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

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `errors` int(11) NOT NULL,
  `code_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `errors`, `code_email`) VALUES
(1, 'ip557799@gmail.com', '$2y$10$Gssbmb/o831Zw6bNlmZgFe7Nt1m.s8NCAfKWPtvU3ttH2zV1M2OFS', 'tkKL24Fa', 0, ''),
(2, '12021970e@gmail.com', '$2y$10$3r2xketQpD/Inm0XWm/QTeBkcKPuEkQlk0PlOKjAvV8.fIBXAnSu2', 'cookiecode85867', 0, '');

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
-- Индексы таблицы `Alboms`
--
ALTER TABLE `Alboms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Calender`
--
ALTER TABLE `Calender`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery_paw`
--
ALTER TABLE `gallery_paw`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `HomePage`
--
ALTER TABLE `HomePage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts_paw`
--
ALTER TABLE `posts_paw`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Typeschool`
--
ALTER TABLE `Typeschool`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Video`
--
ALTER TABLE `Video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Alboms`
--
ALTER TABLE `Alboms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `Calender`
--
ALTER TABLE `Calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `gallery_paw`
--
ALTER TABLE `gallery_paw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `HomePage`
--
ALTER TABLE `HomePage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `posts_paw`
--
ALTER TABLE `posts_paw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `Typeschool`
--
ALTER TABLE `Typeschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Video`
--
ALTER TABLE `Video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
