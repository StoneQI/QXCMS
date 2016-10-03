/*
Navicat MySQL Data Transfer

Source Server         : centos
Source Server Version : 50715
Source Host           : 192.168.10.10:3306
Source Database       : QX_cms

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-10-03 13:25:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for QX_columns
-- ----------------------------
DROP TABLE IF EXISTS `QX_columns`;
CREATE TABLE `QX_columns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `column_name` varchar(50) NOT NULL,
  `column_link` varchar(200) DEFAULT NULL,
  `column_layout` varchar(50) NOT NULL,
  `column_image` varchar(200) DEFAULT NULL,
  `column_content_id` int(11) DEFAULT NULL,
  `column_content_layout` varchar(50) NOT NULL,
  `column_sort` int(8) NOT NULL,
  `column_status` int(4) NOT NULL DEFAULT '1',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `column_pid` (`pid`) USING BTREE,
  KEY `column_sort` (`column_sort`) USING BTREE,
  KEY `createtime` (`createtime`),
  KEY `column_status` (`column_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
