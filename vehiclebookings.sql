-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Mar 2024, 16:27:42
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vehiclebookings`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `all_invoice`
--

CREATE TABLE `all_invoice` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_number` varchar(20) NOT NULL,
  `reserving_time` datetime NOT NULL,
  `date_journey` date NOT NULL,
  `ticket_id` varchar(50) NOT NULL,
  `invoice_numb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `all_invoice`
--

INSERT INTO `all_invoice` (`id`, `bus_id`, `user_id`, `seat_number`, `reserving_time`, `date_journey`, `ticket_id`, `invoice_numb`) VALUES
(101, 57, 21, 'E1', '2024-03-23 15:50:15', '2024-03-20', '65feec2ca55b8', 33),
(102, 57, 21, 'F2', '2024-03-23 15:50:15', '2024-03-20', '65feec2ca55b8', 33),
(103, 49, 23, 'C3', '2024-03-23 16:28:23', '2019-12-27', '65fef5195d315', 34),
(104, 49, 23, 'B3', '2024-03-23 16:28:23', '2019-12-27', '65fef5195d315', 34),
(105, 49, 23, 'D4', '2024-03-23 16:28:23', '2019-12-27', '65fef5195d315', 34),
(106, 42, 23, 'C4', '2024-03-23 16:33:08', '2024-02-14', '65fef63e051b6', 35),
(107, 42, 23, 'C3', '2024-03-23 16:33:08', '2024-02-14', '65fef63e051b6', 35),
(108, 10, 23, 'B4', '2024-03-23 16:46:13', '2024-03-04', '65fef947b090d', 36),
(109, 3, 23, 'B3', '2024-03-23 16:57:47', '2024-03-03', '65fefbfe95c42', 37),
(110, 3, 23, 'C4', '2024-03-23 17:23:38', '2019-12-27', '65ff020cb946c', 38),
(111, 3, 23, 'G3', '2024-03-23 17:23:38', '2019-12-27', '65ff020cb946c', 38),
(112, 27, 23, '34', '2024-03-23 18:29:41', '2024-03-05', '65ff118bc51a9', 39),
(113, 27, 23, '', '2024-03-23 18:29:41', '2024-03-05', '65ff118bc51a9', 39),
(114, 3, 23, '6', '2024-03-23 22:06:52', '2024-03-11', '65ff446fe9ddf', 40),
(115, 18, 23, '12', '2024-03-24 13:44:19', '2024-03-11', '660020259877d', 41),
(116, 2, 23, '16', '2024-03-27 21:11:23', '2024-03-25', '66047d6f5fd51', 42),
(117, 2, 23, '12', '2024-03-27 21:11:23', '2024-03-25', '66047d6f5fd51', 42),
(118, 17, 23, '10', '2024-03-27 21:14:25', '2024-03-10', '66047e23dabcd', 43),
(119, 17, 23, '18', '2024-03-27 21:14:25', '2024-03-10', '66047e23dabcd', 43),
(120, 17, 23, '20', '2024-03-27 21:16:57', '2024-03-10', '66047ebbbf30b', 44),
(121, 17, 23, '15', '2024-03-27 21:16:57', '2024-03-10', '66047ebbbf30b', 44),
(122, 10, 23, '15', '2024-03-28 20:06:36', '2024-03-18', '6605bfc31fb0e', 45),
(123, 10, 23, '19', '2024-03-28 20:17:17', '2024-03-18', '6605c23f4e37e', 46),
(124, 12, 23, '4', '2024-03-28 20:19:00', '2024-03-19', '6605c2a6d3eb5', 47),
(125, 12, 23, '2', '2024-03-28 20:24:16', '2024-03-19', '6605c3e1ad6d3', 48),
(126, 12, 23, '1', '2024-03-28 20:30:06', '2024-03-19', '6605c54170dd3', 49);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `invoice_temp`
--

CREATE TABLE `invoice_temp` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_number` varchar(20) NOT NULL,
  `reserving_time` datetime NOT NULL,
  `date_journey` date NOT NULL,
  `ticket_id` varchar(50) NOT NULL,
  `invoice_numb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `invoice_temp`
--

INSERT INTO `invoice_temp` (`id`, `bus_id`, `user_id`, `seat_number`, `reserving_time`, `date_journey`, `ticket_id`, `invoice_numb`) VALUES
(91, 1, 1, 'E4', '2020-01-09 09:16:59', '2020-01-18', '5e16e180caf69', 28);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tms_admin`
--

