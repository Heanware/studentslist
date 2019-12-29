-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 29 2019 г., 11:42
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `groupnumber` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `points` int(100) DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `place` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `gender`, `groupnumber`, `email`, `points`, `birthday`, `place`) VALUES
(18, 'Андрей', 'Петропавловский', 'Мужской', 'AA212', 'heanware@gmail.com', 88, 2002, 'Местный'),
(22, 'Юрий', 'Винник', 'Мужской', 'XYI22', 'dtilli@gmail.com', 85, 2002, 'Местный'),
(24, 'Дарья', 'Белякова', 'Женский', 'LOVE1', 'BDSM@gmail.com', 100, 2002, 'Местный');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(20));

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
