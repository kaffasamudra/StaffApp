-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2024 at 12:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `execution_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`, `execution_time`) VALUES
(8, 'kaffa', 'kaffa', '2024-10-08 01:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(6699, 'kaffa', 'kaffa@gmail.com', 'cuma ngetest\r\n', '2024-07-19 02:31:58'),
(66991, 'kaffa', 'kaffa@gmail.com', 'cuma ngetest', '2024-07-18 20:48:32'),
(66992, 'zaky', 'zaky@gmail.com', 'test bro info dolan\r\n', '2024-07-24 23:25:00'),
(66993, 'lina', 'lina@gmail.com', 'ngebug oi kaf. iso gawe aplikasi ra e. bjir kata gw teh', '2024-07-24 23:54:33'),
(66997, 'dini', 'dini@gmail.com', 'lopyu', '2024-07-28 23:55:35'),
(66998, 'budi', 'budi@gmail.com', 'askdslfhsbhfbafhsabfihdvfliashfilf', '2024-07-29 00:14:00'),
(66999, 'budi', 'sasasa@gmail.com', 'asasas', '2024-07-31 00:54:43'),
(67000, 'dini', 'dini@gmail.com', 'aloooo', '2024-10-16 00:44:12'),
(67001, 'dini', 'dini@gmail.com', 'aloooo', '2024-10-16 01:36:45'),
(67002, 'dini', 'dini@gmail.com', 'aloooo', '2024-10-16 01:39:02'),
(67003, 'dini', 'dini@gmail.com', 'llllllllllllllllllllll', '2024-10-16 01:54:35'),
(67004, 'dini', 'dini@gmail.com', 'ppppppppppppppppppppppppppp', '2024-10-16 01:55:45'),
(67005, 'myname', 'anomali@gmail.com', 'rawrr', '2024-10-17 20:00:52'),
(67006, 'angelia', 'angelia@gmail.com', 'jkjdkjkjkj', '2024-10-17 20:47:13'),
(67007, 'angelia', 'angelia@gmail.com', 'kembangkan lagi', '2024-10-18 00:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `tipe_request` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `prioritas` enum('low','medium','high') NOT NULL,
  `status` enum('open','in progress','complete') NOT NULL DEFAULT 'open',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `username`, `bagian`, `tipe_request`, `detail`, `prioritas`, `status`, `created`, `updated`) VALUES
(1, 'dini', 'umum', 'memperbaiki laptop', 'laptop saya ngelag mungkin butuh servise', 'medium', 'complete', '2024-09-20 02:06:07', '2024-09-25 08:30:12'),
(2, 'dini', 'pembukuan', 'perbaikan printer', 'printer tidak jalan', 'low', 'complete', '2024-09-19 23:45:46', '2024-10-08 00:19:17'),
(3, 'dini', 'pembukuan', 'perbaikan printer', 'rusak lagi', 'high', 'complete', '2024-09-22 18:25:24', '2024-10-08 00:19:30'),
(4, 'dini', 'Keuangan', 'perbaikan prnter', 'fdsutfdckausgdfkavufyd', 'low', 'complete', '2024-09-24 20:15:11', '2024-10-08 00:19:38'),
(5, 'dini', 'Keuangan', 'perbaikan prnter', 'jgliavdfkaypiuayf', 'high', 'complete', '2024-09-24 20:26:30', '2024-10-08 00:19:48'),
(6, 'zaky', 'umum', 'perbaikan', 'no detail', 'low', 'open', '2024-10-08 00:17:28', '2024-10-08 00:17:28'),
(7, 'dini', 'Pembukuan dan Pengarsipan', 'pebaikan printer', 'tlong belikan yang baru, sering rusak nih', 'medium', 'open', '2024-10-08 00:24:29', '2024-10-08 00:24:29'),
(9, 'angelia', 'Pembukuan dan Pengarsipan', 'perbaikan hardware', 'tidak bisa nyala, butuh di perbaiki segera', 'high', 'open', '2024-10-08 17:58:34', '2024-10-08 17:58:34'),
(10, 'angelia', 'Pembukuan dan Pengarsipan', 'Perbaikan meja', 'Mejanya sengklek', 'medium', 'open', '2024-10-11 00:35:57', '2024-10-11 00:35:57'),
(11, 'dini', 'Pembukuan dan Pengarsipan', 'koreksi', 'hefeifuiefu', 'medium', 'open', '2024-11-21 21:13:39', '2024-11-21 21:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text,
  `bagian` enum('SKAI','SDM dan UMUM','IT','Pembukuan dan Pengarsipan','Legal dan Litigasi','P2K','Oprasional','Bisnis') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `id_user`, `title`, `slug`, `content`, `bagian`, `created_at`) VALUES
(1, 8, 'jkjk', 'jkjk-6684c1bea04d83.51549595', 'kkkkk\r\n', 'SKAI', '2024-07-03 10:13:02'),
(2, 8, 'knkn', 'knkn-6684c1c9b9e6a4.53184259', 'knkkn', 'SKAI', '2024-07-03 10:13:13'),
(3, 9, 'agenda direksi', 'agenda-direksi-66875b2b01f076.58689341', 'agenda nya adalah ya kepoya wkwkkiw kiw', 'SKAI', '2024-07-05 09:32:11'),
(4, 9, 'info madang', 'info-madang-6687b56d6014e3.19241118', 'madanglh arep ngopo meneh jal\r\n', 'SKAI', '2024-07-05 15:57:17'),
(10, 2, 'ini', 'ini-668f8aa86cc4c9.22195483', 'adadeh', 'IT', '2024-07-11 14:32:56'),
(13, 5, 'my profile', 'my-profile-66a1eed82233c5.80339831', 'aku dini kamu siapa kamu pasti lina\r\n', 'SKAI', '2024-07-25 13:21:12'),
(14, 8, 'hjdkbjh', 'hjdkbjh-66a1f396411942.16877409', 'apa yag inginn anda lakukan?\r\nmekdi', 'SKAI', '2024-07-25 13:41:26'),
(15, 8, 'laught', 'laught-66a1f3f95106e3.08320088', 'wkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwkwwkwkwkwkwkwkwkwkwkwkwkwkwkwkkwwkwkwkwkwkwkwkwkwkwkwkwkwk', 'SKAI', '2024-07-25 13:43:05'),
(16, 5, 'sfm', 'sfm-66a1f5523054f7.71657016', 'dfghj', 'Pembukuan dan Pengarsipan', '2024-07-25 13:48:50'),
(17, 4, 'blablabla', 'blablabla-66a1f8089286d8.08479325', 'bacot\r\n', 'SKAI', '2024-07-25 14:00:24'),
(20, 2, 'dddddddddddddd', 'dddddddddddddd-66a1fa5579c2c1.57359473', 'dddddddddddddddddddd', 'IT', '2024-07-25 14:10:13'),
(21, 2, 'sakit', 'flu-66a6eff2388d50.40153920', 'rebahan', 'IT', '2024-07-29 08:27:14'),
(22, 2, 'h', 'h-66a6fd4fe02174.40135174', 'h', 'IT', '2024-07-29 09:24:15'),
(23, 2, 'ini judul', 'ini-judul-66a739b11d4267.75022068', NULL, 'IT', '2024-07-29 13:41:53'),
(25, 5, 'rapat', 'rapat-66a742fa2cbfe9.52713205', 'nganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggurnganggur', 'Pembukuan dan Pengarsipan', '2024-07-29 14:21:30'),
(26, 2, 'hihihihi', 'hihihihi-66a9e35b445ff1.47361203', 'duar \r\ndengarkanlah', 'IT', '2024-07-31 14:10:19'),
(27, 2, 'e', 'e-66a9e74bad45e5.71900229', 'e', 'IT', '2024-07-31 14:27:07'),
(28, 2, 'qe', 'qe-66a9e7558c7e29.51194282', 'qe', 'IT', '2024-07-31 14:27:17'),
(29, 2, 'eq', 'eq-66a9e75ec0f028.30095110', 'eq', 'IT', '2024-07-31 14:27:26'),
(30, 2, 'Kaffa', 'kaffa-66aaffa6e268b2.50319219', 'Samudra', 'IT', '2024-08-01 10:23:18'),
(31, 5, 'Dini', 'dini-66ab029014ad28.18164997', 'Dini', 'Pembukuan dan Pengarsipan', '2024-08-01 10:35:44'),
(33, 2, 'Kaffa samudra', 'kaffa-samudra-66ac58ace30ab4.01648130', 'Kaffa samudra', 'IT', '2024-08-02 10:55:24'),
(36, 4, 'ini dia', 'ini-dia-67064dcd2df188.67537779', '', 'Pembukuan dan Pengarsipan', '2024-10-09 16:33:01'),
(38, 8, 'thejudul', 'thejudul-670f8023247bd4.67931742', 'blablabla\r\n', 'Pembukuan dan Pengarsipan', '2024-10-16 15:58:11'),
(41, 4, 'qwertyu', 'qwertyu-673cf37d212615.50397462', 'qwertyuiop', 'Pembukuan dan Pengarsipan', '2024-11-20 03:22:21'),
(43, 8, 'upp', 'upp-673d1c2772f3c0.82707556', 'woke sipp\r\n', 'Pembukuan dan Pengarsipan', '2024-11-20 06:15:51'),
(44, 5, 'ini ', 'ini-6740047b78c4b9.73412563', 'gjdgjgdhgshj\r\n', 'Pembukuan dan Pengarsipan', '2024-11-22 11:11:39'),
(45, 5, 'ini judul', 'ini-judul-6742ac3adc9476.25559190', '', 'Pembukuan dan Pengarsipan', '2024-11-24 11:31:54'),
(46, 4, 'apa sajalah', 'apa-sajalah-67495bb61d1b37.06757281', 'fduakdiyfgvffdv', 'Pembukuan dan Pengarsipan', '2024-11-29 13:14:14'),
(47, 5, 'baru', 'baru-674ce0ff0ad1e8.71361596', 'ini baru\r\n', 'Pembukuan dan Pengarsipan', '2024-12-02 05:19:43'),
(51, 5, 'sssw', 'sss-674ce33e337221.99436244', 'sssss', 'Pembukuan dan Pengarsipan', '2024-12-02 05:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `bagian` enum('SKAI','SDM dan UMUM','IT','Pembukuan dan Pengarsipan','Legal dan Litigasi','P2K','Oprasional','Bisnis') NOT NULL,
  `role` enum('Direksi','Karyawan','Kepala Bagian') NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `bagian`, `role`, `avatar`, `created_at`) VALUES
(1, 'kaffa', 'kaffa123', '08123456789', 'IT', 'Karyawan', 'avatar.jpg', '2024-11-01 12:00:00'),
(2, 'budi', 'budi', '', 'IT', 'Karyawan', '', '2024-07-05 01:24:27'),
(4, 'angelia', 'angelia', '6285191241474', 'Pembukuan dan Pengarsipan', 'Karyawan', '@Aoi_kny_senpai.jpeg', '2024-07-09 19:56:07'),
(5, 'dini', 'dini', '6287719631265', 'Pembukuan dan Pengarsipan', 'Karyawan', '@Aoi_kny_senpai1.jpeg', '2024-07-09 19:57:31'),
(6, 'lina', 'lina', '0', 'Pembukuan dan Pengarsipan', 'Kepala Bagian', '', '2024-07-09 19:57:31'),
(7, 'arip', 'arip', '0', '', 'Direksi', '', '2024-07-10 23:23:28'),
(8, 'zaky', 'zaky', '0', 'SKAI', 'Karyawan', '', '2024-07-11 00:48:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67008;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
