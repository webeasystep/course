-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------


-- Dumping structure for table pagination.student
CREATE TABLE IF NOT EXISTS `student` (
  `nis` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pagination.student: ~14 rows (approximately)
DELETE FROM `student`;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`nis`, `name`, `gender`, `tel`, `address`) VALUES
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
/*!40000 ALTER TABLE `student` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
