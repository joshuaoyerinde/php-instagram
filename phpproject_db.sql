-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 01:07 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_tb`
--

CREATE TABLE `file_tb` (
  `file_id` int(17) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_tb`
--

INSERT INTO `file_tb` (`file_id`, `filename`, `post_id`) VALUES
(1, '13272BeautyPlus_20181018123302_fast.jpg', 1),
(2, '4913BeautyPlus_20181019093945_fast.jpg', 2),
(3, '2909065686413_1387626944717678_2913291297722728448_n.jpg', 3),
(4, '24833BeautyPlus_20181019094251_fast.jpg', 4),
(5, '193661740bad694bda5629e280f7d5d46df80.jpg', 5),
(6, '28211BeautyPlus_20181019094012_fast.jpg', 6),
(7, '9712BeautyPlus_20181019094241_fast.jpg', 7),
(8, '26582IMG-20190726-WA0033.jpg', 8),
(9, '3133IMG-20191023-WA0015.jpg', 9),
(10, '6743BeautyPlus_20181019094738_fast.jpg', 10),
(11, '2505BeautyPlus_20181019094223_fast.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `post_tb`
--

CREATE TABLE `post_tb` (
  `post_id` int(17) NOT NULL,
  `post_text` varchar(355) NOT NULL,
  `users_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_tb`
--

INSERT INTO `post_tb` (`post_id`, `post_text`, `users_id`) VALUES
(1, 'this nice', 7),
(2, 'im gentle man', 7),
(3, 'she can laugh', 7),
(4, 'Hi, how ae you?', 11),
(5, 'laugh com', 11),
(6, 'agbda man jgigioer gtrkmkd mkcskvcmk nievjsi ikwvjioi', 13),
(7, 'i wish u success bro may the God almighty be with you guide you in all your ways', 13),
(8, 'bobo mii keep enjoy oooo', 13),
(9, 'IM cool oooo', 16),
(10, 'bobomi', 16),
(11, 'laugh \r\nrace', 17);

-- --------------------------------------------------------

--
-- Table structure for table `registration_tb`
--

CREATE TABLE `registration_tb` (
  `users_id` int(17) NOT NULL,
  `email_phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tb`
--

INSERT INTO `registration_tb` (`users_id`, `email_phone`, `name`, `username`, `password`, `phone`, `bio`, `image`) VALUES
(1, 'kk@gmail.oom', 'olamide jos', 'olamde', '$2y$10$xEzeAPWX4hDg8LByhI0q2uf/HL6TTIjKaXgY3d31X5qI6cGlPegWG', '', '', ''),
(2, 'oyerinde@gmail.com', 'olarinde oyerinde', 'olaoye', '$2y$10$UNro5XqHXrlqMR5A2Vz6Zee1rhuWEYYCf5seSrk0D2f3oBYNaGvNy', '', '', ''),
(3, 'ola@gamil.com', 'kolamide', 'ffo', '$2y$10$DzAptc7GEpnvRC./NY5CiuxOMMM/qR52w0lt4eJD6RoSLy3Gyoq/6', '', '', ''),
(4, 'dd@gmail.com', 'damiare joshua', 'dammy', '$2y$10$jdtEKCHqgbfrE/UVeyEK7.y8hEqi.YCSufx3Aiw82mPBdtQ.CMc6e', '', '', ''),
(5, 'oyerinde@gmail.com', 'olamide oyewo', 'olamideo', '$2y$10$xzKO870SH60EPABlSI42yughdqitwrsMbPuo58u/ckdbqm13U0ByG', '', '', ''),
(6, 'Adesokan@gmail.com', 'Bukunmi Adesokan', 'bukky', '$2y$10$NYJyCPCzRqy9xq8oMkbqlur8PajGn9Mx/Du/uDrjpIdfU0OM.PESK', '0906789456', 'im a good business woman  ', '65686413_1387626944717678_2913291297722728448_n.jpg'),
(7, 'oya@gmail.com', 'oyawale joshua', 'oyawajos', '$2y$10$Bljf0pxfVw/IsLm3ugykMuxhspVXb37u.VtSb0p4b1zEjhB.b1q72', '09086573456', 'laugh dance smile', 'BeautyPlus_20181019093945_fast.jpg'),
(8, 'tolu@gmail.com', 'Toluwanimi', 'tolu_x', '$2y$10$8M6ZxaIY1NFFoqJcvV5lHuUO3belAWft3cgiQnOg4bxegHI48jK7a', '0906789456', 'LIVE\r\nLAUGH\r\nLOVE', '72f7408874f34de27d3081774314e2fa.jpg'),
(9, 'bola@gmail.com', 'oyerinde bola', 'oyeebola', '$2y$10$34Crgrs8f1rtOgYYYubkU.TPklxJFQ3Ysn3oixPSSHePkZ1cv53Ue', '0906789456', 'laugh\r\ncry\r\n', '65686413_1387626944717678_2913291297722728448_n.jpg'),
(10, '', '', '', '$2y$10$yDMsyBaSCliakNc1qBxIzOYk8rTBSVvayedWDCagKzEiGjmhs0CS.', '', '', ''),
(11, 'tayeabidakun@gmail.com', 'Taye Abidakun', 'atom', '$2y$10$hCg.QNg73xstW5kGv.3NB.1MJoejMzDpvUFzsllFtjCKU.L4y5Cfi', '0906789456', 'here is a good man', 'BeautyPlus_20181019094738_fast.jpg'),
(12, 'mam@gmail.com', 'mami water', 'water123', '$2y$10$7LWbfTxdZj.cgG/Ob99Hk.Z9niqCFlcBg2Bv.AZh.bPehmtJFWdMO', '', '', '72f7408874f34de27d3081774314e2fa.jpg'),
(13, 'ola@gmail.com', 'Olamide kola', 'olamideK', '$2y$10$QD45bhKVYV7ZzsBClwgANeFoerl8NkmMv0eiVaLE5Timhdp5cPyfe', '0906789456', 'Im a very good man not by mouth ooo if you want to text my ability just give me your power', 'IMG-20191027-WA0020.jpg'),
(14, 'adebola@gmail.com', 'Adebola Bose', 'Adebose', '$2y$10$bHNJ5nTl5jWDOCkIA9t7sO8CEhIa5MCksIBiEVQhVSUnzbKwP8hmm', '', '', ''),
(15, 'olumi@gmail.com', 'Olumide Fasaki', 'Olufasak', '$2y$10$.BuJokuUMFSSmC5pSbUXZ.3ppqT/EKF07wVXqTfpD5RyiJa3n3696', '', '', ''),
(16, 'bb@gmail.com', 'bola bb', 'bola nn', '$2y$10$4WOCFPyQRMQCQSo4gr1C3.oKq4phjm383AMg7/P0Sjweo95SFzjni', '0906789456', 'Im a nice girl i keep things within and learn, I always believe my self , then feel my self, Trust my self, and im trustworthy   ', 'IMG-20191023-WA0015.jpg'),
(17, 'jj@gmail.com', 'aomalowu didi', 'dididi', '$2y$10$nelT0BBIiumQ6jsS/gthR.nrLltd0uTtlgqs6QMZ2N8S23Ebiv4ma', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_tb`
--
ALTER TABLE `file_tb`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `post_tb`
--
ALTER TABLE `post_tb`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `registration_tb`
--
ALTER TABLE `registration_tb`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_tb`
--
ALTER TABLE `file_tb`
  MODIFY `file_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_tb`
--
ALTER TABLE `post_tb`
  MODIFY `post_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration_tb`
--
ALTER TABLE `registration_tb`
  MODIFY `users_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_tb`
--
ALTER TABLE `file_tb`
  ADD CONSTRAINT `file_tb_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_tb` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
