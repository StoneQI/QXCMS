/*
Navicat MySQL Data Transfer

Source Server         : centos
Source Server Version : 50715
Source Host           : 192.168.10.10:3306
Source Database       : QX_cms

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-10-03 13:25:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for QX_posts
-- ----------------------------
DROP TABLE IF EXISTS `QX_posts`;
CREATE TABLE `QX_posts` (
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
  `post_tag_id` int(11) DEFAULT NULL,
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  `post_content_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `post_column_id` (`post_column_id`),
  KEY `post_tag_id` (`post_tag_id`),
  KEY `post_status` (`post_status`),
  KEY `createtime` (`createtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
