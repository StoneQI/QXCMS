/*
Navicat MySQL Data Transfer

Source Server         : centos
Source Server Version : 50715
Source Host           : 192.168.10.10:3306
Source Database       : QX_cms

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-10-03 13:28:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for QX_webinfo
-- ----------------------------
DROP TABLE IF EXISTS `QX_webinfo`;
CREATE TABLE `QX_webinfo` (
  `id` int(11) NOT NULL,
  `web_name` varchar(200) DEFAULT NULL,
  `web_logo` varchar(200) DEFAULT NULL,
  `record_id` varchar(255) DEFAULT NULL,
  `web_phone` varchar(255) DEFAULT NULL,
  `web_mail` varchar(255) DEFAULT NULL,
  `web_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
