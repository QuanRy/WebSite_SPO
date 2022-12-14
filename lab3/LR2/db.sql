-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 05 2022 г., 02:11
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brigades`
--

CREATE TABLE `brigades` (
  `id_brigade` int(11) NOT NULL,
  `number_brigade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brigades`
--

INSERT INTO `brigades` (`id_brigade`, `number_brigade`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `fermers`
--

CREATE TABLE `fermers` (
  `id_fermer` int(11) NOT NULL,
  `photo` mediumtext NOT NULL,
  `fio` varchar(50) NOT NULL,
  `id_brigade` int(11) NOT NULL,
  `characteristic` text NOT NULL,
  `date_birth` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fermers`
--

INSERT INTO `fermers` (`id_fermer`, `photo`, `fio`, `id_brigade`, `characteristic`, `date_birth`) VALUES
(1, '1.PNG', 'Густав Логвард Бертольд', 2, 'Ответственный, чистоплотный, трудолюбивый, очень трепетно относится к выговорам.', 1946),
(2, '2.PNG', 'Роман Шишканов Вольфович', 1, 'К выговорам относится нейтрально, тунеядец и разгильдяй, склонен к употреблению алкоголя, запоям и дракам. Часто оставляет рабочее место без присмотра.', 1984),
(3, '3.PNG', 'Тимур Картаев Зигизмундович', 3, 'Опрятен, чистоплотен, склонен к употреблению ненормативной лексики на рабочем месте по отношению к коллегам и руководству, может причинить тяжкий вред здоровью человека на основании своих убеждений или взглядов.', 1996),
(4, '4.PNG', 'Александр Прытко Петрович', 4, 'Великодушный, вежливый, трудолюбивый, ответственный. медленно и с трудом проходит переквалификацию. Может легко сладить с новым коллективом.', 1949),
(5, '5.PNG', 'Станислав Иващенко Лимурович', 4, 'Трудолюбив, опрятен, склонен к опозданиям на 15-30 минут на рабочее место, употребляет ненормативную лексику на рабочем месте. Может уйти в запой.', 1992),
(6, '6.PNG', 'Олег Петров Станиславович', 3, 'Физически-вынослив, способен к перереработкам и работе не по графику, склонен к громким возмущениям по поводу изменений в рабочем процессе или внедрению новшеств на производстве.', 1987),
(7, '7.PNG', 'Александра Сыктывкарова Анатольевна', 2, 'Склонна к опозданиям, тиха, воспринимает все требования и задания с первого раза. трудолюбива, внимательна к мелочам, усердна.', 1999),
(8, '8.PNG', 'Ольга Макаренко Анатольевна', 1, 'Добродушна, вежлива, опрятна, все поручения выполняет с небольшим опозданием, но качественно. Быстро проходит дополнительные курсы и переквалификацию.', 1981);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brigades`
--
ALTER TABLE `brigades`
  ADD PRIMARY KEY (`id_brigade`);

--
-- Индексы таблицы `fermers`
--
ALTER TABLE `fermers`
  ADD PRIMARY KEY (`id_fermer`),
  ADD KEY `id_brigade` (`id_brigade`),
  ADD KEY `id_brigade_2` (`id_brigade`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brigades`
--
ALTER TABLE `brigades`
  MODIFY `id_brigade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `fermers`
--
ALTER TABLE `fermers`
  MODIFY `id_fermer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `brigades`
--
ALTER TABLE `brigades`
  ADD CONSTRAINT `brigades_ibfk_1` FOREIGN KEY (`id_brigade`) REFERENCES `fermers` (`id_brigade`);

--
-- Ограничения внешнего ключа таблицы `fermers`
--
ALTER TABLE `fermers`
  ADD CONSTRAINT `fermers_ibfk_1` FOREIGN KEY (`id_brigade`) REFERENCES `brigades` (`id_brigade`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
