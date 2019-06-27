-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2019 lúc 05:03 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_muare`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `enable` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `remember_token`, `phone`, `name`, `enable`) VALUES
(1, 'tvtri1997@gmail.com', '$2y$10$XQtYbOajewQjyC2D./X82ey3LvBG/564PcMeQ1pry/85XQXQ6VMIK', 'DTRU5VYqXZcsgigOZprUNP32WbSTg3Z8dxeNkqnpbCGVGTi1jWZoJW5DrZr2', '359548682', 'Trần Văn Trí', 1),
(3, 'tomiot8485@gmail.com', '$2y$10$fjGKiLIA7QfXE7UrHW16Ie.qB7R/UQkRWBNXG6EshnuJ5rln/e0Za', NULL, '0971297436', 'le thi ngoc dung', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `nameCus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phoneCus` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `addressCus` text COLLATE utf8_unicode_ci NOT NULL,
  `noteCus` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `cancelBill` tinyint(4) NOT NULL DEFAULT '0',
  `reasonCancel` text COLLATE utf8_unicode_ci,
  `idUserBuy` int(11) DEFAULT '0' COMMENT 'id của người mua hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `nameCus`, `phoneCus`, `addressCus`, `noteCus`, `status`, `cancelBill`, `reasonCancel`, `idUserBuy`) VALUES
(1, 'Tri', '2388', 'sdf', 'dsf', 1, 0, NULL, 0),
(2, 'Tới', '0377799322', '123 Trung My4T Tây', 'đéo', 1, 0, NULL, 0),
(3, '1', '2', '4', '5', 1, 0, NULL, 0),
(4, '12', '123', '221231', '12312313213123', 1, 0, NULL, 0),
(5, '12', '123', '221231', '12312313213123', 1, 0, NULL, 0),
(6, '123', '2231', '1231', '313213', 1, 0, NULL, 0),
(7, '1', '1', '1', '1', 1, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `idBill` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `idShop` int(11) NOT NULL DEFAULT '0' COMMENT 'id của Users bán sản phẩm đó',
  `nameProduct` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0: dang xử lý; 1: đã xử lý; -1 : chưa xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `idBill`, `idProduct`, `idShop`, `nameProduct`, `quantity`, `price`, `status`) VALUES
(1, 1, 4, 4, 'Oppo A37f', 2, 3990000, 0),
(2, 1, 11, 6, 'Thi công máy lạnh giấu trần nối ống gió chuyên nghiệp nhất', 1, 800000, 0),
(3, 1, 1, 1, 'Phụ kiện tóc cô dâu', 2, 10000, 0),
(4, 1, 3, 2, '7plus 128gb black đẹp 99% giá đẹp máy cứng hcm q3', 1, 9800000, 0),
(5, 1, 5, 8, 'THIẾT BỊ KÍCH SÓNG DI ĐỘNG CHO TẦNG HẦM', 2, 5850000, 0),
(6, 1, 15, 1, 'Phụ kiện tóc cô dâu', 13, 150000, 0),
(7, 2, 1, 1, 'Phụ kiện tóc cô dâu', 2, 10000, 0),
(8, 2, 3, 2, '7plus 128gb black đẹp 99% giá đẹp máy cứng hcm q3', 1, 9800000, 0),
(9, 3, 15, 1, 'Phụ kiện tóc cô dâu', 2, 150000, 0),
(10, 4, 15, 1, 'Phụ kiện tóc cô dâu', 4, 150000, 0),
(11, 5, 15, 1, 'Phụ kiện tóc cô dâu', 2, 150000, 0),
(12, 6, 15, 1, 'Phụ kiện tóc cô dâu', 2, 150000, 1),
(13, 7, 15, 1, 'Phụ kiện tóc cô dâu', 1, 150000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enable` tinyint(4) NOT NULL DEFAULT '1',
  `idParent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `enable`, `idParent`) VALUES
(1, 'Thời trang', 'upload/images/shares/danhmuc/5c906f493ca50.png', 1, 0),
(2, 'Điện thoại, Máy tính bảng', 'upload/images/shares/danhmuc/5c906f495db75.png', 1, 0),
(3, 'Máy tính, Thiết bị văn phòng', 'upload/images/shares/danhmuc/5c906f493b58a.png', 1, 0),
(4, 'Điện tử, Kỹ thuật số', 'upload/images/shares/danhmuc/5c906f4938ac8.png', 1, 0),
(5, 'Dịch vụ cá nhân, doanh nghiệp', 'upload/images/shares/danhmuc/5c906f49268ca.png', 1, 0),
(6, 'Điện lạnh, Điện gia dụng', 'upload/images/shares/danhmuc/5c906f49e9661.png', 1, 0),
(7, 'Ăn uống, Vui chơi', 'upload/images/shares/danhmuc/5c906f49e843f.png', 1, 0),
(8, 'Ô tô, Xe máy, Phương tiện', 'upload/images/shares/danhmuc/5c906f49f40ea.png', 1, 0),
(9, 'Nhà đất, Nội thất, Xây dựng', 'upload/images/shares/danhmuc/5c906f49efce7.png', 1, 0),
(10, 'Rao vặt tổng hợp', 'upload/images/shares/danhmuc/5c906f4aa2619.png', 1, 0),
(11, 'Sim số, Thẻ cào, Dịch vụ', 'upload/images/shares/danhmuc/5c906f4a912d2.png', 1, 0),
(12, 'Cộng đồng', 'upload/images/shares/danhmuc/5c906f4b3d68b.png', 1, 0),
(13, 'Quần áo', NULL, 1, 1),
(14, 'Giầy dép, Túi xách', NULL, 1, 1),
(15, 'Mẹ và Bé', NULL, 1, 1),
(16, 'Trang sức, Phụ kiện', NULL, 1, 1),
(17, 'SmartPhone', NULL, 1, 2),
(18, 'Điện thoại phổ thông', NULL, 1, 2),
(19, 'Máy tính bảng, Máy đọc sách', NULL, 1, 2),
(20, 'Linh kiện, Phụ kiện ĐT', NULL, 1, 2),
(21, 'Laptop, Netbook', NULL, 1, 3),
(22, 'Case, Màn hình, Máy nguyên bộ', NULL, 1, 3),
(23, 'Máy in, Scan, Photo, Máy chiếu', NULL, 1, 3),
(24, 'Games, Vật phẩm game, Thiết bị Games', NULL, 1, 3),
(25, 'Phần mềm, Thiết bị, Linh phụ kiện', NULL, 1, 3),
(26, 'Tivi, Đầu KTS, Smartbox', NULL, 1, 4),
(27, 'Máy ảnh, Máy quay, Máy nghe nhạc', NULL, 1, 4),
(28, 'Dàn âm thanh, Amply, Loa', NULL, 1, 4),
(29, 'Linh kiện, Phụ kiện KTS', NULL, 1, 4),
(30, 'Dịch vụ cho cá nhân, Gia đình', NULL, 1, 5),
(31, 'Dịch vụ cho doanh nghiệp', NULL, 1, 5),
(32, 'Điều hòa, Quạt, Máy sưởi, Đèn sưởi', NULL, 1, 6),
(33, 'Máy giặt, Tủ lạnh, Bình nóng lạnh, Tủ đông', NULL, 1, 6),
(34, 'Máy xay, Máy ép, Máy lọc, Máy bơm', NULL, 1, 6),
(35, 'Nồi cơm điện, Bếp, Lò', NULL, 1, 6),
(36, 'Đồ điện, Đồ gia dụng khác', NULL, 1, 6),
(37, 'Ẩm thực, Đặc sản vùng miền', NULL, 1, 7),
(38, 'Nhà hàng, Bar, Café, Quán ăn', NULL, 1, 7),
(39, 'Du lịch, Phượt, Phiếu giảm giá', NULL, 1, 7),
(40, 'Xe máy', NULL, 1, 8),
(41, 'Ô tô', NULL, 1, 8),
(42, 'Xe đạp, Xe điện', NULL, 1, 8),
(43, 'Phụ tùng, Đồ chơi, Dịch vụ', NULL, 1, 8),
(44, 'Mua bán nhà đất', NULL, 1, 9),
(45, 'Thuê và cho thuê', NULL, 1, 9),
(46, 'Mua bán đồ nội thất', NULL, 1, 9),
(47, 'Vật liệu, Thiết bị xây dựng, Máy xây dựng', NULL, 1, 9),
(48, 'Hoa, Quà tặng, Đồ trang trí', NULL, 1, 10),
(49, 'Sách, Truyện, Văn phòng phẩm, Nhạc cụ', NULL, 1, 10),
(50, 'Thú cưng, Cây cảnh, Đồ làm vườn', NULL, 1, 10),
(51, 'Thuốc, Thực phẩm chức năng', NULL, 1, 10),
(52, 'Lao động, Việc làm, Tuyển sinh', NULL, 1, 10),
(53, 'Chợ đồ cũ tổng hợp', NULL, 1, 10),
(54, 'Sim VIP, Cam kết, Năm sinh', NULL, 1, 11),
(55, 'Sim giá rẻ', NULL, 1, 11),
(56, 'Sim 3G, 4G, Thẻ cào, Dịch vụ', NULL, 1, 11),
(57, 'Vui chơi, Tán gẫu, Hỏi gì đáp nấy', NULL, 1, 12),
(58, 'Báo lỗi, thắc mắc của thành viên', NULL, 1, 12),
(59, 'Thông báo của BQT', NULL, 1, 12),
(60, 'Hướng dẫn sử dụng', NULL, 1, 12),
(61, 'Quy Nhơn', NULL, 1, NULL),
(62, 'Quy Nhơn', NULL, 1, NULL),
(63, 'Không khuyến mãi', 'upload/images/shares/danhmuc/5c9059e669383.jpg', 0, 0),
(64, 'giayf', '0', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduct` int(11) DEFAULT '0',
  `idService` int(11) DEFAULT '0',
  `idTinDang` int(11) DEFAULT '0',
  `date_added` text COLLATE utf8_unicode_ci NOT NULL,
  `idParent` int(11) NOT NULL COMMENT 'là id của thằng cha nó. 1 cha',
  `parentName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idBlock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contactadmins`
--

CREATE TABLE `contactadmins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cskh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lhqc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hotrokh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contactadmins`
--

