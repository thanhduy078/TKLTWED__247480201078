-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2026 lúc 10:33 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanghang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(40) NOT NULL,
  `mansx` varchar(2) NOT NULL,
  `namsx` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`) VALUES
('ip11', 'iphone 11', 'Ip', 2015, 1000),
('ip12', 'iphone 12', 'Ip', 2015, 1500),
('ip13', 'iphone 13', 'Ip', 2017, 2001),
('ip14', 'iphone 14', 'Ip', 2019, 6000),
('ip15', 'iphone 15', 'Ip', 2020, 7000),
('ip16', 'iphone 16', 'Ip', 2021, 8000),
('ip17', 'iphone 17', 'Ip', 2021, 7000),
('ip20', 'iphone 20', 'Ip', 2027, 9000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(3) NOT NULL,
  `makh` varchar(3) NOT NULL,
  `mahang` varchar(4) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhtien`) VALUES
('001', 'K01', 'DE01', 2, 0),
('002', 'K02', 'DE02', 1, 0),
('003', 'K03', 'LE91', 5, 0),
('004', 'K04', 'LE01', 10, 0),
('005', 'K05', 'TQ01', 15, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(4) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('K001', 'Nguyễn Thị Lan', 1980, '012345678', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', 1981, '015345678', 'Bạc Liêu'),
('K003', 'Nguyễn Ngọc Khánh', 2006, '0943047313', 'Bạc Liêu'),
('K004', 'Mã Trọng Phú', 2006, '025345678', 'Bạc Liêu'),
('K005', 'Nguyễn Thanh Duy', 2006, '034345678', 'Bạc Liêu'),
('K006', 'Ngô Anh Minh', 1981, '078845678', 'Bạc Liêu'),
('K007', 'Mã Thanh Minh', 1981, '055555678', 'Bạc Liêu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` varchar(2) NOT NULL,
  `tennsx` varchar(40) NOT NULL,
  `quocgia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `quocgia`) VALUES
('AS', 'ASUS', 'Đài Loan'),
('DE', 'DELL', 'Hoa kỳ'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`mansx`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
