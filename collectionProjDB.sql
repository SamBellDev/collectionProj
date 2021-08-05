# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: proj2DB
# Generation Time: 2021-08-04 09:27:23 +0000

>>>>>>> 049592796e83b844af6df107403431d84396d195


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table coins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `coins`;

CREATE TABLE `coins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `coinName` varchar(250) NOT NULL DEFAULT '',
  `yearMinted` varchar(250) NOT NULL DEFAULT '',
  `material` varchar(250) NOT NULL DEFAULT '',
  `diameter` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `coins` WRITE;
/*!40000 ALTER TABLE `coins` DISABLE KEYS */;

INSERT INTO `coins` (`id`, `coinName`, `yearMinted`, `material`, `diameter`)
VALUES
	(1,'Roman coin','AD 76','Gold','16.82mm'),
	(2,'Victorian coin','AD 1865','Unknown','Unknown'),
	(3,'Modern coin','AD 2021','Nickel-brass and nickel plated brass alloy','23.43mm'),
	(4,'Doge','AD 2021','Speculative will','3474000000mm');

/*!40000 ALTER TABLE `coins` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
