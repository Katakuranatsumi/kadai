-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 7 月 06 日 21:46
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
-- テーブルの構造 `gs_bm2_table`
--

CREATE TABLE `gs_bm2_table` (
  `id` int(12) NOT NULL,
  `bookname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `writername` text COLLATE utf8_unicode_ci NOT NULL,
  `bookURL` text COLLATE utf8_unicode_ci NOT NULL,
  `bookcoment` text COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `bookdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm2_table`
--

INSERT INTO `gs_bm2_table` (`id`, `bookname`, `writername`, `bookURL`, `bookcoment`, `category`, `bookdate`) VALUES
(2, 'ワンピース', '尾田栄一郎', 'onepiece.com', 'いつになったらワンピースが手に入るのですか。', '楽しみたいなぁ・・・', '2017-07-07 03:32:41'),
(4, 'ボクたちはみんな大人になれなかった', '燃え殻', 'moegara.com', '卒業制作が終わったらゆっくり読みたいです。', '仕事頑張りたいなぁ・・・', '2017-07-07 04:24:29'),
(5, '自分の時間を取り戻そう', 'ちきりん', 'chikirin.com', 'ブログも面白いです', '仕事頑張りたいなぁ・・・', '2017-07-07 04:28:21'),
(6, '今日の猫村さん', 'ほしよりこ', 'nekomura.com', '私も猫の家政婦さんに来てほしいです。', '癒されたいなぁ・・・', '2017-07-07 04:30:17'),
(7, 'ハトのおよめさん', 'はぐき', 'hotoyome.com', 'こんなお嫁さんいたら怖いな、と思いながら読んでいます。', '楽しみたいなぁ・・・', '2017-07-07 04:33:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm2_table`
--
ALTER TABLE `gs_bm2_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm2_table`
--
ALTER TABLE `gs_bm2_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
