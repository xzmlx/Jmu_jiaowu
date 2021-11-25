-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-11-18 21:57:14
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `xk`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `adminNo` char(8) NOT NULL,
  `adminName` char(8) NOT NULL,
  `Pwd` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`adminNo`, `adminName`, `Pwd`) VALUES
('00000000', 'admin', '00000000'),
('00000001', 'root', '00000000');

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE `class` (
  `ClassNo` char(8) NOT NULL,
  `DepartNo` char(2) NOT NULL,
  `ClassName` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`ClassNo`, `DepartNo`, `ClassName`) VALUES
('20000001', '01', '00电子商务概率'),
('20000002', '01', '00多媒体设计'),
('20000003', '01', '00数据库原理'),
('20000004', '02', '00数据挖掘与分析'),
('20000005', '02', '00运筹学'),
('20000006', '03', '00统计学'),
('20010001', '01', '01PHP开发'),
('20010002', '01', '01python'),
('20010003', '01', '01电子商务概论'),
('20010004', '02', '01管理信息系统'),
('20010005', '02', '01电商实务'),
('20010006', '03', '01计算机网络技术'),
('20020001', '01', '02电子商务模拟实训'),
('20020002', '01', '02论文辅导课'),
('20020003', '01', '02跨境电商'),
('20020004', '02', '02毕业设计'),
('20020005', '02', '02体育与健康'),
('20020006', '03', '02JAVA设计');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `CouNo` char(3) NOT NULL,
  `CouName` char(30) NOT NULL,
  `Kind` char(8) NOT NULL,
  `Credit` decimal(5,0) NOT NULL,
  `Teacher` char(20) NOT NULL,
  `DepartNo` char(2) NOT NULL,
  `SchoolTime` char(10) NOT NULL,
  `LimitNum` decimal(5,0) NOT NULL,
  `WillNum` decimal(5,0) NOT NULL,
  `ChooseNum` decimal(5,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`CouNo`, `CouName`, `Kind`, `Credit`, `Teacher`, `DepartNo`, `SchoolTime`, `LimitNum`, `WillNum`, `ChooseNum`) VALUES
('001', 'SQL SERVER技术与应用', '工程技术', '3', '林睿', '01', '周二5-6节', '25', '43', '0'),
('002', 'JAVA技术与应用', '工程技术', '3', '林睿', '01', '周二5-6节', '25', '35', '0'),
('003', '网络信息检索原理与技术', '信息技术', '2', '李涛', '01', '周二晚', '10', '29', '0'),
('004', 'Linux操作系统', '信息技术', '2', '郑星', '01', '周二5-6节', '10', '33', '0'),
('005', 'Premiere6.0影视制作', '信息技术', '2', '李韵婷', '01', '周二5-6节', '20', '27', '0'),
('006', 'Director动画电影设计与制作', '信息技术', '2', '陈子仪', '01', '周二5-6节', '10', '27', '0'),
('007', 'Delphi初级程序员', '信息技术', '2', '李兰', '01', '周二5-6节', '20', '27', '0'),
('008', 'ASP.NET应用', '信息技术', '3', '曾建华', '01', '周二5-6节', '10', '45', '0'),
('009', '水资源利用管理与保护', '工程技术', '2', '叶艳茵', '02', '周二晚', '10', '31', '0'),
('010', '中级电工理论2', '工程技术', '3', '范敬丽', '02', '周二5-6节', '5', '24', '0'),
('011', '中级电工理论', '工程技术', '3', '范敬丽', 'De', '周二5-6节', '5', '27', '0'),
('012', '智能建筑', '工程技术', '2', '王娜', '02', '周二5-6节', '10', '21', '0'),
('013', '房地产漫谈', '人文', '2', '黄强', '02', '周二5-6节', '10', '36', '0'),
('014', '科技与探索', '人文', '2', '顾苑玲', '02', '周二5-6节', '10', '24', '0'),
('015', '民俗风情旅游', '管理', '2', '杨国润', '03', '周二5-6节', '20', '33', '0'),
('016', '旅行社经营管理', '管理', '2', '黄文昌', '03', '周二5-6节', '20', '36', '0'),
('017', '世界旅游', '人文', '2', '盛德文', '03', '周二5-6节', '10', '27', '0'),
('018', '中餐菜肴制作', '人文', '2', '卢萍', '03', '周二5-6节', '5', '66', '0'),
('019', '电子出版概论', '工程技术', '2', '李力', '03', '周二5-6节', '10', '0', '0');

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE `department` (
  `DepartNo` char(2) NOT NULL,
  `DepartName` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`DepartNo`, `DepartName`) VALUES
('01', '电子商务2071'),
('02', '电子商务2072'),
('03', '电商商务2073'),
('00', '电子商务2074'),
('04', '电子商务2075');

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE `score` (
  `StuNo` char(8) CHARACTER SET utf8 NOT NULL,
  `CouNo` char(3) CHARACTER SET utf8mb4 NOT NULL,
  `score` char(5) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`StuNo`, `CouNo`, `score`) VALUES
('12345678', '001', '92'),
('12345678', '002', '90');

-- --------------------------------------------------------

--
-- 表的结构 `stucou`
--

CREATE TABLE `stucou` (
  `StuNo` char(8) NOT NULL,
  `CouNo` char(3) NOT NULL,
  `WillOrder` smallint(6) NOT NULL,
  `State` char(2) NOT NULL,
  `RandomNum` char(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `stucou`
--

INSERT INTO `stucou` (`StuNo`, `CouNo`, `WillOrder`, `State`, `RandomNum`) VALUES
('12345678', '002', 2, '报名', NULL),
('12345678', '001', 1, '报名', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `StuNo` char(8) NOT NULL,
  `ClassNo` char(8) NOT NULL,
  `StuName` char(10) NOT NULL,
  `Pwd` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`StuNo`, `ClassNo`, `StuName`, `Pwd`) VALUES
('12345679', '3', 'LZX', '12345679'),
('12345678', '3', 'LZX', '12345678');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `TeaNo` char(8) NOT NULL,
  `DepartNo` char(2) NOT NULL,
  `TeaName` char(10) NOT NULL,
  `Pwd` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`TeaNo`, `DepartNo`, `TeaName`, `Pwd`) VALUES
('87654321', '03', 'Tom', '87654321');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminNo`);

--
-- 表的索引 `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ClassNo`),
  ADD KEY `DepartNo` (`DepartNo`);

--
-- 表的索引 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CouNo`);
ALTER TABLE `course` ADD FULLTEXT KEY `SchoolTime` (`SchoolTime`);

--
-- 表的索引 `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DepartNo`);

--
-- 表的索引 `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`StuNo`,`CouNo`);

--
-- 表的索引 `stucou`
--
ALTER TABLE `stucou`
  ADD PRIMARY KEY (`StuNo`,`CouNo`),
  ADD KEY `CouNo` (`CouNo`);

--
-- 表的索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StuNo`),
  ADD KEY `ClassNo` (`ClassNo`);

--
-- 表的索引 `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeaNo`),
  ADD KEY `DepartNo` (`DepartNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
