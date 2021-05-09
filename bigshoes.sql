-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2021 lúc 09:44 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bigshoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--
CREATE DATABASE `i39ofxadpc39r225`;

USE `i39ofxadpc39r225`;

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(50) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(50) NOT NULL,
  `ngay_bl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_kh`, `ma_hh`, `noi_dung`, `ngay_bl`) VALUES
(18, 'pikachu', 35, 'Giày đẹp lắm shop <3', '04-05-2021'),
(20, 'pikachu', 27, 'sdfsdfdsfdsfdsf', '03-05-2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `hinh`, `don_gia`, `giam_gia`, `mo_ta`, `ma_loai`) VALUES
(27, 'Adidas Continental 80', 'adidascontinental80.png', 1200000, 5, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(28, 'Adidas Cyber Punk', 'adidascyberpunk.png', 1300000, 5, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(29, 'Adidas NMD R1', 'adidasnmd_r1.png', 1250000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(30, 'Adidas Reponse', 'adidasresponse.png', 1500000, 5, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(31, 'Adidas Super Star', 'adidassupperstar.png', 990000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(32, 'Adidas UltraBoost', 'adidasultraboost.png', 1800000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(33, 'Adidas UltraBoost 20', 'adidasultraboost20.png', 2000000, 15, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(34, 'Adidas UltraBoost DNA City', 'adidasultraboostdnacity.png', 2100000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(35, 'Adidas ZK 2K Boost', 'adidaszk2kboost.png', 2300000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 24),
(36, 'Pegasus Chaz', 'pegasuschaz.png', 880000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 23),
(37, 'Pegasus Trail 2', 'pegasustrail2.png', 1230000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 23),
(38, 'Pegasus Zoom 35', 'pegasuszoom35.png', 1450000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 23),
(39, 'Pegasus Zoom 37', 'pegasuszoom37.png', 2120000, 30, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 23),
(40, 'Converse Chuck Taylor', 'conversechucktaylor.png', 1990000, 20, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 20),
(41, 'Blazer Mid', 'blazermid.png', 1470000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 21),
(42, 'Blazer 77 Infinitive ', 'blazermid77infinitive.png', 1360000, 20, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 21),
(43, 'Blazer 77 Suede', 'blazermid77suede.png', 1250000, 50, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 21),
(44, 'Blazer 77 Vintage', 'blazermid77vintage.png', 2010000, 40, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 21),
(45, 'Jordan 1 Lowse', 'jordan1lowse.png', 1760000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 22),
(46, 'Jordan 6 Retro', 'jordan6retro.png', 1510000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 22),
(47, 'Jordan ADG 2', 'jordanadg2.png', 1320000, 20, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 22),
(48, 'Jordan Delta', 'jordandelta.png', 2080000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 22),
(49, 'Nike Air Force', 'nikeairforce.png', 1100000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 25),
(50, 'Nike Air Max 1', 'nikeairmax1.png', 1210000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 25),
(51, 'Nike Air Vapomax', 'nikeairvapormax.png', 1750000, 20, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 25),
(52, 'Nike Air Zoom', 'nikeairzoom.png', 2500000, 50, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 25),
(53, 'Nike Justin', 'nikejustin.png', 1500000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.', 25),
(54, 'MLB Boston', 'MLBBOSTON.jpg', 1499999, 5, 'Giày MLB Big Ball Chunky P Boston màu trắng họa tiết đỏ Size 235 là đôi giày Unisex cao cấp được làm bởi chất liệu đặc biệt, giày MLB tạo cảm giác thoải mái, êm chân khi đi. Với thiết kế độc đáo, phá cách, tạo nên sự trẻ trung, năng động cho người dùng.', 26),
(55, 'MLB Big Ball Chunky LA Dodgers', 'giay-mlb-big-ball-chunky-la-dodgers.jpg', 3250000, 11, 'Giày MLB Big Ball Chunky LA Dodgers 32SHCD111-07I với thiết kế Đẹp - Độc - Lạ, form giày phóng đại tạo nên sự trẻ trung, năng động cho người dùng. Các đường nét của đôi giày vô cùng tinh tế và sắc sảo.\r\n\r\nPhần trên của Giày MLB Big Ball Chunky LA được làm từ chất liệu da cao cấp, mềm mại, dễ vệ sinh. Phần đế giày được làm từ cao su lưu hóa với độ bền cao, đế thiết kế chắc chắn mang lại độ ma sát tốt.\r\n\r\nMàu sắc giày trắngdễ dàng kết hợp với nhiều trang phục khác nhau để tạo nên 1 set đồ đẹp khi ', 26),
(57, 'YEEZY BOOST 350V2 ASH PEARL', 'YEEZY-BOOST-350-V2-ASH-PEARL.jpg', 8000000, 2, 'Adidas Yeezy là sản phẩm thời trang hợp tác giữa hãng đồ thể thao Đức Adidas và nhà thiết kế, rapper, doanh nhân và cá tính người Mỹ Kanye West. Sự hợp tác đã trở nên đáng chú ý với các màu sắc phiên bản giới hạn cao cấp và các bản phát hành chung được cung cấp bởi dòng giày thể thao Yeezy Boost. Sự hợp tác cũng đã sản xuất áo sơ mi, áo khoác, quần thể thao, tất, giày trượt, giày và dép nữ. Mẫu giày đầu tiên (\"Boost 750\") được phát hành vào tháng 2/2015. ', 24),
(58, 'Converse Chuck70s Hightop', 'Chuck70s.jpg', 2000000, 1, 'Converse là một công ty giày của Mỹ chuyên sản xuất giày trượt ván, giày dép thường ngày và quần áo. Được thành lập vào năm 1908, đến này Converse đã trở thành một công ty con của Nike, Inc. kể từ năm 2003.\r\n\r\nTrong suốt chiến tranh thế giới lần thứ II, từ một công ty chuyên gia công giày cho cộng đồng, Converse đã chuyển sang chuyên sản xuất các mẫu giày phục vụ cho quân đội. Đây là một trong số ít những nhà sản xuất sản phẩm giày thể thao thống trị thị trường giày của Mỹ trong suốt hơn một nửa', 20),
(59, 'Biti\'s Hunter Nameless Edition x Công Trí', 'namelessedition.jpg', 1490000, 2, 'Sản phẩm đồng sáng tạo cùng biểu tượng đương đại - Nguyễn Công Trí  ✨\r\nBiti\'s Hunter và NTK Công Trí hướng đến những người trẻ hiện đại, không bó mình vào một \"hình dáng\" hoặc rào cản nào nhất định mà dễ dàng thay đổi, thích nghi với cuộc sống đa chiều. Biti’s Hunter cùng NTK Công Trí hướng đến những trải nghiệm thách thức khuôn khổ, không gò bó và áp đặt bởi bất kỳ điều gì, giúp các bạn trẻ tiếp tục lan toả cảm hứng, tự tin thể hiện cái tôi, vượt qua giới hạn của chính bản thâ', 27),
(60, 'Biti\'s Hunter Street x Vietmax 2020 - BST HaNoi Cu', 'vietmaxhanoi.jpg', 899000, 0, 'iếp nối tinh thần #ProudlyMadeinVietNam, nếu 2019 là hơi thở của một Sài Gòn xô bồ mà phóng khoáng, không hoàn hảo nhưng vẫn đáng tự hào, thì 2020 là một nguồn cảm hứng rất khác - tự hào từ những thái cực văn hóa Hà Nội.\r\n\r\nỪ đúng rồi, Hà Nội của bạn đấy!\r\n\r\nKhi nóng điên dại, lúc lạnh thì tím tái\r\n\r\nLà mái ngói sánh vai phố thị ồn ã\r\n\r\nLà bê tông chọc trời cạnh mặt hồ thơ, ta rảo bước tìm ai\r\n\r\nHà Nội không vội, và cũng chẳng nửa vời\r\n\r\nĐiên đến nơi, hào hoa đến chốn\r\n\r\n \r\n\r\nHà Nội đâu chỉ đẹp ', 27),
(61, 'Biti\'s Hunter Street x Vietmax 2020 - BST HaNoi Cu', 'bitisturqouise.jpg', 899000, 0, 'Tiếp nối tinh thần #ProudlyMadeinVietNam, nếu 2019 là hơi thở của một Sài Gòn xô bồ mà phóng khoáng, không hoàn hảo nhưng vẫn đáng tự hào, thì 2020 là một nguồn cảm hứng rất khác - tự hào từ những thái cực văn hóa Hà Nội.\r\n\r\nỪ đúng rồi, Hà Nội của bạn đấy!\r\n\r\nKhi nóng điên dại, lúc lạnh thì tím tái\r\n\r\nLà mái ngói sánh vai phố thị ồn ã\r\n\r\nLà bê tông chọc trời cạnh mặt hồ thơ, ta rảo bước tìm ai\r\n\r\nHà Nội không vội, và cũng chẳng nửa vời\r\n\r\nĐiên đến nơi, hào hoa đến chốn\r\n\r\n \r\n\r\nHà Nội đâu chỉ đẹp', 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_mua` varchar(20) NOT NULL,
  `ghi_chu` varchar(50) NOT NULL,
  `tinh_trang` varchar(20) NOT NULL DEFAULT '0',
  `ma_kh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ngay_mua`, `ghi_chu`, `tinh_trang`, `ma_kh`) VALUES
(93, '05-05-2021', '', '1', 'admin'),
(94, '05-05-2021', '', '1', 'admin'),
(95, '05-05-2021', '', '1', 'admin'),
(96, '05-05-2021', '', '1', 'admin'),
(97, '06-05-2021', '', '1', 'admin'),
(98, '06-05-2021', '', '1', 'admin'),
(99, '07-5-2021', '', '1', 'pikachu'),
(100, '07-05-2021', 'assshiba', '1', 'pikachu'),
(101, '08-05-2021', '', '1', 'pikachu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hd` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hd`, `so_luong`, `don_gia`, `ma_hh`) VALUES
(93, 1, 2300000, 35),
(94, 6, 1500000, 30),
(94, 5, 2120000, 39),
(94, 3, 2300000, 35),
(95, 6, 1500000, 30),
(95, 5, 2120000, 39),
(95, 3, 2300000, 35),
(96, 6, 1500000, 30),
(96, 5, 2120000, 39),
(96, 3, 2300000, 35),
(97, 2, 2120000, 39),
(97, 2, 2300000, 35),
(98, 4, 2120000, 39),
(98, 3, 2300000, 35),
(99, 11, 2500000, 52),
(99, 3, 2100000, 34),
(100, 4, 1200000, 27),
(101, 4, 2500000, 52),
(101, 1, 2300000, 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `vai_tro` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `dia_chi`, `vai_tro`) VALUES
('admin', 'Duy', '123123', 'truongduy0412bku@gmail.com', 'Hồ Chí Minh', 1),
('hoan', 'Nguyen Van Hoan', '123123', 'hoan@gmail.com', 'Hà Nội', 0),
('pikachu', 'Piiiiiiiiiiii', '123123', 'pi@gmail.com', 'Đà Nẵng', 0),
('tam', 'Tran Van Tam', '123456', 'tam@gmail.com', 'Hồ Chí Minh', 0),
('tan', 'Nguyen Duy Tan', '123123', 'tan@gmail.com', 'Đồng Nai', 0),
('thien', 'Dang Huu Thien', '123123', 'thien@gmail.com', 'Quãng Ngãi', 0),
('thy', 'Trương Anh Thy', '123123', 'thy@gmail.com', 'Vũng Tàu', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`) VALUES
(20, 'Converse'),
(21, 'Blazer'),
(22, 'Jordan'),
(23, 'Pegasus'),
(24, 'Adidas'),
(25, 'Nike'),
(26, 'MLB'),
(27, 'Biti\'s');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_hd` (`ma_hd`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `loai_hang`
--
ALTER TABLE `loai_hang`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_hang` (`ma_loai`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_3` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
