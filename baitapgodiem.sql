-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 05:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managesv`
--
-- --------------------------------------------------------
--
-- Table structure for table `baitapgodiem`
--
CREATE TABLE `baitapgodiem` (
  `hoten` text NOT NULL,
  `masinhvien` int(11) NOT NULL,
  `namsinhsv` text NOT NULL,
  `lop` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baitapgodiem`
--

INSERT INTO `baitapgodiem` (`hoten`, `masinhvien`, `namsinhsv`, `lop`) VALUES
('Đỗ Việt Dũng IT-14-02', 1451020040, '2001', 'Làm riêng(không chung nhóm)');
COMMIT;

