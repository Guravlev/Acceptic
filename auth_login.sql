-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 26 2016 г., 16:25
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `acceptic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_login`
--

CREATE TABLE `auth_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_login`
--

INSERT INTO `auth_login` (`id`, `name`, `password`, `email`) VALUES
(16, 'tolik', '827ccb0eea8a706c4c34a16891f84e7b', 'alex.guravlev1988@gmail.com'),
(17, 'Alex', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'alex.guravlev1988@gmail.com'),
(18, 'alexander', '827ccb0eea8a706c4c34a16891f84e7b', 'alex.guravlev1988@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_login`
--
ALTER TABLE `auth_login`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auth_login`
--
ALTER TABLE `auth_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
