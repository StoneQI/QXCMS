/*
Navicat MySQL Data Transfer

Source Server         : centos
Source Server Version : 50715
Source Host           : 192.168.10.10:3306
Source Database       : QX_cms

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-10-03 13:25:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for QX_contents
-- ----------------------------
DROP TABLE IF EXISTS `QX_contents`;
CREATE TABLE `QX_contents` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `posts_id` int(11) NOT NULL,
  KEY `contents_posts_id` (`posts_id`) USING BTREE,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
