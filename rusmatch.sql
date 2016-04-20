-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Апр 08 2016 г., 19:07
-- Версия сервера: 5.5.42
-- Версия PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `konstantinkz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `big_event`
--

CREATE TABLE `big_event` (
  `id` int(20) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `chpu` varchar(255) NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `bg` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `source` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `big_event`
--

INSERT INTO `big_event` (`id`, `title`, `chpu`, `subtitle`, `text`, `bg`, `date`, `source`, `article`) VALUES
(1, 'Битва тура', 'krasnodar_vs_lokomotiv', '«Краснодар» — «Локомотив»', 'На данный момент между командами в таблице всего одно очко и в случае победы «Краснодар» обгонит конкурента и войдет в тройку лидеров. Сможет ли команда Олега Кононова сделать такой решительный шаг?', 'krasnodar_vs_lokomotiv.jpeg', '2016-03-20 15:02:29', 'sportbox.ru', '20 марта 2016 года на стадионе «Кубань» ФК «Краснодар» примет московский «Локомотив» в поединке 21-го тура РФПЛ. Начало матча в 19:30 мск, а рассудит его Владислав Безбородов из Санкт-Петербурга.\r\n\r\nМатч Краснодар — Локомотив чемпионата России 2015-2016 состоится 20 марта, начало в 19:30 (МСК). В центральном матче 21 тура чемпионата российской Премьер-лиги сыграют Краснодар и Локомотив, об этом информирует rsute.ru. Перед этой игрой краснодарская команда, набрав 34 очка, делит четвертое место с Тереком и Зенитом. Она всего на один балл отстает от идущего третьим Локомотива, а тот в свою очередь на шесть очков отстает от тандема лидеров — Ростова и ЦСКА. В их очном поединке Быки фавориты. После зимней паузы они пока не проигрывали и, более того, не пропустили ни одного гола. Подопечные Олега Кононова, сыграв вничью 0:0 с Зенитом, на прошлой неделе вдесятером обыграли на выезде Мордовию 1:0. Таким образом, беспроигрышная серия Краснодара достигла четырех матчей, три из которых были выиграны. Кроме того, он не проиграл ни одного из девяти предыдущих матчей на домашнем стадионе и выиграл пять из семи последних поединков на стадионе Кубань.');

-- --------------------------------------------------------

--
-- Структура таблицы `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0a0eed40c0ec5acdcf9192dc586bb6690d887981', '::1', 1459398829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435393339383631343b736974655f6c616e677c733a373a227275737369616e223b),
('3ddd111f647a7534a317c265a43eee47acd85d97', '::1', 1459399240, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435393339393234303b),
('676b6d6c167f7ead07aa80727f411616f9e5c3e1', '::1', 1459400177, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435393430303035323b736974655f6c616e677c733a373a227275737369616e223b),
('95f1115a853ea24be26747ce67ff3ba27d7c0598', '::1', 1459399110, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435393339393039333b736974655f6c616e677c733a373a227275737369616e223b),
('b0860a74a3e23638cecdba61f7dfbc76d6d1b3a8', '::1', 1459398520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435393339383237343b736974655f6c616e677c733a373a227275737369616e223b),
('dfc4cee660cb7b4823f629dfd16038125f2d7363', '::1', 1460133758, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436303133333735383b),
('f5fc8da36866850fe65929187af7f1c7d389a766', '::1', 1459601095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435393630313039333b);

-- --------------------------------------------------------

--
-- Структура таблицы `facts`
--

