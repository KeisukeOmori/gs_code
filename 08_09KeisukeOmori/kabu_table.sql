-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 
-- サーバのバージョン： 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kabu_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kabu_table`
--

CREATE TABLE `kabu_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(12) NOT NULL,
  `market` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `checkdate` date NOT NULL,
  `reason` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `market_cap` int(12) DEFAULT NULL,
  `stock` int(24) DEFAULT NULL,
  `volume` int(24) DEFAULT NULL,
  `volume_increment` int(12) DEFAULT NULL,
  `shite` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kabu_table`
--

INSERT INTO `kabu_table` (`id`, `name`, `code`, `market`, `checkdate`, `reason`, `market_cap`, `stock`, `volume`, `volume_increment`, `shite`, `info`, `indate`) VALUES
(1, 'サイババ', 3810, '二部', '2019-09-22', '上髭', 120, 1524092485, 13, 4, '〇', 'af;lkb', '2019-09-22 20:28:55.000000'),
(2, 'ゼロ', 9028, '東証二部', '2019-07-12', '出来高急増　上髭', 2147483647, 17560000, 2, 15, '不明', '', '2019-09-29 10:40:26.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabu_table`
--
ALTER TABLE `kabu_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabu_table`
--
ALTER TABLE `kabu_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
