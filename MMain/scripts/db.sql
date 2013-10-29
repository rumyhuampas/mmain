-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.27 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para mmain
CREATE DATABASE IF NOT EXISTS `mmain` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `mmain`;


-- Volcando estructura para tabla mmain.users
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Profile` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
