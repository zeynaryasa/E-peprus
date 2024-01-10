-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for balilibrary_db
DROP DATABASE IF EXISTS `balilibrary_db`;
CREATE DATABASE IF NOT EXISTS `balilibrary_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `balilibrary_db`;

-- Dumping structure for table balilibrary_db.tb_buku
DROP TABLE IF EXISTS `tb_buku`;
CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `t_terbit` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table balilibrary_db.tb_buku: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_buku` DISABLE KEYS */;
REPLACE INTO `tb_buku` (`id`, `judul`, `penerbit`, `t_terbit`, `pengarang`, `gambar`) VALUES
	(1, 'Buku 1', 'PT. Buku', '2022', 'Alkakkal', 'C:laragonwwwBaliLibraryukuimg2.jpg');
/*!40000 ALTER TABLE `tb_buku` ENABLE KEYS */;

-- Dumping structure for table balilibrary_db.tb_user
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `wa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table balilibrary_db.tb_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
REPLACE INTO `tb_user` (`id`, `nama`, `username`, `password`, `wa`) VALUES
	(1, 'Admin', 'admin', 'admin', '+6287864365344'),
	(2, 'Admin2', 'admin2', 'admin2', '+6287864365344');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
bbalilibrary_dbtb_useralilibrary_db