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
-- Database: `kabu_db2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kabu_table`
--

CREATE TABLE `kabu_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(12) NOT NULL,
  `checkdate` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `volume_increment` int(12) DEFAULT NULL,
  `info` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kabu_table`
--

INSERT INTO `kabu_table` (`id`, `name`, `code`, `checkdate`, `reason`, `volume_increment`, `info`, `indate`) VALUES
(3, 'おおもり', 1299, '10月1日', '上髭', 4, 'SSIONｓ', '2019-10-05 23:08:06.000000'),
(4, '光ビジネス', 3948, '8月13日', '出来高急増', 12, 'さて', '2019-10-05 23:15:25.000000'),
(5, 'あかさたな', 1254, '7月4日', 'なんとなく', 10, 'がおてじょ', '2019-10-05 23:59:13.000000'),
(6, 'こあｓｄｇ', 1234, '8月17日', 'なんとなく', 12, 'のあｄｓｆ', '2019-10-06 00:15:53.000000');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
