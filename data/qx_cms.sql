# Host: localhost  (Version: 5.5.47)
# Date: 2016-10-11 20:47:27
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_columns"
#


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
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "qx_contacts"
#

INSERT INTO `qx_contacts` VALUES (1,'四大四小sad','12312312','123123123','2133321312312312',0,0);

#
# Structure for table "qx_contents"
#

DROP TABLE IF EXISTS `qx_contents`;
CREATE TABLE `qx_contents` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_status` int(4) DEFAULT NULL,
  `file_name` varchar(200) NOT NULL,
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_files"
#


#
# Structure for table "qx_posts"
#

DROP TABLE IF EXISTS `qx_posts`;
CREATE TABLE `qx_posts` (
  `id` int(11) NOT NULL,
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
  `post_content_id` int(11) NOT NULL,
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

