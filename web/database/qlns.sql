-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2012 at 05:13 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlns`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` varchar(50) NOT NULL,
  `pword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `pword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE IF NOT EXISTS `chucvu` (
  `macv` char(4) NOT NULL,
  `tenvc` varchar(50) NOT NULL,
  PRIMARY KEY (`macv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`macv`, `tenvc`) VALUES
('CV01', 'nhân viên'),
('CV02', 'Trưởng Phòng'),
('CV03', 'Giám Đốc');

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE IF NOT EXISTS `luong` (
  `bacluong` int(4) NOT NULL,
  `luongcoban` int(30) NOT NULL,
  `hesoluong` int(4) NOT NULL,
  `luongphucap` int(50) NOT NULL,
  PRIMARY KEY (`bacluong`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `luong`
--

INSERT INTO `luong` (`bacluong`, `luongcoban`, `hesoluong`, `luongphucap`) VALUES
(1, 2000000, 1, 1000000),
(2, 2000000, 2, 2000000),
(3, 2000000, 3, 6000000),
(4, 2000000, 4, 24000000);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manv` char(4) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `dantoc` varchar(20) NOT NULL,
  `gioitinh` varchar(4) NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(100) NOT NULL,
  `sodienthoai` int(14) NOT NULL,
  `macv` char(4) NOT NULL,
  `matdhv` char(7) NOT NULL,
  `mapb` char(4) NOT NULL,
  `bacluong` int(4) NOT NULL,
  PRIMARY KEY (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hoten`, `dantoc`, `gioitinh`, `ngaysinh`, `quequan`, `sodienthoai`, `macv`, `matdhv`, `mapb`, `bacluong`) VALUES
('NV01', 'Nguyễn Tuấn Anh', 'Kinh', 'Nam', '1991-05-07', 'Ninh Bình', 88, 'CV01', 'TDHV01', 'PB01', 2),
('NV02', 'Nguyễn Thi Bình', 'Kinh', 'Nữ', '1991-07-07', 'bắc giang', 88, 'CV01', 'TDHV04', 'PB02', 2),
('NV03', 'Nguyễn Văn A', 'Kinh', 'Nam', '1991-08-07', 'Quảng Ninh', 88, 'CV05', 'TDHV01', 'PB01', 2),
('NV04', 'Nguyễn Cần Cù', 'Kinh', 'Nam', '1991-08-08', 'Quảng Ninh', 88, 'CV05', 'TDHV01', 'PB01', 2),
('NV05', 'Nguyễn Văn D', 'Kinh', 'Nam', '1991-09-08', 'Quảng Ninh', 88, 'CV01', 'TDHV02', 'PB03', 1),
('NV06', 'Viết Văn Gì', 'Kinh', 'Nữ', '1991-10-08', 'Quảng Ninh', 88, 'CV03', 'TDHV02', 'PB03', 2),
('NV07', 'Nguyễn Anh Văn', 'Kinh', 'Nam', '1991-10-07', 'Ninh Bình', 88, 'CV03', 'TDHV01', 'PB01', 1),
('NV08', 'Le Nguyen Sinh', 'Ko', 'Nam', '1902-03-04', 'Bac Ninh', 1326545595, 'CV01', 'TD02', 'PB02', 2),
('NV09', 'Đặng Chí Thảo', 'Ko', 'Nam', '1991-04-09', 'Vĩnh Phúc', 167539105, 'CV02', 'TD02', 'PB02', 3),
('NV10', 'Nguyễn Thành Trung', 'ko', 'Nam', '1918-12-19', 'Phuong Hoang', 1675390105, 'CV01', 'TD03', 'PB01', 3),
('NV11', 'Phạm Thọ Hoàn', 'không', 'Nam', '1979-03-03', 'Hà Nội', 2147483647, 'CV03', 'TD04', 'PB04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE IF NOT EXISTS `phongban` (
  `mapb` char(4) NOT NULL,
  `tenpb` varchar(50) NOT NULL,
  `diachipb` varchar(100) NOT NULL,
  `sdtpb` int(14) NOT NULL,
  PRIMARY KEY (`mapb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`mapb`, `tenpb`, `diachipb`, `sdtpb`) VALUES
('PB01', 'Thương mại điện tử', 'solo.vn', 1236546596),
('PB02', 'Hệ Thống Thông Tin', 'FPT', 46594236),
('PB03', 'Giải Pháp Phát Triển', 'Viettel', 435621365),
('PB04', 'Quảng cáo', 'solo.vn', 432651879),
('PB05', 'Design', 'solo.vn', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `thoigiancongtac`
--

CREATE TABLE IF NOT EXISTS `thoigiancongtac` (
  `manv` char(4) NOT NULL,
  `macv` char(4) NOT NULL,
  `ngaynhanchuc` date NOT NULL,
  PRIMARY KEY (`manv`,`macv`),
  KEY `macv` (`macv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thoigiancongtac`
--

INSERT INTO `thoigiancongtac` (`manv`, `macv`, `ngaynhanchuc`) VALUES
('NV01', 'CV02', '2012-05-14'),
('NV02', 'CV01', '2012-05-15'),
('NV05', 'CV03', '2012-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdohocvan`
--

CREATE TABLE IF NOT EXISTS `trinhdohocvan` (
  `matdhv` char(7) NOT NULL,
  `tentrinhdo` varchar(50) NOT NULL,
  `chuyenganh` varchar(50) NOT NULL,
  PRIMARY KEY (`matdhv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trinhdohocvan`
--

INSERT INTO `trinhdohocvan` (`matdhv`, `tentrinhdo`, `chuyenganh`) VALUES
('TDHV01', 'cử nhân', 'CNTT'),
('TDHV02', 'Thạc Sỹ', 'CNTT'),
('TDHV03', 'Tiến sỹ', 'CNTT'),
('TDHV04', 'Giáo Sư', 'CNTT');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `thoigiancongtac`
--
ALTER TABLE `thoigiancongtac`
  ADD CONSTRAINT `thoigiancongtac_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `thoigiancongtac_ibfk_2` FOREIGN KEY (`macv`) REFERENCES `chucvu` (`macv`);
