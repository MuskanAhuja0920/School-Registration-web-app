-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 18, 2020 at 06:34 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userverification`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `username`, `email`, `password`) VALUES
(1, 'adminM', 'webapp.services.ma@gmail.com', 'M@webapp');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `username`, `email`, `phonenumber`, `subject`, `query`) VALUES
(1, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'xsdc', 'Check'),
(3, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'swded', 'hbhbjhb'),
(4, 'Muskan-Ahuja', 'muskan0920@gmail.com', 1234567890, 'abddch', 'CHECK CHECK CHECK'),
(5, 'Muskan-Ahuja', 'jawahar.z.ahuja@gmail.com', 2147483647, '1234', 'CHECK\r\n'),
(6, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'Check', 'CHECK CHECK'),
(7, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'Check', 'CHECK'),
(8, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'check', 'CHECK'),
(9, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'Check', 'CHECK'),
(10, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'Check', 'check'),
(11, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'Check', 'check'),
(20, 'Hemang', 'hemangmonga@gmail.com', 2147483647, 'test', 'test'),
(21, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(22, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(23, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(24, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(25, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(26, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(27, 'Hemang', 'hemangmonga@gmail.com', 2147483647, 'test', 'test'),
(28, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(29, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(30, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(31, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test'),
(32, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'hbjhbh', 'fhdbfhbc'),
(33, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'hbjhbh', 'fhdbfhbc'),
(34, 'Muskan-Ahuja', 'jawahar.z.ahuja@gmail.com', 2147483647, 'efg', 'gfgfg'),
(35, 'Muskan-Ahuja', 'muskan0920@gmail.com', 1234567890, 'hbh', 'ddhbdbc'),
(36, 'Muskan-Ahuja', 'muskan0920@gmail.com', 1234567890, 'test', 'test'),
(37, 'Muskan-Ahuja', 'muskan0920@gmail.com', 2147483647, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `Sr.no` int(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Order_ID` varchar(100) NOT NULL,
  `Transaction_ID` int(100) NOT NULL,
  `Amount` int(100) NOT NULL,
  `Mode_of_payment` varchar(100) NOT NULL,
  `Currency` varchar(100) NOT NULL,
  `Transaction_date` date NOT NULL,
  `Gateway_name` varchar(100) NOT NULL,
  `Bank_transaction_ID` int(100) NOT NULL,
  `Bank_name` varchar(100) NOT NULL,
  `Checksum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`Sr.no`, `email`, `Order_ID`, `Transaction_ID`, `Amount`, `Mode_of_payment`, `Currency`, `Transaction_date`, `Gateway_name`, `Bank_transaction_ID`, `Bank_name`, `Checksum`) VALUES
(1, NULL, 'ORDS30584410', 2147483647, 500, 'NB', 'INR', '2020-04-02', 'HDFC', 2147483647, 'HDFC', '718JKtG2QxO6Aui6LHs7vfBO8yBFGthBCsv4BYwcaLP0fNL7BIvKyyN6Uhffmx1jycYZw++qMkbzYsn+0DVeSNXBsdvLnJiDpQdB'),
(2, NULL, 'ORDS30584410', 2147483647, 500, 'NB', 'INR', '2020-04-02', 'HDFC', 2147483647, 'HDFC', '718JKtG2QxO6Aui6LHs7vfBO8yBFGthBCsv4BYwcaLP0fNL7BIvKyyN6Uhffmx1jycYZw++qMkbzYsn+0DVeSNXBsdvLnJiDpQdB'),
(3, NULL, 'ORDS38802711', 2147483647, 400, 'NB', 'INR', '2020-04-02', 'HDFC', 2147483647, 'HDFC', 'nIFZ84FsCp9Nj5V0ovr2CLCfLR0jWFEc9ckwI3rPJMS00DUOZwQh/nRA4Dt/+NB/MAJHkApfoPnxAF40yVjUylV3V0sv7HlPZeYB'),
(4, NULL, 'ORDS33543896', 2147483647, 400, 'NB', 'INR', '2020-04-02', 'HDFC', 2147483647, 'HDFC', 'viRIQeumpyLO7rGZoDORTYPsqqPycS35p+wJXdgFm/W4OMtGca+iDpalCkVH4NhSNwus/oMLMRUMjC96Bsa1N0KXOya2cJb93QMs'),
(5, NULL, 'ORDS90757962', 2147483647, 500, 'NB', 'INR', '2020-04-02', 'ICICI', 2147483647, 'ICICI', 'A2DrryY0hZlubkPcv1nudsJieXMKcboO75GmtoLVvi2jiZaMbnPjnPFcYNfHY9lWrGOWX1tNO917AL5gsRBkxQL4VP6cpZx+1F8M'),
(10, NULL, 'ORDS84331347', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'ezttYaTvrBYkTSEr6L4m7i+XOqSM6wmwSauQ9INqAjawoYcsReIn1FlhSrqsr7hi6WMclkHQb5TtJYPitQUvho5pjNNra0qsGj4x'),
(11, NULL, 'ORDS84331347', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'ezttYaTvrBYkTSEr6L4m7i+XOqSM6wmwSauQ9INqAjawoYcsReIn1FlhSrqsr7hi6WMclkHQb5TtJYPitQUvho5pjNNra0qsGj4x'),
(12, NULL, 'ORDS84331347', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'ezttYaTvrBYkTSEr6L4m7i+XOqSM6wmwSauQ9INqAjawoYcsReIn1FlhSrqsr7hi6WMclkHQb5TtJYPitQUvho5pjNNra0qsGj4x'),
(15, NULL, 'ORDS62416696', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'bYSnEU8jwQk/7hTisEoeFsW5b1mdKuBKbBo8vT7Bm3G+NE5KAgZFVeFDrrl7OqLqZMA3ezrpNbPzTbHIY9mUMHPtvJMKiDkIDvcR'),
(16, NULL, 'ORDS62416696', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'bYSnEU8jwQk/7hTisEoeFsW5b1mdKuBKbBo8vT7Bm3G+NE5KAgZFVeFDrrl7OqLqZMA3ezrpNbPzTbHIY9mUMHPtvJMKiDkIDvcR'),
(17, NULL, 'ORDS62416696', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'bYSnEU8jwQk/7hTisEoeFsW5b1mdKuBKbBo8vT7Bm3G+NE5KAgZFVeFDrrl7OqLqZMA3ezrpNbPzTbHIY9mUMHPtvJMKiDkIDvcR'),
(18, NULL, 'ORDS80362512', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'P7Y5o1onXNrWH7ma1pMlraL6DYMGDPbmdhS+qzWq+jwRMAHP/plKt/TkLCMkpWoE44HrtpPEBYeKN8iOHCwFzGp3OON48XDIuy6f'),
(19, NULL, 'ORDS13327023', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', '0/EaSzVaRn3g4ncpVRINfbaeSwpyik94/y/L5S/m3dY6o8sOPbkrj6xGBj01lfIKxrDka9nJPCpCMEmxT/fQRbltbUexadk/e39i'),
(20, NULL, 'ORDS13327023', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'ERVWecC6tDHPIaGoEDwltRODLJuovIe4hvZHgYrMuoNyl7/pd5fEjzb5idYg8te1FWmEWY3/a/yPtqe/c6zBVIrrvjGXjxQNaaxT'),
(21, NULL, 'ORDS21417567', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'vfX1ZdZoQQHiACB+RdIwqGTNfUPoTE/D3JjWwNcF6eBcoswWd6OnJts2eWU+ma2l6iTxlGQPYa38jA0rO41mzSWH9A9PZL5+9jfP'),
(22, NULL, 'ORDS38038011', 2147483647, 500, 'NB', 'INR', '2020-04-20', 'SBI', 2147483647, 'SBI', 'HjzUJI2RTpakyhrMqEolM5xRgOFPPj2+nyoq5rahUIDpW50B2S+Xc6sZqkGZj5JTPsVLT6rGNv9uQfFocWSvrMWK34w6Vl+VZe/o'),
(23, NULL, 'ORDS82473154', 2147483647, 500, 'NB', 'INR', '2020-04-21', 'SBI', 2147483647, 'SBI', '277y5Q1S5JmpTseNPuYRVEkEwSXt3kv7gMYeq/Gr96ghn46gcD/YWQt30V9ryABYh4fEliTTuqti4sSlDbvY1QllSHd+J+mT8x6p'),
(24, NULL, 'ORDS51787460', 2147483647, 500, 'NB', 'INR', '2020-04-21', 'SBI', 2147483647, 'SBI', 'qzmXof7gLEzIGmbpIScZTudYZKgvI0dxKKOHk9OSp2fz7ycukRCzYXTvCAwpc+uQuDwhOVsjF8gX5cGG9CVxTC+U2sCwy8v9PgwI'),
(25, NULL, 'ORDS51787460', 2147483647, 500, 'NB', 'INR', '2020-04-21', 'SBI', 2147483647, 'SBI', 'qzmXof7gLEzIGmbpIScZTudYZKgvI0dxKKOHk9OSp2fz7ycukRCzYXTvCAwpc+uQuDwhOVsjF8gX5cGG9CVxTC+U2sCwy8v9PgwI'),
(26, NULL, 'ORDS41252643', 2147483647, 500, 'NB', 'INR', '2020-04-21', 'SBI', 2147483647, 'SBI', '1VLOoh0qqbsCMOValRuluQCUNdNeltea0V1epfG+hjwH60p+npnDCtz5Uj2hbtLlw021tmAmvutreEnwnwhvAAKs94Zzq+4YGJwW'),
(27, NULL, 'ORDS41252643', 2147483647, 500, 'NB', 'INR', '2020-04-21', 'SBI', 2147483647, 'SBI', '1VLOoh0qqbsCMOValRuluQCUNdNeltea0V1epfG+hjwH60p+npnDCtz5Uj2hbtLlw021tmAmvutreEnwnwhvAAKs94Zzq+4YGJwW');

-- --------------------------------------------------------

--
-- Table structure for table `payment_done`
--

CREATE TABLE `payment_done` (
  `Sr. No.` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'Done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_done`
