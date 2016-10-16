# Host: localhost  (Version: 5.5.47)
# Date: 2016-10-16 17:00:41
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "qx_backend_user"
#

DROP TABLE IF EXISTS `qx_backend_user`;
CREATE TABLE `qx_backend_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "qx_backend_user"
#

INSERT INTO `qx_backend_user` VALUES (1,'admin','LPxZC-5Nr46PYAqaUfyyonh_Pkhz6KeF','$2y$13$yWrB44ImlxsiSZxJ7Vc5SeDYPBed90EUaLhovatZegcMMVLQ8L2U.',NULL,'admin@163.com',10,1476601152,1476601152);

#
# Structure for table "qx_columns"
#

DROP TABLE IF EXISTS `qx_columns`;
CREATE TABLE `qx_columns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `column_name` varchar(50) NOT NULL,
  `column_link` varchar(200) DEFAULT NULL,
  `column_layout` varchar(50) NOT NULL,
  `column_image` varchar(200) DEFAULT NULL,
  `column_content_id` int(11) DEFAULT NULL,
  `column_content_layout` varchar(50) NOT NULL,
  `column_sort` int(8) NOT NULL,
  `column_content` longtext NOT NULL,
  `column_status` int(4) NOT NULL DEFAULT '1',
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `column_pid` (`pid`) USING BTREE,
  KEY `column_sort` (`column_sort`) USING BTREE,
  KEY `created_at` (`created_at`),
  KEY `column_status` (`column_status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_columns"
#

INSERT INTO `qx_columns` VALUES (1,0,'首页',NULL,'',NULL,NULL,'',0,'',1,0,0);

#
# Structure for table "qx_contacts"
#

DROP TABLE IF EXISTS `qx_contacts`;
CREATE TABLE `qx_contacts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `address` varchar(255) DEFAULT '',
  `content` text NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `status` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "qx_contacts"
#

INSERT INTO `qx_contacts` VALUES (1,'你好','sadasd','asdasdsad',' 阿大苏打',1476604708,1476607122,1),(2,'擦擦','长安商场','擦擦',' academic',1476607773,1476607773,0),(3,'dadas','dadasasdasd','dadasasdasdasdasd',' dadasasdasdasdasddasdasdsa',1476607791,1476607840,1),(4,'等我等我期待','大苏打','dasdasd',' 阿迪达斯',1476607801,1476607801,0);

#
# Structure for table "qx_contents"
#

DROP TABLE IF EXISTS `qx_contents`;
CREATE TABLE `qx_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `posts_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contents_posts_id` (`posts_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_contents"
#


#
# Structure for table "qx_files"
#

DROP TABLE IF EXISTS `qx_files`;
CREATE TABLE `qx_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_status` int(4) DEFAULT NULL,
  `file_name` varchar(200) NOT NULL,
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_files"
#

INSERT INTO `qx_files` VALUES (1,'upload/php.php','1',NULL,'',1476243536,1476243536),(2,'upload/GitHubLog.txt','1',NULL,'',1476243607,1476243607);

#
# Structure for table "qx_frontend_user"
#

DROP TABLE IF EXISTS `qx_frontend_user`;
CREATE TABLE `qx_frontend_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "qx_frontend_user"
#


#
# Structure for table "qx_migration"
#

DROP TABLE IF EXISTS `qx_migration`;
CREATE TABLE `qx_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "qx_migration"
#

/*!40000 ALTER TABLE `qx_migration` DISABLE KEYS */;
INSERT INTO `qx_migration` VALUES ('m000000_000000_base',1476600294),('m130524_201442_init',1476600297);
/*!40000 ALTER TABLE `qx_migration` ENABLE KEYS */;

#
# Structure for table "qx_posts"
#

DROP TABLE IF EXISTS `qx_posts`;
CREATE TABLE `qx_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_tiltle` varchar(255) NOT NULL,
  `post_subtitle` varchar(255) DEFAULT NULL,
  `post_image` varchar(200) DEFAULT NULL,
  `post_video` varchar(200) DEFAULT NULL,
  `post_link` varchar(200) DEFAULT NULL,
  `post_anthor` varchar(50) DEFAULT NULL,
  `post_origin` varchar(100) DEFAULT NULL,
  `post_is_top` int(4) DEFAULT NULL,
  `post_column_id` int(11) NOT NULL,
  `post_status` int(4) NOT NULL,
  `post_sort` int(11) DEFAULT NULL,
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL,
  `post_summarize` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `post_column_id` (`post_column_id`),
  KEY `post_sort` (`post_sort`),
  KEY `post_status` (`post_status`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_posts"
#