CREATE TABLE `tms_admin` (
  `a_id` int(20) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `tms_admin`
--

INSERT INTO `tms_admin` (`a_id`, `a_name`, `a_email`, `a_pwd`) VALUES
(1, 'admin', 'admin@mail.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tms_feedback`
--

CREATE TABLE `tms_feedback` (
  `f_id` int(20) NOT NULL,
  `f_uname` varchar(200) NOT NULL,
  `f_content` longtext NOT NULL,
  `f_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `tms_feedback`
--

INSERT INTO `tms_feedback` (`f_id`, `f_uname`, `f_content`, `f_status`) VALUES
(1, 'Ali Soyak', 'Otobüsler temiz ve konforluydu.', 'published'),
(2, 'Ceyda Altinbas', 'Kesinlikle tavsiye ederim!', 'published'),
(3, 'Leyla Ak', 'Otobüs firmasi, mükemmel hizmet sunuyor.', 'published');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tms_pwd_resets`
--

CREATE TABLE `tms_pwd_resets` (
  `r_id` int(20) NOT NULL,
  `r_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `tms_pwd_resets`
--

INSERT INTO `tms_pwd_resets` (`r_id`, `r_email`) VALUES
(2, 'admin@mail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tms_syslogs`
--

CREATE TABLE `tms_syslogs` (
  `l_id` int(20) NOT NULL,
  `u_id` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_ip` varbinary(200) NOT NULL,
  `u_city` varchar(200) NOT NULL,
  `u_country` varchar(200) NOT NULL,
  `u_logintime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tms_user`
--

CREATE TABLE `tms_user` (
  `u_id` int(20) NOT NULL,
  `u_fname` varchar(200) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_phone` varchar(200) NOT NULL,
  `u_addr` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_category` varchar(200) NOT NULL,
  `u_car_type` varchar(200) NOT NULL,
  `u_car_regno` varchar(200) NOT NULL,
  `u_car_bookdate` varchar(200) NOT NULL,
  `u_car_book_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `tms_user`
--

INSERT INTO `tms_user` (`u_id`, `u_fname`, `u_lname`, `u_phone`, `u_addr`, `u_email`, `u_pwd`, `u_category`, `u_car_type`, `u_car_regno`, `u_car_bookdate`, `u_car_book_status`) VALUES
(3, 'veysel', 'kara', '07777555411', 'istanbul', 'kara@mail.com', 'demo123', '', '', 'CA1001', '2024-09-01', 'Approved'),
(4, 'faruk', 'demir', '7145698540', '45 Clearview Drive', 'faruk@mail.com', 'password', '', '', '', '', ''),
(8, 'ali', 'kara', '05331112545', 'Kocaeli', 'alikara@mail.com', 'password', '', '', 'CA1690', '2022-09-13', 'Pending'),
(13, 'ay?e', 'soyak', '05451112233', 'istanbul', 'ayse@mail.com', '123456', '', '', '', '', ''),
(16, 'ay?e', 'soyak', '05451112233', 'istanbul', 'ayse@mail.com', '123456', 'User', '', 'CA7766', '', 'Bekleniyor'),
(17, 'Buse', 'Yener', '05448887711', '?stanbul', 'buse@mail.com', '123456', 'User', '', '', '', ''),
(18, 'Nisa', 'Aksoy', '05336669977', 'istanbul', 'nisa@mail.com', '123456', 'User', '', '', '', ''),
(19, 'Cem ', 'isciler', '05451112233', 'istanbul', 'cem@mail.com', '123456', 'Driver', '', '', '', ''),
(20, 'Cem ', 'isciler', '05451112233', '?stanbul', 'cem@mail.com', '123', 'User', '', 'CA7766', '2024-03-24', 'Bekleniyor');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tms_vehicle`
--

CREATE TABLE `tms_vehicle` (
  `v_id` int(20) NOT NULL,
  `v_name` varchar(200) NOT NULL,
  `v_reg_no` varchar(200) NOT NULL,
  `v_pass_no` varchar(200) NOT NULL,
  `v_driver` varchar(200) NOT NULL,
  `v_category` varchar(200) NOT NULL,
  `v_dpic` varchar(200) NOT NULL,
  `v_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `tms_vehicle`
--

INSERT INTO `tms_vehicle` (`v_id`, `v_name`, `v_reg_no`, `v_pass_no`, `v_driver`, `v_category`, `v_dpic`, `v_status`) VALUES
(3, 'Metro', 'CA7766', '50', 'Ali Kara', 'Class', '', 'Available'),
(4, 'Kamil Koç', 'CA2077', '5', 'Mehmet Ak', 'Suit', '', 'Available'),
(5, 'Pamukkale', 'CA1690', '5', 'Mert Soyak', 'Class', '', 'Available'),
(6, 'istanbul Seyahat', 'CA1001', '7', 'Veli isciler', 'Class', '', 'Available'),
(7, 'Ankara Seyahat', 'CA7700', '5', 'Cem Koc', 'Suit', '', 'Available');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `tcno` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_n` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `tcno`, `f_name`, `l_name`, `email`, `password`, `phone_n`, `b_date`, `admin`) VALUES
(1, 0, 'Faruk', 'Ayrik', 'gggg@gmail.com', '202cb962ac59075b964b07152d234b70', 124798, '0000-00-00', 1),
(2, 0, 'ali', 'veli', 'ali@mail.com', '202cb962ac59075b964b07152d234b70', 1259236, '2001-01-12', 0),
(20, 0, 'Admin', 'Man', 'admin@ebus.com', '202cb962ac59075b964b07152d234b70', 1318848564, '1995-01-15', 1),
(21, 0, 'abc', 'abc', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '2024-03-01', 0),
(22, 0, 'buse', 'yen', 'a@mail.com', '123', 123456789, '2024-03-01', 0),
(23, 0, 'buse', 'yener', 'ab@mail.com', '202cb962ac59075b964b07152d234b70', 2147483647, '2024-06-05', 0),
(24, 0, 'Faruk', 'Ayrik', 'gggg@gmail.com', '202cb962ac59075b964b07152d234b70', 124798, '0000-00-00', 1),
(25, 0, 'buse', 'yenerler', 'test12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '2024-03-25', 0),
(26, 0, 'buse', 'yener', 'buse@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, '2002-03-16', 0),
(27, 2147483647, 'ali', 'veli', 'abcd@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, '2024-03-25', 0),
(28, 0, 'ali', 'abc', 'test@gmail.com', '123456', 2147483647, '2024-03-14', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `_all_bus`
--

CREATE TABLE `_all_bus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `d_time` time NOT NULL,
  `d_place` varchar(20) NOT NULL,
  `a_time` time NOT NULL,
  `a_place` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `Sat` tinyint(1) NOT NULL,
  `Sun` tinyint(1) NOT NULL,
  `Mon` tinyint(1) NOT NULL,
  `Tue` tinyint(1) NOT NULL,
  `Wed` tinyint(1) NOT NULL,
  `Thu` tinyint(1) NOT NULL,
  `Fri` tinyint(1) NOT NULL,
  `number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `_all_bus`
--

INSERT INTO `_all_bus` (`id`, `name`, `type`, `d_time`, `d_place`, `a_time`, `a_place`, `price`, `Sat`, `Sun`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `number`) VALUES
(2, 'Ankara Seyahat', 'Suit', '10:00:00', 'İstanbul', '15:00:00', 'Ankara', 800, 1, 1, 1, 1, 1, 1, 1, 123457),
(3, 'İstanbul Seyahat', 'Suit', '19:00:00', 'İstanbul', '23:00:00', 'İzmir', 700, 1, 1, 1, 1, 1, 1, 1, 124578),
(4, 'ABC Tur', 'Suit', '12:00:00', 'İzmir', '15:00:00', 'Antalya', 400, 1, 1, 1, 1, 1, 1, 1, 124587),
(6, 'Metro', 'Suit', '06:00:00', 'İstanbul', '09:00:00', 'Antalya', 400, 1, 1, 0, 1, 0, 0, 1, 127845),
(7, 'Kamil Koç', 'Class', '08:00:00', 'Antalya', '16:00:00', 'İzmir', 800, 1, 1, 1, 1, 1, 1, 1, 321654),
(8, 'Yener Tur', 'Class', '08:00:00', 'Ankara', '12:00:00', 'İzmir', 600, 1, 1, 1, 1, 1, 1, 1, 367390),
(9, 'Aksoy Tur', 'Class', '14:00:00', 'Ankara', '16:00:00', 'Antalya', 600, 1, 1, 1, 1, 1, 1, 1, 367391),
(10, 'Metro', 'Class', '10:00:00', 'Ankara', '15:00:00', 'İstanbul', 600, 1, 0, 1, 1, 0, 1, 1, 367395),
(11, 'Metro', 'Class', '08:00:00', 'İzmir', '15:00:00', 'İstanbul', 900, 1, 1, 1, 0, 1, 0, 1, 2546798),
(12, 'ABC Tur', 'Class', '07:00:00', 'İzmir', '12:00:00', 'Ankara', 500, 1, 0, 0, 1, 1, 0, 0, 2587413),
(13, 'ABC Tur', 'Suit', '09:00:00', 'İzmir', '15:00:00', 'İstanbul', 700, 1, 0, 1, 1, 0, 1, 1, 3254127),
(14, 'Ankara Seyahat', 'Suit', '15:00:00', 'Ankara', '23:00:00', 'İstanbul', 660, 1, 1, 1, 1, 1, 1, 1, 5214789),
(15, 'Ankara Seyahat', 'Suit', '12:00:00', 'Ankara', '15:00:00', 'İzmir', 550, 1, 1, 0, 1, 1, 0, 1, 5487123),
(16, 'Ankara Seyahat', 'Suit', '09:00:00', 'Ankara', '15:00:00', 'Antalya', 714, 1, 0, 0, 1, 1, 0, 1, 5821475),
(17, 'Metro', 'Suit', '08:00:00', 'İstanbul', '12:00:00', 'İzmir', 642, 1, 1, 1, 1, 1, 1, 1, 5896321),
(18, 'Metro', 'Class', '14:00:00', 'İstanbul', '22:00:00', 'Ankara', 780, 1, 0, 1, 0, 1, 0, 1, 6541237),
(19, 'Metro', 'Class', '04:10:00', 'Ankara', '11:00:00', 'İzmir', 450, 1, 1, 1, 1, 1, 1, 1, 21456321),
(20, 'Kamil Koç', 'Suit', '12:00:00', 'İzmir', '19:00:00', 'Antalya', 582, 1, 1, 1, 1, 1, 1, 1, 25874623),
(21, 'Kamil Koç', 'Suit', '06:00:00', 'Antalya', '15:00:00', 'İstanbul', 900, 1, 1, 1, 1, 1, 1, 1, 36987525),
(22, 'Kamil Koç', 'Suit', '08:00:00', 'Antalya', '12:00:00', 'Ankara', 630, 1, 0, 0, 1, 0, 1, 1, 41256385),
(23, 'Pamukkale', 'Class', '08:00:00', 'İzmir', '15:00:00', 'İstanbul', 450, 1, 1, 1, 1, 1, 1, 1, 45871236),
(24, 'Pamukkale', 'Class', '08:00:00', 'Ankara', '12:00:00', 'İstanbul', 600, 1, 1, 1, 1, 1, 1, 1, 78789878),
(25, 'Pamukkale', 'Class', '06:00:00', 'Antalya', '12:00:00', 'İstanbul', 920, 1, 1, 1, 1, 1, 1, 1, 85864758),
(26, 'Pamukkale', 'Suit', '12:00:00', 'İstanbul', '21:00:00', 'Ankara', 720, 1, 1, 1, 1, 1, 1, 1, 101001001),
(27, 'Pamukkale', 'Class', '11:00:00', 'İstanbul', '15:00:00', 'İzmir', 500, 1, 1, 1, 1, 1, 1, 1, 231475682),
(63, 'akca', 'Suit', '00:00:12', 'İstanbul', '00:00:17', 'İzmir', 740, 1, 1, 1, 1, 1, 1, 1, 345),
(65, 'akca', 'Suit', '00:00:12', 'Ankara', '00:00:17', 'İzmir', 740, 1, 1, 1, 1, 1, 1, 1, 345),
(66, 'akca', 'Suit', '00:00:12', 'İstanbul', '00:00:17', 'İzmir', 740, 1, 1, 1, 1, 1, 1, 1, 345),
(67, 'akca', 'Class', '00:00:12', 'İstanbul', '00:00:17', 'İzmir', 740, 1, 1, 1, 1, 1, 1, 1, 345);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `all_invoice`
--
ALTER TABLE `all_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `invoice_temp`
--
ALTER TABLE `invoice_temp`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tms_admin`
--
ALTER TABLE `tms_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Tablo için indeksler `tms_feedback`
--
ALTER TABLE `tms_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Tablo için indeksler `tms_pwd_resets`
--
ALTER TABLE `tms_pwd_resets`
  ADD PRIMARY KEY (`r_id`);

--
-- Tablo için indeksler `tms_syslogs`
--
ALTER TABLE `tms_syslogs`
  ADD PRIMARY KEY (`l_id`);

--
-- Tablo için indeksler `tms_user`
--
ALTER TABLE `tms_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Tablo için indeksler `tms_vehicle`
--
ALTER TABLE `tms_vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `_all_bus`
--
ALTER TABLE `_all_bus`
  ADD PRIMARY KEY (`id`,`number`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `all_invoice`
--
ALTER TABLE `all_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- Tablo için AUTO_INCREMENT değeri `invoice_temp`
--
ALTER TABLE `invoice_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- Tablo için AUTO_INCREMENT değeri `tms_admin`
--
ALTER TABLE `tms_admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tms_feedback`
--
ALTER TABLE `tms_feedback`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `tms_pwd_resets`
--
ALTER TABLE `tms_pwd_resets`
  MODIFY `r_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `tms_syslogs`
--
ALTER TABLE `tms_syslogs`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tms_user`
--
ALTER TABLE `tms_user`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `tms_vehicle`
--
ALTER TABLE `tms_vehicle`
  MODIFY `v_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `_all_bus`
--
ALTER TABLE `_all_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
