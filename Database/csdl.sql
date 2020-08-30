-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 01:34 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swebicoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `IDDoUong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `IDGiohang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`IDDoUong`, `IDGiohang`, `SoLuong`) VALUES
('CIB', 'GH003', 2),
('CKC', 'GH002', 1),
('CKN', 'GH002', 1),
('SML', 'GH001', 3),
('WCF', 'GH004', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ctkm`
--

CREATE TABLE `ctkm` (
  `IDCTKM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenCTKM` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci,
  `DieuKien` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctkm`
--

INSERT INTO `ctkm` (`IDCTKM`, `TenCTKM`, `NoiDung`, `DieuKien`) VALUES
('HPH', 'Happy Hours', 'Các loại trà sữa đồng giá 19k', 'Từ thứ 2 đến thứ sáu ( 10h - 14h )');

-- --------------------------------------------------------

--
-- Table structure for table `douong`
--

CREATE TABLE `douong` (
  `IDDoUong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenDoUong` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MoTa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDHinhAnh` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `IDLoaiDoUong` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GiaTien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `douong`
--

INSERT INTO `douong` (`IDDoUong`, `TenDoUong`, `MoTa`, `IDHinhAnh`, `IDLoaiDoUong`, `GiaTien`) VALUES
('ABR', 'All Berry', 'Dâu, việt quất, phúc bồn tử, nước ép táo', 'images\\sobert\\ABR.jpg', 'SBE', 27000),
('APP', 'Apple Pie', 'Dứa, xoài, nước ép táo', 'images\\sobert\\APP.jpg', 'SBE', 27000),
('BBR', 'BlueBerry', 'Sữa chua blueberry', 'images\\suachua\\BBR.JPG', 'SSM', 35000),
('BCF', 'Black Coffee', 'Cà phê đá Việt Nam', 'images\\cfd\\BCF.jpg', 'TCF', 20000),
('BHW', 'Blue Hawaii', 'Syrup BlueSky và Kiwi', 'images\\soda\\BHW.jpg', 'SOD', 22000),
('BLS', 'Blue Sky', 'Syrup BlueSky và Kiwi', 'images\\soda\\BLS.jpg', 'SOD', 22000),
('CAP', 'Cappuccino', 'Cà phê sữa Cappuccino', 'images\\Espresso\\CAP.jpg', 'ESP', 25000),
('CCB', 'Chocolate Blended', 'Chocolate, sữa, kem tươi', 'images\\cookie\\CCB.jpg', 'FAB', 32000),
('CDY', 'Candy', 'Syrup Rubyred và Bubblegum', 'images\\soda\\CDY.jpg', 'SOD', 22000),
('CIB', 'Cappuccino Ice Blended', 'Cà phê espresso đá xây', 'images\\capuxay\\CIB.jpg', 'CFB', 32000),
('CKC', 'Cookies Cream', 'Bánh orio, sữa, kem tươi', 'images\\cookie\\CKC.jpg', 'FAB', 27000),
('CKN', 'Cookies Nut', 'Bánh cookie hạnh nhân, sữa, kem tươi', 'images\\cookie\\CKN.JPG', 'FAB', 27000),
('CPD', 'Espresso', 'Cà phê đậm đặc', 'images\\Espresso\\CPD.jpg', 'ESP', 20000),
('CSM', 'Cooler Summer', 'Trà xí muội', 'images\\tra\\CSM.jpg', 'MIT', 27000),
('DBC', 'Double Cheese', 'Sữa chua phô mai', 'images\\suachua\\DBC.jpg', 'SSM', 35000),
('ECF', 'Eggie Coffee Ice Blended', 'Cà phê bánh flan đá xay', 'images\\capuxay\\ECF.jpg', 'CFB', 35000),
('HOT', 'Hot Chocolate', 'Chocolate nóng', 'images\\Espresso\\HOT.jpg', 'ESP', 27000),
('JMB', 'Japanese Matcha Blended', 'Trà xanh Nhật Bản, sữa, kem tươi', 'images\\cookie\\JMB.jpg', 'FAB', 35000),
('LAT', 'Latte', 'Cà phê sữa Latte', 'images\\Espresso\\LAT.jpg', 'ESP', 27000),
('LIM', 'Lime', 'Syrup Lemonate, soda, đường', 'images\\MOJ\\LIM.jpg', 'MOJ', 25000),
('MAN', 'Mango', 'Mứt xoài, soda, đường', 'images\\MOJ\\MAN.jpg', 'MOJ', 25000),
('MCF', 'Milk Coffee', 'Cà phê sữa', 'images\\cfd\\MCF.jpg', 'TCF', 22000),
('MFR', 'Mocha Freezer', 'Cà phê đá xay với Chocolate', 'images\\capuxay\\MFR.jpg', 'CFB', 32000),
('PEA', 'Peach Tea', 'Trà đào', 'images\\tra\\PEA.jpg', 'MIT', 27000),
('PMS', 'Passion Mango Smoothies', 'Sữa chua xoài và chanh dây', 'images\\suachua\\PMS.jpg', 'SSM', 35000),
('PSF', 'Passionfruit', 'Mứt chanh dây, soda, đường', 'images\\MOJ\\PSF.jpg', 'MOJ', 25000),
('SML', 'Special Matcha Latte', 'Trà xanh latte nhật bản', 'images\\tra\\SML.jpg', 'MIT', 27000),
('SWT', 'Swebi Milk Tea', 'Trà sữa Swebi', 'images\\tra\\SWT.jpeg', 'MIT', 27000),
('TGM', 'Tango Mango', 'Mứt xoài, chanh dây, nước ép tropical', 'images\\sobert\\TGM.jpg', 'SBE', 27000),
('WCF', 'White Coffee', 'Bạc xỉu đá', 'images\\cfd\\WCF.jpg', 'TCF', 22000),
('WDM', 'Wondermelon', 'Sữa chua dâu và dưa hấu', 'images\\suachua\\WDM.jpg', 'SSM', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `douongkm`
--

CREATE TABLE `douongkm` (
  `IDDoUongKM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `GiaKM` int(11) DEFAULT NULL,
  `QuaTang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDCTKM` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `douongkm`
--

INSERT INTO `douongkm` (`IDDoUongKM`, `GiaKM`, `QuaTang`, `IDCTKM`) VALUES
('CSM', 19000, 'Không kèm quà tặng', 'HPH'),
('PEA', 19000, 'Không kèm quà tặng', 'HPH'),
('SWT', 19000, 'Không kèm quà tặng', 'HPH');

-- --------------------------------------------------------

--
-- Table structure for table `douongtb`
--

CREATE TABLE `douongtb` (
  `IDDoUongTB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DanhGia` text COLLATE utf8_unicode_ci,
  `UserName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `douongtb`
--

INSERT INTO `douongtb` (`IDDoUongTB`, `DanhGia`, `UserName`) VALUES
('CIB', 'Cà phê thơm, mùi vị rất tuyệt', 'tran'),
('CKC', 'Nước ngon, vừa miệng, không quá ngọt', 'nguyen'),
('ECF', 'Tuyệt Vời !', 'le'),
('CIB', 'Thật sự tuyệt?', 'Huyền'),
('CIB', 'mùi vị khác nếu dùng thêm đá', 'thanh tuấn'),
('CSM', 'rat ngon', 'duy'),
('CSM', 'rat ngon', 'duy'),
('CSM', 'rat ngon', 'duy'),
('CKC', 'ngon thế!', 'web'),
('CKC', 'ngọt hơn trước nhỉ', 'trần');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `IDGiohang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` int(11) DEFAULT NULL,
  `IDUser` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`IDGiohang`, `TongTien`, `IDUser`) VALUES
('GH001', 81000, 1),
('GH002', 54000, 1),
('GH003', 70000, 1),
('GH004', 22000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hinhdaidien`
--

CREATE TABLE `hinhdaidien` (
  `IDDoUong` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DuongDan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hinhdaidien`
--

INSERT INTO `hinhdaidien` (`IDDoUong`, `DuongDan`) VALUES
('ABR', 'images/upload/anhdaidien/1.jpg'),
('ABR', 'images/upload/anhdaidien/2.jpg'),
('APP', 'images/upload/anhdaidien/3.jpg'),
('APP', 'images/upload/anhdaidien/4.jpg'),
('BBR', 'images/upload/anhdaidien/5.jpg'),
('BBR', 'images/upload/anhdaidien/6.jpg'),
('BCF', 'images/upload/anhdaidien/7.jpg'),
('BCF', 'images/upload/anhdaidien/8.jpg'),
('BHW', 'images/upload/anhdaidien/9.jpg'),
('BHW', 'images/upload/anhdaidien/10.jpg'),
('BLS', 'images/upload/anhdaidien/11.jpg'),
('BLS', 'images/upload/anhdaidien/12.jpg'),
('CAP', 'images/upload/anhdaidien/13.jpg'),
('CAP', 'images/upload/anhdaidien/14.jpg'),
('CCB', 'images/upload/anhdaidien/15.jpg'),
('CCB', 'images/upload/anhdaidien/16.jpg'),
('CDY', 'images/upload/anhdaidien/17.jpg'),
('CDY', 'images/upload/anhdaidien/18.jpg'),
('CIB', 'images/upload/anhdaidien/19.jpg'),
('CIB', 'images/upload/anhdaidien/20.jpg'),
('CKC', 'images/upload/anhdaidien/21.jpg'),
('CKC', 'images/upload/anhdaidien/22.jpg'),
('CKN', 'images/upload/anhdaidien/23.jpg'),
('CKN', 'images/upload/anhdaidien/24.jpg'),
('CPD', 'images/upload/anhdaidien/25.jpg'),
('CPD', 'images/upload/anhdaidien/26.jpg'),
('CSM', 'images/upload/anhdaidien/27.jpg'),
('CSM', 'images/upload/anhdaidien/28.jpg'),
('DBC', 'images/upload/anhdaidien/29.jpg'),
('ECF', 'images/upload/anhdaidien/31.jpg'),
('ECF', 'images/upload/anhdaidien/32.jpg'),
('HOT', 'images/upload/anhdaidien/33.jpg'),
('HOT', 'images/upload/anhdaidien/34.jpg'),
('JMB', 'images/upload/anhdaidien/35.jpg'),
('JMB', 'images/upload/anhdaidien/36.jpg'),
('LAT', 'images/upload/anhdaidien/37.jpg'),
('LAT', 'images/upload/anhdaidien/38.jpg'),
('LIM', 'images/upload/anhdaidien/39.jpg'),
('LIM', 'images/upload/anhdaidien/40.jpg'),
('MAN', 'images/upload/anhdaidien/41.jpg'),
('MAN', 'images/upload/anhdaidien/42.jpg'),
('MCF', 'images/upload/anhdaidien/43.jpg'),
('MCF', 'images/upload/anhdaidien/44.jpg'),
('MFR', 'images/upload/anhdaidien/45.jpg'),
('MFR', 'images/upload/anhdaidien/46.jpg'),
('PEA', 'images/upload/anhdaidien/47.jpg'),
('PEA', 'images/upload/anhdaidien/48.jpg'),
('PMS', 'images/upload/anhdaidien/49.jpg'),
('PMS', 'images/upload/anhdaidien/50.jpg'),
('PSF', 'images/upload/anhdaidien/51.jpg'),
('PSF', 'images/upload/anhdaidien/52.jpg'),
('SML', 'images/upload/anhdaidien/53.jpg'),
('SML', 'images/upload/anhdaidien/54.jpg'),
('SWT', 'images/upload/anhdaidien/55.jpg'),
('SWT', 'images/upload/anhdaidien/56.jpg'),
('TGM', 'images/upload/anhdaidien/57.jpg'),
('TGM', 'images/upload/anhdaidien/58.jpg'),
('WCF', 'images/upload/anhdaidien/59.jpg'),
('WCF', 'images/upload/anhdaidien/60.jpg'),
('WDM', 'images/upload/anhdaidien/61.jpg'),
('WDM', 'images/upload/anhdaidien/62.jpg'),
('DBC', 'images/upload/anhdaidien/30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loaidouong`
--

CREATE TABLE `loaidouong` (
  `IDLoaiDoUong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenDoUong` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idDaiDien` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaidouong`
--

INSERT INTO `loaidouong` (`IDLoaiDoUong`, `TenDoUong`, `idDaiDien`) VALUES
('CFB', 'COFFEE BLENDED', 'images/upload/anhdaidienldu/CFB.jpg'),
('DHK', 'ĐỒ NGON', 'images/upload/anhdaidienldu/DHK.jpg'),
('ESP', 'ESPRESSO', 'images/upload/anhdaidienldu/ESP.jpg'),
('FAB', 'FAVOURITE BLENDED', 'images/upload/anhdaidienldu/FAB.jpg'),
('MIT', 'MILK TEA', 'images/upload/anhdaidienldu/MIT.jpg'),
('MOJ', 'MOJITO', 'images/upload/anhdaidienldu/MOJ.jpg'),
('SBE', 'SPECIAL SOBERT', 'images/upload/anhdaidienldu/SBE.jpg'),
('SOD', 'SWEBI SODA', 'images/upload/anhdaidienldu/SOD.jpg'),
('SSM', 'SPECIAL SMOOTHIES', 'images/upload/anhdaidienldu/SSM.jpg'),
('TCF', 'TRADITIONAL COFFEE', 'images/upload/anhdaidienldu/TCF.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vmindujohnny@gmail.com', 'a6ab46240da7aec5bae70ed6fb8f638568ef63b59094512bd0e2883a6cbd8db7', '2017-01-02 18:35:02'),
('dhs@gmail.com', '648e6d66bb705b05b7f6963fe6ab52ea20cc86da985d2daee816a90d4bbe6570', '2017-01-02 18:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `solan`
--

CREATE TABLE `solan` (
  `IDUser` int(10) NOT NULL,
  `IDDoUong` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solan`
--

INSERT INTO `solan` (`IDUser`, `IDDoUong`) VALUES
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CAP'),
(1, 'CKC'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CCB'),
(1, 'CKC'),
(1, 'BHW'),
(1, 'BHW'),
(1, 'BHW'),
(1, 'BHW'),
(1, 'BHW'),
(1, 'BHW'),
(1, 'BHW'),
(1, 'CIB'),
(1, 'CIB'),
(1, 'ECF'),
(1, 'MFR'),
(1, 'ECF'),
(1, 'CIB'),
(1, 'ABR'),
(1, 'BCF');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'tên gì', 'dhs@gmail.com', '$2y$10$bbfx18pDwx5OB461tlKWg.EwgoV9FI3UytqwWQfyi/NYqa6FBwuOO', 'AP7p7NIHzpUNWc5GsHTgQKlYyBpsC0d7lF7S9z7zvWJI1viPDvv9pZdutPcb', '2016-12-18 03:59:04', '2017-01-03 03:54:39', 'admin'),
(2, 'minh', 'vmindujohnny@gmail.com', '$2y$10$e5pV5ESjiDRRGSrEXW5Z/uFZAqFX/0nzojMwOOn/7n233EQfF.GIK', 'WhDD3dA1flZhkQqtymmS28tVJRLPfT24KKUNZU9Z3JYwOVn0xR1sXBogEceg', '2017-01-02 17:53:31', '2017-01-02 18:34:55', 'user'),
(3, 'v', 'mindujohnny@gmail.com', '$2y$10$dX7WglKA/jFPnJt5XpQ2ueM/8ipo5DpQ5aYufrI63Oh8lBdePLedK', 'txBR5aDcRlUqMmdoMXmqUlHFaovvq7MHzfaUxd3cAOWvKYk7xsN6y3aJW92g', '2017-01-02 17:55:30', '2017-01-02 17:57:25', 'admin'),
(6, 'ads', 'ssssc@ad.com', '$2y$10$rXWrt1xB.73SDWFF5AQPfOxtPlrtygRmxC.GjmS8pztG66Z2kEz4u', NULL, '2017-01-02 19:37:14', '2017-01-02 19:37:14', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`IDDoUong`,`IDGiohang`),
  ADD KEY `fk_CHITIETGIOHANG_DOUONG1_idx` (`IDDoUong`),
  ADD KEY `fk_CHITIETGIOHANG_GIOHANG1_idx` (`IDGiohang`);

--
-- Indexes for table `ctkm`
--
ALTER TABLE `ctkm`
  ADD PRIMARY KEY (`IDCTKM`);

--
-- Indexes for table `douong`
--
ALTER TABLE `douong`
  ADD PRIMARY KEY (`IDDoUong`),
  ADD KEY `fk_DoUong_HinhAnh_idx` (`IDHinhAnh`),
  ADD KEY `fk_DOUONG_LOAIDOUONG1_idx` (`IDLoaiDoUong`);

--
-- Indexes for table `douongkm`
--
ALTER TABLE `douongkm`
  ADD PRIMARY KEY (`IDDoUongKM`,`IDCTKM`),
  ADD KEY `fk_DOUONGKM_CTKM1_idx` (`IDCTKM`),
  ADD KEY `fk_DOUONGKM_DOUONG1_idx` (`IDDoUongKM`);

--
-- Indexes for table `douongtb`
--
ALTER TABLE `douongtb`
  ADD KEY `fk_DOUONGTB_DOUONG1_idx` (`IDDoUongTB`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`IDGiohang`,`IDUser`),
  ADD KEY `fk_GIOHANG_USERS1_idx` (`IDUser`);

--
-- Indexes for table `hinhdaidien`
--
ALTER TABLE `hinhdaidien`
  ADD KEY `fk_hinhdaidien_douong` (`IDDoUong`);

--
-- Indexes for table `loaidouong`
--
ALTER TABLE `loaidouong`
  ADD PRIMARY KEY (`IDLoaiDoUong`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `solan`
--
ALTER TABLE `solan`
  ADD KEY `fk_solan_douong` (`IDDoUong`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `fk_CHITIETGIOHANG_DOUONG1` FOREIGN KEY (`IDDoUong`) REFERENCES `douong` (`IDDoUong`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CHITIETGIOHANG_GIOHANG1` FOREIGN KEY (`IDGiohang`) REFERENCES `giohang` (`IDGiohang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `douongkm`
--
ALTER TABLE `douongkm`
  ADD CONSTRAINT `fk_DOUONGKM_CTKM1` FOREIGN KEY (`IDCTKM`) REFERENCES `ctkm` (`IDCTKM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DOUONGKM_DOUONG1` FOREIGN KEY (`IDDoUongKM`) REFERENCES `douong` (`IDDoUong`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `douongtb`
--
ALTER TABLE `douongtb`
  ADD CONSTRAINT `fk_DOUONGTB_DOUONG1` FOREIGN KEY (`IDDoUongTB`) REFERENCES `douong` (`IDDoUong`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
