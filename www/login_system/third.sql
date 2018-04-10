-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2017 年 02 月 24 日 07:22
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `third`
--
CREATE DATABASE IF NOT EXISTS `third` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `third`;

-- --------------------------------------------------------

--
-- 表的結構 `animal_fr`
--

CREATE TABLE IF NOT EXISTS `animal_fr` (
  `autoid` int(50) NOT NULL AUTO_INCREMENT,
  `fr_img` blob NOT NULL,
  `fr_name` int(70) NOT NULL,
  `fr_Common name` int(100) NOT NULL,
  `fr_scientific name` int(100) NOT NULL,
  `fr_location` varchar(100) NOT NULL,
  `fr_tr` varchar(500) NOT NULL,
  `fr_su` varchar(500) NOT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的結構 `animal_li`
--

CREATE TABLE IF NOT EXISTS `animal_li` (
  `autoid` int(11) NOT NULL AUTO_INCREMENT,
  `li_img` blob NOT NULL,
  `li_name` int(70) NOT NULL,
  `li_Common name` int(100) NOT NULL,
  `li_scientific name` int(100) NOT NULL,
  `li_location` varchar(100) NOT NULL,
  `li_tr` varchar(500) NOT NULL,
  `li_su` varchar(500) NOT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的結構 `animal_sn`
--

CREATE TABLE IF NOT EXISTS `animal_sn` (
  `autoid` int(50) NOT NULL AUTO_INCREMENT,
  `sn_img` blob NOT NULL,
  `sn_name` int(20) NOT NULL,
  `sn_Common name` int(50) NOT NULL,
  `sn_scientific name` int(100) NOT NULL,
  `sn_loction` varchar(100) NOT NULL,
  `sn_tr` varchar(500) NOT NULL,
  `sn_su` varchar(500) NOT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `autoid` int(50) NOT NULL AUTO_INCREMENT,
  `na` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的結構 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `autoid` int(11) NOT NULL AUTO_INCREMENT,
  `na` varchar(50) NOT NULL,
  `msg_title` varchar(100) NOT NULL,
  `msg_me` varchar(200) NOT NULL,
  `msg_time` datetime NOT NULL,
  PRIMARY KEY (`autoid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的結構 `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `ud_name` int(20) NOT NULL,
  `ud_sci` int(50) NOT NULL,
  `ud_img` blob NOT NULL,
  `ud_su` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
