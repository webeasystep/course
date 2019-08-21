-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pagination
CREATE DATABASE IF NOT EXISTS `pagination` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pagination`;

-- Dumping structure for table pagination.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pagination.siswa: ~14 rows (approximately)
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`) VALUES
	('12310', 'Silha', 'Perempuan', '08123124213', 'Hang lekir'),
	('12312', 'Setiawan', 'Laki-laki', '08123123323', 'Tg'),
	('12323', 'Agung', 'Laki-laki', '12312312233', 'Hang tuah'),
	('12341', 'Heru', 'Laki-laki', '08123124232', 'Makam pahlawan'),
	('12343', 'Rahman', 'Laki-laki', '08123213213', 'Tanjung'),
	('12345', 'Ryan', 'Laki-laki', '08123123123', 'Pinang'),
	('21321', 'Cyntia', 'Perempuan', '12325321323', 'Center'),
	('23842', 'Cynta', 'Perempuan', '08123123412', 'Bincent'),
	('34123', 'Silha', 'Perempuan', '23123123232', 'Hang lekir'),
	('41232', 'Silvia', 'Perempuan', '08123134123', 'Tepi laut'),
	('45123', 'Ryan', 'Laki-laki', '25676342323', 'Tanjung'),
	('51332', 'Juni', 'Perempuan', '41231232412', 'Bintant Center'),
	('52342', 'Rahman', 'Laki-laki', '41231232332', 'Pinang'),
	('72372', 'Panriki', 'Laki-laki', '08123623723', 'Pahlawan'),
	('82323', 'Junita', 'Perempuan', '01237123242', 'Bincen');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
