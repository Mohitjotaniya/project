-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2021 at 11:58 AM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.3.27-9+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_mangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsalary`
--

CREATE TABLE `addsalary` (
  `s_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `month` varchar(250) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsalary`
--

INSERT INTO `addsalary` (`s_id`, `e_id`, `month`, `salary`) VALUES
(1, 196, 'January', 12000),
(18, 196, 'February', 15000),
(19, 196, 'March', 12000),
(20, 196, 'April', 12200),
(22, 381, 'February', 12000),
(24, 381, 'May', 60000),
(25, 381, 'June', 12000),
(26, 381, 'January', 12000),
(29, 381, 'October', 1200),
(32, 196, 'August', 12000),
(33, 375, 'January', 12000),
(34, 375, 'February', 1200),
(37, 381, 'December', 12000),
(41, 381, 'November', 12000),
(46, 381, 'September', 12333),
(47, 381, 'April', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `cid` int(10) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `cid`, `city`) VALUES
(1, 1, 'rajkot'),
(2, 1, 'surat'),
(3, 1, 'bhavangar'),
(4, 2, 'mumbai'),
(5, 3, 'up');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'gujrat'),
(2, 'mumbai'),
(3, 'up');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `bod` text NOT NULL,
  `code` int(11) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `organisation` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `county` varchar(250) NOT NULL,
  `postcade` int(11) NOT NULL,
  `application` varchar(250) NOT NULL,
  `language` varchar(250) NOT NULL,
  `activationcode` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `crate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `email`, `pass`, `bod`, `code`, `mobile`, `gender`, `organisation`, `website`, `address`, `city`, `county`, `postcade`, `application`, `language`, `activationcode`, `status`, `crate_date`, `update_date`) VALUES
