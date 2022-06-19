-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table sihotel.reservation
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `phone` varchar(128) NOT NULL,
  `roomtype` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `price` int(128) NOT NULL,
  `total_price` int(128) NOT NULL DEFAULT 0,
  `duration` int(128) NOT NULL,
  `checked_invoice` varchar(256) NOT NULL,
  `invoice_created_dump` varchar(256) NOT NULL,
  `id_invoice` varchar(50) NOT NULL,
  `invoice_created` datetime NOT NULL,
  `invoice_due` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.reservation: ~3 rows (approximately)
REPLACE INTO `reservation` (`id`, `checkin`, `checkout`, `phone`, `roomtype`, `name`, `user_id`, `status`, `price`, `total_price`, `duration`, `checked_invoice`, `invoice_created_dump`, `id_invoice`, `invoice_created`, `invoice_due`) VALUES
	(32, '2022-06-20 00:00:00', '2022-06-30 00:00:00', '08636721323', 'Gallery Suite(Double)', 'Muhamad Alvin Alzali', '6', 'Active', 5000000, 55000000, 11, 'ss3.png', '190620221754', '6190620221754', '2022-06-19 17:54:28', '2022-06-20 17:54:28');

-- Dumping structure for table sihotel.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `job` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `birthplace` varchar(256) NOT NULL,
  `scan` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user: ~4 rows (approximately)
REPLACE INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `address`, `job`, `gender`, `birthplace`, `scan`, `phone`) VALUES
	(5, 'Muhamad Alvin Alzali', 'alvinamaterasu@gmail.com', 'default.svg', '$2y$10$T/6AAyHihGawnwEiECo.BOn4inQMOAtt96ql1ws7E5NC8zQ3ZfmV2', 2, 1, 1650340153, '', '', '', '', '', ''),
	(6, 'Muhamad Alvin Alzali', 'alvin.065119134@unpak.ac.id', 'Background.png', '$2y$10$hpHTPn2nADoVIN.Uw2IaKOzjALl3ywmjs9kFxg4.ANKZDLUHBT.Di', 1, 1, 1650422900, '', '', '', '', '', ''),
	(18, 'Muhamad Alvin Alzali', 'alvinalzali40@gmail.com', 'default.svg', '$2y$10$NsmHb3B3cMsprwcMVK.L7.C5RNeIik8QfUjW6EBEsiIEYQtx8rziO', 2, 1, 1651024205, 'Jl. Rancamaya No.30, RT.01/RW.04, Bojongkerta, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16139', '123123', 'man', '123123', '', '+6289665659929'),
	(22, 'superadmin', 'superadmin@gmail.com', 'default.svg', '$2y$10$eNTJCYPKHrbOlD.dlOYoG.7fseKRd2qe.S/oOa4PL.RbxAroi50gi', 0, 1, 1655175563, 'superadmin', 'superadmin', 'man', 'superadmin', '', '089665659929');

-- Dumping structure for table sihotel.user_access_menu
CREATE TABLE IF NOT EXISTS `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_access_menu: ~7 rows (approximately)
REPLACE INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
	(3, 2, 2),
	(12, 1, 6),
	(18, 0, 1),
	(20, 0, 0),
	(24, 1, 1),
	(25, 1, 3),
	(26, 1, 2);

-- Dumping structure for table sihotel.user_menu
CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_menu: ~5 rows (approximately)
REPLACE INTO `user_menu` (`id`, `menu`) VALUES
	(0, 'Super Admin'),
	(1, 'Admin'),
	(2, 'User'),
	(3, 'Menu'),
	(6, 'Room');

-- Dumping structure for table sihotel.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_role: ~3 rows (approximately)
REPLACE INTO `user_role` (`id`, `role`) VALUES
	(0, 'SuperAdmin'),
	(1, 'Administrator'),
	(2, 'Member');

-- Dumping structure for table sihotel.user_sub_menu
CREATE TABLE IF NOT EXISTS `user_sub_menu` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `menu_id` int(2) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_sub_menu: ~11 rows (approximately)
REPLACE INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
	(2, 2, 'My Profile', 'user', 'fas fa-fw fa-chart-area', 1),
	(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
	(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
	(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
	(7, 0, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
	(8, 2, 'Add Reservation', 'user/reservation', 'fas fa-fw fa-address-book', 1),
	(9, 2, 'My Reservation', 'user/reservationinfo', 'fas fa-fw fa-info', 1),
	(10, 6, 'Reservation Status', 'admin/reservationstatus', 'fas fa-fw fa-map-pin', 1),
	(12, 2, 'Room Suite & Facilities', 'user/roominfo', 'fas fa-fw fa-clipboard-list', 1),
	(13, 1, 'User Management', 'admin/useraccount', 'fas fa-fw fa-user-cog', 1),
	(14, 1, 'Receipt', 'admin/receipt', 'fas fa-fw fa-money-check', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
