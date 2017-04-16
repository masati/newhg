-- --------------------------------------------------------
-- Хост:                         192.168.10.10
-- Версия сервера:               5.7.16-0ubuntu0.16.04.1 - (Ubuntu)
-- Операционная система:         Linux
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных Newguide
CREATE DATABASE IF NOT EXISTS `Newguide` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `Newguide`;

-- Дамп структуры для таблица Newguide.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_alias_unique` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы Newguide.articles: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `text`, `desc`, `alias`, `img`, `keywords`, `meta_desc`, `updated_at`, `created_at`) VALUES
	(1, 'заголовок 1', 'ыаипмрылопыпрлыпмлывриовояояипмоявмп', 'явмтлыоралрпвы', 'хрень', NULL, NULL, NULL, '2017-02-23 14:56:51', '2017-02-23 14:56:51');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Дамп структуры для таблица Newguide.servicelists
CREATE TABLE IF NOT EXISTS `servicelists` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `TypeGroup` tinyint(4) NOT NULL DEFAULT '0',
  `TypePayment` tinyint(4) NOT NULL DEFAULT '0',
  `Description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы Newguide.servicelists: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `servicelists` DISABLE KEYS */;
INSERT INTO `servicelists` (`id`, `Name`, `TypeGroup`, `TypePayment`, `Description`) VALUES
	(1, 'Сервис1', 0, 0, 'wghjdjh;dklhjldkv, \'\r\n \'djsl mjl;d jdk m;kl\r\na ;ds hjdl; \'\r\nad\r\nmkjgt'),
	(2, 'Сервис2', 0, 0, 'kaveuibtiobalo;bea\r\nbaeroyblueivyho;ab\r\nabthbnahbkl;bhlda\r\nbdzbnurybayb\r\nbztubtdlzbnozdrn');
/*!40000 ALTER TABLE `servicelists` ENABLE KEYS */;

-- Дамп структуры для таблица Newguide.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `pl_id` int(11) unsigned DEFAULT NULL,
  `role_id` int(11) unsigned DEFAULT NULL,
  `clan` int(11) unsigned NOT NULL DEFAULT '276',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `pl_id` (`pl_id`),
  KEY `clan` (`clan`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы Newguide.users: 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `user_id`, `pl_id`, `role_id`, `clan`, `updated_at`, `created_at`, `last_login`, `email`, `name`, `password`) VALUES
	(120, NULL, NULL, NULL, 276, '2017-02-19 02:10:51', '2017-02-19 02:10:51', '2017-02-19 02:10:51', '1@mail.ru', 'test', '$2y$10$4V9xXWail7vG/5ec0HU33.PNgPt2xl8foFOvs3Z1VeYD0lFMV7GBW');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
