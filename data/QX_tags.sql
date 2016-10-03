/*
Navicat MySQL Data Transfer

Source Server         : centos
Source Server Version : 50715
Source Host           : 192.168.10.10:3306
Source Database       : QX_cms

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-10-03 13:25:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for QX_tags
-- ----------------------------
DROP TABLE IF EXISTS `QX_tags`;
CREATE TABLE `QX_tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(50) NOT NULL,
  `tag_image` varchar(200) DEFAULT NULL,
  `tag_num` int(8) NOT NULL,
  `tag_status` int(4) DEFAULT NULL,
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