CREATE TABLE `facts` (
  `id` int(20) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `url_img_one` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url_img_two` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `facts`
--

INSERT INTO `facts` (`id`, `title`, `content`, `url_img_one`, `url_img_two`) VALUES
(1, 'Рука бога', '<p>Матч состоялся 22 июня 1986 года на стадионе «Ацтека» в Мехико. «Гол столетия» был забит после прорыва Марадоны в штрафную английской команды, в ходе которого он обыграл шесть игроков, включая вратаря. За три минуты до этого Марадона забил рукой гол, получивший название «рука Бога».</p>', 'ruka_boga_maradonna.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `forecasts`
--

CREATE TABLE `forecasts` (
  `id` int(11) NOT NULL,
  `teams` varchar(255) CHARACTER SET utf8 NOT NULL,
  `bg` varchar(255) CHARACTER SET utf8 NOT NULL,
  `logo_first` varchar(255) CHARACTER SET utf8 NOT NULL,
  `logo_second` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `best_case` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `forecasts`
--

INSERT INTO `forecasts` (`id`, `teams`, `bg`, `logo_first`, `logo_second`, `content`, `best_case`) VALUES
(1, 'Краснодар - Локомотив', 'krasnodar_lokomotiv.jpg', 'krasnodar.png', 'lokomotiv.png', 'Эксперт Евгений Ловчев оценивает шансы гостей на победу как иллюзорные. В разгром москвичей я никак не верю: всё же «Локомотив» – в достаточной степени опытная, квалифицированная и обученная команда, чтобы «держать удар», не разваливаясь. Выиграть она в Краснодаре не выиграет, а вот за ничейку поборется изо всех сил.  Разрыв между командами всего 2 очка и оба сегодняшних соперника, при победе в этом матче, могут стать третьими в турнирной таблице. ', 'Победа Краснодара и ТМ 2.5'),
(2, 'Амкар - Ростов', 'amkar_vs_rostov.jpg', 'amkar.png', 'rostov.png', 'После победы Ростова над ЦСКА, в СМИ сразу появились информация о требовании признать клуб банкротом из-за долгов в размере 60 млн. руб. И это при многочисленных финансовых трудностях команды. На сегодня в РПЛ двоевластие, но соперники не далеко. На расстоянии в 2 победы находятся 4 команды. Амкар не относится к претендентам на еврокубки и в оставшихся 10 турах пермяки постараются сохранить отрыв от зоны выживания. На сегодня отрыв составляет 5 очков.', 'Тотал матча Меньше 3'),
(3, 'ЦСКА - Кубань', 'cska_vs_kuban.jpg', 'cska.png', 'kuban.png', '«Кубань», по осени имевшая славу одной из самых развеселых команд, в Химках, скорее всего, будет играть осторожно, ярко выраженным вторым номером. Велика вероятность, что встреча будет иметь вязкий тягучий характер. Прибавьте к этому еще и засыпанное песком мягкое поле «Арены-Химки».\r\n \r\nИз всего сказанного выше я делаю вывод, что наиболее вероятен в этом матче низ. Оценивается он неплохо. 1,85 за тотал меньше 2,5. По-моему, вполне рабочий вариант.', 'Тотал меньше 2,5'),
(4, 'Зенит - ЦСКА', 'zenit_vs_cska.jpg', 'zenit.png', 'cska.png', '«Армейцы» лидируют в таблице российской лиги. Несмотря на провальную концовку и поражение от ближайшего соперника после отпуска, красно-синие сохранили первую строчку за собой. На наш взгляд это будет очень интересный матч, как и все предыдущие их очные встречи, ведь встречаются одни из лучших команд страны. Мы считаем, что атакующий потенциал у коллективов велик и поэтому голы обязательно будут. Скорее всего, мяч побывает в сетках обоих ворот.', 'Победа ЦСКА и ТМ 4,5');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 NOT NULL,
  `meta_k` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_d` varchar(255) CHARACTER SET utf8 NOT NULL,
  `chpu` varchar(128) CHARACTER SET utf8 NOT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `small_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subtitle` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rate` int(20) NOT NULL,
  `source` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `meta_k`, `meta_d`, `chpu`, `img_url`, `text`, `small_description`, `date`, `subtitle`, `rate`, `source`) VALUES
(1, 'Бывший капитан сборной России в команде-лидере Чемпионата Казахстана', 'Трансферы, сборная России, Кайрат', 'Российский полузащитник Андрей Аршавин рано утром прибыл в Алматы для согласования и подписания контракта с ФК Кайрат', 'capitan_of_russia_in_kazakhstan_championat', 'arshavin_v_kairate.jpg', '<p>Российский полузащитник Андрей Аршавин рано утром прибыл в Алматы для согласования и подписания контракта с ФК Кайрат</p>\r\n<p>Раннее сообщалось, что в игроке заинтересован лично новый тренер ФК Кайрат Александр Бородюк, с которым был знаком по играм за сборную России. Бородюк являлся старшим помощником Гуус Хидиннга и Дика Адвоката, в тот момент когда Аршавин удивлял  своими навыками в сборной, а в последствии стал капитаном.</p>\r\n<p>Контракт будет рассчитан на один год, суммы контракта не разглашаются. Полузащитник уже провел 2 тренировки вместе с игроками клуба. Также стоит отметить, что переход может отложиться на срок до 3 апреля, до даты, когда трансферное окно в Казахстане закрывается.</p>', 'Российский полузащитник Андрей Аршавин рано утром прибыл в Алматы для согласования и подписания контракта с ФК Кайрат', '2016-03-21 16:54:40', 'Трансферы', 24, 'sportbox.ru'),
(2, 'Гаттузо может стать главным тренером сборной Казахстана', 'Гаттузо, сборная Казахстана, тренер', 'Экс-игрок сборной Италии Дженнаро Гаттузо является одним из претендентов на пост главного тренера сборной Казахстана', 'new_coach_kazakhstan', 'gattuso_v_sbornoi_rossii.jpg', '<p>Экс-игрок сборной Италии Дженнаро Гаттузо является одним из претендентов на пост главного тренера сборной Казахстана.\r\n</p><p>\r\nПомимо Гаттузо на вакантную должность претендует Владимир Вайсс. Ранее командой руководил Юрий Красножан, с которым не смогли договориться о продлении соглашения.\r\n</p><p>\r\nОтметим, что у Гаттузо на данный момент существует действующий договор с «Пизой», до лета 2016 года. Что касается Вайсса, то словак свободен</p>', 'Экс-игрок сборной Италии Дженнаро Гаттузо является одним из претендентов на пост главного тренера сборной Казахстана', '2016-03-20 14:11:51', 'Трансферы', 2, 'sportbox.ru'),
(3, '«Ростов» подписал голкипера сборной Казахстана', 'Покатилов, Ростов, трансферы', 'Голкипер сборной Казахстана и «Актобе» Станислав Покатилов пополнил состав «Ростова»', 'rostov_goalkeeper_kazakhstan', 'pokatilov_v_rostove.jpg', '<p>Голкипер сборной Казахстана и «Актобе» Станислав Покатилов пополнил состав «Ростова».\r\n</p><p>\r\nО сроках соглашения с 23-летним воспитанником клуба «Акжайык» не сообщается. Также Покатилов успел поиграть в «Шахтере» из Караганды.\r\n</p><p>\r\nНа его счету семь матчей за национальную команду Казахстана.</p>', 'Голкипер сборной Казахстана и «Актобе» Станислав Покатилов пополнил состав «Ростова».\r\n', '2016-03-20 14:11:51', 'Трансферы', 1, 'sportbox.ru'),
(4, 'Президент РФС сможет занимать пост не более 12 лет', '', 'Конференция РФС в пятницу должна утвердить поправки в устав организации, где в частности рекомендуется ограничить пребывание президента союза сроком в 12 лет последовательно или суммарно', 'president_rfs', 'president_rfc.jpg', '<p>\r\nКонференция РФС в пятницу должна утвердить поправки в устав организации, где в частности рекомендуется ограничить пребывание президента союза сроком в 12 лет последовательно или суммарно.\r\n</p><p>\r\nКроме того, как и было сообщено ранее, будет изменен и численный состав Исполнительного комитета с нынешних 33-х членов до 10. В него войдут представители всех трех лиг нашего футбола (РФПЛ, ФНЛ, ПФЛ), а также руководитель лиги мини-футбола.\r\n</p><p>\r\nТакже делегаты конференции проголосовали за объединение двух должностей — генерального директора и генерального секретаря. По словам заместителя председателя юридического комитета РФС Дениса Рогачева, это мировая практика, при которой в других национальных футбольных федерациях имеется один человек, объединяющий две должности.\r\n</p><p>\r\nОтметим, что выборы президента РФС, а также исполкома, пройдут этой осенью.\r\n</p><p>\r\nСогласно обновленному уставу РФС, бюро исполкома будет сокращено с девяти до пяти человек (президент, первый вице-президент и три вице-президента). Бюро будет вправе решать немедленные и срочные вопросы между заседаниями исполкома.\r\n</p>', 'Конференция РФС в пятницу должна утвердить поправки в устав организации, где в частности рекомендуется ограничить пребывание президента союза сроком в 12 лет последовательно или суммарно.', '2016-03-22 10:45:52', 'Футбольный союз', 5, 'sportbox.ru'),
(6, 'Пеллегрини пока не устраивает предложение «Зенита»', 'Зенит, Пеллегрини, новый тренер', 'Питерский «Зенит» предложил главному тренеру «Манчестер Сити» Мануэлю Пеллегрини двухлетний контракт.', 'pellegrini_v_zenite', 'pellegrini_ne_hochet_v_zenit.jpg', '<p>Питерский «Зенит» предложил главному тренеру «Манчестер Сити» Мануэлю Пеллегрини двухлетний контракт.\r\n</p><p>\r\nЧилийский специалист, который покинет Англию летом, является главным кандидатом на пост наставника сине-бело-голубых. Сине-бело-голубые предложили Пеллегрини двухлетний контракт с зарплатой 3,5 миллиона евро в год, но тренер хочет заключить с клубом более долгосрочное соглашение.\r\n</p><p>\r\n«Зенит» опережает «Валенсию» и один итальянский клуб в борьбе за приглашение 62-летнего чилийского специалиста.\r\n</p><p>\r\nНапомним, нынешний главный тренер «Зенита» Андре Виллаш-Боаш заявил, что по окончании сезона покинет Санкт-Петербург.\r\n</p>', 'Питерский «Зенит» предложил главному тренеру «Манчестер Сити» Мануэлю Пеллегрини двухлетний контракт.', '2016-03-22 08:19:14', 'Трансферы', 7, 'sportbox.ru'),
(7, 'Муса вернул ЦСКА на вершину', 'ЦСКА, Муса, первое место, РФПЛ', 'Муса вернул ЦСКА на вершину РФПЛ', 'musa_vernyl_cska_na_pervoe_mesto', 'cska_musa_vernyl_na_pervoe_mesto.jpg', '<p>ЦСКА в матче 21-го тура чемпионата России одержал непростую победу над «Кубанью», что позволило армейцам вернуться на первое место в турнирной таблице.</p>\r\n<p>\r\nОба мяча в каждом из таймов записал на свой счет Ахмед Муса, доведя количество своих голов за армейцев до 50.</p>\r\n\r\n<p>Таким образом, команда Леонида Слуцкого на два очка оторвалась от «Ростова», который на выезде в Перми сыграл вничью с «Амкаром». Краснодарцы, в свою очередь, остались на 13-й строчке.</p>', 'ЦСКА в матче 21-го тура чемпионата России одержал непростую победу над «Кубанью», что позволило армейцам вернуться на первое место в турнирной таблице', '2016-03-31 04:30:44', 'Тур 21', 27, 'sportbox.ru'),
(8, '«Спартак» разгромил «Анжи» в Каспийске', 'Спартак, Анжи, разгром. РФПЛ', '«Спартак» разгромил «Анжи» в Каспийске', 'spartak_razgromil_anji', 'spartak_razgromil_anji.jpg', '<p>«Спартак» в матче 21-го тура чемпионата России на выезде одержал победу над «Анжи». Голами в составе москвичей отметились Зе Луиш, оформивший дубль, Денис Глушаков и Куинси Промес.</p>\r\n<p>Благодаря успеху красно-белые временно вышли на третье место в турнирной таблице, тогда как махачкалинцы остались в зоне вылета.\r\n</p>', '«Спартак» в матче 21-го тура чемпионата России на выезде одержал победу над «Анжи». Голами в составе москвичей отметились Зе Луиш, оформивший дубль, Денис Глушаков и Куинси Промес', '2016-03-31 04:54:56', 'Тур 21', 67, 'sportbox.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `big_event`
--
ALTER TABLE `big_event`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Индексы таблицы `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forecasts`
--
ALTER TABLE `forecasts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`chpu`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `big_event`
--
ALTER TABLE `big_event`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `forecasts`
--
ALTER TABLE `forecasts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
