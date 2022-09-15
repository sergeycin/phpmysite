-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 15 2022 г., 10:57
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_post` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `one`
--

CREATE TABLE `one` (
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `one`
--

INSERT INTO `one` (`title`, `image`, `text`, `date`) VALUES
('themr', 'uploads/1663145422_mobileQuote.jpg', 'theme', '2022-09-14 11:50:22'),
('themr', 'uploads/1663145577_mobileQuote.jpg', 'theme', '2022-09-14 11:52:57'),
('themr', 'uploads/1663145793_mobileQuote.jpg', 'theme', '2022-09-14 11:56:33');

-- --------------------------------------------------------

--
-- Структура таблицы `statistics`
--

CREATE TABLE `statistics` (
  `page` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statistics`
--

INSERT INTO `statistics` (`page`, `ip`, `host`, `browser`, `date`) VALUES
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Blog', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('GuestBook', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('GuestBook', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Blog', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-14'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84', '2022-09-15'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84', '2022-09-15'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84', '2022-09-15'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84', '2022-09-15'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15'),
('Blog', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15'),
('GuestBook', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15'),
('Photo', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15'),
('Interests', '127.0.0.1', 'admin.local', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.167 YaBrowser/22.7.5.1027 Yowser/2.5 Safari/537.36', '2022-09-15');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `fullname` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`fullname`, `email`, `login`, `password`) VALUES
('Ptycin', 'test@mail.ru', 'sergey', 'admin222');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
