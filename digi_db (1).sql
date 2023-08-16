-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 11:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
                        `id` int(11) NOT NULL,
                        `product_id` int(11) NOT NULL,
                        `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `quantity`) VALUES
                                                        (1, 1, 4),
                                                        (2, 1, 8),
                                                        (3, 1, 1),
                                                        (4, 1, 1),
                                                        (5, 1, 1),
                                                        (6, 1, 2),
                                                        (7, 1, 2),
                                                        (8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
                              `id` int(11) NOT NULL,
                              `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
                                            (1, 'اجاق'),
                                            (2, 'مایکروویو'),
                                            (3, 'توستر');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
                            `id` int(11) NOT NULL,
                            `name` varchar(64) CHARACTER SET utf8 NOT NULL,
                            `email` varchar(64) NOT NULL,
                            `comment` varchar(256) NOT NULL,
                            `rate` int(11) NOT NULL,
                            `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `rate`, `product_id`) VALUES
                                                                                    (1, 'hananeh', 'hananeh@dev.info', 'سلام ، راضی هستین از این محصول ، پیشنهاد برا خرید میکنین؟', 5, 1),
                                                                                    (2, 'test', 'test@dev.info', 'test', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
                            `id` int(11) NOT NULL,
                            `code` varchar(16) NOT NULL,
                            `name` varchar(64) CHARACTER SET utf8 NOT NULL,
                            `description` varchar(256) CHARACTER SET utf8 NOT NULL,
                            `img` varchar(64) NOT NULL,
                            `weight` int(11) NOT NULL,
                            `color` varchar(64) NOT NULL,
                            `price` int(11) NOT NULL,
                            `category_id` int(11) NOT NULL,
                            `seen` int(11) NOT NULL,
                            `sold` int(11) NOT NULL,
                            `discount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `description`, `img`, `weight`, `color`, `price`, `category_id`, `seen`, `sold`, `discount`) VALUES
                                                                                                                                               (1, 'TSF14', 'اجاق گاز بوش مدل-657', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/اجاق0.jpg', 20, 'سفید', 1550000, 1, 35, 10, 25),
                                                                                                                                               (2, 'RTF14', 'اجاق گاز طرح فر مدلRSDF', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/اجاق.jfif', 30, 'سیاه', 9550000, 1, 40, 20, 10),
                                                                                                                                               (3, 'RTF42', 'اجاق گاز طرح فر دی استیل', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/اجاق1.jpg', 35, 'نقره', 3850000, 1, 50, 60, 39),
                                                                                                                                               (4, 'R6F42', 'اجاق گاز مبله آلتونMA4W', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/اجاق2.jpg', 29, 'نقره', 2150000, 1, 43, 25, 28),
                                                                                                                                               (5, 'R6F52', 'اجاق گاز توکار مدل-1014S', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/اجاق4.jpg', 6, 'سیاه', 1250000, 1, 6, 15, 46),
                                                                                                                                               (6, 'T6F52', 'مایکروویو جی پلاس مدل-GMV', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/توستر1.jpg', 15, 'نقره', 3250000, 2, 39, 10, 13),
                                                                                                                                               (7, 'TH652', 'توستر اسمگ مدل-TSF14BLUE', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/توستر3.jpeg', 8, 'آبی', 4950000, 3, 30, 10, 19),
                                                                                                                                               (8, 'TK893', 'توستر کیچن اید مدل-5KMD', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', 'آشپزخانه/توستر4.jpeg', 9, 'سفید', 2550000, 3, 60, 25, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
                            `id_user` int(11) NOT NULL,
                            `email_user` text DEFAULT NULL,
                            `username_user` text NOT NULL,
                            `password_user` text NOT NULL,
                            `phone_user` text DEFAULT NULL,
                            `name_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email_user`, `username_user`, `password_user`, `phone_user`, `name_user`) VALUES
                                                                                                                  (1, 'aubvav@zkn.ir', 'zeinab', '123456', '09123654789', 'zeinab'),
                                                                                                                  (2, NULL, 'zahra', 'a1JuTVpKdFRkQjUzLzVCVWl2c0p3Zz09', NULL, ''),
                                                                                                                  (3, NULL, 'zahra3', 'a1JuTVpKdFRkQjUzLzVCVWl2c0p3Zz09', NULL, ''),
                                                                                                                  (4, NULL, 'zahra2', 'a1JuTVpKdFRkQjUzLzVCVWl2c0p3Zz09', NULL, ''),
                                                                                                                  (5, NULL, 'zahra1', 'a1JuTVpKdFRkQjUzLzVCVWl2c0p3Zz09', NULL, ''),
                                                                                                                  (6, NULL, 'zahra14', 'a1JuTVpKdFRkQjUzLzVCVWl2c0p3Zz09', NULL, ''),
                                                                                                                  (17, NULL, 'asma', 'VWtmbFhDSFNSTjFhOEdabS9URG9BQT09', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
    ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
    MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
