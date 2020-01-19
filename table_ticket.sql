-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `judul_ticket` varchar(255) NOT NULL,
  `nomor_ticket` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `keluhan_ticket` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `update_at` datetime NOT NULL,
  `balasan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-01-19 11:35:53
