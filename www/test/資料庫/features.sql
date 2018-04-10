-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-03-17 04:34:21
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： ` fourth`
--

-- --------------------------------------------------------

--
-- 資料表結構 `features`
--

CREATE TABLE `features` (
  `autoid` int(50) NOT NULL,
  `su1` varchar(150) NOT NULL,
  `su2` varchar(150) NOT NULL,
  `su3` varchar(150) NOT NULL,
  `su4` varchar(150) NOT NULL,
  `su5` varchar(150) NOT NULL,
  `su6` varchar(150) NOT NULL,
  `su7` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`autoid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `features`
--
ALTER TABLE `features`
  MODIFY `autoid` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
