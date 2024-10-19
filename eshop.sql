-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30 سبتمبر 2024 الساعة 19:59
-- إصدار الخادم: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(255) NOT NULL,
  `AD_PASS` varchar(255) NOT NULL,
  PRIMARY KEY (`AD_ID`),
  UNIQUE KEY `USER_NAME` (`USER_NAME`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`AD_ID`, `USER_NAME`, `AD_PASS`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `cart_sh`
--

DROP TABLE IF EXISTS `cart_sh`;
CREATE TABLE IF NOT EXISTS `cart_sh` (
  `CART_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_ID` int(11) DEFAULT NULL,
  `PRO_IMAGE` varchar(255) NOT NULL,
  `PRO_PRICE` double NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `CUS_ID` int(11) DEFAULT NULL,
  `CUS_CODE` int(11) NOT NULL,
  `CUS_B` double NOT NULL,
  `Total` double NOT NULL,
  PRIMARY KEY (`CART_ID`),
  KEY `PR_FK` (`PRO_ID`),
  KEY `CO_FK` (`CUS_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `GATE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CATE_NAME` varchar(255) NOT NULL,
  PRIMARY KEY (`GATE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`GATE_ID`, `CATE_NAME`) VALUES
(1, 'laptops'),
(2, 'Mobile'),
(3, 'Camera'),
(4, 'PC_Desktop'),
(5, 'janse');

-- --------------------------------------------------------

--
-- بنية الجدول `custemer`
--

DROP TABLE IF EXISTS `custemer`;
CREATE TABLE IF NOT EXISTS `custemer` (
  `CUS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUS_FNAME` varchar(255) NOT NULL,
  `CUS_LNAME` varchar(255) DEFAULT NULL,
  `COUNTRY` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CUS_PHONE` int(11) NOT NULL,
  `CUS_BALANCE` double NOT NULL,
  `CUS_EMAIL` varchar(255) NOT NULL,
  `AD_PASS` varchar(255) NOT NULL,
  `CUS_CODE` int(20) NOT NULL,
  PRIMARY KEY (`CUS_ID`),
  UNIQUE KEY `CUS_EMAIL` (`CUS_EMAIL`),
  UNIQUE KEY `CUS_CODE` (`CUS_CODE`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `custemer`
--

INSERT INTO `custemer` (`CUS_ID`, `CUS_FNAME`, `CUS_LNAME`, `COUNTRY`, `CITY`, `ADDRESS`, `CUS_PHONE`, `CUS_BALANCE`, `CUS_EMAIL`, `AD_PASS`, `CUS_CODE`) VALUES
(1, 'test', '1', 'YAMEN', 'TIZE', 'STRETE', 777777777, 0, 'Test@GMAIL.COM', '123', 123);

-- --------------------------------------------------------

--
-- بنية الجدول `massege`
--

DROP TABLE IF EXISTS `massege`;
CREATE TABLE IF NOT EXISTS `massege` (
  `MASS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) DEFAULT NULL,
  `CUS_EMAIL` varchar(255) NOT NULL,
  `MESSAGE` varchar(255) NOT NULL,
  PRIMARY KEY (`MASS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `massege`
--

INSERT INTO `massege` (`MASS_ID`, `NAME`, `CUS_EMAIL`, `MESSAGE`) VALUES
(1, 'hakeema', 'hakeemalnaser123000@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `PRO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_NAME` varchar(255) NOT NULL,
  `PRO_IMAGE` varchar(255) DEFAULT NULL,
  `PRO_PRICE` double NOT NULL,
  `PRO_DESCRIPTION` varchar(255) DEFAULT NULL,
  `CATE_ID` int(2) NOT NULL,
  PRIMARY KEY (`PRO_ID`),
  KEY `CAT_MGR_FK` (`CATE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`PRO_ID`, `PRO_NAME`, `PRO_IMAGE`, `PRO_PRICE`, `PRO_DESCRIPTION`, `CATE_ID`) VALUES
(2, 'Dell_15_7000', 'port.jpg', 800, 'new dell', 1),
(3, 'ASUS ROG', 'img/port.jpg', 900, 'new dell', 1),
(4, 'Dell XPS 15', 'img/port.jpg', 1000, 'new dell', 1),
(5, 'APPLE MACBOOK', 'img/port.jpg', 1200, 'new APPLE', 1),
(6, 'HP ENVY', 'img/port.jpg', 750, 'new HP', 1),
(7, 'LENOVO T430', 'img/port.jpg', 800, 'new LENOVO', 1),
(8, 'lenv', 'ghjhgjhg', 700, 'nwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
