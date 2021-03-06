﻿# Host: localhost  (Version: 5.5.47-log)
# Date: 2016-11-05 14:58:20
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_columns"
#

INSERT INTO `qx_columns` VALUES (1,0,'首页',NULL,'',NULL,NULL,'',0,'',1,0,0),(2,1,'产品展示','','img_list','',NULL,'1',1,'',1,1476615911,1476615911),(3,1,'新闻中心','','list','',NULL,'1',2,'',1,1476616777,1476616777),(4,1,'关于我们','','SGP-aboutus','images/thumb-up.jpg',NULL,'1',7,'<p><span style=\"font-size: 24px;\">立业测试</span><span style=\"font-size: 24px;\">立业测试</span></p><p><span style=\"font-size: 24px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\"><br/></span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试</span></p><p><span style=\"font-size: 16px;\">立业测试立业测试立业测试</span></p>',1,1476617312,1476617312),(5,2,'产品1','','img_list','',NULL,'1',1,'',1,1476617425,1476617425),(6,2,'产品2','','img_list','',NULL,'1',2,'',1,1476617451,1476617503),(7,2,'产品3','','img_list','',NULL,'1',3,'',1,1476617481,1476617481),(8,3,'新闻1','','list','',NULL,'1',1,'',1,1476617537,1476617537),(9,3,'新闻2','','list','',NULL,'1',2,'',1,1476617560,1476617613),(10,3,'新闻3','','list','',NULL,'1',3,'',1,1476617591,1476617637),(11,1,'合作平台','','cooperate','',NULL,'1',4,'',1,1477025417,1477025417);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "qx_contacts"
#

INSERT INTO `qx_contacts` VALUES (2,'擦擦','长安商场','擦擦',' academic',1476607773,1477048938,1),(4,'等我等我期待','大苏打','dasdasd',' 阿迪达斯',1476607801,1477049097,1),(5,'a阿萨德','asdasdsad','asdasdsad',' asdasdsad',1476614546,1476614546,0);

#
# Structure for table "qx_contents"
#

DROP TABLE IF EXISTS `qx_contents`;
CREATE TABLE `qx_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `posts_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contents_posts_id` (`posts_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_contents"
#

INSERT INTO `qx_contents` VALUES (1,'<p>asdasdasdsad</p>',6),(2,'<p>asdasdasdsad</p>',7),(3,'<p>asdasdasdasd asdsd saas das</p><p>asdasddasd</p>',8),(4,'<p>产品描述产品描述产品描述产品描述产品描述产品描述</p>',9),(5,'<p><span style=\"font-size: 24px;\">新闻2新闻2新闻2新闻2新闻2</span></p><p><span style=\"font-size: 24px;\"><img src=\"http://img.baidu.com/hi/jx2/j_0026.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0028.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0061.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0074.gif\"/></span></p><p>新闻2新闻2新闻2新闻2</p><p>新闻2新闻2新闻2新闻2</p><p>新闻2新闻2新闻2新闻2</p><p>新闻2新闻2新闻2新闻2</p><p>新闻2新闻2新闻2新闻2</p><p>新闻2新闻2新闻2新闻2</p><p>新闻2新闻2新闻2</p><p>新闻2新闻2新闻2</p><p>新闻2新闻2新闻2</p><p>新闻2新闻2新闻2</p>',10),(6,'<p>新闻1新闻1新闻1新闻1新闻1新闻1</p><p>新闻1新闻1新闻1</p><p>新闻1新闻1新闻1新闻1</p><p><br/></p><p>新闻1新闻1新闻1新闻1</p><p>新闻1新闻1新闻1新闻1<img src=\"http://img.baidu.com/hi/jx2/j_0004.gif\"/><img src=\"http://img.baidu.com/hi/bobo/B_0016.gif\"/></p>',11),(7,'',13),(8,'',14),(9,'',15),(10,'',16),(11,'',17),(12,'',18),(13,'',19),(14,'',14),(15,'',15),(16,'',16),(17,'',17),(18,'',18),(19,'',19),(20,'',20);

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

INSERT INTO `qx_files` VALUES (1,'http://localhost:8002/upload/1477123488-NLROSW.jpg','1',1,'',1477123488,1477123488),(2,'http://localhost:8002/upload/1477124614-5XRTQO.jpg','1',1,'',1477124614,1477124614);

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
# Structure for table "qx_labor"
#

DROP TABLE IF EXISTS `qx_labor`;
CREATE TABLE `qx_labor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `age` varchar(8) NOT NULL,
  `species` varchar(50) DEFAULT NULL,
  `technician` varchar(200) NOT NULL,
  `license_number` varchar(18) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "qx_labor"
#

INSERT INTO `qx_labor` VALUES (1,'adasdsa','男','asdas','计算的话','http://localhost:8002/upload/1477123488-NLROSW.jpg','dasdasd','dasdasd','asdasdsad','达到sad',1),(2,'礼物','男','23','水泥工','sadasdas','12312322222','12312312','12312312312','312312312312312312',1),(3,'你撒大量','男','23','123123','312312312','12312312','123123123','12312312','123123123',1),(4,'我去恶趣味','男','2323','13123','12312312','3123123','12312312','123123123','123123123123123',1),(5,'123','男','123123','213123','123123123','123123123','12312312','123123123','12312312312',1),(6,'123123123','男','12312312','12312312','12312312','123123123','21312312123','312312321','312312312312312',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

#
# Data for table "qx_posts"
#

INSERT INTO `qx_posts` VALUES (6,'nihao','ada','','','','','',1,5,1,1,1476619565,1476619565,'asdasdasdas'),(7,'nihao','ada','','','','','',1,5,1,1,1476619573,1476619573,'asdasdasdas'),(8,'sadasd','asdadd','','','','asdas','',0,1,-1,2,1476619641,1476620025,''),(9,'产品描述','产品描述','','','','','',0,5,1,NULL,1476620063,1476620063,'产品描述产品描述产品描述'),(10,'新闻2','新闻2','','','','系统','原创',0,11,1,4,1476620256,1477025911,'新闻2新闻2新闻2新闻2新闻2新闻2'),(11,'新闻1','新闻1新闻1','','','','新闻1新闻1新闻1','',0,8,1,5,1476620779,1476620779,'新闻1新闻1新闻1新闻1新闻1新闻1'),(13,'行啊dad撒','','','','','','',0,1,-1,NULL,1476960548,1476960696,''),(14,'123123','','','','','','',0,1,1,31231,1477308447,1477308447,''),(15,'123123','','','','','','',0,1,1,31231,1477308450,1477308450,''),(16,'123123','','','','','','',0,1,1,31231,1477308452,1477308452,''),(17,'123123','','','','','','',0,1,1,31231,1477308455,1477308455,''),(18,'123','','','','','','',0,1,1,NULL,1477309500,1477309500,''),(19,'123','','','','','','',0,1,1,NULL,1477311151,1477311151,''),(20,'123','','','','','','',0,1,1,NULL,1477311200,1477311200,'');
