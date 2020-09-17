-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 01:36 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartbazer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `brandname` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `brandname`, `status`) VALUES
(7, 'SAMSUNG', 'active'),
(8, 'HP', 'active'),
(9, 'Nokia', 'active'),
(10, 'Ascer', 'acitve'),
(11, 'Asus', 'acitve'),
(12, 'Adata', 'acitve'),
(13, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `category_name`, `status`) VALUES
(4, 'Tab', 'inactive'),
(5, 'I Pad', 'active'),
(6, 'Laptop', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'hafizur', 'siyam@piit.us', 'afafafa'),
(2, 'Hafizur', 'naim@gmail.com', 'afafa'),
(3, '', '', ''),
(4, 'tanvir', 'tanvir@gmail.com', 'afafafaf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `email`, `password`, `address`) VALUES
(1, 'Naim', 'naim@gmail.com', '123', 'Dhaka-1270'),
(3, 'hafizur', 'hafizur@gmail.com', '123', 'Dhaka-1207');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cmrId`, `productId`, `productName`, `quantity`, `price`, `image`, `orderdate`, `status`) VALUES
(32, 1, 2, 'Acer TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', 1, 170000, 'uploads/628c11d6ed.png', '2018-04-10 16:14:52', 0),
(33, 1, 2, 'Acer TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', 1, 170000, 'uploads/628c11d6ed.png', '2018-04-10 16:21:02', 1),
(34, 1, 7, 'ASUS G752VY-6700HQ Intel Core i7 6th Gen with Free REVE Internet Security', 1, 50000, 'uploads/67b0a3a535.jpg', '2018-04-10 16:32:49', 1),
(35, 1, 2, 'Acer TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', 1, 170000, 'uploads/628c11d6ed.png', '2018-04-10 16:35:54', 1),
(36, 3, 2, 'Acer TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', 1, 170000, 'uploads/628c11d6ed.png', '2018-04-12 16:46:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `catid`, `brandId`, `product_name`, `price`, `type`, `image`, `status`, `details`) VALUES
(2, 5, 10, 'Acer TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', '170000', 'feature', 'uploads/628c11d6ed.png', 'active', '&lt;h2 style=&quot;margin: 0px 0px 1rem; padding: 0px; box-sizing: border-box; font-size: 20px; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 1.35; color: #606060; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal;&quot;&gt;Nokia 5 Android Mobile Phone&lt;/h2&gt;\r\n&lt;ul style=&quot;margin: 0px 0px 1em; padding: 0px 0px 0px 1.5em; box-sizing: border-box; list-style-position: outside; list-style-image: initial; color: #606060; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif;&quot;&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;OS: Android 7.0 (Nougat)&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Processor: Octa-core 1.4 GHz Cortex-A53&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Display: 5.2&amp;rdquo; IPS LCD 1280 x 720, 16:9&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Technology: 2.5D sculpted Corning&amp;reg; Gorilla&amp;reg; Glass&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;CPU: Qualcomm&amp;reg; Snapdragon&amp;trade; 430 mobile platform&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;RAM: 2GB&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;ROM: 16GB&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Primary Camera: 13MP PDAF, 1.12um, f/2, dual tone flash&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Secondary Camera: 8MP AF, 1.12um, f/2, FOV 84 degrees&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Battery: Integrated 3000 mAh battery&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Sensors: Accelerometer (G-sensor), ambient light sensor,&amp;nbsp;&lt;/span&gt;e-compass&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;, fingerprint sensor, Hall sensor, gyroscope, proximity sensor, NFC (sharing)&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;'),
(3, 4, 7, 'Apple TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', '153000', 'feature', 'uploads/c962adf738.png', 'active', '&lt;h2 style=&quot;margin: 0px 0px 1rem; padding: 0px; box-sizing: border-box; font-size: 20px; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 1.35; color: #606060; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal;&quot;&gt;ADATA UV320 Flash Drive 16GB&lt;/h2&gt;\r\n&lt;ul style=&quot;margin: 0px 0px 1em; padding: 0px 0px 0px 1.5em; box-sizing: border-box; list-style-position: outside; list-style-image: initial; color: #606060; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif;&quot;&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;OS: Free DOS&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Processor: 7th Gen Intel Core i5&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;RAM: 4GB DDR 4&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Hard Drive: 1TB 5400 RPM&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Optical Drive: DVD R+W&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;'),
(4, 6, 10, 'Acer TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', '39990', 'feature', 'uploads/914c784815.png', 'active', '&lt;h2 style=&quot;margin: 0px 0px 1rem; padding: 0px; box-sizing: border-box; font-size: 20px; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 1.35; color: #606060; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal;&quot;&gt;Acer TravelMate TMP 249 G2-M-50UH Laptop&lt;/h2&gt;\r\n&lt;ul style=&quot;margin: 0px 0px 1em; padding: 0px 0px 0px 1.5em; box-sizing: border-box; list-style-position: outside; list-style-image: initial; color: #606060; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif;&quot;&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;OS: Free DOS&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Processor: 7th Gen Intel Core i5&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;RAM: 4GB DDR 4&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Hard Drive: 1TB 5400 RPM&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Optical Drive: DVD R+W&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;'),
(5, 6, 11, 'ASUS G752VY-6700HQ Intel Core i7 6th Gen with Free REVE Internet Security', '188810', 'new', 'uploads/b5e6ac42b6.png', 'active', '&lt;p style=&quot;margin: 0px 0px 10px; padding: 0px; box-sizing: border-box; color: #606060; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif;&quot;&gt;&lt;strong style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: medium;&quot;&gt;ASUS G752VY-6700HQ&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;ul style=&quot;margin: 0px 0px 1em; padding: 0px 0px 0px 1.5em; box-sizing: border-box; list-style-position: outside; list-style-image: initial; color: #606060; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif;&quot;&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;On board processor - Intel Core i7 6th Gen 6700HQ, 2.60 GHz (3.50 GHz by Turbo Frequency) 6 MB Cache&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Operating System - Free DOS&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;On board memory - DDR4 2133 MHz SDRAM, 32 GB&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Storage - 2 TB SATA HDD &amp;amp; 128 GB SSD&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Display - 17.3&quot; 16:9 HD IPS FHD (1920 X 1080)&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Video Graphics - NVIDIA&amp;reg; GeForce&amp;reg; GTX 980M with 8GB GDDR5 VRAM&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;External video display modes - HDMI 1.4&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Video Camera - HD web camera&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Optical Drive - Blu-Ray DVD Writer&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Networking - &quot;Integrated 802.11 a/b/g/n/ac or 802.11 ac (WiDi)&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Built-in Bluetooth&amp;trade; V4.0, Built-in Bluetooth&amp;trade; V4.1&quot;&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Card Reader - 3 -in-1 card reader (SD/ SDHC/ SDXC/ MMC)&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Interface - &quot;1 x Microphone-in jack, 1 x USB 3.1 TYPE C port(s), 4 x USB 3.0 port(s) , 1 x USB-C Gen 1 (up to 5 Gbps), 1 x RJ45 LAN Jack for LAN insert, 1 x HDMI ,1 x Thunderbolt port (Optional), 1 x SD card reader, 1X AC adapter plug&quot;&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Audio - Built-in 2 Speaker(s) And Microphone, Built-in subwoofer&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Battery - 88 Whrs Battery&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;'),
(6, 4, 12, 'ADATA 16GB USB 3.0 Metallic Pendrive UV131', '650', 'new', 'uploads/c570563952.jpg', 'inactive', '&lt;h2 style=&quot;margin: 0px 0px 1rem; padding: 0px; box-sizing: border-box; font-size: 20px; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 1.35; color: #606060; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal;&quot;&gt;ADATA 16GB USB 3.0 Metallic Pendrive UV131&lt;/h2&gt;\r\n&lt;ul style=&quot;margin: 0px 0px 1em; padding: 0px 0px 0px 1.5em; box-sizing: border-box; list-style-position: outside; list-style-image: initial; color: #606060; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif;&quot;&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Capacity: 16GB&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Durable &amp;amp; Easy-to-go&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;The Beauty Of Simplicity&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Product dimension - 4 x 0.3 x 4.5 inches&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Item dimension LxWxH - 4 x 0.35 x 4.5 inches&lt;/span&gt;&lt;/li&gt;\r\n&lt;li style=&quot;margin: 0px; padding: 0px; box-sizing: border-box;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Interface: USB 3.1 (backward compatible with USB 2.0)&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p style=&quot;margin: 0px 0px 10px; padding: 0px; box-sizing: border-box; color: #606060; font-family: Lato, \'Helvetica Neue\', Helvetica, Arial, sans-serif; text-align: justify;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; box-sizing: border-box; font-size: small;&quot;&gt;Seamlessly crafted with a chromium-gray finish, the UV131 USB Flash Drive is a stylish statement about simplicity and durability. For those who demand high quality, it features a sturdy zinc-alloy housing with a streamlined exterior and capless design that delivers the ultimate in professionalism and ease-of-use.&amp;nbsp;&lt;/span&gt;Thanks to its style and portability, the UV131 is not only an USB flash drive, but also a fashion accessory for your daily life.&lt;/p&gt;'),
(7, 6, 11, 'ASUS G752VY-6700HQ Intel Core i7 6th Gen with Free REVE Internet Security', '50000', 'feature', 'uploads/67b0a3a535.jpg', 'active', '&lt;ul&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt;&amp;nbsp;7th Generation Intel Core i3-7100U Processor (2.4GHz, 3MB L3 cache) &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; 15.6&quot; Full HD Widescreen ComfyView LED-backlit Display supporting Acer ColorBlast technology &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; 4GB DDR4 Memory, 1TB 5400RPM HDD &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; Windows 10 Home &lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; Up to 12-hours Battery Life &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;'),
(8, 6, 10, 'Acer TravelMate 7th Gen Core i5 14&quot; 4GB/1TB Laptop (TMP 249 G2-M-50UH)', '120000', 'new', 'uploads/6d527ba83e.png', 'active', '&lt;ul&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;7th Generation Intel Core i3-7100U Processor (2.4GHz, 3MB L3 cache) &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; 15.6&quot; Full HD Widescreen ComfyView LED-backlit Display supporting Acer ColorBlast technology &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; 4GB DDR4 Memory, 1TB 5400RPM HDD &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; Windows 10 Home &lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; Up to 12-hours Battery Life &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;'),
(9, 6, 7, 'Samsung G752VY-6700HQ Intel Core i7 6th Gen with Free REVE Internet Security', '200000', 'new', 'uploads/1c6867ef5c.jpeg', 'active', '&lt;ul&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt;7th Generation Intel Core i3-7100U Processor (2.4GHz, 3MB L3 cache) &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; 15.6&quot; Full HD Widescreen ComfyView LED-backlit Display supporting Acer ColorBlast technology &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; 4GB DDR4 Memory, 1TB 5400RPM HDD &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; Windows 10 Home &lt;/span&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt; Up to 12-hours Battery Life &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `details`, `image`) VALUES
(6, 'Second Slide', '&lt;p&gt;A standard laptop combines the components, inputs, outputs, and capabilities of a &lt;a title=&quot;Desktop computer&quot; href=&quot;https://en.wikipedia.org/wiki/Desktop_computer&quot;&gt;desktop computer&lt;/a&gt;, including the &lt;a title=&quot;Computer monitor&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_monitor&quot;&gt;display screen&lt;/a&gt;, small &lt;a title=&quot;Computer speakers&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_speakers&quot;&gt;speakers&lt;/a&gt;, a &lt;a title=&quot;Computer keyboard&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_keyboard&quot;&gt;keyboard&lt;/a&gt;, &lt;a title=&quot;Hard disk drive&quot; href=&quot;https://en.wikipedia.org/wiki/Hard_disk_drive&quot;&gt;hard disk drive&lt;/a&gt;, &lt;a title=&quot;Optical disc drive&quot; href=&quot;https://en.wikipedia.org/wiki/Optical_disc_drive&quot;&gt;optical disc drive&lt;/a&gt; pointing devices (such as a &lt;a title=&quot;Touchpad&quot; href=&quot;https://en.wikipedia.org/wiki/Touchpad&quot;&gt;touchpad&lt;/a&gt; or trackpad), a &lt;a title=&quot;Processor (computing)&quot; href=&quot;https://en.wikipedia.org/wiki/Processor_(computing)&quot;&gt;processor&lt;/a&gt;, and &lt;a title=&quot;Computer memory&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_memory&quot;&gt;memory&lt;/a&gt; into a single unit. Most modern laptops feature integrated &lt;a title=&quot;Webcam&quot; href=&quot;https://en.wikipedia.org/wiki/Webcam&quot;&gt;webcams&lt;/a&gt; and built-in &lt;a title=&quot;Microphone&quot; href=&quot;https://en.wikipedia.org/wiki/Microphone&quot;&gt;microphones&lt;/a&gt;, while many also have &lt;a title=&quot;Touchscreen&quot; href=&quot;https://en.wikipedia.org/wiki/Touchscreen&quot;&gt;touchscreens&lt;/a&gt;.&amp;nbsp;&lt;/p&gt;', 'uploads/e032fee5b6.jpg'),
(7, 'Third Slide', '&lt;p&gt;A standard laptop combines the components, inputs, outputs, and capabilities of a&amp;nbsp;&lt;a title=&quot;Desktop computer&quot; href=&quot;https://en.wikipedia.org/wiki/Desktop_computer&quot;&gt;desktop computer&lt;/a&gt;, including the&amp;nbsp;&lt;a title=&quot;Computer monitor&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_monitor&quot;&gt;display screen&lt;/a&gt;, small&amp;nbsp;&lt;a title=&quot;Computer speakers&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_speakers&quot;&gt;speakers&lt;/a&gt;, a&amp;nbsp;&lt;a title=&quot;Computer keyboard&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_keyboard&quot;&gt;keyboard&lt;/a&gt;,&amp;nbsp;&lt;a title=&quot;Hard disk drive&quot; href=&quot;https://en.wikipedia.org/wiki/Hard_disk_drive&quot;&gt;hard disk drive&lt;/a&gt;,&amp;nbsp;&lt;a title=&quot;Optical disc drive&quot; href=&quot;https://en.wikipedia.org/wiki/Optical_disc_drive&quot;&gt;optical disc drive&lt;/a&gt;&amp;nbsp;pointing devices (such as a&amp;nbsp;&lt;a title=&quot;Touchpad&quot; href=&quot;https://en.wikipedia.org/wiki/Touchpad&quot;&gt;touchpad&lt;/a&gt;&amp;nbsp;or trackpad), a&amp;nbsp;&lt;a title=&quot;Processor (computing)&quot; href=&quot;https://en.wikipedia.org/wiki/Processor_(computing)&quot;&gt;processor&lt;/a&gt;, and&amp;nbsp;&lt;a title=&quot;Computer memory&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_memory&quot;&gt;memory&lt;/a&gt;&amp;nbsp;into a single unit. Most modern laptops feature integrated&amp;nbsp;&lt;a title=&quot;Webcam&quot; href=&quot;https://en.wikipedia.org/wiki/Webcam&quot;&gt;webcams&lt;/a&gt;&amp;nbsp;and built-in&amp;nbsp;&lt;a title=&quot;Microphone&quot; href=&quot;https://en.wikipedia.org/wiki/Microphone&quot;&gt;microphones&lt;/a&gt;, while many also have&amp;nbsp;&lt;a title=&quot;Touchscreen&quot; href=&quot;https://en.wikipedia.org/wiki/Touchscreen&quot;&gt;touchscreens&lt;/a&gt;.&amp;nbsp;&lt;/p&gt;', 'uploads/4195344b7c.jpeg'),
(9, 'Fourth Slider', '&lt;p&gt;A standard laptop combines the components, inputs, outputs, and capabilities of a&amp;nbsp;&lt;a title=&quot;Desktop computer&quot; href=&quot;https://en.wikipedia.org/wiki/Desktop_computer&quot;&gt;desktop computer&lt;/a&gt;, including the&amp;nbsp;&lt;a title=&quot;Computer monitor&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_monitor&quot;&gt;display screen&lt;/a&gt;, small&amp;nbsp;&lt;a title=&quot;Computer speakers&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_speakers&quot;&gt;speakers&lt;/a&gt;, a&amp;nbsp;&lt;a title=&quot;Computer keyboard&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_keyboard&quot;&gt;keyboard&lt;/a&gt;,&amp;nbsp;&lt;a title=&quot;Hard disk drive&quot; href=&quot;https://en.wikipedia.org/wiki/Hard_disk_drive&quot;&gt;hard disk drive&lt;/a&gt;,&amp;nbsp;&lt;a title=&quot;Optical disc drive&quot; href=&quot;https://en.wikipedia.org/wiki/Optical_disc_drive&quot;&gt;optical disc drive&lt;/a&gt;&amp;nbsp;pointing devices (such as a&amp;nbsp;&lt;a title=&quot;Touchpad&quot; href=&quot;https://en.wikipedia.org/wiki/Touchpad&quot;&gt;touchpad&lt;/a&gt;&amp;nbsp;or trackpad), a&amp;nbsp;&lt;a title=&quot;Processor (computing)&quot; href=&quot;https://en.wikipedia.org/wiki/Processor_(computing)&quot;&gt;processor&lt;/a&gt;, and&amp;nbsp;&lt;a title=&quot;Computer memory&quot; href=&quot;https://en.wikipedia.org/wiki/Computer_memory&quot;&gt;memory&lt;/a&gt;&amp;nbsp;into a single unit. Most modern laptops feature integrated&amp;nbsp;&lt;a title=&quot;Webcam&quot; href=&quot;https://en.wikipedia.org/wiki/Webcam&quot;&gt;webcams&lt;/a&gt;&amp;nbsp;and built-in&amp;nbsp;&lt;a title=&quot;Microphone&quot; href=&quot;https://en.wikipedia.org/wiki/Microphone&quot;&gt;microphones&lt;/a&gt;, while many also have&amp;nbsp;&lt;a title=&quot;Touchscreen&quot; href=&quot;https://en.wikipedia.org/wiki/Touchscreen&quot;&gt;touchscreens&lt;/a&gt;.&amp;nbsp;&lt;/p&gt;', 'uploads/ed9ef26092.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` enum('active','inactive','','') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`, `image`, `status`) VALUES
(1, 'HAFIZUR RAHMAN', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
