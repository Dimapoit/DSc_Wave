-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 15 2020 г., 17:50
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wave-dsc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text_ua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `text_ua`, `text_ru`, `created_at`, `updated_at`) VALUES
(1, 'Найбільші та комфортні танцювальні зали у місті', 'Самые большие и комфортные танцевальные залы в городе', '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(2, 'Найпотужніша тренерська команда професіоналів - фанатів своєї справи', 'Мощнейшая тренерская команда профессионалов - фанатов своего дела', '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(3, 'Магазин та ательє спеціалізованого танцювального одягу', 'Магазин и ателье специализированной танцевальной одежды', '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(4, 'Індивідуальний підхід до розвитку Вас або Вашої дитини', 'Индивидуальный подход к развитию Вас или Вашего ребенка', '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(5, 'Фреш-бар, кафе', 'Фреш-бар, кафе', '2020-09-15 11:22:41', '2020-09-15 11:22:41');

-- --------------------------------------------------------

--
-- Структура таблицы `coaches`
--

CREATE TABLE `coaches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ua` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coaches`
--

INSERT INTO `coaches` (`id`, `path_image`, `name_ua`, `name_ru`, `description_ua`, `description_ru`, `link_fb`, `link_insta`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 'images/coaches/NazarShashkov.jpg', 'Назар Шашков', 'Назар Шашков', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'https://www.facebook.com/nazar.shashkov', '', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(2, 'images/coaches/AnnaShashaeva.jpg', 'Ганна Шашаєва', 'Анна Шашаева', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', '', 'https://www.instagram.com/a_shashaeva', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(3, 'images/coaches/GeorgiyLomakin.jpg', 'Георгій Ломакін', 'Георгий Ломакин', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'https://ru-ru.facebook.com/people/%D0%93%D0%B5%D0%BE%D1%80%D0%B3%D0%B8%D0%B9-%D0%9B%D0%BE%D0%BC%D0%B0%D0%BA%D0%B8%D0%BD/100023192010467', '', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(4, 'images/coaches/EkaterinaZaika.jpg', 'Катерина Заіка', 'Екатерина Заика', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', '', 'https://www.instagram.com/ket.dance_mrpl', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(5, 'images/coaches/IrinaPerchenko.jpg', 'Iрина Перченко', 'Ирина Перченко', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', '', 'https://www.instagram.com/v.l.s.v07', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(6, 'images/coaches/OlgaSmolina.jpg', 'Ольга Смолiна', 'Ольга Смолина', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', '', 'https://www.instagram.com/smolina_olga_', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `link_fb`, `link_insta`, `address_ua`, `address_ru`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/FeyeriaDanceSportClub/', 'https://www.instagram.com/mariupol_dancesport/', 'СК Іллічівець, східна трибуна, проспект Нахімова, 53, ТСЦ Wave Маріуполь', 'СК Ильичевец, восточная трибуна, проспект Нахимова, 53, ТСЦ Wave Мариуполь', '+380985674170', 'nazarshashkov@gmail.com', '2020-09-15 11:22:41', '2020-09-15 11:22:41');

-- --------------------------------------------------------

--
-- Структура таблицы `dancedirections`
--

CREATE TABLE `dancedirections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_short_ua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_short_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ua` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dancedirections`
--

INSERT INTO `dancedirections` (`id`, `path_image`, `title_ua`, `title_ru`, `text_short_ua`, `text_short_ru`, `text_ua`, `text_ru`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 'images/direction/ballroom.jpg', 'Спортивний танець', 'Спортивный танец', '', '', 'Спортивний танець - це одне з найвдаліших поєднань спорту та мистецтва у сучасному світі. Яскраві та емоційні дії спортсменів насичені духом змагань і турнірів. Світ спортивних бальних танців сьогодні надзвичайно широкий та багатогранний, він набуває популярності в усіх країнах світу. Спеціалізований танцювальний центр відкриває можливості для всіх, хто бажає стати часткою цього дивовижного поєднання музики та рухів.', 'Спортивный танец - это одно из самых удачных сочетаний спорта и искусства в современном мире. Яркие и эмоциональные действия спортсменов напитаны духом соревнований и турниров. Мир спортивных бальных танцев сегодня чрезвычайно широк и многогранен, он обретает популярность во всех странах мира. Специализированный танцевальный центр открывает возможности для всех желающих стать частью этого удивительного сочетания музыки и движений.', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(2, 'images/direction/babydance.jpg', 'BabyDance', 'BabyDance', '', '', 'Ваш малюк з перших років життя вражає своїми здібностями та почуттям ритму? У нашому танцювальному центрі є чудова можливість розкрити талант Вашої дитини, і з ранніх років почати навчання в розважально-ігровій формі. У групах ... 3-5 років під керівництвом нашого професійного педагога на Ваших дітей чекає цілий комплекс цікавих занять: розвиток координації і ритму, розтяжка, вивчення танцювальних елементів та ігрових танців.', 'Ваш малыш с первых лет жизни поражает своими способностями и чувством ритма? В нашем танцевальном центре есть чудесная возможность раскрыть талант Вашего ребенка, и с самых ранних лет начать обучение в развлекательно-игровой форме. В группах baby dance 3-5 лет, под руководством нашего профессионального педагога Ваших детей ожидает целый комплекс увлекательных занятий: развитие координации и ритма, растяжка, изучение танцевальных элементов и игровых танцев.', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(3, 'images/direction/cheer.jpg', 'Чирлiдинг', 'Чирлидинг', '', '', 'Чирлідинг - це сучасний спортивно-танцювальний напрямок. Чирлідинг поєднує в собі елементи хореографії, акробатики та гімнастики. Помпони та яскраві костюми перетворюють чир-виступи у грандіозне шоу. Це видовищний, незвичайний, стильний різновид танцювального спорту.', 'Чирлидинг - это современное спортивно-танцевальное направление. Чирлидинг сочетает в себе элементы хореографии, акробатики и гимнастики. Помпоны и яркие костюмы превращают чир-выступления в грандиозное шоу. Это зрелищный, необычный, стильный вид танцевального спорта.', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(4, 'images/direction/wedding.jpg', '\"Весiльний танець', 'Свадебный танец', '', '', 'Ваша головна подія в житті залишиться назавжди у Вашому серці та у спогадах Ваших шановних гостей. Наш танцювальний центр надає послугу постановки весільного танцю на Ваше свято. Досвідчений педагог за кілька занять поставить Вам танець Вашої мрії, з урахуванням Ваших побажань та стилістики Вашого заходу.', 'Ваше главное событие в жизни останется навсегда в Вашем сердце и в воспоминаниях Ваших дорогих гостей. Наш танцевальный центр предоставляет услугу постановки свадебного танца на Ваше торжество. Опытный педагог за несколько занятий поставит Вам танец Вашей мечты, с учетом Ваших пожеланий и стилистики Вашего мероприятия.', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(5, 'images/direction/pro-am.jpg', 'Pro-Am', 'Pro-Am', '', '', 'Уявімо: Ви доросла людина і вам хочеться танцювати. Тільки Ви не вмієте або вмієте не дуже добре. У Вас виникають питання: де шукати потрібного тренера, партнера? З чого почати навчання? І ось тут і розкриваються всі плюси Pro-Am: партнером шукати не потрібно, бо у його ролі виступає тренер; у парі з професіоналом навчання йде набагато швидше, ніж з партнером-любителем; Ви зможете здивувати своїх близьких і друзів яскравим і незвичайним хобі; тренер на заняттях буде займатися тільки з Вами, а індивідуальний підхід, як відомо, найефективніший в будь-якому навчанні.', 'Представим: Вы взрослый человек и вам хочется танцевать. Только Вы не умеете или умеете не очень хорошо. У Вас возникают вопросы: где искать подходящего тренера, партнера? С чего начать обучение? И вот тут-то раскрываются все плюсы Pro-Am: партнера искать не нужно, потому что в его роли выступает тренер; в паре с профессионалом обучение идет гораздо быстрее, чем с партнером-любителем; вы сможете удивить своих близких и друзей ярким и необычным хобби; тренер на занятиях будет заниматься только с Вами, а индивидуальный подход, как известно, самый эффективный в любом обучении.', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `path_image`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 'images/gallery/gallery_1.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(2, 'images/gallery/gallery_2.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(3, 'images/gallery/gallery_3.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(4, 'images/gallery/gallery_4.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(5, 'images/gallery/gallery_5.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(6, 'images/gallery/gallery_6.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(7, 'images/gallery/gallery_7.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(8, 'images/gallery/gallery_8.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(9, 'images/gallery/gallery_9.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(10, 'images/gallery/gallery_10.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(11, 'images/gallery/gallery_11.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(12, 'images/gallery/gallery_12.jpg', 1, '2020-09-15 11:22:41', '2020-09-14 21:00:00'),
(13, 'images/gallery/gallery_13.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(14, 'images/gallery/gallery_14.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(15, 'images/gallery/gallery_15.jpg', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41');

-- --------------------------------------------------------

--
-- Структура таблицы `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `logos`
--

INSERT INTO `logos` (`id`, `path_image`, `link_logo`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 'images/logo/audsf.png', 'https://audsf.com.ua/news/', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(2, 'images/logo/scu.png', 'https://scu.org.ua/', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(3, 'images/logo/noc.png', 'http://noc-ukr.org/', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(4, 'images/logo/mincult.png', 'https://mkip.gov.ua/ru/', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(5, 'images/logo/wdsf.png', 'https://www.worlddancesport.org/', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(6, 'images/logo/msport.png', 'https://www.facebook.com/msportukraine/', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2020_09_09_174651_create_sliders_table', 1),
(35, '2020_09_09_174739_create_logos_table', 1),
(36, '2020_09_09_174806_create_abouts_table', 1),
(37, '2020_09_09_174853_create_dancedirections_table', 1),
(38, '2020_09_09_174917_create_coaches_table', 1),
(39, '2020_09_09_174938_create_galleries_table', 1),
(40, '2020_09_09_175019_create_contacts_table', 1),
(41, '2020_09_15_135510_create_videos_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_big` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_small` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `path_image`, `title_big`, `title_small`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 'images/slider/wave_1.jpg', 'focus on the next wave', 'Be One Of Us', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(2, 'images/slider/wave_2.jpg', 'Challenge Yourself', 'Be One Of Us', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41'),
(3, 'images/slider/wave_3.jpg', 'Life\'s a wave, catch it...', 'Be One Of Us', 1, '2020-09-15 11:22:41', '2020-09-15 11:22:41');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `name`, `link_video`, `created_at`, `updated_at`) VALUES
(1, 'about', 'https://www.youtube.com/watch?v=oOeS5dvKns4', '2020-09-15 11:22:41', '2020-09-15 11:22:41');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dancedirections`
--
ALTER TABLE `dancedirections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `dancedirections`
--
ALTER TABLE `dancedirections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
