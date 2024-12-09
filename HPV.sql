-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 28, 2023 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `HPV`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `hoten` varchar(225) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` char(20) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `id_role` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `user`, `hoten`, `pass`, `email`, `tel`, `diachi`, `id_role`) VALUES
(13, 'phuongphuong', 'Tran Thi Phuong', 'a68e0636935405e1ec7f6f7f27cabe1b', 'phuong@gmail.com', '01924656674', NULL, 4),
(14, 'zithoan', 'Phạm Việt Hoàng', '67e4c5d9061a9ffe2aff802144788c3b', 'zithoan@gmail.com', '0339410975', NULL, 1),
(15, 'ngovanvu', 'Ngo Van Vu', 'd267a793194733d0f453632bad8a34a5', 'vanvu@gmail.com', '019245555', NULL, 3),
(17, 'khachhang2', 'Ngô Văn Hai', '0c96cb25978f526292167037b6fe2fd1', 'khachhang2@gmail.com', '0339410975', 'hanoi', 3),
(18, 'khachhang3', 'Ngô Văn Ba', '873c593dbbb5982d686e7c690093432e', 'khachhang3@gmail.com', '01924656674', NULL, 3),
(19, 'khachhang4', 'Trần Thị Tư', '43f1c56f39850a0a08f4d28b92497ab2', 'khachhang4@gmail.com', '0192465667', NULL, 3),
(20, 'khachhang5', 'Trần Thị Ngũ', '6f888e7b5cf3344f0ada132eaaf7c1a9', 'khachhang5@gmail.com', '01457382549', NULL, 3),
(21, 'nhanvien1', 'Ngô Văn Lục', '2a7737628ed9c7149ed2f67f1bfb757e', 'nhanvien1@gmail.com', '09764325678', NULL, 2),
(22, 'nhanvien2', 'Trần Thị Thất', '3f1941ad0f6346f72d4e9b6909ac6347', 'nhanvien2@gmail.com', '0367845214', NULL, 2),
(24, 'mikay', 'Phạm Việt Hoàng', '53190da928315af06e9cd5385c3136ac', 'mikay@gmail.com', '0339410975', NULL, 1),
(41, 'phamzithoan', 'Phạm Việt Hoàng', '7d84177224fd478c5e426bc2bc6396d2', 'hoangpvph21107@fpt.edu.vn', '0339410975', 'Hanoi', 3),
(42, 'tung', 'Hoàng Thanh Tùng', 'e096f87a1f5dcf1a7a4c70d66e72082b', 'tung@gmail.com', '0339410975', NULL, 3),
(43, 'khachhang10', 'Phạm Việt Hoàng', '22c8a16b767404646107f05885586b8d', 'hoang@gmail.com', '0339410975', NULL, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bds`
--

CREATE TABLE `bds` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dientich` float NOT NULL,
  `info` text NOT NULL,
  `sophong` int(11) DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `ngaydang` varchar(255) NOT NULL,
  `id_loaibds` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bds`
--