--

INSERT INTO `payment_done` (`Sr. No.`, `email`, `payment`) VALUES
(20, 'muskan0920@gmail.com', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `selector` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `expires` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`id`, `email`, `selector`, `token`, `expires`) VALUES
(31, 'test@gmail.com', '9aed445dc2946a5e', '$2y$10$5dWSLe5NdPhm.X6CGSo1y.TTrmBalkCj8uw3o.lD2OtOqWspQs2kC', '1585830494');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `class1` varchar(10) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `taluka` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `mothertongue` varchar(50) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `ffname` varchar(50) NOT NULL,
  `fmname` varchar(50) NOT NULL,
  `fsurname` varchar(50) NOT NULL,
  `fqual` varchar(50) NOT NULL,
  `foccu` varchar(50) NOT NULL,
  `mfname` varchar(50) NOT NULL,
  `mmname` varchar(50) NOT NULL,
  `msurname` varchar(50) NOT NULL,
  `mqual` varchar(50) NOT NULL,
  `moccu` varchar(50) NOT NULL,
  `income` int(50) NOT NULL,
  `raddr` varchar(500) NOT NULL,
  `emaill` varchar(100) DEFAULT NULL,
  `aadhar` varchar(60) NOT NULL,
  `distance` double NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `whatsappno` varchar(60) NOT NULL,
  `telno` varchar(60) NOT NULL,
  `paddr` varchar(500) NOT NULL,
  `brosis` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `class1`, `firstname`, `lname`, `gender`, `dob`, `city`, `taluka`, `district`, `state`, `country`, `nationality`, `religion`, `caste`, `category`, `mothertongue`, `lang`, `ffname`, `fmname`, `fsurname`, `fqual`, `foccu`, `mfname`, `mmname`, `msurname`, `mqual`, `moccu`, `income`, `raddr`, `emaill`, `aadhar`, `distance`, `landmark`, `whatsappno`, `telno`, `paddr`, `brosis`) VALUES
