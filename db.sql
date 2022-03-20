CREATE DATABASE IF NOT EXISTS `evaluation`;
USE `evaluation`;

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cntrating` smallint(5) unsigned NOT NULL DEFAULT '0',
  `rating` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `teachers`;

INSERT INTO `teachers` (`id`, `name`, `subject`, `cntrating`, `rating`) VALUES
	(1, 'A. F. M. MAHBUBUR RAHMAN', 'Web Engineering'),
	(2, 'MD. TANVIR HOSSAIN', 'simulation and modeling'),
	(3, 'UTPALA NANDA CHOWDHURY', 'ICE'),
	(4, 'Sangeeta Biswas', 'opersting system');
	
