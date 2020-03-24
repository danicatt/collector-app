# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collectorApp
# Generation Time: 2020-03-23 15:08:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cartoonChars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cartoonChars`;

CREATE TABLE `cartoonChars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `tvshow` varchar(200) NOT NULL DEFAULT '',
  `species` varchar(200) NOT NULL DEFAULT '',
  `catchphase` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cartoonChars` WRITE;
/*!40000 ALTER TABLE `cartoonChars` DISABLE KEYS */;

INSERT INTO `cartoonChars` (`id`, `name`, `tvshow`, `species`, `catchphase`)
VALUES
	(1,'Bugs Bunny','Looney Tunes','Rabbit','What\'s up, Doc?'),
	(2,'Homer Simpson','The Simpsons','Human','D\'oh!'),
	(3,'Fred Flintstone','The Flintstones','Human','Yabba dabba doo!'),
	(4,'Patrick Star','Spongebob Squarepants','Starfish','I can\'t see my forehead!');

/*!40000 ALTER TABLE `cartoonChars` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