(99, 'LKG', 'Muskan', 'Ahuja', 'female', '2020-04-02', 'Kanpur', 'kaa', 'k', 'Uttar Pradesh', 'India', 'India', 'hindu', 'h', 'open', 'sindhi', 'hbh', 'Muskan', 'Muskan Ahuja', 'Ahuja', 'm', 'd', 'Muskan', 'm', 'Ahuja', 'g', 'h', 89098, '118/44 Kaushalpuri', 'hemangmonga@gmail.com', '0000-1111-1112', 0, 'Uttar Pradesh', '123-456-7890', '1234-123-4567', '118/44 Kaushalpuri', 0),
(107, 'LKG', 'Muskan', 'Ahuja', 'female', '2020-03-05', 'Kanpur', 'k', 'k', 'Uttar Pradesh', 'India', 'India', 'hindu', 'h', 'open', 'sindhi', 'hbh', 'Muskan', 'Muskan Ahuja', 'Ahuja', 'm', 'd', 'Muskan', 'm', 'Ahuja', 'g', 'h', 329074, '118/44 Kaushalpuri', 'muskan0920@gmail.com', '1111-1111-1111', 1, 'Uttar Pradesh', '123-456-7890', '1234-123-4567', '118/44 Kaushalpuri', 0);

-- --------------------------------------------------------

