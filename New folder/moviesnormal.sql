-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 07:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `moviesdubbed`
--

CREATE TABLE `moviesdubbed` (
  `ID` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `Category` text DEFAULT NULL,
  `Image` text DEFAULT NULL,
  `Screenshot1` text DEFAULT NULL,
  `Screenshot2` text DEFAULT NULL,
  `Screenshot3` text DEFAULT NULL,
  `Trailer` text DEFAULT NULL,
  `Launguage` text DEFAULT NULL,
  `Torrent` text DEFAULT NULL,
  `SizeCompany` text DEFAULT NULL,
  `Size` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviesdubbed`
--

INSERT INTO `moviesdubbed` (`ID`, `Name`, `Year`, `Description`, `Rating`, `Category`, `Image`, `Screenshot1`, `Screenshot2`, `Screenshot3`, `Trailer`, `Launguage`, `Torrent`, `SizeCompany`, `Size`) VALUES
(1, 'Angels Fallen ', 2020, '', 4.1, 'Horror', 'https://4movierulz.es/wp-content/uploads/2020/11/Angels-Fallen-Telugu-New-Poster.jpg', '', '', '', '', 'Telugu | Tamil | Hindi | Eng', 'magnet:?xt=urn:btih:1bb0879533de4d0deceea5cc4c1667e9aba2d50a&dn=Angels%20Fallen%20(2020)%201080p%20HDRip%20-%20Org%20%5bTel%20%2b%20Tam%20%2b%20Hin%20%2b%20Eng%5d%20-%201.8GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 1.8),
(2, 'Immortals ', 2011, '', 6, 'Action|Drama|Fantasy|Romance', 'https://4movierulz.es/wp-content/uploads/2020/11/Immortals-New-Telugu-Image.jpg', '', '', '', '', 'Telugu | Tamil | Hindi | Eng', 'magnet:?xt=urn:btih:312389b1187a3cbbeeeb533bca635b400cd3ed92&dn=Immortals%20(2011)%20720p%20BluRay%20-%20Org%20%5bTel%20%2b%20Tam%20%2b%20Hin%20%2b%20Eng%5d%201.1GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 1.1),
(3, 'Dhira ', 2020, '', 0, 'Animation', 'https://4movierulz.es/wp-content/uploads/2020/11/Dhira-Telugu-New-Image.jpg', '', '', '', '', 'Telugu | Tamil | Eng', 'magnet:?xt=urn:btih:825e7e3dffa3b3aff43d7a860b85c92b413f2c5f&dn=www.4MovieRulz.es%20-%20DHIRA%20(2020)%201080p%20TRUE%20WEB-DL%20-%20AVC%20-%20%5bTam%20%2b%20Tel%20%2b%20Eng%5d%20-%202.6GB%20-%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 2.6),
(4, 'Jack the Giant Slayer ', 2013, '', 6.2, 'Adventure|Fantasy', 'https://4movierulz.es/wp-content/uploads/2020/11/Jack-the-Giant-Slayer-New-Telugu-Image.jpg', '', '', '', '', 'Telugu | Tamil | Hindi | Eng', 'magnet:?xt=urn:btih:d8051674570708e6c3e1588a3a5566054e754c33&dn=Jack%20the%20Giant%20Slayer%20(2013)%20720p%20BluRay%20Org%20%5bTelugu%20%2b%20Tamil%20%2b%20Hindi%20%2b%20Eng%5d%201.1GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 1.1),
(5, 'Jingle Jangle: A Christmas Journey ', 2020, '', 6.7, 'Family|Fantasy|Musical', 'https://4movierulz.es/wp-content/uploads/2020/11/Jingle-Jangle-A-Christmas-Journey-Telugu-New-Image.jpg', '', '', '', '', 'Telugu | Tamil | Hindi | Eng', 'magnet:?xt=urn:btih:dd873896aa82655f8b0070d59ce944bec8e4ac35&dn=Jingle%20Jangle%20A%20Christmas%20Journey%20(2020)%20720p%20HDRip%20Org%20%5bTel%20%2b%20Tam%20%2b%20Hin%20%2b%20Eng%5d%201.1GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 1.1),
(6, 'Unhinged ', 2020, '', 6, 'Action|Thriller', 'https://4movierulz.es/wp-content/uploads/2020/11/Unhinged-Telugu-New-HD-Image.jpg', '', '', '', '', 'Telugu | Tamil | Hindi | Eng', 'magnet:?xt=urn:btih:ce92c486e1c3f7c47c096c704a13965804994b44&dn=UNHINGED%20(2020)%20720p%20Blu-Ray%20-%20Org%20%5bTel%20%2b%20Tam%20%2b%20Hin%20%2b%20Eng%5d%20-%201.3GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 1.3),
(7, 'Ludo ', 2020, '', 7.6, 'Action|Comedy|Crime|Drama', 'https://4movierulz.es/wp-content/uploads/2020/11/Ludo-New-Telugu-Poster.jpg', '', '', '', '', 'Telugu | Tamil | Hindi', 'magnet:?xt=urn:btih:aa584cb350ae749e7ee33222ae503d9be367d1f3&dn=www.4MovieRulz.se%20-%20Ludo%20(2020)%201080p%20WEB-DL%20AVC%20DD5.1%20(640kbps)%20%5bTel%20%2b%20Tam%20%2b%20Hin%5d%206.6GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 6.6),
(8, 'Aashram ', 2020, '', 7.8, 'Crime|Drama', 'https://4movierulz.es/wp-content/uploads/2020/11/Aashram-Season-2-Poster.jpg', '', '', '', '', 'Telugu | Tamil | Hindi', 'magnet:?xt=urn:btih:89b24cc1ee9afcddd09fe86b1cfc18388c95c783&dn=www.4MovieRulz.se%20-%20Aashram%20(2020)%201080p%20S-02%20Ep-%5b01-09%5d%20HDRip%20%5bTelugu%20%2b%20Tamil%20%2b%20Hindi%5d%203.6GB.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 3.6),
(9, 'Gatham ', 2020, '', 6.5, 'Thriller', 'https://4movierulz.es/wp-content/uploads/2020/11/Gatham-Tamil-Image.jpg', '', '', '', '', 'Tamil | Telugu | Mal | Kan', 'magnet:?xt=urn:btih:ecabf8c510b4d26aa6e6fe31fa34bef71c651b99&dn=www.4MovieRulz.se%20-%20GATHAM%20(2020)%20720p%20TRUE%20WEB-DL%20-%20DD5.1%20%5bTam%20%2b%20Tel%20%2b%20Mal%20%2b%20Kan%5d%20-%201.3GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 1.3),
(10, 'The Rhythm Section ', 2020, '', 5.3, 'Action|Drama|Mystery|Thriller', 'https://4movierulz.es/wp-content/uploads/2020/11/The-Rhythm-Section-Telugu-New-Image.jpg', '', '', '', '', 'Telugu | Tamil | Hindi | Eng', 'magnet:?xt=urn:btih:533a7c2c2adf7013bbe648a74a695333d718c573&dn=The%20Rhythm%20Section%20(2020)%201080p%20BluRay%20Org%20(DD5.1)%20%5bTel%20%2b%20Tam%20%2b%20Hin%20%2b%20Eng%5d%202.1GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 2.2),
(11, 'Sonic the Hedgehog ', 2020, '', 6.5, 'Action|Adventure|Comedy|Family|Sci-Fi', 'https://4movierulz.es/wp-content/uploads/2020/11/Sonic-the-Hedgehog-Telugu-New-Image.jpg', '', '', '', '', 'Telugu | Tamil | Hindi | Eng', 'magnet:?xt=urn:btih:0a012708aad487dc52b474648ec4f25ebdb3da0f&dn=Sonic%20the%20Hedgehog%c2%a0(2020)%201080p%20Blu-Ray%20-%20(DD5.1%20-%20192Kbps)%20%5bTam%20%2b%20Tel%20%2b%20Hin%20%2b%20Eng%5d%20-%202.1GB%20ESub.mkv&tr=udp%3a%2f%2ftracker.leechers-paradise.org%3a6969%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=http%3a%2f%2fpow7.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2970%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2790%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2730%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.tiny-vps.com%3a6969%2fannounce&tr=http%3a%2f%2ftracker2.itzmx.com%3a6961%2fannounce&tr=udp%3a%2f%2f151.80.120.114%3a2710%2fannounce&tr=http%3a%2f%2ftracker.yoshi210.com%3a6969%2fannounce&tr=udp%3a%2f%2fopen.stealth.si%3a80%2fannounce&tr=http%3a%2f%2ft.nyaatracker.com%3a80%2fannounce', '', 2.1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviesdubbed`
--
ALTER TABLE `moviesdubbed`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviesdubbed`
--
ALTER TABLE `moviesdubbed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
