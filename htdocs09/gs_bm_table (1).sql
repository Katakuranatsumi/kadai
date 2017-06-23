-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 6 月 23 日 10:39
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(11) NOT NULL,
  `bookname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `writername` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bookURL` text COLLATE utf8_unicode_ci NOT NULL,
  `bookcoment` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` mediumblob NOT NULL,
  `bookdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookname`, `writername`, `bookURL`, `bookcoment`, `picture`, `bookdate`) VALUES
(23, '坊ちゃん', '夏目漱石', 'souseki.com', '先生になりたくなりました。', '', '2017-06-15 17:50:24'),
(24, 'コンビニ人間', '村田沙耶香', 'conbini.com', 'コンビニで働きたくなりました。', '', '2017-06-15 19:02:46'),
(25, '三月のライオン', '羽海野チカ', 'shougi.com', 'プロ棋士になりたくなりました。', '', '2017-06-15 19:07:58'),
(27, '火花', '又吉直樹', 'piece.com', 'お笑いをはじめたくなりました。', '', '2017-06-15 19:12:47'),
(29, 'ねじまき鳥クロニクル', '村上春樹', 'nejimaki.com', '冒険がしたくなりました。', '', '2017-06-22 03:33:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
