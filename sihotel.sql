-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sihotel
CREATE DATABASE IF NOT EXISTS `sihotel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sihotel`;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
	(5, 'Universitas Pakuan - Muhamad Alvin Alzali', 'alvinamaterasu@gmail.com', 'default.svg', '$2y$10$T/6AAyHihGawnwEiECo.BOn4inQMOAtt96ql1ws7E5NC8zQ3ZfmV2', 2, 1, 1650340153),
	(6, 'Muhamad Alvin Alzali', 'alvin.065119134@unpak.ac.id', 'Background.png', '$2y$10$hpHTPn2nADoVIN.Uw2IaKOzjALl3ywmjs9kFxg4.ANKZDLUHBT.Di', 1, 1, 1650422900);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table sihotel.user_access_menu
CREATE TABLE IF NOT EXISTS `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_access_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
REPLACE INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 2, 2),
	(4, 1, 3);
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;

-- Dumping structure for table sihotel.user_menu
CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_menu: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
REPLACE INTO `user_menu` (`id`, `menu`) VALUES
	(1, 'Admin'),
	(2, 'User'),
	(3, 'Menu'),
	(4, 'Test');
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;

-- Dumping structure for table sihotel.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_role: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
REPLACE INTO `user_role` (`id`, `role`) VALUES
	(1, 'Administrator'),
	(2, 'Member');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

-- Dumping structure for table sihotel.user_sub_menu
CREATE TABLE IF NOT EXISTS `user_sub_menu` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `menu_id` int(2) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sihotel.user_sub_menu: ~7 rows (approximately)
/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
REPLACE INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
	(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
	(2, 2, 'My Profile', 'user', 'fas fa-fw fa-chart-area', 1),
	(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
	(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
	(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
	(6, 1, 'coba', 'coba/coba', 'fab fa-fw fa-youtube', 1),
	(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1);
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
