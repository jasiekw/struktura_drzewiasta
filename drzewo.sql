-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Gru 2018, 10:31
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `drzewo`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `drzewo`
--

CREATE TABLE `drzewo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `parent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `drzewo`
--

INSERT INTO `drzewo` (`id`, `name`, `parent_id`) VALUES
(1, 'root', 0),
(2, 'BMW', 1),
(3, 'FORD', 1),
(4, 'Volkswagen', 1),
(6, 'SUV', 4),
(9, 'Sedan', 4),
(11, 'Hatchback', 3),
(13, '318', 94),
(14, '520', 94),
(15, 'X5', 101),
(17, 'Mondeo', 82),
(18, 'Focus', 11),
(19, 'Golf', 92),
(20, 'Passat', 9),
(21, 'Tuareg', 6),
(22, 'Tiguan', 6),
(34, 'Porsche', 1),
(77, '911', 85),
(78, 'Turbo S', 77),
(79, 'GT2 RS', 77),
(82, 'Sedan', 3),
(85, 'Sport', 34),
(92, 'Hatchback', 4),
(94, 'Sedan', 2),
(96, '120', 100),
(98, '116', 100),
(99, '118', 100),
(100, 'Hatchback', 2),
(101, 'SUV', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `drzewo`
--
ALTER TABLE `drzewo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `drzewo`
--
ALTER TABLE `drzewo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
