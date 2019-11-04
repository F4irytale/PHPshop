-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-10-31 00:51:57
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

CREATE TABLE `address` (
  `用户ID` int(11) NOT NULL,
  `收货ID` int(11) NOT NULL,
  `收货地址` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `brand`
--

CREATE TABLE `brand` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(20) DEFAULT NULL,
  `BrandDescribe` varchar(50) DEFAULT NULL,
  `ClassID` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `brand`
--

INSERT INTO `brand` (`BrandID`, `BrandName`, `BrandDescribe`, `ClassID`) VALUES
(5, '长江出版', '长江', '1'),
(8, '华谊兄弟', '巨鳄', '3'),
(9, '源稚生', '大家长', '4'),
(10, '源稚女', '猛鬼', '4'),
(18, '苹果', '好用', '8'),
(21, '黄河出版社', '老资历', '1'),
(20, '戴尔', '办公', '5'),
(19, '华为', '性价比高', '8'),
(22, '喜马拉雅出版社', '最高', '1');

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE `class` (
  `ClassID` int(11) NOT NULL,
  `ClassName` varchar(20) NOT NULL,
  `ClassDescribe` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`ClassID`, `ClassName`, `ClassDescribe`) VALUES
(1, '书籍', '开卷有益'),
(4, '人物', '演绎人生'),
(3, '电影', '映射现实'),
(5, '电脑', '办公专用');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Content` text,
  `GoodsID` int(11) DEFAULT NULL,
  `CommentTime` int(11) DEFAULT NULL,
  `Cdescribe` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `GoodsID` int(11) NOT NULL,
  `GoodsName` varchar(50) DEFAULT NULL,
  `img` varchar(20) DEFAULT NULL,
  `GoodsDescribe` varchar(100) DEFAULT NULL,
  `GoodsPrice` float DEFAULT NULL,
  `GoodsStock` int(11) DEFAULT NULL,
  `BrandID` int(11) DEFAULT NULL,
  `SupplierID` int(11) DEFAULT NULL,
  `shelf` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`GoodsID`, `GoodsName`, `img`, `GoodsDescribe`, `GoodsPrice`, `GoodsStock`, `BrandID`, `SupplierID`, `shelf`) VALUES
(8, '流浪地球', '1572161993.jpg', '前进三', 35, 22, 8, 1, 1),
(7, '百年孤独', '1572162000.jpg', '人生', 50, 10, 22, 1, 1),
(6, '三体', '1572162006.jpg', '智子', 30, 20, 5, 1, 1),
(9, '龙族3上', '1571658981.jpg', '白王', 55, 22, 10, 1, 1),
(10, '战争与和平', '1571659123.jpg', '列夫托尔斯泰', 30, 33, 5, 1, 1),
(11, '巴黎圣母院', '1571659156.jpg', '雨果', 40, 12, 5, 1, 1),
(12, '悲惨世界', '1571659198.jpg', '雨果', 22, 111, 21, 1, 1),
(13, '本草纲目', '1571986603.jpg', '圣经', 100, 1, 21, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `price` float DEFAULT NULL,
  `Counts` int(11) DEFAULT NULL,
  `StatusID` int(11) DEFAULT NULL,
  `OrdersTime` text,
  `TouchID` int(11) DEFAULT NULL,
  `UserName` varchar(50) NOT NULL,
  `GoodsID` int(11) DEFAULT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`price`, `Counts`, `StatusID`, `OrdersTime`, `TouchID`, `UserName`, `GoodsID`, `name`) VALUES
(19999, 1, NULL, '2019-10-31 12:50:27am', 1, 'zzp', 1, '987654321');

-- --------------------------------------------------------

--
-- 表的结构 `orderstatus`
--

CREATE TABLE `orderstatus` (
  `StatusID` int(10) UNSIGNED NOT NULL,
  `StatusName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `CartID` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `OrdersTime` int(11) DEFAULT NULL,
  `TouchID` int(11) DEFAULT NULL,
  `UserName` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `name` text NOT NULL,
  `stock` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shoppingcart`
--

INSERT INTO `shoppingcart` (`CartID`, `id`, `price`, `num`, `OrdersTime`, `TouchID`, `UserName`, `img`, `name`, `stock`) VALUES
(1, 1, 19999, 1, NULL, NULL, 'zzp', '123.jpg', '987654321', '99'),
(2, 1, 6799, 1, NULL, NULL, 'hwa', '321.jpg', '963852', '99');

-- --------------------------------------------------------

--
-- 表的结构 `supplier`
--

CREATE TABLE `supplier` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(50) NOT NULL,
  `Contacts` varchar(20) NOT NULL,
  `telephone` char(11) NOT NULL,
  `BusinessLicense` varchar(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `corporation` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `supplier`
--

INSERT INTO `supplier` (`SupplierID`, `SupplierName`, `Contacts`, `telephone`, `BusinessLicense`, `address`, `corporation`) VALUES
(1, '四方学院', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `touch`
--

CREATE TABLE `touch` (
  `TouchID` int(10) UNSIGNED NOT NULL,
  `TouchName` varchar(50) NOT NULL,
  `TouchAddress` varchar(100) NOT NULL,
  `TouchTelephone` varchar(11) NOT NULL,
  `UserName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `touch`
--

INSERT INTO `touch` (`TouchID`, `TouchName`, `TouchAddress`, `TouchTelephone`, `UserName`) VALUES
(1, 'jia', '211', '1834888478', 'zzp'),
(2, 'xue', '985', '18348478', 'hwa');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Telephone` char(11) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `NumberID` char(18) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Nickname` varchar(20) DEFAULT NULL,
  `IsAdmin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`UserName`, `Password`, `Telephone`, `Email`, `NumberID`, `Address`, `Name`, `Nickname`, `IsAdmin`) VALUES
('admin', '12345', '12345', NULL, '726182342123456765', '四方学院', '刘仁芬', '管理员', 1),
('qqq', 'qqq', '18348882569', 'qqq', NULL, '河北石家庄原始姬状元路甲一号', NULL, 'qqq', 0),
('sakura', '1112', '00100', NULL, NULL, '卡塞尔学院', NULL, '路明非', 0),
('hwa', '12369', '55555', NULL, NULL, '阿联酋', NULL, '㐇酋长', 0),
('zzp', '111', '111', '2995702344@qq.com', NULL, '河北省石家庄市元氏县姬村镇装院路6栋', NULL, 'zzp', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ClassID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `UserName` (`UserName`),
  ADD KEY `GoodsID` (`GoodsID`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`GoodsID`),
  ADD KEY `BrandID` (`BrandID`),
  ADD KEY `SupplierID` (`SupplierID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `StatusID` (`StatusID`),
  ADD KEY `TouchID` (`TouchID`),
  ADD KEY `UserName` (`UserName`),
  ADD KEY `GoodsID` (`GoodsID`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `GoodsID` (`id`),
  ADD KEY `TouchID` (`TouchID`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `touch`
--
ALTER TABLE `touch`
  ADD PRIMARY KEY (`TouchID`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- 使用表AUTO_INCREMENT `class`
--
ALTER TABLE `class`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `GoodsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `StatusID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- 使用表AUTO_INCREMENT `touch`
--
ALTER TABLE `touch`
  MODIFY `TouchID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
