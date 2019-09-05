#
# Structure for table "message"
#

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

#
# Data for table "message"
#

/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'奥特曼','第一条','2018-04-10 10:47:50'),(2,'奥特曼','第二条','2018-04-10 10:48:00'),(3,'奥特曼','良辰美景','2018-04-10 10:48:11'),(4,'ti amo','eyunzhu.com','2018-04-10 10:49:08'),(5,'ti amo','video.eyunzhu.com','2018-04-10 10:49:23'),(6,'ti amo','games.eyunzhu.com','2018-04-10 10:49:34'),(7,'ti amo','host.eyunzhu.com','2018-04-10 10:49:42');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tx` varchar(255) DEFAULT NULL,
  `zw` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `age` tinyint(3) DEFAULT NULL,
  `bq` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'test','123','奥特曼',NULL,'成员','男',20,'编程爱好者'),(2,'20154071103','123','ti amo',NULL,'成员','男',20,'编程爱好者');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
