-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for constructioncal
DROP DATABASE IF EXISTS `constructioncal`;
CREATE DATABASE IF NOT EXISTS `constructioncal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `constructioncal`;

-- Dumping structure for table constructioncal.valuesforobjects
DROP TABLE IF EXISTS `valuesforobjects`;
CREATE TABLE IF NOT EXISTS `valuesforobjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `value` double DEFAULT NULL,
  `amountMax` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table constructioncal.valuesforobjects: ~11 rows (approximately)
/*!40000 ALTER TABLE `valuesforobjects` DISABLE KEYS */;
INSERT INTO `valuesforobjects` (`id`, `name`, `value`, `amountMax`) VALUES
	(1, 'Cortium Cortium Silo', 2, 1),
	(2, 'Repair Module	', 0.5, 10),
	(3, 'Turret AI Module	', 0.5, 10),
	(4, 'Skywall Module	', 0.5, 10),
	(5, 'Structure Shield Module	', 0.5, 10),
	(6, 'Alarm Module	', 0.5, 10),
	(7, 'Reinforcements Module	', 0.5, 10),
	(8, 'Vehicle Gate	', 0.5, 10),
	(9, 'Orbital Strike Uplink	', 4, 1),
	(10, 'Routing Spire	', 1, 3),
	(11, 'Pain Spire	', 1, 10);
/*!40000 ALTER TABLE `valuesforobjects` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