INSERT INTO `contactadmins` (`id`, `name`, `address`, `cskh`, `lhqc`, `hotrokh`) VALUES
(1, 'UTE-Team', '1 Võ Văn Ngân - Thủ Đức - TP.HCM', '0377799322', '0377799322', 'tomiot8485@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `logo`
--

INSERT INTO `logo` (`id`, `title`, `image`) VALUES
(1, 'mua rẻ', 'upload/images/logo/5c62cb7a3f963images.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(4) NOT NULL DEFAULT '1',
  `idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tvtri1997@gmail.com', '$2y$10$xZ6SX5tlmvcFNf5XdJKhkeHLTGOEKBmvRAO0l/C8kJrPPgyehV/YK', '2019-02-09 08:02:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enable` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `places`
--

INSERT INTO `places` (`id`, `name`, `enable`) VALUES
(1, 'Hà Nội', 1),
(2, 'Hải Phòng', 1),
(3, 'Đà Nẵng', 1),
(4, 'Hồ Chí Minh', 1),
(5, 'Quy Nhơn', 1),
(6, 'Vũng tàu', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `place_product`
--

CREATE TABLE `place_product` (
  `idPlace` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `place_product`
--

INSERT INTO `place_product` (`idPlace`, `idProduct`) VALUES
(1, 1),
(2, 2),
(2, 10),
(1, 12),
(2, 1),
(4, 13),
(4, 14),
(2, 11),
(3, 1),
(4, 1),
(4, 28),
(2, 29),
(3, 30),
(3, 31),
(2, 38),
(3, 38),
(4, 38),
(2, 39),
(3, 39),
(5, 39),
(4, 40),
(2, 41),
(2, 42),
(3, 42),
(4, 42),
(5, 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `title_tindang` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `images` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0: ngung_hang; -1: het_hang; > 0 : còn hàng, số lượng hàng trong kho',
  `special` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: độc-đáo',
  `statusProduct` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1: moi, 2:90, 3:80, 4:cu',
  `view` int(10) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idCate` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `adminCheck` tinyint(1) NOT NULL DEFAULT '1',
  `address` text COLLATE utf8_unicode_ci COMMENT 'dia chi san pham'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `title_tindang`, `images`, `price`, `status`, `special`, `statusProduct`, `view`, `date_added`, `idCate`, `idUser`, `adminCheck`, `address`) VALUES
(1, 'Phụ kiện tóc cô dâu', 'Phụ kiện tóc cô dâu Phụ kiện tóc cô dâu Phụ kiện tóc cô dâu Phụ kiện tóc cô dâu ', 'Phụ kiện tóc cô dâu', '[\"upload\\/imageuser\\/products\\/5ca251ebed1961qQlxVC.jpg\",\"upload\\/imageuser\\/products\\/5ca251ebed711600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', 10000, 1, 0, 2, 0, '2019-01-20 08:00:00', 16, 1, 1, 'Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(2, 'Iphone x 64gb (mới 97%) 15.990.000 - hỗ trợ trả góp 0%', 'Tablet Plaza chi nhánh Bình Dương đang cung cấp các dòng Iphone (Mới - Cũ) với nhiều chương trình khuyến mãi và chế độ hậu mãi tốt nhất.\r\nIPhone X 64GB (Đã qua sử dụng) giá chỉ: 15.990.000đ\r\nChi tiết tại: https://tabletplaza.vn/iphone-x-64gb-cu.294\r\nIPhone X 256GB (Đã qua sử dụng) giá chỉ: 17.990.000đ\r\nChi tiết tại: https://tabletplaza.vn/iphone-x-256gb-cu.291\r\nBảo hành 6 tháng\r\n1 đổi 1 trong 30 ngày\r\nHỗ trợ trả góp 0%\r\nTablet plaza là nơi duy nhất bảo hành màn hình, camera, cảm ứng, nguồn khi mua điện thoại.', '', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/22/4999246_iphone-x-64gb9.jpg', 15900000, 1, 0, 2, 0, '0000-00-00 00:00:00', 17, 3, 1, '2 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(3, '7plus 128gb black đẹp 99% giá đẹp máy cứng hcm q3', 'Ra đi nhanh 7plus 128gb đen, quốc tế ZP, đẹp 99%, ko icloud, full chức năng full zin, nói chung máy cứng ko viết dài dòng xem máy sẽ thích', '', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/22/4999107_7406f937-e7b9-4bdb-aae3-8b5e02cf79dc.jpeg', 9800000, 1, 0, 3, 0, '0000-00-00 00:00:00', 17, 2, 1, '3 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(4, 'Oppo A37f', 'Thừa máy nên mình cần thanh lý 1 chiếc Oppo A37f màu vàng.\r\nHình thức máy đã dán kính cường lực và ốp lưng nên còn rất mới.\r\nPin trâu sóng khoẻ , mua về lắp sim và sử dụng thôi.\r\nMáy nguyên zin chưa sửa chữa nhé.', 'Cần bán Oppo A37f hình thức như mới', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/22/4999495_z1249074950195-c560718f314f9055a926db5b0bde4d70.jpg', 3990000, 1, 0, 4, 0, '0000-00-00 00:00:00', 17, 4, 1, '4 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(5, 'THIẾT BỊ KÍCH SÓNG DI ĐỘNG CHO TẦNG HẦM', 'Thiết bị kích sóng di động GSM-Khuếch đại tín hiệu 2G, 3G (BOOSTER ) REPEATER DUAL BAND\r\n- Chức năng: Khuếch đại tín hiệu cho tất cả các mạng di động GSM băng tần 900MHz./2100MHz\r\n- Nguyên lý hoạt động: Thu sóng GSM tại nơi có cường độ sóng mạnh và phủ sóng tới nơi sóng yếu hoặc không có sóng (Trong khách sạn, khu văn phòng, các toà nhà cao tầng, tầng hầm…).\r\n- Lắp đặt: Lắp đặt đơn giản, hiệu suất sử dụng cao.\r\n- Chất lượng: Chất lượng cuộc gọi ổn định, không bị ngắt quãng.\r\n- Bán kính phủ sóng: Diện tích phủ sóng tốt nhất của thiết bị khi không có vật cản là 100m2- 500m2 – 1000m2 tùy model\r\nĐặc tính kỹ thuật\r\nThông số Mức độ đáp ứng\r\nUp Link Down Link\r\nTần số hoạt động 890~915MHz 935~960MHz\r\nMức tín hiệu thu -70 ~ -40 dBm/FA (1.23MHz)\r\nĐộ lợi khuếch đại 50dB 55dB\r\nCông suất phát +22dBm / Total power (ALC Level) +10dBm / Total power\r\nTrở kháng 50Ω\r\nĐiện nguồn AC 220V (Sử dụng AC/DC Adapter 12VDC)\r\nGiá đỡ Treo tường\r\nKích thước 180 x 140 x 50mm\r\n- Trọn bộ bao gồm: 01 Amplifier, 01 Adaptor, 01 anten trong nhà, 01 anten ngoài trời, 15 mét dây.\r\n- Sản xuất tại Trung Quốc.mới 100%\r\n- Bảo hành: 12 tháng', '', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/22/4999351_1f1.jpg', 5850000, 1, 0, 1, 0, '0000-00-00 00:00:00', 29, 8, 1, '5 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(7, 'Bán IPad Pro 12.9inch Gen3 2018 256gb Bản 4G Chưa Active Nguyên Seal Mới 100% BH Tại Fpt Đủ 1 Năm', 'Em cần bán hộ Người Nhà chiếc Ipad Pro 12.9 inch đời 2018 Màu Gray 256gb Có 4G\r\n\r\nTình trạng máy là chưa kích hoạt Fullbox nguyên seal máy chưa bóc ra sử dụng\r\n\r\nMáy Bác Em được biếu dịp lễ tết nhưng không có nhu cầu sử dụng nên nhờ Em bán ạ\r\n\r\nCam kết là máy chuẩn và như gì thông tin đăng và ảnh Em có chụp lại ở bên dưới nhé\r\n\r\nVì Em cũng đi làm và khá bận nên Ai muốn qua xem máy vui lòng gọi hoặc nhắn E trước\r\n\r\nMua bán và trao đổi tại nhà Em luôn cho an tâm vì máy giá trị rất nhiều tiền\r\n\r\nGiá Bác Em muốn thanh lý lại là : 33 Triệu 800 Ngàn ( Ai thiện chí mua sẽ bớt chút ạ )\r\n', '', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/22/4999526_img-4189.jpg', 33590000, 1, 0, 2, 0, '0000-00-00 00:00:00', 17, 1, 1, '6 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(8, 'Bộ lưu điện Santak TG500 VA', 'Bộ lưu điện UPS Santak Offline TG 500VA được thiết kế lưu điện dự phòng thích hợp cho máy vi tính, máy văn phòng, máy tính tiền trong siêu thị, cùng các thiết bị CNTT, điện tử khác.\r\nUPS Santak Offline TG 500VA có công suất 500 VA / 300 W \r\nUPS Santak Offline TG 500VA có kích thước nhỏ gọn và nhẹ\r\nThời gian chuyển trạng thái hoạt động từ điện lưới sang chế độ lưu điện và ngược lại tối đa 10 mili giây.\r\n- UPS Santak Offline TG 500VA vận hành đơn giản, dễ dàng.\r\n- Cho phép khởi động nguội khi không có điện lưới.\r\n- Bộ nạp điện an toàn giúp kéo dài tuổi thọ của ắc-qui.\r\n- UPS Santak Offline TG 500VA tương thích với máy phát điện\r\nCông ty Trường Phát phân phối các dòng bộ lưu điện online, offline của các hãng Santak, Prolink, APC….bảo đảm chất lượng và giá cả hợp lí, bảo hành 36 tháng, miễn phí lắp đặt và giao hàng trong khu vực TP Hồ Chí Minh', '', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/22/4999240_2015.jpg', 860000, 1, 0, 3, 0, '0000-00-00 00:00:00', 36, 1, 1, '7 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(9, 'iphone 8 plus 64G chưa active TBH VN/a chính hãng new 100% giá rất tốt', ' iphone 8 plus 64G space gray World ( quốc tế ) new 100% chưa active TBH only máy ( chỉ có máy ) còn nguyên seal zin màn hình VN/a ( hàng công ty )', '', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/23/4999616_11871992-50995051-2157417540945320-607934637720731648-n.jpg', 6400000, 1, 0, 4, 0, '0000-00-00 00:00:00', 17, 2, 1, '9 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(10, 'Socola đắng, socola thanh nguyên chất, bánh kẹo nhập khẩu chính hãng giá rẻ nhất', 'Chúng tôi chuyên cung cấp các loại socola chính hãng như Đức, Nga, Ba Lan... Cam kết chất lượng và giá cả tốt nhất. \r\nKhách hàng vui lòng vào gian hàng hoặc link fb để cập nhập nhiều sản phẩm chất lượng của chúng tôi. \r\n\r\nhttps://www.facebook.com/ngo.hongdien?lst=100004347756558%3A100004270083045%3A1540607881', '', '[\"upload\\/imageuser\\/products\\/5ca25a103cfe917264625_753411558156014_8593703073838163834_n.jpg\"]', 6400000, 1, 0, 1, 0, '0000-00-00 00:00:00', 15, 5, 1, '10 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(11, 'Thi công máy lạnh giấu trần nối ống gió chuyên nghiệp nhất', 'Nhà thầu thiết kế - thi công máy lạnh giấu trần nối ống gió chuyên nghiệp nhất\r\n\r\nCHO CÔNG TRÌNH NHÀ HÀNG - BIỆT THỰ - VĂN PHÒNG CÔNG TY & NHÀ XƯỞNG\r\n\r\nMột số hình ảnh thực tế tại công khi đã hoàn thiện\r\nTrong các dòng máy lạnh nối ống gió hiện nay thì Daikin bán chạy nhất thị trường\r\nGIÁ CẢ RẺ - CHẤT LƯỢNG TỐT - HÀNG NHẬP MỚI LIÊN TỤC - BẢO HÀNH CHU ĐÁO\r\nDÒNG ÁP SUẤT TỈNH THẤP FDBNQ Máy lạnh giấu trần ống gió Daikin FDBNQ26MV1/RNQ26MV1(Y1) R410 \r\n\r\nMáy lạnh giấu trần ống gió Daikin FDBNQ26MV1/RNQ26MV1(Y1) R410\r\nGiá: 25.350.000 đ\r\nMáy lạnh giấu trần ống gió Daikin FDBNQ21MV1/RNQ21MV1 R410\r\nGiá: 23.100.000 đ\r\nMáy lạnh giấu trần ống gió Daikin FDBNQ18MV1/RNQ18MV1 R410\r\nGiá: 19.150.000 đ\r\nMáy lạnh giấu trần ống gió Daikin FDBNQ13MV1/RNQ13MV1 R410\r\nGiá: 15.200.000 đ\r\nMáy lạnh giấu trần ống gió Daikin FDBNQ09MV1/RNQ09MV1 R410\r\nGiá: 12.950.000 đ\r\nDÒNG ÁP SUẤT TỈNH TRUNG BÌNH FDMNQMáy lạnh giấu trần ống gió Daikin FDMNQ48MV1/RNQ48MY1 R410\r\n\r\nMáy lạnh giấu trần ống gió Daikin FDMNQ48MV1/RNQ48MY1 R410\r\nGiá: 38.500.000 đ\r\nMáy lạnh giấu trần ống gió Daikin FDMNQ42MV1/RNQ42MY1 R410\r\nGiá: 35.450.000 đ\r\nMáy lạnh giấu trần ống gió Daikin FDMNQ36MV1/RNQ36MV1(Y1) R410\r\nGiá: 32.650.000 đ\r\nMáy lạnh giấu trần ống gió Daikin FDMNQ30MV1/RNQ30MV1(Y1) R410\r\nGiá: 28.450.000 đ\r\n', '', 'https://static8.muarecdn.com/zoom,80/150_150/muare/images/2018/05/17/4645971_daikin-conduct.jpg', 800000, 1, 0, 2, 0, '0000-00-00 00:00:00', 32, 6, 1, '11 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(12, 'Phụ kiện tóc cô dâu', 'aaaa', 'Phụ kiện tóc cô dâu title', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/21/4997908_unnamed28229.png', 12000000, 1, 0, 1, 1, '2019-01-20 08:00:00', 16, 1, 1, '12 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(13, 'Phụ kiện tóc cô dâu', 'Mái tóc cô dâu ngày cưới sẽ thiếu đi sự cuốn hút, quyến rũ, lãng mạn nếu không sử dụng thêm lớp voan cài tóc cô dâu thướt tha, Voan trùm đầu, voan gài tóc và muôn kiểu voan có độ dài ngắn khác nhau luôn được các cô dâu lựa chọn trong các phụ kiện tóc đẹp cho cô dâu\r\nCác mẫu voan 2 lớp có lược cài chỉ 75.000 VND\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 4\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 1\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 2\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 1\r\n\r\nSHOWROOM MỸ PHẨM, DỤNG CỤ TRANG ĐIỂM, TÓC & NAIL CHUYÊN NGHIỆP ĐẸP HIỆN ĐẠI SUVINA\r\nChuyên sỉ lẻ mỹ phẩm trang điểm, mỹ phẩm chăm sóc da, mỹ phẩm tóc, dụng cụ trang điểm, dụng cụ nghề tóc, phụ kiện cô dâu, dụng cụ nghề nail và nối mi', 'Phụ kiện tóc cô dâu title', 'https://static8.muarecdn.com/zoom,80/200_200/muare/images/2019/01/09/4986146_enbac2f15470206733d801aa532c1cec3ee82d87a99fdf63f.jpg', 1300000, -1, 0, 2, 0, '2019-01-20 08:00:00', 16, 1, 1, '13 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(14, 'Phụ kiện tóc cô dâu', 'Mái tóc cô dâu ngày cưới sẽ thiếu đi sự cuốn hút, quyến rũ, lãng mạn nếu không sử dụng thêm lớp voan cài tóc cô dâu thướt tha, Voan trùm đầu, voan gài tóc và muôn kiểu voan có độ dài ngắn khác nhau luôn được các cô dâu lựa chọn trong các phụ kiện tóc đẹp cho cô dâu\r\nCác mẫu voan 2 lớp có lược cài chỉ 75.000 VND\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 4\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 1\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 2\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 1\r\n\r\nSHOWROOM MỸ PHẨM, DỤNG CỤ TRANG ĐIỂM, TÓC & NAIL CHUYÊN NGHIỆP ĐẸP HIỆN ĐẠI SUVINA\r\nChuyên sỉ lẻ mỹ phẩm trang điểm, mỹ phẩm chăm sóc da, mỹ phẩm tóc, dụng cụ trang điểm, dụng cụ nghề tóc, phụ kiện cô dâu, dụng cụ nghề nail và nối mi', 'Phụ kiện tóc cô dâu title', 'https://static8.muarecdn.com/zoom,80/200_200/muare/images/2019/01/09/4986146_enbac2f15470206733d801aa532c1cec3ee82d87a99fdf63f.jpg', 1400000, 1, 0, 4, 0, '2019-01-20 08:00:00', 16, 1, 1, '14 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(15, 'Phụ kiện tóc cô dâu', 'Mái tóc cô dâu ngày cưới sẽ thiếu đi sự cuốn hút, quyến rũ, lãng mạn nếu không sử dụng thêm lớp voan cài tóc cô dâu thướt tha, Voan trùm đầu, voan gài tóc và muôn kiểu voan có độ dài ngắn khác nhau luôn được các cô dâu lựa chọn trong các phụ kiện tóc đẹp cho cô dâu\r\nCác mẫu voan 2 lớp có lược cài chỉ 75.000 VND\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 4\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 1\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 2\r\n\r\nVoan 2 Lớp Có Lược Cài 75K Số 1\r\n\r\nSHOWROOM MỸ PHẨM, DỤNG CỤ TRANG ĐIỂM, TÓC & NAIL CHUYÊN NGHIỆP ĐẸP HIỆN ĐẠI SUVINA\r\nChuyên sỉ lẻ mỹ phẩm trang điểm, mỹ phẩm chăm sóc da, mỹ phẩm tóc, dụng cụ trang điểm, dụng cụ nghề tóc, phụ kiện cô dâu, dụng cụ nghề nail và nối mi', 'Phụ kiện tóc cô dâu title', 'https://static8.muarecdn.com/zoom,80/200_200/muare/images/2019/01/09/4986146_enbac2f15470206733d801aa532c1cec3ee82d87a99fdf63f.jpg', 150000, -1, 0, 3, 0, '2019-01-20 08:00:00', 16, 1, 1, '15 Đại học UTE Thủ Đức Thành phố Hồ Chí Minh'),
(16, 'tên sản phẩm', 'mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩmmô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩmmô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm', 'NULL', 'assets/images/chitietsanpham/logo_muare.png', 96069, 1, 0, 1, 0, '2019-02-16 04:42:21', 30, 15, 1, 'Trung Mỹ Tây, quận 12 thành phố @ alert(\'jewerw\')'),
(18, 'tên sản phẩm', 'mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩmmô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩmmô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm', 'NULL', 'assets/images/chitietsanpham/logo_muare.png', 96069, 1, 0, 1, 0, '2019-02-16 04:54:08', 30, 15, 1, 'Trung Mỹ Tây, quận 12 thành phố @ alert(\'jewerw\')'),
(19, 'tên sản phẩm', 'mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩmmô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩmmô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm mô tả sản phẩm', 'NULL', 'assets/images/chitietsanpham/logo_muare.png', 96069, 1, 0, 1, 0, '2019-02-16 04:57:53', 30, 15, 1, 'Trung Mỹ Tây, quận 12 thành phố @ alert(\'jewerw\')'),
(20, 'tui test tên sản phẩm ', 'test thui k cần  đọc   hihi  asda test thui k cần  đọc   hihi  asda test thui k cần  đọc   hihi  asda', 'NULL', 'assets/images/chitietsanpham/logo_muare.png', 666666, 1, 0, 3, 0, '2019-02-16 05:02:04', 41, 16, 1, 'đường  Tô Ký  - hoàng hoa thám qận 12 '),
(21, 'sản phẩm 1111', 'noi dung san pham11111', 'NULL', 'assets/images/chitietsanpham/logo_muare.png', 661111, 1, 0, 1, 0, '2019-02-16 05:10:44', 23, 18, 1, 'Trung Mỹ Tây, quận 12 thành phố HCM'),
(23, '1111111', '11111', '1111111', '[\"upload\\/imageuser\\/products\\/5ca251b49aa56600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\",\"upload\\/imageuser\\/products\\/5ca251b49b6f214874851_678657972293021_2009143396_n.jpg\"]', 111111, 1, 0, 1, 0, '2019-04-02 01:00:20', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(24, 'Trần Văn Trí', '1111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca251ebed1961qQlxVC.jpg\",\"upload\\/imageuser\\/products\\/5ca251ebed711600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', 111, 1, 0, 1, 0, '2019-04-02 01:01:16', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(25, 'Trần Văn Trí', '1111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca25241202a114874851_678657972293021_2009143396_n.jpg\",\"upload\\/imageuser\\/products\\/5ca252412053515698018_1159299317452530_944448711072132117_n.jpg\"]', 11111111, 1, 0, 1, 0, '2019-04-02 01:02:41', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(26, '11', '11', '11', '[\"upload\\/imageuser\\/products\\/5ca2528582adc600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\",\"upload\\/imageuser\\/products\\/5ca2528582f3414874851_678657972293021_2009143396_n.jpg\"]', 111, 1, 0, 1, 0, '2019-04-02 01:03:49', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(27, 'Trần Văn Trí', '11111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca252ea101a01qQlxVC.jpg\",\"upload\\/imageuser\\/products\\/5ca252ea10421600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', 111, 1, 0, 1, 0, '2019-04-02 01:05:30', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(28, 'Trần Văn Trí', '111111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca253ac684b114874851_678657972293021_2009143396_n.jpg\",\"upload\\/imageuser\\/products\\/5ca253ac688e415698018_1159299317452530_944448711072132117_n.jpg\"]', 111111, 1, 0, 1, 0, '2019-04-02 01:08:44', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(29, 'Trần Văn Trí', '1111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca253dd5a24d15698018_1159299317452530_944448711072132117_n.jpg\"]', 1111, 1, 0, 1, 0, '2019-04-02 01:09:33', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(30, '11111', '111', '11111', '[\"upload\\/imageuser\\/products\\/5ca254415cde414874851_678657972293021_2009143396_n.jpg\"]', 111, 1, 0, 1, 0, '2019-04-02 01:11:13', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(31, 'Trần Văn Trí', '1111111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca254cc2b3301qQlxVC.jpg\"]', 11111, 1, 0, 1, 0, '2019-04-02 01:13:32', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(32, '11', '11111', '11', '[\"upload\\/imageuser\\/products\\/5ca25518c8970600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', 11111, 1, 0, 1, 0, '2019-04-02 01:14:48', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(33, '1', '111', '1', '[\"upload\\/imageuser\\/products\\/5ca2564958f3915698018_1159299317452530_944448711072132117_n.jpg\"]', 111, 1, 0, 1, 0, '2019-04-02 01:19:53', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(34, 'Trần Văn Trí', '111111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca25754925531qQlxVC.jpg\"]', 11111, 1, 0, 1, 0, '2019-04-02 01:24:20', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(35, 'Trần Văn Trí', '11111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca25793ea1e3600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', 11111, 1, 0, 1, 0, '2019-04-02 01:25:24', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(36, 'Trần Văn Trí', '', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca259600ba8314874851_678657972293021_2009143396_n.jpg\"]', 111, 1, 0, 1, 0, '2019-04-02 01:33:04', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(37, 'Trần Văn Trí', '1111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca2598c17c38600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', 11111, 1, 0, 1, 0, '2019-04-02 01:33:48', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(38, 'Trần Văn Trí', '11111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca259d00308d1qQlxVC.jpg\"]', 111, 1, 0, 1, 0, '2019-04-02 01:34:56', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(39, 'Trần Văn Trí', '111111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca25a103cfe917264625_753411558156014_8593703073838163834_n.jpg\"]', 1111, 1, 0, 1, 0, '2019-04-02 01:36:00', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(40, 'Trần Văn Trí', '', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5ca269129cbce1qQlxVC.jpg\"]', 11111, 1, 0, 1, 0, '2019-04-02 02:40:02', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(41, 'Trần Văn Trí', '111', 'Trần Văn Trí', '[\"upload\\/imageuser\\/products\\/5cadafa7ab75f15823001_763227390492774_7784256969538407371_n.jpg\",\"upload\\/imageuser\\/products\\/5cadafa7ac9c715823046_145589115932491_6552633075126252013_n.jpg\"]', 1111, 1, 0, 1, 0, '2019-04-10 15:56:07', 13, 18, 1, '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam'),
(42, 'sản phẩm', 'mô tả sản phẩm', 'sản phẩm', '[\"upload\\/imageuser\\/products\\/5caf16a871172doanh nhan thanh cong.png\"]', 112212, 1, 0, 1, 0, '2019-04-11 17:27:52', 19, 1, 0, '123123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `idPlace` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `view` int(10) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUser` int(11) NOT NULL,
  `idCate` int(11) NOT NULL,
  `adminCheck` tinyint(4) NOT NULL DEFAULT '0',
  `statusService` tinyint(4) NOT NULL COMMENT '1: moi; 2: 90%; 3: 80%; 4 Cũ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `images`, `address`, `price`, `idPlace`, `status`, `view`, `date_added`, `idUser`, `idCate`, `adminCheck`, `statusService`) VALUES
(1, 'Thiết kế web mới theo yêu cầu website bán hàng và các loại khá', 'Bạn đang muốn có một trang web dành riêng cho chính mình trong công việc, kinh doanh?\r\nChi phí quảng cáo đắt đỏ trên youtube, facebook, instagram tiêu tốn quá nhiều tiền nhưng kết quả chưa như mong đợi? Việc mua hàng gây khó khăn cho khách hàng của bạn?\r\nBạn muốn sản phẩm của mình đến với nhiều khách hàng hơn nữa nhằm khẳng định chất lượng sản phẩm cũng như thương hiệu của mình?\r\n\r\nChúng tôi nhận thiết kế web theo yêu cầu:\r\n\r\nHosting từ 2 - 3GB, băng thông ko giới hạn luôn hoạt động ổn định, tránh tình trạng quá tải tài nguyên, tạo tùy ý tên miền con, Email theo tên miền của chính bạn.\r\nChứng chỉ bảo mật SSL giúp khách hàng luôn tin tưởng vào sự bảo mật của website.\r\nBackup theo thời gian của website\r\n\r\nCam kết web tải nhanh không quá 1 giây.\r\nThời gian hoàn thành 9 ngày.\r\nCó module sản phẩm.\r\n\r\nChức năng đặt hàng, giỏ hàng, chat với khách hàng, gửi mail cho khách hàng, thông báo khuyến mãi đến khách hàng,Tiếp nhận đơn đặt hàng trực tuyến, Xem thông tin sản phẩm, giá trị đơn hàng, xem thông tin người đặt hàng, Xác nhận đơn hàng thành công,...\r\nTích hợp bản đồ số (google map).\r\nSơ đồ website (Sitemap)\r\nLiên kết và chia sẻ mạng xã hội Facebook, Google+ , Youtube ...\r\nThống kê truy cập,....\r\nVà nhiều chức năng khác theo yêu cầu của khách hàng ...\r\n\r\n-Thanh toán\r\nHỗ trợ nhiều hình thức thanh toán\r\nTích hợp thanh toán với Ngân Lượng, Paypal.\r\nSlide chuyển đổi ảnh động. Nhiều hiệu ứng sinh động.\r\n\r\nBảo hành vĩnh viễn.', 'assets/images/chitietsanpham/logo_muare.png', 'Hồ Chí Minh', 4000000, 4, 1, 0, '2019-02-18 14:00:15', 1, 31, 1, 1),
(2, 'nhận làm website', 'Bạn đang muốn có một trang web dành riêng cho chính mình trong công việc, kinh doanh?\r\nChi phí quảng cáo đắt đỏ trên youtube, facebook, instagram tiêu tốn quá nhiều tiền nhưng kết quả chưa như mong đợi? Việc mua hàng gây khó khăn cho khách hàng của bạn?\r\nBạn muốn sản phẩm của mình đến với nhiều khách hàng hơn nữa nhằm khẳng định chất lượng sản phẩm cũng như thương hiệu của mình?\r\n\r\nChúng tôi nhận thiết kế web theo yêu cầu:\r\n\r\nHosting từ 2 - 3GB, băng thông ko giới hạn luôn hoạt động ổn định, tránh tình trạng quá tải tài nguyên, tạo tùy ý tên miền con, Email theo tên miền của chính bạn.\r\nChứng chỉ bảo mật SSL giúp khách hàng luôn tin tưởng vào sự bảo mật của website.\r\nBackup theo thời gian của website\r\n\r\nCam kết web tải nhanh không quá 1 giây.\r\nThời gian hoàn thành 9 ngày.\r\nCó module sản phẩm.\r\n\r\nChức năng đặt hàng, giỏ hàng, chat với khách hàng, gửi mail cho khách hàng, thông báo khuyến mãi đến khách hàng,Tiếp nhận đơn đặt hàng trực tuyến, Xem thông tin sản phẩm, giá trị đơn hàng, xem thông tin người đặt hàng, Xác nhận đơn hàng thành công,...\r\nTích hợp bản đồ số (google map).\r\nSơ đồ website (Sitemap)\r\nLiên kết và chia sẻ mạng xã hội Facebook, Google+ , Youtube ...\r\nThống kê truy cập,....\r\nVà nhiều chức năng khác theo yêu cầu của khách hàng ...\r\n\r\n-Thanh toán\r\nHỗ trợ nhiều hình thức thanh toán\r\nTích hợp thanh toán với Ngân Lượng, Paypal.\r\nSlide chuyển đổi ảnh động. Nhiều hiệu ứng sinh động.\r\n\r\nBảo hành vĩnh viễn.', 'assets/images/chitietsanpham/logo_muare.png', 'Hải Phòng', 5000000, 5, 1, 0, '2019-02-24 20:26:32', 1, 14, 0, 1),
(3, 'Nokia 515 xuất đức fullbox mới 99% và e72 new fullbo', 'Nokia 515 Máy đem từ đức về hàng vodafone bản 1 sim fullbox - giá 3tr5\r\nE72 new full box - giá 4tr9\r\nlh: 0906261979', 'assets/images/chitietsanpham/logo_muare.png', 'Bình Định', 3500000, 2, 1, 0, '2019-03-07 23:56:01', 3, 17, 1, 1),
(4, 'Hàng sưu tầm nokia e63 white brand new mới tinh 100%...full box imell trùng hộp......', 'Như tiêu đề mình bán Nokia E63 White Brand New mới tinh 100%(xứng đáng để sưu tầm)....\r\nFull box:máy,pin,xạc,sách đĩa,hộp trùng Imell.......\r\nGiá:1tr500\r\nCall:091589.6789', 'assets/images/chitietsanpham/logo_muare.png', 'Hà Nội', 6500000, 2, 1, 0, '2019-03-07 23:56:53', 3, 17, 1, 1),
(5, 'SAMSUNG GALAXY A7(2018) - 128GB HÀNG CHÍNH HÃNG', 'Màn hình\r\n\r\nCông nghệ màn hình: Super AMOLED\r\nĐộ phân giải: Full HD+ (1080 x 2220 Pixels)\r\nMàn hình rộng: 6.0\"\r\nMặt kính cảm ứng: Kính cường lực Gorilla Glass 3 \r\nCamera sau\r\n\r\nĐộ phân giải: 24 MP, 8 MP và 5 MP (3 camera)\r\nQuay phim: Quay phim FullHD 1080p@30fps\r\nĐèn Flash: Có\r\nChụp ảnh nâng cao: Chụp ảnh xóa phông, Chế độ Slow Motion, A.I Camera, Tự động lấy nét, Chạm lấy nét, Nhận diện khuôn mặt, HDR, Panorama, Làm đẹp (Beautify), Chế độ chụp chuyên nghiệp (Pro) \r\nCamera trước\r\n\r\nĐộ phân giải: 24 MP\r\nVideo call: Hỗ trợ VideoCall thông qua ứng dụng\r\nThông tin khác: Nhận diện khuôn mặt, Chế độ làm đẹp, Quay video Full HD, Tự động lấy nét, Đèn Flash trợ sáng, Camera góc rộng, Selfie ngược sáng HDR, Sticker AR (biểu tượng thực tế ảo), Quay video HD\r\nHệ điều hành - CPU\r\n\r\nHệ điều hành: Android 8.0 (Oreo)\r\nChipset (hãng SX CPU): Exynos 7885 8 nhân 64-bit\r\nTốc độ CPU: 2 nhân 2.2 GHz Cortex-A73 & 6 nhân 1.6 GHz Cortex-A53\r\nChip đồ họa (GPU): Mali™ G71\r\nBộ nhớ & Lưu trữ\r\n\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\r\nBộ nhớ còn lại (khả dụng): Khoảng 108 GB\r\nThẻ nhớ ngoài: MicroSD, hỗ trợ tối đa 512 GB\r\nKết nối\r\n\r\nMạng di động: 3G, 4G LTE Cat 6\r\nSIM: 2 Nano SIM\r\nWifi: Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Wi-Fi hotspot\r\nGPS: A-GPS, GLONASS\r\nBluetooth: LE, A2DP, v5.0\r\nCổng kết nối/sạc: Micro USB\r\nJack tai nghe: 3.5 mm\r\nKết nối khác: NFC\r\nThiết kế & Trọng lượng\r\n\r\nThiết kế: Nguyên khối\r\nChất liệu: Khung kim loại + mặt lưng nhựa giả kính\r\nKích thước: Dài 159.8 mm - Ngang 76.8 mm - Dày 7.5 mm\r\nTrọng lượng: 168 g\r\nThông tin pin & Sạc\r\n\r\nDung lượng pin: 3300 mAh\r\nLoại pin: Pin chuẩn Li-Ion\r\nCông nghệ pin: Tiết kiệm pin\r\nTiện ích\r\n\r\nBảo mật nâng cao: Mở khóa bằng vân tay, Mở khóa bằng khuôn mặt\r\nTính năng đặc biệtNhân bản ứng dụng, trợ lý ảo Samsung Bixby, màn hình luôn hiển thị AOD, mặt kính 2.5D, chặn tin nhắn, chặn cuộc gọi, đèn pin, dolby audio™, ghi âm cuộc gọi\r\nGhi âm: Có, microphone chuyên dụng chống ồn\r\nRadio: Có\r\nXem phim: 3GP, MP4, AVI, WMV\r\nNghe nhạc: AMR, Midi, MP3, WAV, WMA, AAC, OGG, FLAC', 'assets/images/chitietsanpham/logo_muare.png', 'Hà Nội', 9000000, 3, 1, 0, '2019-03-08 00:02:10', 7, 17, 1, 1),
(6, 'Trần Văn Trí', '111', '[]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, '2019-04-02 02:37:25', 18, 13, 0, 0),
(7, '1111', '11', '[\"upload\\/imageuser\\/services\\/5ca26a0d8d22515698018_1159299317452530_944448711072132117_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, '2019-04-02 02:44:13', 18, 13, 0, 0),
(8, 'Trần Văn Trí', 'jhjjkkj', '[\"upload\\/imageuser\\/services\\/5ca26aadbc3d815823046_145589115932491_6552633075126252013_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, '2019-04-02 02:46:53', 18, 13, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags_product`
--

CREATE TABLE `tags_product` (
  `id` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags_service`
--

CREATE TABLE `tags_service` (
  `id` int(11) NOT NULL,
  `idService` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tindang`
--

CREATE TABLE `tindang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `idPlace` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `vip` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: kích hoạt vip    0: chưa kích hoạt',
  `view` int(10) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUser` int(11) NOT NULL,
  `idCate` int(11) NOT NULL,
  `adminCheck` tinyint(1) NOT NULL DEFAULT '0',
  `statusTinDang` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1: moi; 2: 90, 3: 80, 4: cũ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='nguoi dung phai tra tien moi duoc dang';

--
-- Đang đổ dữ liệu cho bảng `tindang`
--

INSERT INTO `tindang` (`id`, `name`, `description`, `images`, `address`, `price`, `idPlace`, `status`, `vip`, `view`, `date_added`, `idUser`, `idCate`, `adminCheck`, `statusTinDang`) VALUES
(1, 'Bộ máy hút sữa điện đôi không bpa unimom minuet và máy tiệt trùng 2 bình cổ rộng fatz fb3011sl', 'Máy hút sữa đôi bằng điện không có BPA Unimom Minuet là dòng máy hút sữa thế hệ mới, lý tưởng cho việc dùng dài hạn và thường xuyên tại bệnh viện, tại gia đình, tại nơi làm việc hoặc khi con đang ngủ. \r\nMáy hút sữa đôi bằng điện không có BPA Unimom Minuet đã được sử dụng rộng rãi tại Châu Âu, Mỹ cùng nhiều quốc gia khác trên thế giới, đáp ứng Tiêu chuẩn Chất lượng Châu Âu CE, Tiêu chuẩn chất lượng Mỹ UL, Tiêu chuẩn Quốc tế ISO và được người tiêu dùng đánh giá rất cao. \r\n\r\n\r\n\r\n* Mã sản phẩm: UM871692\r\n\r\n\r\n1. Đặc điểm nổi bật\r\n\r\nMáy hút sữa điện đôi không BPA Minuet có chế độ hút đơn và hút đôi tùy chọn thông qua 1 ống nối khí chữ T\r\nCó thể sạc pin bằng đầu cắm điện USB, không cần bộ đổi nguồn.Trong khi các sản phẩm cạnh tranh trên thị trường hiện nay chỉ có hoặc một trong hai tính năng trên, và yêu cầu phải sử dụng loại dây cáp USB đặc biệt, thì các sản phẩm của Unimom chỉ cần dùng loại dây cáp USB thông thường, vô cùng tiện lợi cho các mẹ.\r\nNhiều cấp độ điều chỉnh: Nút mát xa riêng biệt cho phép dễ dàng chuyển đổi giữa các cấp độ mát xa/hút. \r\nChức năng mát xa ngực vô cùng độc đáo: Thiết kế thông minh với các “quả bóng” lớn ở miệng vòi hút sẽ tự động mát xa ngực cho mẹ trong quá trình hút sữa. \r\nChức năng xoay 360’: Khớp xoay 360’ giúp cho ống khí không bị gập và lực hút chân không của máy không bị giảm. \r\nMáy chạy êm và có thể mang theo khi di chuyển: Bộ phận hút với trọng lượng nhẹ và chạy rất êm giúp bạn có thể kín đáo vắt sữa khi phải di chuyển. \r\nMàn hình LED hiển thị: Các cấp độ mát xa/hút của máy được hiển thị trên màn hình LED với thiết kế đẹp mắt. \r\n5 cấp độ điều khiển - lực hút chân không/chu trình hút: Nút điều khiển với 5 cấp độ khác nhau cho phép bạn có thể tùy ý điều chỉnh lực hút/chu trình hút của máy theo ý muốn. \r\nMáy hút sữa điện đôi không BPA Minuet có pin sạc và adapter kèm theo máy\r\n2. Sơ đồ các bộ phận máy hút sữa Unimom Minuet\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n3. Hướng dẫn lắp đặt\r\n\r\n\r\n\r\n\r\n\r\n4. Hướng dẫn hút sữa\r\n\r\n\r\n\r\nHãy thật sự thư giãn và suy nghĩ tích cực để kích thích xuống sữa mẹ.\r\nMaxa ngực nhẹ nhàng hoặc áp dụng phương pháp nén ấm bằng cách vuốt nhẹ từ phía sau ngực hướng về núm vú trước khi dùng máy hút sữa. \r\nHút sữa cả 2 bên vú hoặc luân phiên hút mỗi bên đều đặn, trong vòng 15-20 phút mỗi bên.\r\nSẽ hiệu quả và tốt hơn cho bạn khi bạn hút đều đặn thường xuyên thay vì hút 1 lần trong 1 thời gian dài (sau mỗi 2-3 giờ 1 lần hút, 8 lần hút/ngày).\r\nNếu cảm thấy ngực bị đau, hãy tư vấn bác sĩ có chuyên môn về vấn đề liên quan đến sức khỏe và khả năng tiết sữa của bạn.\r\n\r\n\r\n5. Tiêu chuẩn kỹ thuật\r\n\r\nLực hút: 0 - 240 mmHg \r\nMức độ hút : 1 - 5\r\nCó nút mát xa riêng\r\nLoại: máy hút sữa đôi\r\nNguồn điện đầu vào: 100-240V, 50-60Hz, đầu ra 5VDC 2A\r\nBộ phụ kiện bao gồm: 02 Phiễu chụp vú + 02 màng mát xa silicon+ 2 Bình đựng sữa (gồm bình sữa, núm ty, nắp ngăn sữa, cổ bình, nắp đậy) + 2 Chân đế bình sữa + 1 động cơ chính + 02 màng silicon K-pop +02 nắp chụp trên + 02 van màu trắng nhỏ + 02 ống dây khí dài + 01 ống khí ngắn + 01 đầu nối chữ T + 01 dây cáp USB\r\n6. Máy hút sữa giúp nuôi con bằng sữa mẹ\r\n\r\n\r\nNguồn sữa của các bà mẹ có nhiều hay không phụ thuộc vào nguyên tắc cung cầu. Nếu muốn có nhiều sữa, bạn phải thường xuyên kích thích việc tiết sữa bằng cách cho con bú trực tiếp hay dùng máy hút sữa để hút sữa ra. Bí quyết thứ 2 để tiếp tục tạo sữa là các bầu vú phải được hút hết sữa nhiều lần và hoàn toàn. Càng được bú nhiều thì càng tạo ra sữa nhiều. Việc hút sữa ở cả hai bầu vú cùng một lúc làm tăng mức kích thích tố prolactin và giúp duy trì nguồn sữa. Điều này quan trọng đối với những người mẹ đi làm, bởi vì họ có thể bị thiếu sữa do không phải lúc nào cũng có con bên cạnh mình để bú và kích thích nguồn sữa.\r\n\r\n\r\n\r\n7. Hiệu quả đã được chứng minh\r\n\r\nCác bà mẹ cảm thấy máy hút giống như trẻ bú.\r\nMáy hút được nhiều sữa trong thời gian ngắn\r\nDòng sữa về sớm hơn và nhiều hơn\r\n8. Bảo hành: 12 tháng cho động cơ máy\r\n\r\n\r\n9. Dịch vụ hậu mãi nhanh chóng & tin cậy\r\n\r\n\r\n\r\n10. Sản xuất tại Hàn Quốc', 'https://static8.muarecdn.com/zoom,80/150_150/muare/images/2019/01/22/4999471_10.jpg', '466/11 Xô Viết Nghệ Tĩnh, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Minh', 1000000, 1, -1, 0, 0, '0000-00-00 00:00:00', 1, 15, 1, 1),
(2, 'Bộ máy hút sữa điện đôi không bpa unimom minuet và máy tiệt trùng 2 bình cổ rộng fatz fb3011sl', 'Kiểu dáng:\r\n- Trong một hệ thống nhà hàng khách sạn đồng phục cũng sẽ được may theo từng bộ phận riêng, ví dụ nhà bếp có đồng phục nhà bếp; quán bar có đồng phục quán bar… với kiểu dáng và chất liệu vải khác nhau sao cho người mặc cảm thấy thoải mái, tự tin trong suốt quá trình làm việc.\r\n- Mẫu đồng phục bàn, bar mà VIỆT ĐỒNG PHỤC giới thiệu dưới đây dành cho nữ mang đến vẻ ngoài vừa cổ điển vừa nhẹ nhàng lại kín đáo, đầy tinh tế.\r\n- Để mang lại cảm giác mềm mại, an toàn cho làn da của người mặc, đồng phục bàn, bar được làm từ những thước vải cao cấp với các đặc tính bền đẹp, bề mặt vải mềm mịn, và đặc biệt không kích ứng với da, đội ngũ nhân viên của bạn sẽ không bị dị ứng hay mẩn ngứa, kể cả những người có làn da nhạy cảm. \r\n- Cảm ơn quý khách đã tin tưởng và sáng suốt lựa chọn may Đồng phục nhân viên phục vụ bàn tại công ty chúng tôi. VIỆT ĐỒNG PHỤC cam kết sản xuất những sản phẩm tiêu chuẩn nhất, chất lượng nhất, thoải mái nhất nhưng cũng không kém phần thời trang. \r\n', 'https://static8.muarecdn.com/zoom,80/150_150/muare/images/2019/01/22/4999471_10.jpg', 'Trung Mỹ Tây, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Minh', 2000000, 2, 1, 0, 0, '0000-00-00 00:00:00', 1, 36, 1, 1),
(3, 'May đồng phục nhân viên chạy bàn tại hà nội - tư vấn nhiệt tìn', 'Kiểu dáng:\r\n- Trong một hệ thống nhà hàng khách sạn đồng phục cũng sẽ được may theo từng bộ phận riêng, ví dụ nhà bếp có đồng phục nhà bếp; quán bar có đồng phục quán bar… với kiểu dáng và chất liệu vải khác nhau sao cho người mặc cảm thấy thoải mái, tự tin trong suốt quá trình làm việc.\r\n- Mẫu đồng phục bàn, bar mà VIỆT ĐỒNG PHỤC giới thiệu dưới đây dành cho nữ mang đến vẻ ngoài vừa cổ điển vừa nhẹ nhàng lại kín đáo, đầy tinh tế.\r\n- Để mang lại cảm giác mềm mại, an toàn cho làn da của người mặc, đồng phục bàn, bar được làm từ những thước vải cao cấp với các đặc tính bền đẹp, bề mặt vải mềm mịn, và đặc biệt không kích ứng với da, đội ngũ nhân viên của bạn sẽ không bị dị ứng hay mẩn ngứa, kể cả những người có làn da nhạy cảm. \r\n- Cảm ơn quý khách đã tin tưởng và sáng suốt lựa chọn may Đồng phục nhân viên phục vụ bàn tại công ty chúng tôi. VIỆT ĐỒNG PHỤC cam kết sản xuất những sản phẩm tiêu chuẩn nhất, chất lượng nhất, thoải mái nhất nhưng cũng không kém phần thời trang. \r\n', 'https://static8.muarecdn.com/zoom,80/150_150/muare/images/2019/01/22/4999471_10.jpg', 'An Khánh, Hoài Đức, Hà Nội (gần Thiên Đường Bảo Sơn)', 0, 3, 1, 0, 0, '0000-00-00 00:00:00', 2, 13, 1, 1),
(4, 'Thiết kế và may đồng phục bếp giá rẻ theo yêu cầu', 'THIẾT KẾ VÀ MAY ĐỒNG PHỤC BẾP GIÁ RẺ THEO YÊU CẦU\r\nMay đồng phục bếp để thể hiện sự chuyên nghiệp, chỉnh chu giúp khách hàng nhận biết được từng bộ phận trong nhà hàng - khách sạn. Ngoài ra đồng phục bếp đẹp còn thể hiện đẳng cấp của nhà hàng khách sạn.\r\nCông ty TNHH Thương Mại Thời Trang Mộc là địa chỉ may đồng phục bếp giá rẻ, chất lượng tại TP.HCM hiện nay. Chúng tôi luôn mang đến cho khách hàng những sản phẩm đồng phục bếp đẹp, giá rẻ.\r\nĐồng bếp giá rẻ của chúng tôi được may với chất liệu vải bền đẹp, cao cấp giữ màu lâu, thấm hút mồ hôi và đường cắt may tinh tế, chắc chắn sẽ tạo cho người đầu bếp sự thoải mái, thoáng mát khi vận động, làm việc trong bếp.\r\nMột bộ đồng phục bếp đẹp phải đi kèm với áo bếp, mũ nón bếp, tạp dề bếp... phải phù hợp và được kết hợp độc đáo tạo nên phong cách riêng của nhà hàng khách sạn của mình.\r\nKhách hàng khi may đồng phục bếp giá rẻ của chúng tôi bạn có thể yên tâm vì Đồng Phục Mộc đảm bảo giao hàng đúng hẹn dù bạn đặt may với số lượng nhiều, chất liệu vải luôn tốt, kiểu dáng hiện đại, sang trọng.\r\nCÔNG TY TNHH TM THỜI TRANG MỘC', 'assets/images/chitietsanpham/logo_muare.png', '466/11 Xô Viết Nghệ Tĩnh, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Minh', 1000, 4, 1, 0, 0, '0000-00-00 00:00:00', 2, 13, 1, 1),
(5, 'Cần tìm mua máy tháo vỏ xe tay ga, xe gắn máy và xe du lịch', 'Tôi đang cần tìm mua máy tháo vỏ xe tay ga, xe gắn máy và ô tô du lịch? Ở đâu bán máy ra vào vỏ xe giá rẻ mà chất lượng, chính sách vận chuyển và bảo hành như thế nào? có giao về tận nơi không?\r\n\r\nTrên đó là những điều mà rất nhiều bác thợ thắc mắc khi muốn tìm mua máy tháo vỏ. Bài viết này SPRO.VN sẽ giải đáp giúp bạn những thắc mắc đó\r\n\r\n1. MÁY THÁO VỎ XE TAY GA, XE GẮN MÁY, XE DU LỊCH CÓ NHỮNG LOẠI NÀO?\r\n\r\nHiện nay có rất nhiều loại máy tháo vỏ đa năng, có thể đáp ứng những nhu cầu của bạn. Với 1 chiếc máy ra vào vỏ mà có thể mở được rất nhiều loại vỏ xe khác nhau\r\n\r\n- Mở vỏ các loại xe tay ga từ Attila đến SH hay Exciter...\r\n- Mở các loại xe du lịch từ 16 chỗ trở xuống\r\n- Mở các loại xe tải nhỏ, bán tải từ 2.5 tấn trở xuống\r\n\r\nVậy có những loại máy tháo vỏ nào?\r\n\r\n- Máy tháo vỏ NK: NK318E, NK418E, NK324….\r\n- Máy tháo vỏ Bright: LC810E,\r\n- Máy tháo vỏ Tamca : T100 với giá cực rẻ\r\n- Máy tháo vỏ Konia: K2080\r\n- Máy tháo vỏ Bigbin: BP888\r\n\r\n2. Ở ĐÂU BÁN MÁY THÁO VỎ XE DU LỊCH, XE TAY GA VÀ XE GẮN MÁY GIÁ RẺ MÀ CHẤT LƯỢNG?\r\n\r\nSPRO.VN – kênh bán hàng trực tuyến của công ty Nam Việt về máy tháo vỏ - là đơn vị nhập khẩu trực tiếp máy ra vào vỏ xe các loại và phân phối trên toàn quốc\r\n\r\nHàng được nhập khẩu nguyên thùng mới 100% với đầy đủ phụ kiện và phụ tùng thay thế đảm bảo cho việc bảo hành\r\n\r\nLịch trình 1 tháng sẽ có 1 công hàng máy tháo vỏ về tại kho để đáp ứng nhu cầu của các bác thợ. Bởi vậy,hàng luôn có sẵn để phục vụ mọi người nhé\r\n\r\nQuý khách có thể đặt mua hàng tại SPRO.VN theo 2 cách\r\n\r\n- Truy cập website: spro.vn\r\n- Gọi điện tới Hotline: 0909 115 704 – 0965 570 643\r\n\r\n3. CHÍNH SÁCH VẬN CHUYỂN VÀ BẢO HÀNH NHƯ THẾ NÀO?\r\n\r\nChính sách bảo hành:\r\n\r\n- Bảo hành tận nơi 1 - 2 năm tùy loại sản phẩm : Trong thời gian bảo hành, nếu có bất kỳ sự cố, hỏng hóc, sẽ có nhân viên đến tận nhà sửa chữa, hoặc thay thế linh kiện hỏng hoàn toàn miễn phí\r\n- Có đầy đủ linh phụ kiện thay thế\r\n- Luôn hỗ trợ sửa chữa sau khi hết hạn bảo hành\r\n\r\nChính sách vận chuyển\r\n\r\n- Giao hàng về tận nhà trên toàn quốc\r\n- Hỗ trợ lắp đặt tận nơi. Có kỹ thuật đi kèm để hướng dẫn\r\n- Nhận máy, test thử thành công rồi mới thanh toán tiền\r\n- Miễn phí vận chuyển trong tp HCM, hoặc 40 km tính từ công ty nếu ở ngoại thành', 'assets/images/chitietsanpham/logo_muare.png', '167 - 169 Bình Lợi (Nơ Trang Long nối dài), P13, Q. Bình Thạnh, TP Hồ Chí Minh', NULL, 2, 1, 0, 0, '0000-00-00 00:00:00', 3, 8, 1, 1),
(6, 'Tiêu chuẩn lựa chọn đầu bơm cao áp tốt', 'Đầu bơm cao áp được xem là bộ phận không thể thiếu của 1 chiếc máy rửa xe hoàn chỉnh, vì nó giúp máy hoạt động đúng công suất và đạt hiệu quả tốt nhất. Hiện nay trên thị trường Việt Nam có 3 kiểu đầu bơm phổ biến là đầu bơm kiểu đĩa quay dẫn động piston (mặt bích), đầu bơm 3 piston trục khủy thanh truyền (trục khớp) và đầu bơm lắp theo kiểu dây đai. \r\n\r\nLựa chọn được sản phẩm vừa chất lượng, vừa đẹp là nhu cầu tất yếu của mỗi người tiêu dùng. Để lựa chọn được sản phẩm bơm cao áp tốt, bạn cần dựa vào những tiêu chí đánh giá cụ thể để xem xét\r\n\r\nTiêu chuẩn lựa chọn đầu bơm cao áp tốt\r\n\r\n\r\n\r\nThông số áp lực phun và lưu lượng nước\r\n\r\nÁp lực phun là một trong những yếu tố quan trọng người tiêu dùng xem xét khi quyết định lựa chọn sản phẩm. Một chiếc đầu bơm cao áp, tốc độ nước cao, đồng nghĩa với khả năng rửa sạch của máy cao, đây là sản phẩm tốt. Ngược lại, sản phẩm kém chất lượng đồng nghĩa với áp lực phun và lưu lượng nước thấp.\r\n\r\nCông suất đầu bơm cao áp\r\n\r\nCũng như yếu tố trên, công suất máy cũng là thông số quan trọng. Công suất của máy xịt càng cao thì khả năng xịt nước tốt hơn.\r\n\r\nĐể phù hợp với nhu cầu của người tiêu dùng, các thương hiệu nổi tiếng thiết kế máy rửa có công suất 1 KW trở lên. Nếu muốn sử dụng loại máy có công suất cao từ 3 KW, bạn cần chắc chắn rằng điện áp ở khu vực ở mạnh ổn định để tránh những trường hợp quá tải, cháy nổ.\r\n\r\n\r\n\r\nGiá thành\r\n\r\nGiá cả luôn đi cùng với chất lượng sản phẩm. Tuy nhiên, hiện nay cũng không hiếm những trường hợp máy xịt rửa đảm bảo chất lượng nhưng giá cả thấp. Đây cần sự tinh tế nhìn nhận đánh giá của người tiêu dùng.\r\n\r\nChế độ bảo hành\r\n\r\nCác loại máy rửa xe cao áp hiện nay có thời gian bảo hành khá thấp chỉ khoảng 6-12 tháng, một số dòng máy công nghiệp sẽ có thời gian bảo hành lâu hơn. Khi bạn chọn mua bạn cũng cần lưu ý đến chế độ bảo hành này nhé, nên ưu tiên chọn sản phẩm có thời gian bảo hành càng lâu càng tốt.\r\n\r\nVới nhiều năm kinh nghiệm kinh doanh trong ngành cung cấp thiết bị làm sạch chúng tôi xin giới thiệu đến bạn một loại đầu bơm được sản xuất theo công nghệ Châu Âu đó là đầu bơm cao áp AR chính hãng được nhập khẩu phân phối bởi công ty SPRO.\r\n\r\n\r\n\r\nĐầu bơm cao áp AR này có thực sự chất lượng?\r\nCam kết được sản xuất theo công nghệ châu u => đảm bảo độ bền và tuổi thọ của máy.\r\nCác chi tiết máy được gia công chính xác, tối ưu nhất => giảm mức độ hao mòn sản phẩm.\r\nÁp lực và lưu lượng nước ổn định => phù hợp sử dụng trong nhiều lĩnh vực ( rửa xe ô tô, vệ sinh công trường, nhà xưởng, chăn nuôi chường trại, đóng tàu...).\r\nSử dụng đa dạng nguồn điện => có thể sử dụng máy dùng điện 1 pha hoặc 3 pha.\r\nCông suất mô tơ đa dạng => có thể dùng máy từ 3 HP trở lên.\r\nĐặc biệt dùng Piston lõi sứ ( trắng ) => tăng khả năng làm việc, duy trì hiệu suất làm việc.\r\nNhược điểm duy nhất của máy là giá thành cao hơn so với các loại khác.\r\nLưu ý : các bạn có thể đến trực tiếp công ty để chúng tôi kiểm tra và hoạt động thử các dòng máy khác nhau để bạn có cái nhìn chính xác nhất giữa đầu bơm của Ý và các đầu bơm khác (yên tâm là công ty bán đa dạng đầu bơm nên tha hồ cho bạn lựa chọn).', 'assets/images/chitietsanpham/logo_muare.png', '167 - 169 Bình Lợi (Nơ Trang Long nối dài), P13, Q. Bình Thạnh, TP Hồ Chí Minh', 1, 4, 1, 0, 0, '0000-00-00 00:00:00', 4, 8, 1, 1),
(7, 'Máy photocopy canon ir 2535', 'Giới thiệu sản phẩm :\r\n- Chỉ cần đầu tư một chiếc máy Photocopy Canon ImageRunner 2535W bạn có thể thay thế tất cả những máy khác : máy In, máy Photocopy, máy Scan,.. tiết kiệm không gian văn phòng và chi phí đầu tư.\r\nThông số kỹ thuật máy Photocopy Canon IR 2535W : \r\n- Chức năng chuẩn : Copy - In mạng - Scan màu\r\n- Tốc độ : 35 trang / phút khổ A4\r\n- Giao tiếp màn hình LCD cảm ứng Tiếng Việt\r\n- Độ phân giải : 1200 dpi x 1200 dpi ( in ), 600 dpi x 600 dpi ( copy )\r\n- Thời gian Copy bản đầu tiên : 3.9 giây\r\n- Ngôn ngữ in : UFR II LT \r\n- Bộ nhớ tiêu chuẩn : 256 MB ( nâng cấp lên 512 MB )\r\n- Khổ giấy tối đa : A3\r\n- Khay giấy chuẩn : 02 x 550 tờ ( tối đa : khay 04 x 550 tờ )\r\n- Khay tay : 100 tờ \r\n- Chức năng in mạng, in hai mặt ( Duplex )\r\n- Khay nạp bản gốc tự động 50 tờ ( DADF - AA1 )\r\n- Chức năng Scan mạng, Scan màu\r\n- In hình trực tiếp từ USB với file .JPEG,.TIF\r\n- Tính năng quét 1 lần sao chụp nhiều lần\r\n- Tính năng xoay và chia bộ\r\n- Khả năng phóng to thu nhỏ : 25% - 400%\r\n- Sao chụp liên tục : 999 tờ\r\n- Cổng kết nối : USB 2.0, RJ45\r\n- Trọng lượng xấp xỉ : 69,5 Kg\r\n- Điện năng tiêu thụ : 1.827kW \r\n- Nguồn điện 220 - 240v AC, 50 / 60Hz\r\n- Sử dụng mực Canon NPG - 50 - Xấp xỉ 19.400 trang A4\r\nChất lượng máy Photocopy Canon IR 2535W :\r\n- Máy mới 100%, nguyên đai, nguyên kiện, chính hãng Canon\r\n- Có chứng nhận xuất xứ ( CO ), Chứng nhận chất lượng( CQ )\r\n- Công nghệ JAPAN, xuất xứ Thái Lan\r\nNhững lý do nên chọn mua máy Photocopy Canon ImageRunner 2535W :\r\n- Bạn có thể in ấn nhanh chóng trực tiếp từ USB mà không cần phải thông qua máy tính với những file định dạng *.JPG hoặc *.TIF\r\n- Sản phẩm được bảo hành chính hãng 24 tháng tận nơi', 'https://static8.muarecdn.com/zoom/430_430/muare/images/2019/01/31/5005063_2530w.jpg', '466/11, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Minh', 2300000, 4, 1, 1, 96, '2019-01-15 04:00:00', 1, 16, 1, 1),
(8, 'Bộ máy hút sữa điện đôi copy', '\r\nMáy hút sữa đôi bằng điện không có BPA Unimom Minuet đã được sử dụng rộng rãi tại Châu Âu, Mỹ cùng nhiều quốc gia khác trên thế giới, đáp ứng Tiêu chuẩn Chất lượng Châu Âu CE, Tiêu chuẩn chất lượng Mỹ UL, Tiêu chuẩn Quốc tế ISO và được người tiêu dùng đánh giá rất cao. \r\n\r\n\r\n\r\n* Mã sản phẩm: UM871692\r\n\r\n\r\n1. Đặc điểm nổi bật\r\n\r\nMáy hút sữa điện đôi không BPA Minuet có chế độ hút đơn và hút đôi tùy chọn thông qua 1 ống nối khí chữ T\r\nCó thể sạc pin bằng đầu cắm điện USB, không cần bộ đổi nguồn.Trong khi các sản phẩm cạnh tranh trên thị trường hiện nay chỉ có hoặc một trong hai tính năng trên, và yêu cầu phải sử dụng loại dây cáp USB đặc biệt, thì các sản phẩm của Unimom chỉ cần dùng loại dây cáp USB thông thường, vô cùng tiện lợi cho các mẹ.\r\nNhiều cấp độ điều chỉnh: Nút mát xa riêng biệt cho phép dễ dàng chuyển đổi giữa các cấp độ mát xa/hút. \r\nChức năng mát xa ngực vô cùng độc đáo: Thiết kế thông minh với các “quả bóng” lớn ở miệng vòi hút sẽ tự động mát xa ngực cho mẹ trong quá trình hút sữa. \r\nChức năng xoay 360’: Khớp xoay 360’ giúp cho ống khí không bị gập và lực hút chân không của máy không bị giảm. \r\nMáy chạy êm và có thể mang theo khi di chuyển: Bộ phận hút với trọng lượng nhẹ và chạy rất êm giúp bạn có thể kín đáo vắt sữa khi phải di chuyển. \r\nMàn hình LED hiển thị: Các cấp độ mát xa/hút của máy được hiển thị trên màn hình LED với thiết kế đẹp mắt. \r\n5 cấp độ điều khiển - lực hút chân không/chu trình hút: Nút điều khiển với 5 cấp độ khác nhau cho phép bạn có thể tùy ý điều chỉnh lực hút/chu trình hút của máy theo ý muốn. \r\nMáy hút sữa điện đôi không BPA Minuet có pin sạc và adapter kèm theo máy\r\n2. Sơ đồ các bộ phận máy hút sữa Unimom Minuet\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n3. Hướng dẫn lắp đặt\r\n\r\n\r\n\r\n\r\n\r\n4. Hướng dẫn hút sữa\r\n\r\n\r\n\r\nHãy thật sự thư giãn và suy nghĩ tích cực để kích thích xuống sữa mẹ.\r\nMaxa ngực nhẹ nhàng hoặc áp dụng phương pháp nén ấm bằng cách vuốt nhẹ từ phía sau ngực hướng về núm vú trước khi dùng máy hút sữa. \r\nHút sữa cả 2 bên vú hoặc luân phiên hút mỗi bên đều đặn, trong vòng 15-20 phút mỗi bên.\r\nSẽ hiệu quả và tốt hơn cho bạn khi bạn hút đều đặn thường xuyên thay vì hút 1 lần trong 1 thời gian dài (sau mỗi 2-3 giờ 1 lần hút, 8 lần hút/ngày).\r\nNếu cảm thấy ngực bị đau, hãy tư vấn bác sĩ có chuyên môn về vấn đề liên quan đến sức khỏe và khả năng tiết sữa của bạn.\r\n\r\n\r\n5. Tiêu chuẩn kỹ thuật\r\n\r\nLực hút: 0 - 240 mmHg \r\nMức độ hút : 1 - 5\r\nCó nút mát xa riêng\r\nLoại: máy hút sữa đôi\r\nNguồn điện đầu vào: 100-240V, 50-60Hz, đầu ra 5VDC 2A\r\nBộ phụ kiện bao gồm: 02 Phiễu chụp vú + 02 màng mát xa silicon+ 2 Bình đựng sữa (gồm bình sữa, núm ty, nắp ngăn sữa, cổ bình, nắp đậy) + 2 Chân đế bình sữa + 1 động cơ chính + 02 màng silicon K-pop +02 nắp chụp trên + 02 van màu trắng nhỏ + 02 ống dây khí dài + 01 ống khí ngắn + 01 đầu nối chữ T + 01 dây cáp USB\r\n6. Máy hút sữa giúp nuôi con bằng sữa mẹ\r\n\r\n\r\nNguồn sữa của các bà mẹ có nhiều hay không phụ thuộc vào nguyên tắc cung cầu. Nếu muốn có nhiều sữa, bạn phải thường xuyên kích thích việc tiết sữa bằng cách cho con bú trực tiếp hay dùng máy hút sữa để hút sữa ra. Bí quyết thứ 2 để tiếp tục tạo sữa là các bầu vú phải được hút hết sữa nhiều lần và hoàn toàn. Càng được bú nhiều thì càng tạo ra sữa nhiều. Việc hút sữa ở cả hai bầu vú cùng một lúc làm tăng mức kích thích tố prolactin và giúp duy trì nguồn sữa. Điều này quan trọng đối với những người mẹ đi làm, bởi vì họ có thể bị thiếu sữa do không phải lúc nào cũng có con bên cạnh mình để bú và kích thích nguồn sữa.\r\n\r\n\r\n\r\n7. Hiệu quả đã được chứng minh\r\n\r\nCác bà mẹ cảm thấy máy hút giống như trẻ bú.\r\nMáy hút được nhiều sữa trong thời gian ngắn\r\nDòng sữa về sớm hơn và nhiều hơn\r\n8. Bảo hành: 12 tháng cho động cơ máy\r\n\r\n\r\n9. Dịch vụ hậu mãi nhanh chóng & tin cậy\r\n\r\n\r\n\r\n10. Sản xuất tại Hàn Quốc', 'https://static8.muarecdn.com/zoom,80/150_150/muare/images/2019/01/22/4999471_10.jpg', 'copy 1 Xô Viết Nghệ Tĩnh, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Minh', 23000000, 3, 1, 0, 2, '2019-02-04 00:00:00', 1, 15, 1, 1),
(9, 'Bộ 2 máy hút sữa điện đôi copy 2', '\r\n 222 bằng điện không có BPA Unimom Minuet đã được sử dụng rộng rãi tại Châu Âu, Mỹ cùng nhiều quốc gia khác trên thế giới, đáp ứng Tiêu chuẩn Chất lượng Châu Âu CE, Tiêu chuẩn chất lượng Mỹ UL, Tiêu chuẩn Quốc tế ISO và được người tiêu dùng đánh giá rất cao. \r\n\r\n\r\n\r\n* Mã sản phẩm: UM871692\r\n\r\n\r\n1. Đặc điểm nổi bật\r\n\r\nMáy hút sữa điện đôi không BPA Minuet có chế độ hút đơn và hút đôi tùy chọn thông qua 1 ống nối khí chữ T\r\nCó thể sạc pin bằng đầu cắm điện USB, không cần bộ đổi nguồn.Trong khi các sản phẩm cạnh tranh trên thị trường hiện nay chỉ có hoặc một trong hai tính năng trên, và yêu cầu phải sử dụng loại dây cáp USB đặc biệt, thì các sản phẩm của Unimom chỉ cần dùng loại dây cáp USB thông thường, vô cùng tiện lợi cho các mẹ.\r\nNhiều cấp độ điều chỉnh: Nút mát xa riêng biệt cho phép dễ dàng chuyển đổi giữa các cấp độ mát xa/hút. \r\nChức năng mát xa ngực vô cùng độc đáo: Thiết kế thông minh với các “quả bóng” lớn ở miệng vòi hút sẽ tự động mát xa ngực cho mẹ trong quá trình hút sữa. \r\nChức năng xoay 360’: Khớp xoay 360’ giúp cho ống khí không bị gập và lực hút chân không của máy không bị giảm. \r\nMáy chạy êm và có thể mang theo khi di chuyển: Bộ phận hút với trọng lượng nhẹ và chạy rất êm giúp bạn có thể kín đáo vắt sữa khi phải di chuyển. \r\nMàn hình LED hiển thị: Các cấp độ mát xa/hút của máy được hiển thị trên màn hình LED với thiết kế đẹp mắt. \r\n5 cấp độ điều khiển - lực hút chân không/chu trình hút: Nút điều khiển với 5 cấp độ khác nhau cho phép bạn có thể tùy ý điều chỉnh lực hút/chu trình hút của máy theo ý muốn. \r\nMáy hút sữa điện đôi không BPA Minuet có pin sạc và adapter kèm theo máy\r\n2. Sơ đồ các bộ phận máy hút sữa Unimom Minuet\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n3. Hướng dẫn lắp đặt\r\n\r\n\r\n\r\n\r\n\r\n4. Hướng dẫn hút sữa\r\n\r\n\r\n\r\nHãy thật sự thư giãn và suy nghĩ tích cực để kích thích xuống sữa mẹ.\r\nMaxa ngực nhẹ nhàng hoặc áp dụng phương pháp nén ấm bằng cách vuốt nhẹ từ phía sau ngực hướng về núm vú trước khi dùng máy hút sữa. \r\nHút sữa cả 2 bên vú hoặc luân phiên hút mỗi bên đều đặn, trong vòng 15-20 phút mỗi bên.\r\nSẽ hiệu quả và tốt hơn cho bạn khi bạn hút đều đặn thường xuyên thay vì hút 1 lần trong 1 thời gian dài (sau mỗi 2-3 giờ 1 lần hút, 8 lần hút/ngày).\r\nNếu cảm thấy ngực bị đau, hãy tư vấn bác sĩ có chuyên môn về vấn đề liên quan đến sức khỏe và khả năng tiết sữa của bạn.\r\n\r\n\r\n5. Tiêu chuẩn kỹ thuật\r\n\r\nLực hút: 0 - 240 mmHg \r\nMức độ hút : 1 - 5\r\nCó nút mát xa riêng\r\nLoại: máy hút sữa đôi\r\nNguồn điện đầu vào: 100-240V, 50-60Hz, đầu ra 5VDC 2A\r\nBộ phụ kiện bao gồm: 02 Phiễu chụp vú + 02 màng mát xa silicon+ 2 Bình đựng sữa (gồm bình sữa, núm ty, nắp ngăn sữa, cổ bình, nắp đậy) + 2 Chân đế bình sữa + 1 động cơ chính + 02 màng silicon K-pop +02 nắp chụp trên + 02 van màu trắng nhỏ + 02 ống dây khí dài + 01 ống khí ngắn + 01 đầu nối chữ T + 01 dây cáp USB\r\n6. Máy hút sữa giúp nuôi con bằng sữa mẹ\r\n\r\n\r\nNguồn sữa của các bà mẹ có nhiều hay không phụ thuộc vào nguyên tắc cung cầu. Nếu muốn có nhiều sữa, bạn phải thường xuyên kích thích việc tiết sữa bằng cách cho con bú trực tiếp hay dùng máy hút sữa để hút sữa ra. Bí quyết thứ 2 để tiếp tục tạo sữa là các bầu vú phải được hút hết sữa nhiều lần và hoàn toàn. Càng được bú nhiều thì càng tạo ra sữa nhiều. Việc hút sữa ở cả hai bầu vú cùng một lúc làm tăng mức kích thích tố prolactin và giúp duy trì nguồn sữa. Điều này quan trọng đối với những người mẹ đi làm, bởi vì họ có thể bị thiếu sữa do không phải lúc nào cũng có con bên cạnh mình để bú và kích thích nguồn sữa.\r\n\r\n\r\n\r\n7. Hiệu quả đã được chứng minh\r\n\r\nCác bà mẹ cảm thấy máy hút giống như trẻ bú.\r\nMáy hút được nhiều sữa trong thời gian ngắn\r\nDòng sữa về sớm hơn và nhiều hơn\r\n8. Bảo hành: 12 tháng cho động cơ máy\r\n\r\n\r\n9. Dịch vụ hậu mãi nhanh chóng & tin cậy\r\n\r\n\r\n\r\n10. Sản xuất tại Hàn Quốc', 'https://static8.muarecdn.com/zoom,80/150_150/muare/images/2019/01/22/4999471_10.jpg', 'copy 1 Xô Viết Nghệ Tĩnh, Phường 26, Quận Bình Thạnh, TP. Hồ Chí Minh', 23000000, 3, 1, 0, 2, '2019-02-04 00:00:00', 1, 15, 1, 1),
(21, 'tiêu đề tin đăng tiêu đề tin đăng', 'Đây là nội dung tin đăng, không liên quan đến sản phẩm Đây là nội dung tin đăng, không liên quan đến sản phẩm Đây là nội dung tin đăng, không liên quan đến sản phẩm', 'assets/images/chitietsanpham/logo_muare.png', 'Trung Mỹ Tây, quận 12 thành phố @ alert(\'jewerw\')', 6900099, 5, 0, 0, 0, '2019-02-16 04:49:05', 15, 21, 0, 0),
(22, 'tiêu đề tin đăng tiêu đề tin đăng', 'Đây là nội dung tin đăng, không liên quan đến sản phẩm Đây là nội dung tin đăng, không liên quan đến sản phẩm Đây là nội dung tin đăng, không liên quan đến sản phẩm', 'assets/images/chitietsanpham/logo_muare.png', 'Trung Mỹ Tây, quận 12 thành phố @ alert(\'jewerw\')', 6900099, 5, 1, 0, 0, '2019-02-16 04:54:07', 15, 21, 0, 0),
(23, 'tiêu đề tin đăng tiêu đề tin đăng', 'Đây là nội dung tin đăng, không liên quan đến sản phẩm Đây là nội dung tin đăng, không liên quan đến sản phẩm Đây là nội dung tin đăng, không liên quan đến sản phẩm', 'assets/images/chitietsanpham/logo_muare.png', 'Trung Mỹ Tây, quận 12 thành phố @ alert(\'jewerw\')', 6900099, 5, 1, 0, 0, '2019-02-16 04:57:53', 15, 21, 0, 0),
(24, 'tui test đăng tin dịch vụ', 'này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha này là test thui nha', 'assets/images/chitietsanpham/logo_muare.png', 'đường  Tô Ký  - hoàng hoa thám qận 12 ', 999999, 5, 1, 0, 0, '2019-02-16 05:02:04', 16, 56, 1, 0),
(25, 'tiêu đề 22222', 'nội dung teu de 22222', 'assets/images/chitietsanpham/logo_muare.png', 'Trung Mỹ Tây, quận 12 thành phố HCM', 99992222, 1, 1, 0, 0, '2019-02-16 05:10:44', 18, 17, 0, 0),
(26, 'werewrwe', 'werwerwerwerwe', 'assets/images/chitietsanpham/logo_muare.png', 'condimemay', 99992222, 3, 1, 0, 0, '2019-02-18 10:35:57', 1, 24, 0, 0),
(27, 'werewrwe', 'werwerwerwerwe', 'assets/images/chitietsanpham/logo_muare.png', 'condimemay', 99992222, 3, 1, 0, 0, '2019-02-18 10:39:06', 1, 24, 0, 0),
(28, 'đsđá', 'đá', 'Null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 313123, 1, 1, 0, 0, '2019-03-21 17:53:43', 10, 13, 0, 0),
(29, 'Trần Văn Trí', 'ssss', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 222, 1, 1, 0, 0, '2019-03-21 18:05:14', 10, 13, 0, 0),
(30, 'Trần Văn Trí', 'ssss', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 222, 1, 1, 0, 0, '2019-03-21 18:05:41', 10, 13, 0, 0),
(31, 'Trần Văn Trí', 'ssss', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 222, 1, 1, 0, 0, '2019-03-21 18:06:24', 10, 13, 0, 0),
(32, 'Trần Văn Trí', '2222', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 222, 1, 1, 0, 0, '2019-03-21 18:31:27', 10, 13, 0, 0),
(33, 'Trần Văn Trí', '2222', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 222, 1, 1, 0, 0, '2019-03-21 18:32:09', 10, 13, 0, 0),
(34, 'Trần Văn Trí', '2222', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 222, 1, 1, 0, 0, '2019-03-21 18:36:48', 10, 13, 0, 0),
(35, 'Trần Văn Trí', '2222', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 222, 1, 1, 0, 0, '2019-03-21 18:38:27', 10, 13, 0, 0),
(36, 'Lỗi tên tin dịch vụ', 'Lỗi mô tả dịch vụ', 'null', 'Lỗi địa chỉ', -1, -1, 1, 0, 0, '2019-03-21 19:00:03', 18, -1, 0, 0),
(37, 'Lỗi tên tin dịch vụ', 'Lỗi mô tả dịch vụ', 'null', 'Lỗi địa chỉ', -1, -1, 1, 0, 0, '2019-03-21 19:03:18', 18, -1, 0, 0),
(38, 'Lỗi tên tin dịch vụ', 'Lỗi mô tả dịch vụ', 'null', 'Lỗi địa chỉ', -1, -1, 1, 0, 0, '2019-03-21 19:04:03', 18, -1, 0, 0),
(39, 'Lỗi tên tin dịch vụ', 'Lỗi mô tả dịch vụ', 'null', 'Lỗi địa chỉ', -1, -1, 1, 0, 0, '2019-03-21 19:05:28', 18, -1, 0, 0),
(40, 'Lỗi tên tin dịch vụ', 'Lỗi mô tả dịch vụ', 'null', 'Lỗi địa chỉ', -1, -1, 1, 0, 0, '2019-03-21 19:06:43', 18, -1, 0, 0),
(41, 'Lỗi tên tin dịch vụ', 'Lỗi mô tả dịch vụ', 'null', 'Lỗi địa chỉ', -1, -1, 1, 0, 0, '2019-03-21 19:09:39', 18, -1, 0, 0),
(42, 'Lỗi tên tin dịch vụ', 'Lỗi mô tả dịch vụ', 'null', 'Lỗi địa chỉ', -1, -1, 1, 0, 0, '2019-03-21 19:12:21', 18, -1, 0, 0),
(43, 'Trần Văn Trí', '111', 'null', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 08:58:24', 10, 13, 0, 0),
(44, 'Trần Văn Trí', '111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 09:55:00', 19, 13, 0, 0),
(45, 'Trần Văn Trí', '1111', 'co file', 'cong luong - hoai my-hoai nhon', 111, 1, 1, 0, 0, '2019-03-22 09:56:14', 19, 13, 0, 0),
(46, 'Trần Văn Trí', '111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 09:58:09', 19, 13, 0, 0),
(47, 'Trần Văn Trí', '11', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:00:02', 19, 13, 0, 0),
(48, 'Trần Văn Trí', '1111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:02:12', 19, 13, 0, 0),
(49, 'Trần Văn Trí', '1111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:04:24', 19, 13, 0, 0),
(50, 'Trần Văn Trí', '1111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:06:18', 19, 13, 0, 0),
(51, 'Trần Văn Trí', '1111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:07:11', 19, 13, 0, 0),
(52, 'Trần Văn Trí', '1111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:09:26', 19, 13, 0, 0),
(53, 'Trần Văn Trí', '111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:11:01', 19, 13, 0, 0),
(54, 'Trần Văn Trí', '1111', 'co file', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:11:50', 19, 13, 0, 0),
(55, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/services\\/5c945c7d51f311qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 10:54:37', 19, 13, 0, 0),
(56, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/services\\/5c945f374b85c1qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:06:15', 19, 13, 0, 0),
(57, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c946064dcdae600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:11:16', 19, 13, 0, 0),
(58, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c9462d0ec6671qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:21:36', 19, 13, 0, 0),
(59, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c94653bf2305600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 1111, 1, 1, 0, 0, '2019-03-22 11:31:55', 19, 13, 0, 0),
(60, '111', '11', '[\"upload\\/imageuser\\/products\\/5c946572d0593600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, 0, '2019-03-22 11:32:50', 19, 13, 0, 0),
(61, '111', '111', '[\"upload\\/imageuser\\/products\\/5c946610960d51qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:35:28', 19, 13, 0, 0),
(62, 'Trần Văn Trí', '11', '[\"upload\\/imageuser\\/products\\/5c946646338f3600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:36:22', 19, 13, 0, 0),
(63, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c9466a0209ce600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:37:52', 19, 13, 0, 0),
(64, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5c946706e904e600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, 0, '2019-03-22 11:39:34', 19, 13, 0, 0),
(65, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c94682258a4b1qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:44:18', 19, 13, 0, 0),
(66, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5c9468650d8dc14874851_678657972293021_2009143396_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:45:25', 19, 13, 0, 0),
(67, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c946881c10fb14874851_678657972293021_2009143396_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, 0, '2019-03-22 11:45:53', 19, 13, 0, 0),
(68, '111', '111', '[\"upload\\/imageuser\\/products\\/5c9468c046e8015698018_1159299317452530_944448711072132117_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, 0, '2019-03-22 11:46:56', 19, 13, 0, 0),
(69, 'Trần Văn Trí', '11', '[\"upload\\/imageuser\\/products\\/5c946932cbb6e1qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, 0, '2019-03-22 11:48:50', 19, 13, 0, 0),
(70, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c946a4f3d9c21qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, 0, '2019-03-22 11:53:35', 19, 13, 0, 0),
(71, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5c946bb76bb171qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-03-22 11:59:35', 19, 13, 0, 0),
(72, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5c946be9c59a117264625_753411558156014_8593703073838163834_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 1, 0, '2019-03-22 12:00:25', 19, 13, 1, 0),
(74, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5ca251b49aa56600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\",\"upload\\/imageuser\\/products\\/5ca251b49b6f214874851_678657972293021_2009143396_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:00:20', 18, 13, 0, 0),
(75, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5ca251ebed1961qQlxVC.jpg\",\"upload\\/imageuser\\/products\\/5ca251ebed711600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11111, 1, 1, 0, 0, '2019-04-02 01:01:15', 18, 13, 0, 0),
(76, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5ca25241202a114874851_678657972293021_2009143396_n.jpg\",\"upload\\/imageuser\\/products\\/5ca252412053515698018_1159299317452530_944448711072132117_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:02:41', 18, 13, 0, 0),
(77, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5ca2528582adc600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\",\"upload\\/imageuser\\/products\\/5ca2528582f3414874851_678657972293021_2009143396_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111111, 1, 1, 0, 0, '2019-04-02 01:03:49', 18, 13, 0, 0),
(78, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5ca252ea101a01qQlxVC.jpg\",\"upload\\/imageuser\\/products\\/5ca252ea10421600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11111, 1, 1, 0, 0, '2019-04-02 01:05:30', 18, 13, 0, 0),
(79, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5ca253ac684b114874851_678657972293021_2009143396_n.jpg\",\"upload\\/imageuser\\/products\\/5ca253ac688e415698018_1159299317452530_944448711072132117_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:08:44', 18, 13, 0, 0),
(80, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5ca253dd5a24d15698018_1159299317452530_944448711072132117_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111111, 1, 1, 0, 0, '2019-04-02 01:09:33', 18, 13, 0, 0),
(81, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5ca254415cde414874851_678657972293021_2009143396_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111111, 1, 1, 0, 0, '2019-04-02 01:11:13', 18, 13, 0, 0),
(82, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5ca254cc2b3301qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111111, 1, 1, 0, 0, '2019-04-02 01:13:32', 18, 13, 0, 0),
(83, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5ca25518c8970600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 1111, 1, 1, 0, 0, '2019-04-02 01:14:48', 18, 13, 0, 0),
(84, '1111111', '111', '[\"upload\\/imageuser\\/products\\/5ca2564958f3915698018_1159299317452530_944448711072132117_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:19:53', 18, 13, 0, 0),
(85, 'Trần Văn Trí', '1111111', '[\"upload\\/imageuser\\/products\\/5ca25754925531qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:24:20', 18, 13, 0, 0),
(86, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5ca25793ea1e3600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:25:23', 18, 13, 0, 0),
(87, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5ca259600ba8314874851_678657972293021_2009143396_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:33:04', 18, 13, 0, 0),
(88, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5ca2598c17c38600_adf5d890-e2ec-40c4-afb2-12f40f21745f.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 01:33:48', 18, 13, 0, 0),
(89, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5ca259d00308d1qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11, 1, 1, 0, 0, '2019-04-02 01:34:56', 18, 13, 0, 0),
(90, 'Trần Văn Trí', '111', '[\"upload\\/imageuser\\/products\\/5ca25a103cfe917264625_753411558156014_8593703073838163834_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 1111111, 1, 1, 0, 0, '2019-04-02 01:36:00', 18, 13, 0, 0),
(91, 'Trần Văn Trí', '1111', '[]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111, 1, 1, 0, 0, '2019-04-02 02:34:20', 18, 13, 0, 0),
(92, 'Trần Văn Trí', '1111111', '[\"upload\\/imageuser\\/products\\/5ca269129cbce1qQlxVC.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 111111, 1, 1, 0, 0, '2019-04-02 02:40:02', 18, 13, 0, 0),
(93, 'Trần Văn Trí', '1111', '[\"upload\\/imageuser\\/products\\/5cadafa7ab75f15823001_763227390492774_7784256969538407371_n.jpg\",\"upload\\/imageuser\\/products\\/5cadafa7ac9c715823046_145589115932491_6552633075126252013_n.jpg\"]', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 11111, 1, 1, 0, 0, '2019-04-10 15:56:07', 18, 13, 0, 0),
(94, 'Trần Văn Trí', '111111', '[\"upload\\/imageuser\\/products\\/5cae0a3215da655910173_2231579450442295_7500865640333312000_o.jpg\",\"upload\\/imageuser\\/products\\/5cae0a321679f56213739_2075191272536754_572651438434418688_n.jpg\"]', 'cong luong - hoai my-hoai nhon', 11111111, 1, 1, 0, 0, '2019-04-10 22:22:26', 18, 13, 0, 0),
(95, 'test dang tin đăng', 'tui test đăng tin đăng, tin adng98', '[\"upload\\/imageuser\\/products\\/5caf16a871172doanh nhan thanh cong.png\"]', '123123', 9996669, 4, 1, 0, 0, '2019-04-11 17:27:52', 1, 24, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `adminCheck` tinyint(4) NOT NULL DEFAULT '1',
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `username`, `avatar`, `phone`, `address`, `status`, `adminCheck`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tới', 'tomiot8485@gmail.com', '$2y$10$r6fd4CHpDz60OJeJIS4uB.GvZ4UnHXZ3UBKSuoRiLB6MExjxqoL1u', 'tomiot8485', NULL, '0377799322', 'Hồ Chí Minh', 1, 1, NULL, NULL, 'XCmVmaWCn0qFSHk9uHbTfmbOd19YowegRBnv6mzKv4eoqNBR8np37AmJQVfP', '2019-01-22 10:48:03', '2019-03-19 06:19:30'),
(2, 'Trần Văn Trí', 'tvtri@gmail.com', '$2y$10$8Wos6/.LU5ny7u9XW4zbD.jOcM9UdCmBSCprVauzPWg9gAjv9W5Ri', 'tvtri', NULL, '034123456', 'Quận thủ đức', 1, 1, NULL, NULL, '0aEhxzy2ySdXIiETznPLw5cNJKpeIclZQUkGvX3RqFBRHtbvoTRV9aUmsIRd', '2019-01-22 10:55:55', '2019-03-10 08:19:45'),
(3, 'Nguyễn Dương Văn Koa', 'koa@gmail.com', 'secret', 'userkoa', NULL, '1234567890', 'Lê Văn Việt Thủ Đức', 1, 1, NULL, NULL, NULL, '2019-01-22 10:55:55', NULL),
(4, 'Nguyễn Dương Anh Koa', 'anhkoa@gmail.com', 'secret', 'anhkhoa', NULL, '1566667890', 'Đại học GTVT Lê Văn Việt Thủ Đức', 1, 1, NULL, NULL, NULL, '2019-02-04 17:00:00', '2019-02-15 20:31:58'),
(5, 'Lâm Quang Lịch', 'lichlamsumui@gmail.com', 'secret', 'lichlam', NULL, '0112233445', 'Đại học UTE Thủ Đức', 1, 1, NULL, NULL, NULL, '2019-02-03 17:00:00', NULL),
(6, 'Nguyễn Thế Dzinh', 'vinhnguyen@gmail.com', '$2y$10$r6fd4CHpDz60OJeJIS4uB.GvZ4UnHXZ3UBKSuoRiLB6MExjxqoL1u', 'vinhnguyen', NULL, '0119233996', 'Đại học UTE Thủ Đức Thành phố Hồ Chí Minh', 1, 1, NULL, NULL, NULL, '2019-02-09 17:00:00', '2019-03-30 03:16:12'),
(7, 'Trương Thế Bảo', 'baogia@gmail.com', 'secret', 'baogia', NULL, '0132547896', 'Cần Thơ, Việt Nam', 1, 1, NULL, NULL, NULL, '2019-02-03 17:00:00', NULL),
(8, 'Nguyễn Tấn Dzung', 'dungthutuong@gmail.com', 'secret', 'thutuongdung', NULL, '0147852369', 'Vĩnh YÊn, Việt Nam', 1, 1, NULL, NULL, NULL, '2019-02-03 17:00:00', NULL),
(9, 'Trương Tấn Sung', 'sangtt@gmail.com', 'secret', 'truongtansang', NULL, '0321456987', 'Mũi Né, Việt Nam', 1, 1, NULL, NULL, NULL, '2019-02-12 17:00:00', NULL),
(10, 'tranvantri', 'tvtri1997@gmail.com', '$2y$10$7AdEhethoyX8s7HYo3jsfuPul7xpnOIH.1V7yO.ml7btF3elxBhJm', 'tranvantri', NULL, '0359548682', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 1, 1, 'Null', 'Null', 't6uuMhUGuYXDjKan8tkEjQnahH2omQLPxS1QKMt1FOzzP2eogaihsX0df3UZ', '2019-02-11 08:27:21', '2019-03-10 08:18:49'),
(15, 'Tới Phạm Văn', 'tomiot8485@gmail.comqw', '$2y$10$FmRLp0UkaStmo9B2krnrau8sgWoiZMsjrGkOFWFQKBtyvk/o9NBYO', '037-779-9322', NULL, '037-779-9322', 'Trung Mỹ Tây, quận 12 thành phố @ alert(\'jewerw\')', 1, 1, NULL, NULL, NULL, '2019-02-15 20:50:49', '2019-02-15 20:50:49'),
(16, 'Trần Trung Mỹ', 'trungmytran@gmail.com', '$2y$10$uDLCf4zoUOPgwPAw2/wWLOq86OK9w7rLbbuV/XAfpyu6dmKoSD68G', '0979070893', NULL, '0979070893', 'đường  Tô Ký  - hoàng hoa thám qận 12 ', 1, 1, NULL, NULL, NULL, '2019-02-15 22:01:59', '2019-02-15 22:01:59'),
(17, 'Tới Phạm Văn', 'tvtri1990071@gmail.com', '$2y$10$g7wObw2/RxCDnxpA1tnvlery8Hj4TtXxEg/hqIRnCf9rTveotr2dS', '12885547', NULL, '12885547', 'Trung Mỹ Tây, quận 12 thành phố @', 1, 1, NULL, NULL, NULL, '2019-02-15 22:07:56', '2019-02-15 22:07:56'),
(18, 'Trần Văn Trí', '', '$2y$10$3gHxFuISDBbPAkL.V6zKw.H406DdbrJcwdLmB1L4miJSwfr.8Fxiq', '359548682', NULL, '359548682', '135, Đường Số 14, Quận 9, Hồ Chí Minh, Việt Nam', 1, 1, NULL, NULL, NULL, '2019-04-01 17:53:30', '2019-04-01 17:53:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contactadmins`
--
ALTER TABLE `contactadmins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags_product`
--
ALTER TABLE `tags_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags_service`
--
ALTER TABLE `tags_service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tindang`
--
ALTER TABLE `tindang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`username`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `phone_2` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contactadmins`
--
ALTER TABLE `contactadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tags_product`
--
ALTER TABLE `tags_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tags_service`
--
ALTER TABLE `tags_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tindang`
--
ALTER TABLE `tindang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
