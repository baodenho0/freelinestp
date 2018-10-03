-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 04:52 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelinestp`
--

-- --------------------------------------------------------

--
-- Table structure for table `baidang`
--

CREATE TABLE `baidang` (
  `id` int(11) NOT NULL,
  `tieude` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `baidang`
--

INSERT INTO `baidang` (`id`, `tieude`, `noidung`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, 'Kgo Hoàng Trần', '1 CHUYẾN ĐI THÚ VỊ, HỨA SẼ CÓ LẦN SAU :)\r\n\r\n------------\r\nchỉ cần mn tin sư tổ :)\r\nmọi khó khăn sẽ qua :D'),
(5, 'Kgo Hoàng Trần', 'Năm mới chúc team chúng ta ngày càng lớn mạnh.. Hết :D Ngắn gọn, xúc tích cầu nhiu đó thui :)');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `url` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `url`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/91PNxuhG0ko\" frameborder=\"0\"  encrypted-media\" allowfullscreen></iframe>'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/mhOXl4kXfCk\" frameborder=\"0\"  encrypted-media\" allowfullscreen></iframe>'),
(3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AuR-uxPTGzI\" frameborder=\"0\"  encrypted-media\" allowfullscreen></iframe>'),
(4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Bv-0Xxn2aAo\" frameborder=\"0\" encrypted-media\" allowfullscreen></iframe>'),
(5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/m8_utCtPH0g\" frameborder=\"0\"  encrypted-media\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baidang`
--
ALTER TABLE `baidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
