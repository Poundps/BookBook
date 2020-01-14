-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 11:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12064388_bookbook`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `showbookbyprice` (IN `min1` INT(100), IN `max1` INT(100))  NO SQL
SELECT * FROM books
WHERE book_price >=min1 AND book_price <=max1 ORDER BY book_price$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `showBookbyType` (IN `type` VARCHAR(10))  NO SQL
SELECT * FROM books
WHERE book_type LIKE type$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_type` varchar(100) NOT NULL,
  `book_price` int(255) NOT NULL,
  `book_dir` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_type`, `book_price`, `book_dir`) VALUES
(1, 'Boys Club', 'BestBook', 800, './Phtos/Photoinweb/N4.png'),
(2, 'LIPS', 'BestBook', 999, './Phtos/Photoinweb/M4.png'),
(3, 'Wild Ep4', 'BestBook', 1000, './Phtos/Photoinweb/N10.png'),
(4, 'Wild Ep1', 'BestBook', 400, './Phtos/Photoinweb/N3.png'),
(5, 'Angelina Jolie', 'BestMagazine', 100, './Phtos/Photoinweb/M5.png'),
(6, 'IDO', 'BestMagazine', 300, './Phtos/Photoinweb/M8.png'),
(7, 'Pregnancy', 'BestMagazine', 999, './Phtos/Photoinweb/M10.png'),
(8, 'Hello! Special', 'BestMagazine', 999, './Phtos/Photoinweb/BM4.png'),
(9, 'Red&Orange', 'Bestnews', 999, './Phtos/Photoinweb/P4.png'),
(10, 'Work Today', 'Bestnews', 999, './Phtos/Photoinweb/P6.png'),
(11, 'Happy', 'Bestnews', 999, './Phtos/Photoinweb/P5.png'),
(12, 'LLT', 'Bestnews', 999, './Phtos/Photoinweb/P9.png'),
(13, 'Power Ranger', 'Comic', 100, './Phtos/Photoinweb/C1.png'),
(14, 'Evolution', 'Comic', 200, './Phtos/Photoinweb/C2.png'),
(15, 'Scary comic', 'Comic', 300, './Phtos/Photoinweb/C3.png'),
(16, 'CUTIONAL', 'Comic', 400, './Phtos/Photoinweb/C4.png'),
(17, 'Two lions Ep2', 'Comic', 500, './Phtos/Photoinweb/C5.png'),
(18, 'Mola', 'Comic', 600, './Phtos/Photoinweb/C6.png'),
(19, 'Two lions Ep3', 'Comic', 700, './Phtos/Photoinweb/C7.png'),
(20, 'Two lions Ep1', 'Comic', 800, './Phtos/Photoinweb/C8.png'),
(21, 'Fon gu Ep1', 'Comic', 900, './Phtos/Photoinweb/C9.png'),
(22, 'Fon gu Ep2', 'Comic', 900, './Phtos/Photoinweb/C10.png'),
(23, 'Wedding', 'Magazine', 999, './Phtos/Photoinweb/M1.png'),
(24, 'Mom and child', 'Magazine', 999, './Phtos/Photoinweb/M2.png'),
(25, 'WEIR&BELLA', 'Magazine', 999, './Phtos/Photoinweb/M3.png'),
(26, 'LIPS', 'Magazine', 999, './Phtos/Photoinweb/M4.png'),
(27, 'Angelina Jolie', 'Magazine', 999, './Phtos/Photoinweb/M5.png'),
(28, 'JanChan XLARME Girls', 'Magazine', 500, './Phtos/Photoinweb/M6.png'),
(29, 'Home Mother', 'Magazine', 999, './Phtos/Photoinweb/M7.png'),
(30, 'IDO', 'Magazine', 999, './Phtos/Photoinweb/M8.png'),
(31, 'VOGUE beauty', 'Magazine', 999, './Phtos/Photoinweb/M9.png'),
(32, 'Pregnancy', 'Magazine', 999, './Phtos/Photoinweb/M10.png'),
(33, 'Under Shadow', 'Novel', 999, './Phtos/Photoinweb/N1.png'),
(34, 'heart', 'Novel', 999, './Phtos/Photoinweb/N2.png'),
(35, 'Wild Ep1', 'Novel', 850, './Phtos/Photoinweb/N3.png'),
(36, 'Boys Club', 'Novel', 999, './Phtos/Photoinweb/N4.png'),
(37, 'Flowers', 'Novel', 600, './Phtos/Photoinweb/N5.png'),
(38, 'WEAPON UNIVERSE', 'Novel', 999, './Phtos/Photoinweb/N6.png'),
(39, 'wild Ep2', 'Novel', 999, './Phtos/Photoinweb/N7.png'),
(40, '10 bad cases', 'Novel', 999, './Phtos/Photoinweb/N8.png'),
(41, 'Wild Ep3', 'Novel', 999, './Phtos/Photoinweb/N9.png'),
(42, 'Wild Ep4', 'Novel', 999, './Phtos/Photoinweb/N10.png'),
(43, 'War', 'News', 999, './Phtos/Photoinweb/P1.png'),
(44, 'Matidchon', 'News', 999, './Phtos/Photoinweb/P2.png'),
(45, 'Nations', 'News', 999, './Phtos/Photoinweb/P3.png'),
(46, 'Red&Orange', 'News', 999, './Phtos/Photoinweb/P4.png'),
(47, 'Happy', 'News', 999, './Phtos/Photoinweb/P5.png'),
(48, 'Work Today', 'News', 999, './Phtos/Photoinweb/P6.png'),
(49, 'ARCHDECO', 'News', 400, './Phtos/Photoinweb/P7.png'),
(50, 'CLOSE-UP', 'News', 999, './Phtos/Photoinweb/P8.png'),
(51, 'LLT', 'News', 999, './Phtos/Photoinweb/P9.png'),
(52, 'Two lions Ep1', 'BestComic', 999, './Phtos/Photoinweb/C8.png'),
(53, 'Evolution', 'BestComic', 999, './Phtos/Photoinweb/C2.png'),
(54, 'Fon gu Ep2', 'BestComic', 800, './Phtos/Photoinweb/C10.png'),
(55, 'CUTIONAL', 'BestComic', 999, './Phtos/Photoinweb/C4.png'),
(69, 'YOYO', 'Novel', 999, './Phtos/Photoinweb/B11.PNG'),
(70, 'HELLO', 'Novel', 999, './Phtos/Photoinweb/B10.PNG'),
(71, 'TUATUA', 'Novel', 400, './Phtos/Photoinweb/B11.PNG'),
(72, 'xxx', 'Novel', 555, './Phtos/Photoinweb/B8.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `book_username` varchar(20) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `book_dir` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `book_username`, `book_name`, `book_dir`) VALUES
(26, 'pee220941', 'under shadow', './phtos/photoinweb/n1.png'),
(27, 'pee220941', 'weapon universe', './phtos/photoinweb/n6.png'),
(28, 'pee220941', '10 bad cases', './phtos/photoinweb/n8.png'),
(29, 'Pee', 'wild ep2', './phtos/photoinweb/n7.png'),
(30, 'Pee', 'wild ep1', './phtos/photoinweb/n3.png'),
(31, 'Pee', 'weapon universe', './phtos/photoinweb/n6.png'),
(32, 'Pee', 'scary comic', './phtos/photoinweb/c3.png'),
(33, 'Pee', 'hello! special', './phtos/photoinweb/bm4.png'),
(34, 'Pee', 'flowers', './phtos/photoinweb/n5.png'),
(35, 'Pee', 'pregnancy', './phtos/photoinweb/m10.png'),
(36, 'Pee', 'gun', './phtos/photoinweb/bm3.png'),
(37, 'Pee', 'work today', './phtos/photoinweb/p6.png'),
(38, 'Pee', 'fon gu ep2', './phtos/photoinweb/c10.png'),
(39, 'Pee', 'wild ep2', './phtos/photoinweb/n7.png'),
(40, 'Pee', 'weapon universe', './phtos/photoinweb/n6.png'),
(41, 'Tua', 'under shadow', './phtos/photoinweb/n1.png'),
(42, 'Tua', 'evolution', './phtos/photoinweb/c2.png'),
(43, 'june', 'wild ep1', './phtos/photoinweb/n3.png'),
(44, 'june', 'evolution', './phtos/photoinweb/c2.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment_cards`
--

