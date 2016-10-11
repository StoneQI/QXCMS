/*
Navicat MySQL Data Transfer

Source Server         : centos
Source Server Version : 50715
Source Host           : 192.168.10.10:3306
Source Database       : QX_cms

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-10-03 13:25:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for QX_files
-- ----------------------------
DROP TABLE IF EXISTS `QX_files`;
CREATE TABLE `QX_files` (
  `id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_status` int(4) DEFAULT NULL,
  `file_name` varchar(200) NOT NULL,
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
