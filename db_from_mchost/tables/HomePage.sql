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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `HomePage`
--
ALTER TABLE `HomePage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `HomePage`
--
ALTER TABLE `HomePage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