CREATE TABLE `payment_cards` (
  `cards_id` int(11) NOT NULL,
  `name_card` varchar(20) NOT NULL,
  `creditnum` varchar(19) NOT NULL,
  `expmonth` varchar(15) NOT NULL,
  `expyear` varchar(6) NOT NULL,
  `cvv` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_cards`
--

INSERT INTO `payment_cards` (`cards_id`, `name_card`, `creditnum`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'Soravit Varanich', '1111-2222-3333-4444', 'September', '2020', '123');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcarts`
--

CREATE TABLE `shoppingcarts` (
  `shop_id` int(11) NOT NULL,
  `book_username` varchar(20) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `book_price` varchar(15) NOT NULL,
  `book_dir` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcarts`
--

INSERT INTO `shoppingcarts` (`shop_id`, `book_username`, `book_name`, `book_price`, `book_dir`) VALUES
(198, 'specter_9s', 'gun', '999', './phtos/photoinweb/bm3.png'),
(199, 'specter_9s', 'fon gu ep2', '999', './phtos/photoinweb/c10.png'),
(200, 'specter_9s', 'evolution', '999', './phtos/photoinweb/c2.png'),
(209, 'pee', 'tuatua', '400', './phtos/photoinweb/b11.png'),
(210, 'pee', 'wild ep2', '999', './phtos/photoinweb/n7.png'),
(211, 'pee', 'heart', '999', './phtos/photoinweb/n2.png'),
(212, 'pee', 'wild ep4', '999', './phtos/photoinweb/n10.png'),
(213, 'pee', 'happy', '999', './phtos/photoinweb/p5.png'),
(214, 'pee', 'work today', '999', './phtos/photoinweb/p6.png'),
(215, 'pee', 'red&orange', '999', './phtos/photoinweb/p4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_firstname` varchar(20) NOT NULL,
  `user_lastname` varchar(20) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_birth` date NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_firstname`, `user_lastname`, `user_gender`, `user_birth`, `user_phone`, `user_email`, `user_type`) VALUES
(1, 'Soravit', '1234', 'Soravit', 'Varanich', 'Male', '2019-11-03', '0944439191', 'poundkc@gmail.com', 'Admin'),
(2, 'Pee', '1234', 'Peeranunt', 'Anun.', 'Male', '2019-11-01', '1112', 'Peeranunt@gmail.com', 'Member'),
(430, 'pee220941', '12345678', 'p', 'a', 'Male', '2019-11-15', '1234567', 'asdfgh@hh.com', 'Member'),
(433, 'Tua', '1234', 'Soravit', 'Varanich', 'Male', '2019-11-02', '0944439191', 'poundkc@gmail.com', 'Member'),
(434, 'june', '1234', 'june', 'csnop', 'Male', '2019-10-09', '0853628099', 'poundkc@gmail.com', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`);

--
-- Indexes for table `payment_cards`
--
ALTER TABLE `payment_cards`
  ADD PRIMARY KEY (`cards_id`);

--
-- Indexes for table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `payment_cards`
--
ALTER TABLE `payment_cards`
  MODIFY `cards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