(138, 'dfdsf', 'dfds', 'mohitjotaniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-07', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(139, 'fghfgh', 'dfgdfg', 'dsfdddfdsfsfdsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-07', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(140, 'gfhfgh', 'dsf', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-07', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(141, 'hfgh', 'dfgdfg', 'mohitjotaniya259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-07', 91, 1234567898, 'male', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(145, 'dfgdf', 'dfgdfg', 'dsfdddggfdsfsfdsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-07', 91, 1234567898, 'male', 'sdfds', 'https://www.w3schools.com', 'dsa', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(146, 'fghfgh', 'dsf', 'rd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567899, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'mumbai', 454, 'ff', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(147, 'gfhfgh', 'dfgdfg', 'f@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'bhavangar', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(148, 'gfhfgh', 'dsf', 'jotaniyamohitll6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'male', 'fdgfd', 'https://www.w3schools.com', 'fghfg', 'bhavangar', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(150, 'fghfgh', 'dfgdfg', 'admfin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'male', 'fdgfd', 'https://www.w3schools.com', 'defewsf', 'bhavangar', 'gujrat', 454, 'ff', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(152, 'fghfgh', 'dfgdfg', 'mohiterejotaniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'male', 'sdfds5454', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(153, 'fghfgh', 'dfgdfg', 'admyin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'male', 'fghfg', 'http://a', 'defewsf', 'rajkot', 'mumbai', 454, 'admin', 'Net,Other,', '', 0, '2021-06-08 10:08:19', NULL),
(154, 'fghfgh', 'dsf', 'adwmin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-31', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(155, 'fghfgh', 'dfgdfg', 'r@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-07', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(156, 'erewr', 'ewrw', 'jotaniyamohewit6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(157, 'gfhfgh', 'dsf', 'mohitjotaddniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567899, 'male', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(158, 'mohit', 'dfgdfg', 'mohitjotaeniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-31', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(159, 'mohit', 'dfgdfg', 'mohitjotaeniyaf6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-31', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(161, 'mohit', 'dfgdfg', 'mohitjotayeniyaf6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-31', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(162, 'fghfgh', 'dfgdfg', 'akdmin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567899, 'male', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(181, 'fghfgh', 'dsf', 'jotaniyamsohit6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-07', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(182, 'fghfgh', 'dsf', 'akdmidn@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfghfg', 'rajkot', 'gujrat', 454, 'dsfddfdgdfgsfdsfs@gmail.com', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(184, 'fghfgh', 'dfgdfg', 'mohitjwotaniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'fghfg', 'http://a', 'fghfg54', 'surat', 'gujrat', 454, '54', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(185, 'fghfgh', 'dsf', 'dsfdddfdsdfsfdsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(187, 'fghfgh', 'dfgdfg', 'jotaniyasmohit6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'defewsf', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-08 10:08:19', NULL),
(189, 'fghfgh', 'dfgdfg', 'jotaniyamoshit6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-08', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-08 10:08:19', NULL),
(190, 'fghfgh', 'dsf', 'dd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'male', 'dfrgdfghdfgh', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(191, 'fghfgh', 'dfgdfg', 'admin@gmail.comvc', '25d55ad283aa400af464c76d713c07ad', '2021-05-19', 91, 1234567898, 'male', 'fdgfd', 'http://fghfg', 'fghfg', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(192, 'fghfgh', 'dfgdfg', 'qf@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'male', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'admin', 'Php,', '', 0, '2021-06-08 10:08:19', NULL),
(196, 'fghfgh', 'dfgdfg', 'dds@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-28', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'ff', 'Php,Other,', '', 1, '2021-06-08 10:08:19', '2021-06-29 04:40:51'),
(199, 'fghfgh', 'dfgdfg', 'mohitsjotaniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-08 11:45:02', NULL),
(203, 'fghfgh', 'dfgdfg', 'dsfdddfdssfsfdsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'dsfddfdgdfgsfdsfs@gmail.com', 'Php,', '', 0, '2021-06-08 12:04:18', NULL),
(205, 'sakjdbsabd', 'sdkfsjfb', 'skdfjsbfjs@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 91, 9685741230, 'male', 'fsdfsdfsd', 'http://jasbd', 'sadasd', 'rajkot', 'mumbai', 454, 'dasdasd', 'Php,', '', 0, '2021-06-08 12:10:53', NULL),
(208, 'fghfgh', 'dfgdfg', 's@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-08 12:14:25', NULL),
(210, 'gfhfgh', 'dfgdfg', 'sadas@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-08 12:15:51', NULL),
(211, 'fghfgh', 'dfgdfg', 'dsfdsddfdsfsfdsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567899, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'bhavangar', 'up', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 04:36:57', NULL),
(213, 'fghfgh', 'dfgdfg', 'dsfdddfdsfssfdsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg54', 'bhavangar', 'mumbai', 454, 'admin', 'Php,', '', 0, '2021-06-10 04:39:10', NULL),
(215, 'fghfgh', 'dfgdfg', 'jotaniyamohsit6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-31', 91, 1234567898, 'male', 'fdgfd', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'ff', 'Php,', '', 0, '2021-06-10 04:46:38', NULL),
(218, 'fghfgh', 'dfgdfg', 'mohitjotansiya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg54', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-10 04:48:35', NULL),
(220, 'fghfgh', 'dfgdfg', 'mohsitjotansiya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg54', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-10 04:49:37', NULL),
(222, 'fghfgh', 'dfgdfg', 'mohsitjotasnsiya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg54', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-10 04:59:25', NULL),
(224, 'fghfgh', 'dfgdfg', 'mohsitjotasdnsiya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg54', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-10 05:00:51', NULL),
(226, 'fghfgh', 'dfgdfg', 'mohsitjostasdnsiya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg54', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-10 05:06:04', NULL),
(229, 'fghfgh', 'dfgdfg', 'ss@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg54', 'rajkot', 'gujrat', 454, 'admin', 'Php,', '', 0, '2021-06-10 05:07:34', NULL),
(231, 'dfdgd', 'dfgdfgdfg', 'fdgdfgdfgjbsdja@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 91, 9632587410, 'male', 'fdgdfgdfg', 'https://www.w3schools.com', 'dgdfgdfg', 'surat', 'mumbai', 454, 'dfdfdg', 'Php,', '', 0, '2021-06-10 05:14:29', NULL),
(232, 'dfdgd', 'dfgdfgdfg', 'fdgddfgdfgjbsdja@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-02', 91, 9632587410, 'male', 'fdgdfgdfg', 'https://www.w3schools.com', 'dgdfgdfg', 'surat', 'mumbai', 454, 'dfdfdg', 'Php,', '', 0, '2021-06-10 05:21:15', NULL),
(233, 'dfdgd', 'dfgdfgdfg', 'ddd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-02', 91, 9632587410, 'male', 'fdgdfgdfg', 'https://www.w3schools.com', 'dgdfgdfg', 'surat', 'mumbai', 454, 'dfdfdg', 'Php,java,Net,Python,Other,', '', 0, '2021-06-10 05:23:02', NULL),
(234, 'dfdgd', 'dfgdfgdfg', 'dddd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-02', 91, 9632587410, 'male', 'fdgdfgdfg', 'https://www.w3schools.com', 'dgdfgdfg', 'surat', 'mumbai', 454, 'dfdfdg', 'Php,java,Net,Python,Other,', '', 0, '2021-06-10 05:23:56', NULL),
(236, 'fghfgh', 'dfgdfg', 'a@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'dsa', 'surat', 'gujrat', 454, '54', 'Php,Other,', '', 0, '2021-06-10 05:25:06', NULL),
(237, 'fghfgh', 'dfgdfg', 'dfg@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-13', 91, 1234567898, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 05:53:00', NULL),
(241, 'fghfgh', 'dfgdfg', 'jotaniyamohit6dddw259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fdgfd', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,', '', 0, '2021-06-10 06:00:19', NULL),
(244, 'gfhfgh', 'jotaniya', 'dfgdfgsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567899, 'female', 'sdfds5454', 'https://www.w3schools.com', 'fghfghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-10 06:03:02', NULL),
(245, 'gfhfgh', 'dfgdfg', 'mohitjtaniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'male', 'dfrgdfghdfgh', 'https://www.w3schools.com', 'fghfg', 'surat', 'mumbai', 454, 'dsfddfdgdfgsfdsfs@gmail.com', 'Php,Other,', '', 0, '2021-06-10 06:11:59', NULL),
(246, 'fghfgh', 'dfgdfg', 'mohitjotsansiya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 06:13:06', NULL),
(247, 'fghfgh', 'dfgdfg', 'mohitjotdsansiya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 06:13:30', NULL),
(248, 'fghfgh', 'dfgdfg', 'gg@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 06:15:08', NULL),
(250, 'fghfgh', 'dfgdfg', 'sss@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 06:16:23', NULL),
(252, 'fghfgh', 'dfgdfg', 'sdss@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 07:48:39', NULL),
(254, 'fghfgh', 'dfgdfg', 'ssdss@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 07:50:50', NULL),
(258, 'fghfgh', 'dfgdfg', 'sas@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 07:54:40', NULL),
(264, 'fghfgh', 'dfgdfg', 'sazs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 08:05:04', NULL),
(266, 'fghfgh', 'dfgdfg', 'ssazs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 08:18:06', NULL),
(268, 'fghfgh', 'dfgdfg', 'll@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsa', 'rajkot', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 08:26:20', NULL),
(269, 'fghfgh', 'dfgdfg', 'all@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsa', 'rajkot', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 08:27:33', NULL),
(293, 'fghfgh', 'dsf', 'aa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'http://12345678', 'fghfghfg', 'rajkot', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 08:42:17', NULL),
(294, 'gfhfgh', 'dfgdfg', 'mohitjostaniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-20', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', '25555', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 08:45:09', NULL),
(295, 'gfhfgh', 'dfgdfg', 'mohitjostafniya6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-20', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', '25555', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 08:46:00', NULL),
(296, 'gfhfgh', 'dfgdfg', 'aass@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-20', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', '25555', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 09:16:56', NULL),
(297, 'fghfgh', 'dsf', 'ssaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'http://12345678', 'fghfghfg', 'rajkot', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-10 09:17:59', NULL),
(300, 'fghfgh', 'dsf', 'd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-10 12:45:50', NULL),
(301, 'fghfgh', 'dsf', 'dq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-10 12:50:07', NULL),
(302, 'fghfgh', 'dfgdfg', 'dw@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'surat', 'up', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-10 12:51:03', NULL),
(303, 'fghfgh', 'dfgdfg', 'de@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'surat', 'up', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-10 12:51:51', NULL),
(304, 'fghfgh', 'dfgdfg', 'dr@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'surat', 'up', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-10 12:52:26', NULL),
(305, 'fghfgh', 'dfgdfg', 'e@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 07:27:08', NULL),
(308, 'fghfgh', 'dfgdfg', 'akdmiwn@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 07:29:20', NULL),
(309, 'fghfgh', 'dfgdfg', 'wf@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567899, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 07:31:28', NULL),
(310, 'fghfgh', 'dfgdfg', 'wfq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567899, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 07:32:51', NULL),
(311, 'fghfgh', 'dfgdfg', 'wfdq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567899, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 07:38:19', NULL),
(313, 'fghfgh', 'dfgdfg', 'awfdq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567899, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 07:57:09', NULL),
(314, 'hfgh', 'dfgdfg', 'se@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567899, 'male', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'up', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 07:58:26', NULL),
(317, 'fghfgh', 'dfgdfg', 'rewq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 08:00:37', NULL),
(319, 'fghfgh', 'dfgdfg', 'fewq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'sdfds5454', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, '54', 'Php,Other,', '', 0, '2021-06-11 08:01:56', NULL),
(320, 'fghfgh', 'dfgdfg', 'afewq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'sdfds5454', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, '54', 'Php,Other,', '', 0, '2021-06-11 08:03:05', NULL),
(321, 'fghfgh', 'dfgdfg', 'l@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'sdfds5454', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, '54', 'Php,Other,', '', 0, '2021-06-11 08:04:20', NULL),
(325, 'fghfgh', 'dfgdfg', 'k@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 08:06:28', NULL),
(327, 'fghfgh', 'dfgdfg', 'kq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 08:07:43', NULL),
(332, 'fghfgh', 'dsf', 'wd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 08:14:22', NULL),
(333, 'fghfgh', 'dfgdfg', 'q@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-28', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 08:39:34', NULL),
(335, 'fghfgh', 'dfgdfg', 'dddsd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-11', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 11:16:15', NULL),
(336, 'fghfgh', 'dfgdfg', 'dsfdsdss@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 12:50:19', NULL),
(337, 'fghfgh', 'gfhfgh', 'ssd@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 12:51:26', NULL),
(348, 'fghfgh', 'dfgdfg', 'wq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fdgfd', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 13:03:20', NULL),
(349, 'fghfgh', 'dfgdfg', 'wqq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fdgfd', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 13:07:11', NULL),
(350, 'fghfgh', 'dfgdfg', 'wqqw@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fdgfd', 'https://www.w3schools.com', 'fghfg', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 13:08:14', NULL),
(352, 'fghfgh', 'dfgdfg', 'ww@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-11', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'rajkot', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 13:10:36', NULL),
(353, 'fghfgh', 'dfgdfg', 'wee@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'dfrgdfghdfgh', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 13:17:02', NULL),
(354, 'gfhfgh', 'dfgdfg', 'ewq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-04', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', '', 0, '2021-06-11 13:38:21', NULL),
(355, 'fghfgh', 'dfgdfg', 'm@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-11 13:39:32', NULL),
(356, 'fghfgh', 'dfgdfg', 'kll@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-15', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'mumbai', 454, 'admin', 'Php,Other,', '', 0, '2021-06-15 04:31:21', NULL),
(357, 'fghfgh', 'dsf', 'f', '25d55ad283aa400af464c76d713c07ad', '2021-06-15', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-15 05:18:14', NULL),
(358, 'ddsdsad', 'dfgdfg', 'red@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-16 09:02:41', '2021-06-16 13:18:03'),
(359, 'fghfgh', 'dfgdfg', 'lkj@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '', 0, '2021-06-18 04:57:16', NULL),
(365, 'fghfgh', 'dfgdfg', 'dddddddddddddd@gmail.com', '78a3f35863596054007f4f13f136b04f', '2021-05-31', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'surat', 'mumbai', 454, 'admin', 'Php,Other,', 'd283b269f2c93430b640d5e319b4c604', 1, '2021-06-21 06:30:39', '2021-06-21 08:34:56'),
(366, 'fghfgh', 'jotaniya', 'ewqweqeqeqee@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-10', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'dsfdsffdsfdsf', 'surat', 'gujrat', 454, 'fghfghfg', 'Php,Other,', '2a5f7f88093b36c60b0662ff78f126eb', 1, '2021-06-21 09:52:18', '2021-06-21 10:05:44'),
(367, 'fghfgh', 'dsf', 'fdsdfsfsdfsfs@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567899, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '54e00248caffc3f1f629538f474044e7', 0, '2021-06-21 10:06:28', '2021-06-22 08:44:19'),
(368, 'gfhfgh', 'dsf', 'tree@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'dfrgdfghdfgh', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'fghfghfg', 'Php,Other,', 'c42c70f2efe77300f2bd15f26e5dd59e', 0, '2021-06-22 08:45:58', '2021-06-22 08:51:44'),
(369, 'fghfgh', 'dfgdfg', 'tt@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-28', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'up', 454, 'fghfghfg', 'Php,Other,', '13b13b7c3c46c262a3c9b3b12e6b672e', 1, '2021-06-22 08:52:38', '2021-06-22 09:14:05'),
(370, 'gfhfgh', 'dsf', 'wqwwwwqwqwq@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-28', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'mumbai', 454, 'admin', 'Php,Other,', '26ce77991c1a781d281fb03860a4c078', 1, '2021-06-22 09:15:07', '2021-06-23 04:49:42'),
(371, 'fghfgh', 'dsf', 'ffsdsfgdgdfgdfgdfgdgdg@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfghfg', 'surat', 'gujrat', 454, 'admin', 'Php,Other,', '910a4b6d9b17a4706e13671299b0b143', 1, '2021-06-23 04:50:38', '2021-06-23 10:06:34'),
(372, 'fghfgh', 'dfgdfg', 'kllo@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fghfg', 'http://a', 'fghfg', '', '1', 454, 'admin', 'Php,', '81815d89ae236742596f39cb4a8f86c3', 0, '2021-06-23 08:15:06', NULL),
(373, 'fghfgh', 'dfgdfg', 'wqwqwqw@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-27', 91, 1234567899, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', '4', '2', 454, 'fghfghfg', 'Php,Other,', 'e36be3c72f7cd2e3010149ea6974964b', 0, '2021-06-23 08:23:05', NULL),
(374, 'gfhfgh', 'dfgdfg', 'asaasa@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-06-23', 91, 1234567899, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'up', '3', 454, 'fghfghfg', 'Php,Other,', '4a64b0038c188d6ed4adf72df478fcfa', 0, '2021-06-23 08:34:36', NULL),
(375, 'fghfgh', 'dsf', 'dfrggdfgdfgdfg@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'sdfds', 'https://www.w3schools.com', 'fghfg', 'rajkot', 'gujrat', 454, 'admin', 'Php,Other,', '218c30a00d91016e8994c23aa3448211', 1, '2021-06-23 10:07:18', '2021-06-25 11:52:57'),
(379, 'fghfgh', 'dsf', 'akdsdfsdfsfsdfmin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-25', 91, 1234567898, 'female', 'dfrgdfghdfgh', 'https://www.w3schools.com', 'fghfg', '', '', 454, 'admin', 'Php,Other,', 'b7a790e3335bc4d4d7aed0d642b60ff4', 0, '2021-06-25 11:51:01', NULL),
(381, 'mohit', 'dfgdfg', 'jotaniyamohit6259@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-26', 91, 1234567898, 'female', 'fghfg', 'https://www.w3schools.com', 'fghfg', 'up', 'up', 454, 'admin', 'Php,Other,', 'db161c957dbb5071d972bb219d729835', 1, '2021-06-25 11:53:40', '2021-06-28 12:08:47'),
(382, 'parth', 'kubavat', 'parthkubavat36@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-08-14', 91, 1234567894, 'female', 'fgdf', 'https://www.youtube.com/', 'DFDFDS', 'surat', 'gujrat', 11111, 'admin', 'Php,Other,', '41335f0ca8bbd1c145ecc44a54e483cf', 0, '2021-08-14 11:31:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `idimage` int(11) NOT NULL,
  `ida` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `crate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`idimage`, `ida`, `img`, `crate_date`, `update_date`) VALUES
(1, 354, 'useri/1623418701unnamed.png', '2021-06-11 13:38:21', NULL),
(2, 354, 'useri/1623418701Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-11 13:38:21', NULL),
(4, 358, 'useri/1623834161unnamed.png', '2021-06-16 09:02:41', NULL),
(6, 358, 'useri/1623849688Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-16 13:21:28', NULL),
(7, 358, 'useri/1623849721Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-16 13:22:01', NULL),
(9, 359, 'useri/16239922366-2-php-logo-png-image-thumb.png', '2021-06-18 04:57:16', NULL),
(10, 359, 'useri/1623992237unnamed.png', '2021-06-18 04:57:17', NULL),
(11, 359, 'useri/1623992237Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-18 04:57:17', NULL),
(20, 365, 'useri/1624257045unnamed.png', '2021-06-21 06:30:45', NULL),
(21, 365, 'useri/1624257045Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-21 06:30:45', NULL),
(22, 366, 'useri/1624269144Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-21 09:52:24', NULL),
(23, 367, 'useri/1624269994unnamed.png', '2021-06-21 10:06:34', NULL),
(24, 367, 'useri/1624269994Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-21 10:06:34', NULL),
(25, 368, 'useri/16243515646-2-php-logo-png-image-thumb.png', '2021-06-22 08:46:04', NULL),
(26, 368, 'useri/1624351564unnamed.png', '2021-06-22 08:46:04', NULL),
(27, 369, 'useri/1624351964unnamed.png', '2021-06-22 08:52:44', NULL),
(28, 369, 'useri/1624351964Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-22 08:52:44', NULL),
(29, 370, 'useri/1624353313unnamed.png', '2021-06-22 09:15:13', NULL),
(30, 370, 'useri/1624353313Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-22 09:15:13', NULL),
(31, 371, 'useri/1624423838unnamed.png', '2021-06-23 04:50:38', NULL),
(32, 371, 'useri/1624423838Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-23 04:50:38', NULL),
(33, 372, 'useri/1624436106Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-23 08:15:06', NULL),
(34, 373, 'useri/16244365861518763725_Brainvire-logo_mid.png', '2021-06-23 08:23:06', NULL),
(35, 374, 'useri/1624437277Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-23 08:34:37', NULL),
(36, 375, 'useri/1624442844unnamed.png', '2021-06-23 10:07:24', NULL),
(37, 138, 'useri/16246090326-2-php-logo-png-image-thumb.png', '2021-06-25 08:17:12', NULL),
(38, 379, 'useri/1624621866unnamed.png', '2021-06-25 11:51:06', NULL),
(39, 379, 'useri/1624621866Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-25 11:51:06', NULL),
(40, 379, 'useri/16246218661518763725_Brainvire-logo_mid.png', '2021-06-25 11:51:06', NULL),
(44, 381, 'useri/1624622025unnamed.png', '2021-06-25 11:53:45', NULL),
(45, 382, 'useri/Screenshot from 2021-04-06 12-16-53.png', '2021-08-14 11:31:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image1`
--

CREATE TABLE `image1` (
  `ida` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `crate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image1`
--

INSERT INTO `image1` (`ida`, `img`, `crate_date`, `update_date`) VALUES
(0, 'useri/16233055191518763725_Brainvire-logo_mid.png', '2021-06-10 06:11:59', NULL),
(0, 'useri/1623305586Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-10 06:13:06', NULL),
(0, 'useri/16233056106-2-php-logo-png-image-thumb.png', '2021-06-10 06:13:30', NULL),
(0, 'useri/1623314442unnamed.png', '2021-06-10 08:40:42', NULL),
(0, 'useri/1623314471unnamed.png', '2021-06-10 08:41:11', NULL),
(0, 'useri/1623314537unnamed.png', '2021-06-10 08:42:17', NULL),
(0, 'useri/1623314709unnamed.png', '2021-06-10 08:45:09', NULL),
(0, 'useri/1623314760unnamed.png', '2021-06-10 08:46:00', NULL),
(0, 'useri/1623316616unnamed.png', '2021-06-10 09:16:56', NULL),
(0, 'useri/1623316679unnamed.png', '2021-06-10 09:17:59', NULL),
(0, 'useri/16233291506-2-php-logo-png-image-thumb.png', '2021-06-10 12:45:50', NULL),
(0, 'useri/1623399262unnamed.png', '2021-06-11 08:14:22', NULL),
(0, 'useri/16234007746-2-php-logo-png-image-thumb.png', '2021-06-11 08:39:34', NULL),
(0, 'useri/16234101756-2-php-logo-png-image-thumb.png', '2021-06-11 11:16:15', NULL),
(0, 'useri/16234169186-2-php-logo-png-image-thumb.png', '2021-06-11 13:08:38', NULL),
(0, 'useri/1623416918Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-11 13:08:38', NULL),
(0, 'useri/16234170366-2-php-logo-png-image-thumb.png', '2021-06-11 13:10:36', NULL),
(353, 'useri/1623417422unnamed.png', '2021-06-11 13:17:02', NULL),
(353, 'useri/1623417422Happy-boy-cartoon-on-transparent-background-PNG.png', '2021-06-11 13:17:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sals`
--

CREATE TABLE `sals` (
  `sid` int(11) NOT NULL,
  `ida` int(11) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sals`
--

INSERT INTO `sals` (`sid`, `ida`, `salary`) VALUES
(1, 159, 123456),
(2, 196, 123456),
(3, 211, 123456),
(4, 234, 123456),
(5, 236, 123456),
(6, 237, 123456),
(7, 241, 123456),
(8, 244, 123456),
(9, 245, 123456),
(10, 246, 123456),
(11, 247, 123456),
(12, 248, 123456),
(13, 250, 123456),
(14, 252, 123456),
(15, 294, 123456),
(16, 295, 123456),
(17, 300, 123456),
(18, 301, 123456),
(19, 302, 123456),
(20, 303, 123456),
(21, 304, 123456),
(22, 305, 123456),
(23, 308, 123456),
(24, 309, 123456),
(25, 310, 123456),
(26, 311, 123456),
(27, 313, 123456),
(28, 314, 123456),
(29, 317, 123456),
(30, 319, 123456),
(31, 320, 123456),
(32, 332, 123456),
(33, 333, 123456),
(34, 335, 123456),
(35, 336, 123456),
(36, 337, 123456),
(37, 348, 123456),
(38, 349, 123456),
(39, 350, 123456),
(40, 352, 123456),
(41, 353, 123456),
(42, 354, 123456),
(43, 355, 123456),
(44, 356, 123456),
(45, 357, 123456),
(46, 358, 654123),
(47, 359, 25896),
(53, 365, 25852),
(54, 366, 2585258),
(55, 367, 255858),
(56, 368, 25852),
(57, 369, 25585),
(58, 370, 125585),
(59, 371, 25252),
(60, 372, 255252),
(61, 373, 25852),
(62, 374, 2585),
(63, 375, 25852);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addsalary`
--
ALTER TABLE `addsalary`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_id` (`e_id`,`month`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idimage`),
  ADD KEY `ida` (`ida`);

--
-- Indexes for table `sals`
--
ALTER TABLE `sals`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `id` (`ida`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addsalary`
--
ALTER TABLE `addsalary`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `idimage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `sals`
--
ALTER TABLE `sals`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addsalary`
--
ALTER TABLE `addsalary`
  ADD CONSTRAINT `addsalary_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee` (`id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `country` (`cid`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`ida`) REFERENCES `employee` (`id`);

--
-- Constraints for table `sals`
--
ALTER TABLE `sals`
  ADD CONSTRAINT `sals_ibfk_1` FOREIGN KEY (`ida`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