INSERT INTO `bds` (`id`, `name`, `img`, `price`, `location`, `dientich`, `info`, `sophong`, `luotxem`, `ngaydang`, `id_loaibds`, `id_user`) VALUES
(71, 'Bán nhà kinh doanh, dòng tiền ngõ rộng, 2 MT phố Lạc Long Quân 45m2, 7 tầng thang máy, giá 6.8 tỷ', 'uploads/6387370ad2523-bds9.jpeg', '6.8 tỷ', 'Đường Lạc Long Quân, Phường Bưởi, Tây Hồ, Hà Nội', 45, '<p>- Cần bán căn nhà dòng tiền 50tr/tháng Phố Lạc Long Quân. Đã full phòng chỉ việc tiếp quản.<br>- Với diện tích 45m² hiện trạng nhà 7 tầng thang máy chỗ để xe rộng rãi, giao thông thuận tiên.<br>- Giá chào bán 6.8 tỷ có ra lộc.<br>- Sổ đỏ vuông vắn sẵn sàng giao dịch.</p>', 6, 40, '', 1, 13),
(72, 'Cần cho thuê chung cư The Manor Mễ Trì căn hộ 2 - 3pn diện tích 106 - 192 - 216m2 cơ bản và full đồ', 'uploads/6388994d346d6-bds2.jpeg', '5.6 tỷ', 'Dự án The Manor, đường Mễ Trì, Phường Mỹ Đình 1, Nam Từ Liêm, Hà Nội.', 50, '<p><br>- Diện tích 106m² thiết kế 2 ngủ 2wc đồ cơ bản 18tr/tháng, full đồ 20 - 23tr/tháng.<br>- Diện tích 192m² thiết kế 3 phòng ngủ rộng rãi, 2WC đồ cơ bản 23 triệu/tháng, full đồ 25 - 28tr/tháng.<br>- Căn hộ View thoáng.<br>- Đồ cơ bản gồm: Điều hòa âm trần, tủ bếp, rèm, nóng lạnh.<br>- Đầy đủ nội thất đẹp như ảnh, mới do gia đình hoàn thiện để ở gồm:<br>+ Giường tủ, bàn ghế ăn, kệ TV, sofa.<br>+ Bộ điều hòa âm trần, thiết bị vệ sinh, 2 nóng lạnh, máy giặt, giàn phơi.<br>+ Tủ bếp, bếp từ, lò vi sóng, nồi, chảo bát đĩa, đồ dùng nấu ăn...<br>- Hỗ trợ mọi thủ tục và tạm trú cho khách nước ngoài.</p>', 5, 83, '', 1, 14),
(73, 'CHÍNH CHỦ BÁN NHÀ RIÊNG VIEW 2 MẶT THOÁNG. ĐƯỜNG TRẢI NHỰA TRƯỚC NHÀ 2 Ô TÔ TRÁNH, Ô TÔ VÀO NHÀ', 'uploads/638899c92cccb-bds6.jpeg', '1.2 tỷ', 'Đường Thạch Bàn, Phường Thạch Bàn, Long Biên, Hà Nội', 40, '<p>Gia đình tôi chính chủ cần bán nhà riêng view 2 mặt thoáng. Đường trải nhựa trước nhà 2 ô tô tránh nhau. Ô tô vào nhà. Nhà tự xây rất kiên cố.<br>Diện tích 38m², 1 khách, 1 bếp, 3 ngủ, 4WC, phòng thờ và khu phơi đồ rộng rãi riêng biệt, thoáng mát. Nhà hướng Tây ghé Nam. Cách công viên hồ Thạch Bàn 30m. Cách đường 5 200m. Cách Aeon 500m.<br>Gần chợ Thạch Bàn, cấp 1,2, UBND, Trạm y tế chỉ vài trăm mét.<br>Cách trạm xe buýt Thạch Bàn 2 - 30m.<br>Rất thuận tiện để đi vào trung tâm.<br>Giá bán 6 tỷ 150tr có thương lượng nếu thiện chí.</p>', 3, 22, '', 1, 13),
(74, 'Bán nhà 5 tầng Phố Ngọc Trì - Thạch Bàn, ô tô tránh, kinh doanh, văn phòng', 'uploads/63889a246ccd1-bds9.jpeg', '5.8 tỷ', 'Số 68 ngõ 318, Phố Ngọc Trì, Phường Thạch Bàn, Long Biên, Hà Nội', 70, '<p>Bán nhà 5 tầng + 1 lửng, đường ô tô tránh, kinh doanh, số 68 ngõ 318 Ngọc Trì, Tổ 11 Thạch Bàn.<br>- Diện tích 35.6m², mặt tiền 3.67m hậu nở 3.68m, hướng Đông Nam.<br>- Đường trước nhà trải nhựa rộng 6m, kinh doanh buôn bán mọi mặt hàng.<br>- Sổ đỏ chính chủ, pháp lý rõ ràng, đầy đủ hồ sơ giấy phép xây dựng.<br>- Thiết kế 5 tầng, tầng 1 kinh doanh buôn bán hoặc để ô tô, tầng 2 bếp + khách, tầng 2,3,4 mỗi tầng 1 ngủ 1 vệ sinh, tầng 5: Sân phơi + phòng thờ.<br>- Vị trí nhà nằm trên trục chính giao thông đi lại, buôn bán mọi mặt hàng, phù hợp kinh doanh văn phòng, công ty, nail, spa...<br>Giá: 6.4 tỷ (bao phí sang tên) (có thương lượng).</p>', 4, 26, '', 1, 14),
(75, 'CHÍNH CHỦ BÁN NHÀ RIÊNG VIEW 2 MẶT THOÁNG. ĐƯỜNG TRẢI NHỰA TRƯỚC NHÀ 2 Ô TÔ TRÁNH, Ô TÔ VÀO NHÀ', 'uploads/63889aa5cd9f6-bds7.jpeg', '4.3 tỷ', 'Đường Thạch Bàn, Phường Thạch Bàn, Long Biên, Hà Nội', 50, '<p>Gia đình tôi chính chủ cần bán nhà riêng view 2 mặt thoáng. Đường trải nhựa trước nhà 2 ô tô tránh nhau. Ô tô vào nhà. Nhà tự xây rất kiên cố.<br>Diện tích 38m², 1 khách, 1 bếp, 3 ngủ, 4WC, phòng thờ và khu phơi đồ rộng rãi riêng biệt, thoáng mát. Nhà hướng Tây ghé Nam. Cách công viên hồ Thạch Bàn 30m. Cách đường 5 200m. Cách Aeon 500m.<br>Gần chợ Thạch Bàn, cấp 1,2, UBND, Trạm y tế chỉ vài trăm mét.<br>Cách trạm xe buýt Thạch Bàn 2 - 30m.<br>Rất thuận tiện để đi vào trung tâm.<br>Giá bán 6 tỷ 150tr có thương lượng nếu thiện chí.</p>', 5, 24, '', 1, 13),
(79, 'Bán nhà riêng chính chủ 71m2 ngay tổ 3 Thạch Bàn, Long Biên', 'uploads/638cd6b2a38fc-bds6.jpeg', '5 tỷ', 'Tổ 3, Đường Thạch Bàn, Phường Thạch Bàn, Long Biên, Hà Nội', 56, '<p>Gia đình tôi đang cần bán nhà riêng tại Thạch Bàn, Long Biên.<br>- Diện tích: 71m². Mặt tiền 5m.<br>- Nhà có 3 tầng, 3 phòng ngủ, 2 toilet, hướng nhà Đông - Bắc.<br>- Ngõ ô tô vào cách đường Thạch Bàn 50m.<br>- Vị trí đi lại thuận lợi: Gần các trường cấp 1,2,3, mầm non Hoa Mai, gần chợ Thạch Bàn chợ Đồng Dinh aeon,...<br>Chỉ cần dọn đến và ở.<br>Sổ đỏ pháp lý rõ ràng.</p>', 4, 38, '05/12/2022', 1, 14),
(81, 'Bán Nhà Thạch Bàn, Long Biên, Ô tô tránh, vị trí đẹp, gần Trường, tương lại mặt Phố', 'uploads/638e34338e1db-bds10.jpeg', '10 tỷ', 'Đường Thạch Bàn, Phường Thạch Bàn, Long Biên, Hà Nội', 80, '<p>- Diện tích: 60m², Mặt tiền: 5.2m, Giá chào: 10.2 tỷ (Có thương lượng).<br><br>- Nhà bán thuộc phường Thạch Bàn, quận Long Biên. Phía cạnh Aeon Long Biên, gần Hồ, giao thông thuận lợi, đường thông Nguyễn Văn Linh, Sài Đồng, Cổ Linh đi khắp các ngả từ Cao tốc Hà Nội - Hải Phòng, Sân Bay Tân Sơn Nhất, quận Hoàn Kiếm, Hai Bà Trưng, đến đường Vành đai 2....<br>- Nhà bán gần trường THCS Thạch Bàn, đối diện Dự án Lakeside Thạch Bàn, xung quanh tiện ích dân cư đầy đủ, ở sướng ...<br><br>- Sổ đỏ chính chủ, pháp lý chuẩn, giao dịch ngay.</p>', 5, 51, '06/12/2022', 1, 13),
(82, 'Nhà đẹp 6 tầng, thang máy, gara 2 ô tô, kinh doanh cạnh cấp 2 Thạch Bàn, phường Thạch Bàn Long Biên', 'uploads/638e349d4810d-bds9_1.jpeg', '9.45 tỷ', 'Đường Thạch Bàn, Phường Thạch Bàn, Long Biên, Hà Nội', 60, '<p>* Tôi cần bán nhanh căn nhà mới 60m² xây 6 tầng, thang máy, gara ô tô, kinh doanh tốt, tại phố Thạch Bàn - phường Thạch Bàn, Long Biên chỉ 9,45 tỷ.<br>- Diện tích: 60m²; mặt tiền 4.5m. Đất vuông vắn.<br>- Hướng nhà: Đông Nam.<br>- Nhà xây 6 tầng, thang máy, bảo hành công trình dài hạn. Nhà gồm:<br>+ Tầng 1: Gara ô tô, thông sàn kinh doanh, vệ sinh.<br>+ Tầng 2: Phòng khách, bếp, vệ sinh.<br>+ Tầng 3,4,5: Mỗi tầng 2 phòng ngủ, vệ sinh khép kín.<br>+ Tầng 6: Phòng thờ, khu máy giặt, sân phơi, trồng cây.<br>* Nhà ngay gần trường cấp 2 Thạch Bàn, cách phố Thạch Bàn, phường Thạch Bàn Long Biên 20m; đường trước nhà 5m, giao thông đi lại thuận tiện ra Cổ Linh, Nguyễn Văn Cừ, Bồ Đề, Hồng Tiến, QL5. Chỉ 10 phút sang phố Cổ.<br>- Khu vực An sinh tốt, hàng xóm thân thiện; Có thể vừa ở - vừa kinh doanh hotel, Văn phòng cho thuê,... Đều rất tốt.<br>- Thiết bị xịn, thang máy nhập khẩu đã qua kiểm định.<br>- Pháp lý: SĐCC, GPXD.<br>- Giá bán: 9.45 tỷ bao thuế phí. Hỗ trợ vay vốn NH từ 1 - 20 năm với LS ưu đãi.</p>', 6, 33, '06/12/2022', 1, 14),
(83, 'Bán nhà chợ Thạch Bàn Long Biên 50m2, 5 tầng giá chào 7.6tỷ', 'uploads/638e41f1b9baf-bds1.jpeg', '7,6 tỷ', 'Đường Thạch Bàn, Phường Thạch Bàn, Long Biên, Hà Nội', 50, '<p>+ Vị trí: Cạnh chợ Thạch Bàn, đường ô tô tránh thông, ngõ nông. Trung tâm cái gì cũng có.<br>+ Hiện trạng nhà 5 tầng thiết kế hiện đại, nội thất xịn. Ô tô vào nhà.<br>- Tầng 1: Khu để xe, bếp wc.<br>- Tầng 2: Phòng khách rộng.<br>- Tầng 3: Phòng ngủ master khép kín.<br>- Tầng 4: 2 ngủ, wc.<br>- Tầng 5: 1 thờ, sân, phơi phóng.<br>- Sổ đỏ sẵn sàng giao dịch. Thiện chí bán.<br>+ Mua kinh doanh. Cho thuê làm văn phòng hoặc để ơ điều tuyệt vời.</p>', 3, 72, '06/12/2022', 2, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bds_tuvan`
--

CREATE TABLE `bds_tuvan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `trangthai` tinyint(2) DEFAULT 0 COMMENT '0.Đang chờ,\r\n1.Đã giao việc',
  `id_nhanvien` int(11) DEFAULT NULL,
  `note_user` text DEFAULT NULL,
  `id_bds` int(11) NOT NULL,
  `time_yeucau` varchar(255) DEFAULT NULL,
  `time_tuvan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bds_tuvan`
--

INSERT INTO `bds_tuvan` (`id`, `id_user`, `trangthai`, `id_nhanvien`, `note_user`, `id_bds`, `time_yeucau`, `time_tuvan`) VALUES
(52, 17, 0, NULL, 'Tôi quan tâm đến bất động sản này', 82, '03:20:26am 16/12/2022', NULL),
(53, 17, 0, NULL, 'Tôi quan tâm đến bất động sản này', 79, '03:20:37am 16/12/2022', NULL),
(54, 17, 1, 21, 'Tôi quan tâm đến bất động sản này', 81, '03:20:47am 16/12/2022', '03:21:42am 16/12/2022'),
(67, 17, 0, NULL, 'tôi quan tâm', 83, '10:10:51pm 16/12/2022', NULL),
(68, 17, 0, NULL, 'Tôi quan tâm đến bất động sản này', 82, '10:19:35pm 16/12/2022', NULL),
(69, 17, 0, NULL, 'Tôi quan tâm đến bất động sản này', 83, '05:05:52pm 17/12/2022', NULL),
(70, 17, 1, 21, 'Tôi quan tâm đến bất động sản này', 81, '05:07:40pm 17/12/2022', '05:07:53pm 17/12/2022'),
(71, 17, 1, 21, 'Tôi quan tâm đến bất động sản này', 83, '05:13:47pm 17/12/2022', '05:14:25pm 17/12/2022'),
(72, 17, 0, NULL, 'Tôi quan tâm đến bất động sản này', 79, '06:10:28pm 17/12/2022', NULL),
(73, 17, 0, NULL, 'toi quan tam', 73, '05:13:44pm 26/12/2022', NULL),
(74, 17, 0, NULL, 'đẹp quá tôi muốn liên hệ', 79, '05:18:04pm 26/12/2022', NULL),
(75, 17, 1, 22, 'Tôi quan tâm đến bất động sản này', 82, '07:04:08pm 03/01/2023', '07:04:31pm 03/01/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_tintuc`
--

CREATE TABLE `danhmuc_tintuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_tintuc`
--

INSERT INTO `danhmuc_tintuc` (`id`, `name`) VALUES
(28, 'BDS Hà Nội'),
(29, 'BDS TP. Hồ Chí Minh'),
(30, 'BDS mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `id_bds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `file_name`, `id_bds`) VALUES
(58, '/HPV_DA1/uploads/bds8_2.jpeg', 68),
(62, '/HPV_DA1/uploads/bds2_hanhlang.jpeg', 71),
(63, '/HPV_DA1/uploads/bds2_nhaan.jpeg', 71),
(64, '/HPV_DA1/uploads/bds2_hanhlang.jpeg', 72),
(65, '/HPV_DA1/uploads/bds2_nhaan.jpeg', 72),
(67, '/HPV_DA1/uploads/phongngu1.jpeg', 73),
(68, '/HPV_DA1/uploads/phongngu2.jpeg', 73),
(69, '/HPV_DA1/uploads/bds6.jpeg', 74),
(70, '/HPV_DA1/uploads/bds7.jpeg', 74),
(71, '/HPV_DA1/uploads/bds8_1.jpeg', 74),
(72, '/HPV_DA1/uploads/bds10_1.jpeg', 75),
(73, '/HPV_DA1/uploads/bds10_2.jpeg', 75),
(74, '/HPV_DA1/uploads/bds10.jpeg', 75),
(75, '/HPV_DA1/uploads/phongngu1.jpeg', 77),
(76, '/HPV_DA1/uploads/phongngu2.jpeg', 77),
(77, '/HPV_DA1/uploads/bds6_1.jpeg', 79),
(78, '/HPV_DA1/uploads/bds6_2.jpeg', 79),
(79, '/HPV_DA1/uploads/bds8_1.jpeg', 80),
(80, '/HPV_DA1/uploads/bds8_2.jpeg', 80),
(81, '/HPV_DA1/uploads/bds2_hanhlang.jpeg', 81),
(82, '/HPV_DA1/uploads/bds2_nhaan.jpeg', 81),
(83, '/HPV_DA1/uploads/phongkhach.jpeg', 82),
(84, '/HPV_DA1/uploads/phongngu1.jpeg', 82),
(85, '/HPV_DA1/uploads/phongngu2.jpeg', 82),
(86, '/HPV_DA1/uploads/bds2_hanhlang.jpeg', 83),
(87, '/HPV_DA1/uploads/bds2_nhaan.jpeg', 83);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaibds`
--

CREATE TABLE `loaibds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaibds`
--

INSERT INTO `loaibds` (`id`, `name`) VALUES
(1, 'Căn hộ chung cư'),
(2, 'Nhà bán'),
(3, 'Đất'),
(12, 'Nhà cho thuê');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` tinyint(3) NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'admin'),
(2, 'nhân viên tư vấn'),
(3, 'khách hàng'),
(4, 'tác giả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_danhmuctt` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mota_ngan` text NOT NULL,
  `ngaydangtin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `noidung`, `img`, `id_danhmuctt`, `id_user`, `mota_ngan`, `ngaydangtin`) VALUES
(5, 'Thị Trường BĐS Việt Nam Chưa Rơi Vào Suy Thoái', '<p>Thị trường bất động sản đã và đang trải qua một năm 2022 trầm lắng. Những yếu tố nào đã tác động lên bức tranh thị trường bất động sản năm nay? Ông Nguyễn Văn Đính, Chủ tịch Hội Môi giới Bất động sản Việt Nam đã phân tích cụ thể những yếu tố này.</p><h2>Những Yếu Tố&nbsp;Đang Tác Động Mạnh Đến Thị Trường Bất Động Sản</h2><p>Trao đổi với <a href=\"https://batdongsan.com.vn/\">Batdongsan.com.vn</a>,&nbsp;Chủ tịch Hội Môi giới Bất động sản cho biết, thị trường bất động sản Việt Nam năm nay vẫn đón nhận những yếu tố tích cực. Cụ thể, đầu tư công tiếp tục được triển khai mạnh mẽ. Vốn đầu tư thực hiện toàn xã hội quý 3/2022 theo giá hiện hành ước đạt 833,8 nghìn tỷ đồng, tăng 18,1% so với cùng kỳ năm trước. Ông Đính nhấn mạnh, chính sách đẩy mạnh giải ngân đầu tư công của Chính phủ, trong đó nhóm đầu tư hạ tầng chiếm tỷ trọng lớn sẽ tiếp tục tạo ra nhiều khu kinh tế, du lịch, đô thị... kéo theo đó sẽ là nhu cầu về nhà ở, nghỉ dưỡng, dịch vụ, văn phòng... đặc biệt là phân khúc <a href=\"https://batdongsan.com.vn/bat-dong-san-khu-cong-nghiep\">bất động sản công nghiệp</a> trong xu thế chuyển dịch các cơ sở công nghiệp của các tập đoàn đa quốc gia của thế giới.</p><p><img src=\"https://file4.batdongsan.com.vn/2022/10/31/YSUn3oGJ/20221031103126-38f9.jpg\" alt=\"\"><br><i>Thị trường bất động sản đã và đang trải qua một năm 2022 trầm lắng</i></p><p>Bên cạnh đó, FDI lĩnh vực kinh doanh bất động sản vẫn tiếp tục trụ hạng ở vị trí thứ 2 trong danh sách các ngành thu hút vốn đầu tư FDI trong 9 tháng đầu năm 2022 với hơn 3,5 tỷ USD, chiếm gần 19% tổng vốn đầu tư đăng ký, tăng gần gấp đôi so với cùng kỳ năm ngoái, chủ yếu tập trung vào thị trường bất động sản công nghiệp và một số dự án bất động sản lớn. Đáng chú ý, tăng trưởng GDP 9 tháng năm 2022 đạt 8,83%, là mức tăng trưởng 9 tháng cao nhất từ năm 2011 đến nay. Dự báo GDP sẽ tiếp tục tăng mạnh trong quý 4/2022. Đây là những yếu tố tích cực cho sự tăng trưởng của thị trường bất động sản.</p><p>Theo ông Đính, bên cạnh những chỉ dấu tích cực, thị trường vẫn còn rào cản khiến việc duyệt phê duyệt dự án đối mặt nhiều thách thức, do đó nguồn cung cho thị trường không được cải thiện, thường xuyên khan hiếm. Chính quyền các địa phương rất thận trọng trong việc phê duyệt dự án đầu tư do lo ngại vướng mắc quy&nbsp;định pháp luật.</p><p>Ngoài ra <a href=\"https://batdongsan.com.vn/siet-tin-dung-bds\">tín dụng thắt chặt</a>, mục tiêu tăng trưởng tín dụng giữ nguyên ở mức 14% và điều chỉnh tùy theo diễn biến thực tế khiến các chủ đầu tư khó tiếp cận được nguồn vốn mới, chi phí tiếp cận tài chính tăng, gây áp lực lên giá bán sản phẩm trong khi sức cầu giảm sút do cá nhân đầu tư khó tiếp cận dòng tiền. Về lạm phát, ông Đính nhấn mạnh Việt Nam thuộc nhóm các nước có tỷ lệ lạm phát thấp với bình quân 9 tháng năm 2022 ở mức 2,73%, thấp hơn mục tiêu Quốc hội đề ra năm nay là 4%. Dự báo lạm phát của Việt Nam không thay đổi qua 3 lần báo cáo của ADB, duy trì ở mức 3,8% cho năm 2022 và 4% cho năm 2023. Dù ở mức thấp so với Quốc hội đề ra nhưng lạm phát vẫn đang trực tiếp tác động đến tăng giá hàng hóa, trong đó có hàng hóa là đầu vào của dự án bất động sản. Chi phí xây dựng tăng tạo áp lực khó giảm giá thành các sản phẩm nhà đất.</p><h2>Thị Trường Bất Động Sản Bị Tác Động Ra Sao?</h2><p>Chủ tịch Hội Môi giới Bất động sản Việt Nam cho biết các yếu tố trên đã tác động mạnh đến thị trường bất động sản. Theo số liệu của Hội Môi giới, nguồn cung trên thị trường suy giảm trầm trọng. Không những thế, cơ cấu nguồn cung tiếp tục lệch pha khi nguồn hàng trung và cao cấp chiếm tỷ trọng áp đảo. Về lượng giao dịch của thị trường, tỷ lệ hấp thụ trong quý 3/2022 chỉ đạt 33,5%, giảm hơn 50% so với cùng kỳ năm ngoái và giảm mạnh so với giai đoạn đầu năm.</p><p><img src=\"https://file4.batdongsan.com.vn/2022/10/31/YSUn3oGJ/20221031104617-d450.jpg\" alt=\"\"><i>Dù sụt giảm nhưng&nbsp;thị trường chưa rơi vào suy thoái bởi sự quan tâm và lực cầu của thị trường vẫn ở mức cao</i></p><p>Thay vì những cuộc nhảy giá liên tục như các năm trước, hiện giá bất động sản đã chững lại. Các hiện tượng đầu cơ, sốt đất không còn xuất hiện. Thậm chí, để có thanh khoản, nhiều dự án phải áp dụng các chính sách bán hàng linh hoạt, tăng chiết khấu, cam kết lợi nhuận, cam kết mua lại, đẩy mạnh hỗ trợ lãi suất, ân hạn nợ gốc. Tâm lý của các nhà đầu tư trên thị trường là nghe ngóng và do dự khi tín dụng bị siết và lãi suất tăng. Về việc mua bất động sản trong giai đoạn này, người đứng đầu Hội Môi giới Bất động sản Việt Nam đưa ra lời khuyên, người mua nếu sử dụng đòn bẩy tài chính mua nhà hoặc đầu tư phải được tính toán một cách thận trọng, hướng vào những sản phẩm phục vụ nhu cầu thực trên nền tảng phải cân nhắc kỹ càng những biến số vĩ mô, địa chính trị xung quanh, đề phòng thị trường sẽ có những diễn biến tiêu cực.</p><p>Dù sụt giảm nhưng ông Đính cho rằng thị trường chưa rơi vào suy thoái bởi sự quan tâm và lực cầu của thị trường vẫn ở mức cao. Các yếu tố tích cực như chính sách đẩy mạnh giải ngân đầu tư công, sự tăng trưởng của FDI và GDP…&nbsp;kích thích thị trường bất động sản. “Thị trường sẽ bước vào giai đoạn tái cân bằng, tiếp tục phát triển bền vững khi Nhà nước điều tiết tốt những chính sách, công cụ nhằm điều tiết cung cầu hàng bất động sản như thuế, tín dụng, đất đai, tài chính... hoặc thu hút đầu tư”, ông Đính nhấn mạnh.</p>', 'uploads/638b335fba1cd-image_2022-12-03_183034934.png', 28, 13, 'Thị trường bất động sản đã và đang trải qua một năm 2022 trầm lắng. Những yếu tố nào đã tác động lên bức tranh thị trường bất động sản năm nay? Ông Nguyễn Văn Đính, Chủ tịch Hội Môi giới Bất động sản Việt Nam đã phân tích cụ thể những yếu tố này.', ''),
(6, 'Bất Động Sản Giá Trị “Thật” - Nơi Trú Ẩn An Toàn Cho Dòng Vốn Đầu Tư', '<p>Thực tế chứng minh, những sản phẩm bất động sản mang giá trị “thật” luôn có vị thế nhất định, tạo nên lợi nhuận bền vững theo thời gian và ít khi chịu ảnh hưởng bởi những biến động từ bên ngoài. Giá trị thực tế gắn với nhu cầu “thật” được xem là điểm sáng của sản phẩm, tạo lợi thế cho bất kỳ lĩnh vực nào và bất động sản cũng không ngoại lệ. Giá trị “thật” ấy lại càng chiếm ưu thế hơn khi sản phẩm mang nét độc đáo, được định vị chỉn chu và riêng biệt.</p><p>Bất động sản giá trị “thật” có thể chinh phục đông đảo nhà đầu tư không chỉ có giá trị tích trữ tài sản mà còn có khả năng sinh lợi “kép”. Theo đó, sản phẩm vừa là nơi lưu trữ dòng tiền, vừa có thể tạo nên dòng tiền ổn định thông qua việc kinh doanh song song với việc bất động sản tăng giá qua thời gian.</p><p>Hiện tượng “thổi phồng” giá trị của bất động sản đang có xu hướng giảm dần, thay vào đó là mức giá trở về giá “thật” phù hợp với nhu cầu của khách hàng và mang bất động sản giá trị “thật” khởi sắc. Những nhà đầu tư nhanh nhạy với nhịp tiến của thị trường sẽ có thể nắm bắt cơ hội, lựa chọn sản phẩm mang nền tảng lợi nhuận lâu dài.</p><p>Các sản phẩm có cơ sở pháp lý chuẩn, vị trí đắc địa, hạ tầng thuận lợi lại có mức giá hợp lý, phù hợp với giá trị mà sản phẩm mang lại chính là những nền tảng cơ bản xây dựng nên bất động sản giá trị “thật”. Bên cạnh đó, tính thanh khoản cao kèm theo chính sách tốt, được hỗ trợ lãi suất đầu tư từ nhà phân phối, phát triển bất động sản cũng là những yếu tố không thể thiếu góp phần tạo sự nổi trội của sản phẩm.</p><p><img src=\"https://file4.batdongsan.com.vn/2022/12/01/PHJN6Zw0/20221201110950-f416.jpg\"></p><p><i>Bất động sản giá trị “thật” - mục tiêu của nhà đầu tư thông thái</i></p><p>Các chuyên gia từ Hội Môi giới Bất động sản Việt Nam (VARS) cho rằng, ngày nay nhu cầu “thật” sẽ quyết định mức giá “thật” của các sản phẩm bất động sản, không nên lựa chọn lướt sóng. Nhà đầu tư sẽ quan tâm đến sự chênh lệch giữa “giá” và “giá trị” của sản phẩm. Mức giá chỉ là một con số cụ thể nhưng giá trị của sản phẩm trước tiên còn tùy thuộc vào cách cảm nhận, phân tích và đánh giá của khách hàng. Do đó, tiềm năng đầu tư của sản phẩm sẽ được xác định bởi những giá trị “thật” mà khách hàng có thể nhìn thấy hiện tại và dự đoán thông qua các yếu tố cộng hưởng sinh lời kèm theo.</p><p>Trong giai đoạn thị trường thanh lọc, đông đảo nhà đầu tư ngày càng tiếp cận sản phẩm một cách thận trọng, mong muốn “ăn chắc mặc bền” đến tận nơi, quan sát tận mắt để phân tích giá trị “thật”. Như vậy, tiềm năng sinh lợi của bất động sản ngày nay còn được cảm nhận từ trải nghiệm thực tế của khách hàng. Sự quy hoạch rõ ràng, vận hành chỉn chu cũng có thể tạo nên đánh giá tốt từ nhà đầu tư và dẫn đến quyết định lựa chọn sản phẩm của họ.</p><p>Theo một số chuyên gia bất động sản, hiện nay là khoảng thời gian tốt để đầu tư vào phân khúc nghỉ dưỡng bởi sự phục hồi mạnh mẽ của thị trường du lịch sau hơn 2 năm đại dịch Covid - 19 diễn ra. Đặc biệt, tại những nơi được đầu tư hạ tầng, sở hữu liên kết vùng đắt giá, bất động sản càng có giá trị.</p><p>Trước tình hình biến động, giới chuyên gia cũng đánh giá rằng dù thị trường đầu tư có vẻ giảm nhiệt so với đầu năm nay nhưng thực chất lại là cơ hội cho nhà đầu tư. Nhất là trong bối cảnh cuối năm, khi mà các nhà phân phối, phát triển sản phẩm cho ra mắt nhiều chính sách ưu đãi như chiết khấu sâu, quà tặng giá trị hay hỗ trợ thanh toán linh hoạt,… Tất cả sẽ góp phần kéo bất động sản trở về giá trị “thật”, mang nhiều quyền lợi hấp dẫn cho người mua.</p><p><strong>Palm Garden - đón đầu xu hướng “bất động sản thật, giá trị thật”</strong></p><p>Palm Garden - sản phẩm nghỉ dưỡng đẳng cấp cùng thiên nhiên tại Bảo Lộc - chứa đựng chuỗi giá trị “thật” có khả năng chinh phục những nhà đầu tư khó tính. Sản phẩm này đón trọn tầm nhìn hướng ra mảng xanh vô tận của núi rừng Bảo Lộc, đáp ứng đầy đủ chuẩn mực hòa nhập cùng thiên nhiên, mang đến cảm nhận, trải nghiệm cảm xúc “thật” vượt trội.</p><p>Đặc biệt, không chỉ tận dụng vị trí đắc địa, Palm Garden còn thừa hưởng tiềm năng từ tuyến cao tốc huyết mạch Dầu Giây - Liên Khương - dự án cao tốc đường bộ vừa được phê duyệt, giúp nâng cao năng lực thông thương, rút ngắn thời gian di chuyển từ TP.HCM lên thành phố Bảo Lộc chỉ còn hơn 2 giờ, thay vì hơn 5 giờ như hiện tại. Nhờ đó, giá trị “thật” của sản phẩm nghỉ dưỡng này là điều có thể nhận diện ngay từ đầu và tiềm năng sinh lời bền vững cũng thể hiện rõ nét.</p><p>Có thể nói, Palm Garden là một trong những sản phẩm đặc sắc tại Bảo Lộc đi tiên phong trong xu hướng “đưa bất động sản về giá trị thật” khi lợi nhuận “kép” của Palm Garden được tạo nên từ việc nhà đầu tư không chỉ hưởng lợi từ khả năng sinh lời của bất động sản theo thời gian, mà nhờ vào đơn vị hỗ trợ vận hành chuyên nghiệp, họ còn có thể thu lợi nhuận hàng tháng từ việc kinh doanh.</p><p>Một điều đặc biệt hơn, hấp dẫn các nhà đầu tư chính là đơn vị phát triển, phân phối của sản phẩm đã ưu đãi cho khách hàng chính sách hỗ trợ lãi suất đầu tư lên đến 18 tháng. Đáng lưu ý hơn cả là chính sách “có một không hai”, chưa từng xuất hiện tại thị trường Lâm Đồng: khi thanh toán 30% giá trị, khách hàng sẽ được chuyển nhượng quyền sở hữu đất với sổ riêng từng nền.</p><p><i><img src=\"https://file4.batdongsan.com.vn/2022/12/01/PHJN6Zw0/20221201111000-133b.jpg\"></i></p><p><i>Palm Garden - bất động sản giá trị “thật” sáng giá tại vùng đất Bảo Lộc</i></p><p>Với tất cả những thông tin minh bạch, xác đáng, có thể đánh giá Palm Garden là “nơi trú ẩn an toàn” cho dòng đầu tư của thị trường bất động sản hiện nay. Những yếu tố giá trị “thật” mà Palm Garden sở hữu không chỉ là tiềm năng mà chính là yếu tố nhận dạng quan trọng để các nhà đầu tư nắm bắt thời cơ và đầu tư đúng chỗ.</p>', 'uploads/638b33ddeeb6b-image_2022-12-03_183243067.png', 29, 14, 'Ở thời điểm hiện tại, nhiều nhà đầu tư tìm kiếm kênh đầu tư an toàn để đảm bảo giá trị sản phẩm, hạn chế những rủi ro từ biến động thị trường. Và bất động sản mang giá trị “thật” dần trở thành “điểm tập kết dòng vốn đầu tư”. Sức hấp dẫn của bất động sản giá trị “thật”', ''),
(8, 'Bất Động Sản Giá Trị “Thật” - Nơi Trú Ẩn An Toàn Cho Dòng Vốn Đầu Tư', '<p>Ở thời điểm hiện tại, nhiều nhà đầu tư tìm kiếm kênh đầu tư an toàn để đảm bảo giá trị sản phẩm, hạn chế những rủi ro từ biến động thị trường. Và bất động sản mang giá trị “thật” dần trở thành “điểm tập kết dòng vốn đầu tư”. Sức hấp dẫn của bất động sản giá trị “thật”</p><p>&nbsp;</p><p>Thực tế chứng minh, những sản phẩm bất động sản mang giá trị “thật” luôn có vị thế nhất định, tạo nên lợi nhuận bền vững theo thời gian và ít khi chịu ảnh hưởng bởi những biến động từ bên ngoài. Giá trị thực tế gắn với nhu cầu “thật” được xem là điểm sáng của sản phẩm, tạo lợi thế cho bất kỳ lĩnh vực nào và bất động sản cũng không ngoại lệ. Giá trị “thật” ấy lại càng chiếm ưu thế hơn khi sản phẩm mang nét độc đáo, được định vị chỉn chu và riêng biệt.</p><p>Bất động sản giá trị “thật” có thể chinh phục đông đảo nhà đầu tư không chỉ có giá trị tích trữ tài sản mà còn có khả năng sinh lợi “kép”. Theo đó, sản phẩm vừa là nơi lưu trữ dòng tiền, vừa có thể tạo nên dòng tiền ổn định thông qua việc kinh doanh song song với việc bất động sản tăng giá qua thời gian.</p><p>Hiện tượng “thổi phồng” giá trị của bất động sản đang có xu hướng giảm dần, thay vào đó là mức giá trở về giá “thật” phù hợp với nhu cầu của khách hàng và mang bất động sản giá trị “thật” khởi sắc. Những nhà đầu tư nhanh nhạy với nhịp tiến của thị trường sẽ có thể nắm bắt cơ hội, lựa chọn sản phẩm mang nền tảng lợi nhuận lâu dài.</p><p>Các sản phẩm có cơ sở pháp lý chuẩn, vị trí đắc địa, hạ tầng thuận lợi lại có mức giá hợp lý, phù hợp với giá trị mà sản phẩm mang lại chính là những nền tảng cơ bản xây dựng nên bất động sản giá trị “thật”. Bên cạnh đó, tính thanh khoản cao kèm theo chính sách tốt, được hỗ trợ lãi suất đầu tư từ nhà phân phối, phát triển bất động sản cũng là những yếu tố không thể thiếu góp phần tạo sự nổi trội của sản phẩm.</p><p><img src=\"https://file4.batdongsan.com.vn/2022/12/01/PHJN6Zw0/20221201110950-f416.jpg\"></p><p><i>Bất động sản giá trị “thật” - mục tiêu của nhà đầu tư thông thái</i></p><p>Các chuyên gia từ Hội Môi giới Bất động sản Việt Nam (VARS) cho rằng, ngày nay nhu cầu “thật” sẽ quyết định mức giá “thật” của các sản phẩm bất động sản, không nên lựa chọn lướt sóng. Nhà đầu tư sẽ quan tâm đến sự chênh lệch giữa “giá” và “giá trị” của sản phẩm. Mức giá chỉ là một con số cụ thể nhưng giá trị của sản phẩm trước tiên còn tùy thuộc vào cách cảm nhận, phân tích và đánh giá của khách hàng. Do đó, tiềm năng đầu tư của sản phẩm sẽ được xác định bởi những giá trị “thật” mà khách hàng có thể nhìn thấy hiện tại và dự đoán thông qua các yếu tố cộng hưởng sinh lời kèm theo.</p><p>Trong giai đoạn thị trường thanh lọc, đông đảo nhà đầu tư ngày càng tiếp cận sản phẩm một cách thận trọng, mong muốn “ăn chắc mặc bền” đến tận nơi, quan sát tận mắt để phân tích giá trị “thật”. Như vậy, tiềm năng sinh lợi của bất động sản ngày nay còn được cảm nhận từ trải nghiệm thực tế của khách hàng. Sự quy hoạch rõ ràng, vận hành chỉn chu cũng có thể tạo nên đánh giá tốt từ nhà đầu tư và dẫn đến quyết định lựa chọn sản phẩm của họ.</p><p>Theo một số chuyên gia bất động sản, hiện nay là khoảng thời gian tốt để đầu tư vào phân khúc nghỉ dưỡng bởi sự phục hồi mạnh mẽ của thị trường du lịch sau hơn 2 năm đại dịch Covid - 19 diễn ra. Đặc biệt, tại những nơi được đầu tư hạ tầng, sở hữu liên kết vùng đắt giá, bất động sản càng có giá trị.</p><p>Trước tình hình biến động, giới chuyên gia cũng đánh giá rằng dù thị trường đầu tư có vẻ giảm nhiệt so với đầu năm nay nhưng thực chất lại là cơ hội cho nhà đầu tư. Nhất là trong bối cảnh cuối năm, khi mà các nhà phân phối, phát triển sản phẩm cho ra mắt nhiều chính sách ưu đãi như chiết khấu sâu, quà tặng giá trị hay hỗ trợ thanh toán linh hoạt,… Tất cả sẽ góp phần kéo bất động sản trở về giá trị “thật”, mang nhiều quyền lợi hấp dẫn cho người mua.</p><p><strong>Palm Garden - đón đầu xu hướng “bất động sản thật, giá trị thật”</strong></p><p>Palm Garden - sản phẩm nghỉ dưỡng đẳng cấp cùng thiên nhiên tại Bảo Lộc - chứa đựng chuỗi giá trị “thật” có khả năng chinh phục những nhà đầu tư khó tính. Sản phẩm này đón trọn tầm nhìn hướng ra mảng xanh vô tận của núi rừng Bảo Lộc, đáp ứng đầy đủ chuẩn mực hòa nhập cùng thiên nhiên, mang đến cảm nhận, trải nghiệm cảm xúc “thật” vượt trội.</p><p>Đặc biệt, không chỉ tận dụng vị trí đắc địa, Palm Garden còn thừa hưởng tiềm năng từ tuyến cao tốc huyết mạch Dầu Giây - Liên Khương - dự án cao tốc đường bộ vừa được phê duyệt, giúp nâng cao năng lực thông thương, rút ngắn thời gian di chuyển từ TP.HCM lên thành phố Bảo Lộc chỉ còn hơn 2 giờ, thay vì hơn 5 giờ như hiện tại. Nhờ đó, giá trị “thật” của sản phẩm nghỉ dưỡng này là điều có thể nhận diện ngay từ đầu và tiềm năng sinh lời bền vững cũng thể hiện rõ nét.</p><p>Có thể nói, Palm Garden là một trong những sản phẩm đặc sắc tại Bảo Lộc đi tiên phong trong xu hướng “đưa bất động sản về giá trị thật” khi lợi nhuận “kép” của Palm Garden được tạo nên từ việc nhà đầu tư không chỉ hưởng lợi từ khả năng sinh lời của bất động sản theo thời gian, mà nhờ vào đơn vị hỗ trợ vận hành chuyên nghiệp, họ còn có thể thu lợi nhuận hàng tháng từ việc kinh doanh.</p><p>Một điều đặc biệt hơn, hấp dẫn các nhà đầu tư chính là đơn vị phát triển, phân phối của sản phẩm đã ưu đãi cho khách hàng chính sách hỗ trợ lãi suất đầu tư lên đến 18 tháng. Đáng lưu ý hơn cả là chính sách “có một không hai”, chưa từng xuất hiện tại thị trường Lâm Đồng: khi thanh toán 30% giá trị, khách hàng sẽ được chuyển nhượng quyền sở hữu đất với sổ riêng từng nền.</p><p><i><img src=\"https://file4.batdongsan.com.vn/2022/12/01/PHJN6Zw0/20221201111000-133b.jpg\"></i></p><p><i>Palm Garden - bất động sản giá trị “thật” sáng giá tại vùng đất Bảo Lộc</i></p><p>Với tất cả những thông tin minh bạch, xác đáng, có thể đánh giá Palm Garden là “nơi trú ẩn an toàn” cho dòng đầu tư của thị trường bất động sản hiện nay. Những yếu tố giá trị “thật” mà Palm Garden sở hữu không chỉ là tiềm năng mà chính là yếu tố nhận dạng quan trọng để các nhà đầu tư nắm bắt thời cơ và đầu tư đúng chỗ.</p>', 'uploads/638ce32d44273-bds2.jpeg', 28, 14, 'Ở thời điểm hiện tại, nhiều nhà đầu tư tìm kiếm kênh đầu tư an toàn để đảm bảo giá trị sản phẩm, hạn chế những rủi ro từ biến động thị trường. Và bất động sản mang giá trị “thật” dần trở thành “điểm tập kết dòng vốn đầu tư”. Sức hấp dẫn của bất động sản giá trị “thật”', '05/12/2022');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_loainguoidung` (`id_role`);

--
-- Chỉ mục cho bảng `bds`
--
ALTER TABLE `bds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bds_loaibds` (`id_loaibds`),
  ADD KEY `lk_bds_user` (`id_user`);

--
-- Chỉ mục cho bảng `bds_tuvan`
--
ALTER TABLE `bds_tuvan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_images_bds` (`id_bds`);

--
-- Chỉ mục cho bảng `loaibds`
--
ALTER TABLE `loaibds`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `bds`
--
ALTER TABLE `bds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `bds_tuvan`
--
ALTER TABLE `bds_tuvan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `loaibds`
--
ALTER TABLE `loaibds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
