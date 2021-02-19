-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2021 г., 21:58
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testwork`
--

-- --------------------------------------------------------

--
-- Структура таблицы `collection`
--

CREATE TABLE `collection` (
  `id` int(11) DEFAULT NULL,
  `collection` varchar(32) NOT NULL,
  `index_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `collection`
--

INSERT INTO `collection` (`id`, `collection`, `index_collection`) VALUES
(1, 'cat1', 1),
(2, 'cat2', 2),
(3, 'cat3', 3),
(4, 'cat4', 4),
(5, 'cat5', 5),
(6, 'cat6', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` int(11) NOT NULL,
  `index_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `index_collection`) VALUES
(1, 'tab1', 1000, 1),
(2, 'tab2', 3000, 1),
(3, 'tab3', 5000, 1),
(4, 'tab4', 1100, 1),
(5, 'tab5', 400, 2),
(6, 'tab6', 300, 2),
(7, 'tab7', 500, 2),
(8, 'tab8', 1600, 2),
(9, 'tab9', 1600, 2),
(10, 'tab10', 1110, 2),
(11, 'tab11', 110, 3),
(12, 'tab12', 1104, 3),
(13, 'tab13', 1140, 3),
(14, 'tab14', 1101, 4),
(15, 'tab15', 11081, 4),
(16, 'tab16', 111, 4),
(17, 'tab17', 1101, 4),
(18, 'tab18', 1331, 4),
(19, 'tab19', 331, 5),
(20, 'tab20', 3331, 5),
(21, 'tab21', 3231, 5),
(22, 'tab22', 3351, 5),
(23, 'tab23', 5331, 5),
(24, 'tab24', 531, 6),
(25, 'tab25', 5831, 6),
(26, 'tab26', 8531, 6),
(27, 'tab27', 5318, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