--
-- Table structure for table `uploadedimage`
--

CREATE TABLE `uploadedimage` (
  `Id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `imagename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploadedimage`
--

INSERT INTO `uploadedimage` (`Id`, `email`, `imagename`) VALUES
(1, NULL, 'pic2.png'),
(2, NULL, 'pic2.png'),
(3, NULL, 'pic2.png'),
(4, NULL, 'pic2.png'),
(5, NULL, 'pic2.png'),
(6, NULL, 'pic2.png'),
(7, NULL, 'w3logo.jpg'),
(8, NULL, 'brochure.jpg'),
(9, NULL, 'brochure.jpg'),
(10, NULL, 'brochure.jpg'),
(11, NULL, 'brochure.jpg'),
(12, NULL, 'brochure.jpg'),
(13, NULL, 'brochure.jpg'),
(14, NULL, 'brochure.jpg'),
(41, 'hemangmonga@gmail.com', 'Captureeeeeeeeeeeeeeeeee.PNG'),
(46, 'muskan0920@gmail.com', 'w3logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`) VALUES
(1, 'Hemang', 'hemangmonga@gmail.com', 1, 'b681440cf1986024806bb3fe26f74af78926f7b366de8325c84f88440c3028f52c28fc25da2791f86aa0a967cd10333638e5', '$2y$10$1wzy0juGrH.I1l4mx3g6FukcGT2sqn9vJQZBC16451DnW3JmguBSm'),
(29, 'Muskan-Ahuja', 'muskan0920@gmail.com', 1, 'cc403c778c1745c360caec5c8119ffff13c6e395379ea298883edcc88a2a38807c49d093fe14e98a6509e63d1d937c3c731e', '$2y$10$aLCdjw56OeXlAIYbcnez/ecKhCCEZjMqtA9tZ2qRj.eQi5cE0Au3m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Sr.no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payment_done`
--
ALTER TABLE `payment_done`
  ADD PRIMARY KEY (`Sr. No.`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emaill` (`emaill`);

--
-- Indexes for table `uploadedimage`
--
ALTER TABLE `uploadedimage`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `Sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment_done`
--
ALTER TABLE `payment_done`
  MODIFY `Sr. No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `uploadedimage`
--
ALTER TABLE `uploadedimage`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `student` (`emaill`);

--
-- Constraints for table `payment_done`
--
ALTER TABLE `payment_done`
  ADD CONSTRAINT `payment_done_ibfk_1` FOREIGN KEY (`email`) REFERENCES `student` (`emaill`);

--
-- Constraints for table `uploadedimage`
--
ALTER TABLE `uploadedimage`
  ADD CONSTRAINT `uploadedimage_ibfk_1` FOREIGN KEY (`email`) REFERENCES `student` (`emaill`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
