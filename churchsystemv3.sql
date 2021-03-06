/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.1.30-community : Database - churchsystem
*********************************************************************
Server version : 5.1.30-community
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `churchsystem`;

USE `churchsystem`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `tblacfile` */

DROP TABLE IF EXISTS `tblacfile`;

CREATE TABLE `tblacfile` (
  `service_id` int(9) NOT NULL,
  `event_id` int(5) NOT NULL,
  `co_cont_id` int(6) NOT NULL,
  PRIMARY KEY (`service_id`,`event_id`,`co_cont_id`),
  KEY `FK_tblacfile` (`co_cont_id`),
  KEY `FK_tblacfile1` (`event_id`),
  CONSTRAINT `FK_tblacfile2` FOREIGN KEY (`service_id`) REFERENCES `tblservice` (`service_id`),
  CONSTRAINT `FK_tblacfile` FOREIGN KEY (`co_cont_id`) REFERENCES `tblcontent` (`co_cont_id`),
  CONSTRAINT `FK_tblacfile1` FOREIGN KEY (`event_id`) REFERENCES `tblevent` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblacfile` */

/*Table structure for table `tblacregister` */

DROP TABLE IF EXISTS `tblacregister`;

CREATE TABLE `tblacregister` (
  `service_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`,`member_id`),
  KEY `FK_tblacregister1` (`member_id`),
  CONSTRAINT `FK_tblacregister1` FOREIGN KEY (`member_id`) REFERENCES `tblmember` (`member_id`),
  CONSTRAINT `FK_tblacregister` FOREIGN KEY (`service_id`) REFERENCES `tblservice` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblacregister` */

insert  into `tblacregister`(`service_id`,`member_id`) values (2061,20161),(2062,20162),(2063,20163),(2064,20164),(2065,20165),(2069,20166),(2070,20175),(2071,20176),(2072,20177),(2073,20178),(2074,20179),(2075,20180),(2076,20181);

/*Table structure for table `tblcontent` */

DROP TABLE IF EXISTS `tblcontent`;

CREATE TABLE `tblcontent` (
  `co_cont_id` int(6) NOT NULL AUTO_INCREMENT,
  `co_file` varchar(200) DEFAULT NULL,
  `co_type` varchar(10) DEFAULT NULL,
  `co_caption` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblcontent` */

insert  into `tblcontent`(`co_cont_id`,`co_file`,`co_type`,`co_caption`) values (1,'','Picture',NULL),(2,'~/Administrator/uploads/Desert.jpg','Picture',NULL),(3,'','Video',NULL),(4,'','Picture',NULL);

/*Table structure for table `tblevent` */

DROP TABLE IF EXISTS `tblevent`;

CREATE TABLE `tblevent` (
  `event_id` int(5) NOT NULL AUTO_INCREMENT,
  `event_vanue` varchar(30) NOT NULL,
  `event_type` varchar(30) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_lastDay` date DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2091 DEFAULT CHARSET=latin1;

/*Data for the table `tblevent` */

insert  into `tblevent`(`event_id`,`event_vanue`,`event_type`,`event_date`,`event_lastDay`) values (2051,'soweto','ladies conferance','2017-01-02','2016-01-03'),(2052,'klipfontain','man conferance','2017-10-10','2016-01-11'),(2053,'midway','Couple\'s seminar','2016-02-05','2016-02-07'),(2054,'Saveways','Mini convention','2016-02-10','2016-02-11'),(2055,'Middleburg','Revival','2017-08-01','2016-03-15'),(2056,'Soweto','Prayer','2017-11-20','2016-03-20'),(2062,'Pretoria','Sisters quaterly meeting','2017-09-08','2016-04-09'),(2063,'Hendrina','Mothers qauterly meeting','2016-04-15','2016-04-16'),(2064,'Ogies','Fathers qaurterly meeting','2016-05-25','2016-05-26'),(2065,'Midrand','Brothers qauterly meeting','2016-05-18','2016-05-19'),(2066,'Soweto','Ladies conference','2016-06-30','2016-06-30'),(2067,'Midway','Sisters convention','2016-06-18','2016-06-18'),(2068,'Pretoria','Mothers local monthly','2016-07-28','2016-07-28'),(2069,'Hendrina','Revival','2016-07-10','2016-07-20'),(2070,'Saveways','Prayer','2016-08-27','2016-08-27'),(2071,'Ogies','Open air','2016-08-30','2016-08-30'),(2072,'Turflop','Mini Convention','2016-09-10','2016-09-11'),(2073,'Klipfontein','Men\'s Conference','2016-10-24','2016-10-24'),(2074,'Midway','Revival','2016-11-15','2016-11-30'),(2075,'Vaal','Father\'s local monthly','2016-12-05','2016-12-05'),(2076,'Middleburg','Christmas celebration','2016-12-25','2016-12-25'),(2077,'Soweto','New year celebtration','2017-01-01','2017-01-01'),(2078,'Nelspruit','Couple\'s serminar','2017-02-20','2017-02-20'),(2079,'Volksrust','Revival','2017-03-13','2017-03-20'),(2080,'White river','Prayer','2017-04-11','2017-04-11'),(2081,'Jackaroo Park','Sisters qauterly meeting','2017-05-08','2017-05-09'),(2082,'Kempton Park','Mothers qauterly meeting','2017-06-10','2017-06-11'),(2083,'Middleburg','Fathers qauterly meeting','2017-07-30','2017-07-31'),(2084,'Saveways ','Brothers qauterly meeting','2017-08-15','2017-08-16'),(2085,'Vaal','Sisters convention','2017-09-20','2017-09-21'),(2086,'Pretoria ','Ladies Conference','2017-10-18','2017-10-19'),(2087,'Hendrina','Open air','2017-11-29','2017-11-29'),(2088,'Middleburg','Christmas celebration','2017-12-25','2017-12-25'),(2089,'news cafe','chillas','2016-11-17','2016-11-17'),(2090,'ccc','ccc','2017-08-17','2017-08-31');

/*Table structure for table `tblmember` */

DROP TABLE IF EXISTS `tblmember`;

CREATE TABLE `tblmember` (
  `member_id` int(5) NOT NULL AUTO_INCREMENT,
  `rank_id` int(3) NOT NULL DEFAULT '1',
  `member_initials` varchar(5) DEFAULT NULL,
  `member_surname` varchar(20) DEFAULT NULL,
  `member_address` varchar(30) DEFAULT NULL,
  `member_phone` varchar(12) DEFAULT NULL,
  `member_email` varchar(30) DEFAULT NULL,
  `member_SAID` varchar(13) DEFAULT NULL,
  `member_username` varchar(15) DEFAULT NULL,
  `member_password` varchar(12) DEFAULT NULL,
  `member_birthdate` date DEFAULT NULL,
  PRIMARY KEY (`member_id`),
  KEY `foreign_key` (`rank_id`),
  CONSTRAINT `foreign_key` FOREIGN KEY (`rank_id`) REFERENCES `tblrank` (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20185 DEFAULT CHARSET=latin1;

/*Data for the table `tblmember` */

insert  into `tblmember`(`member_id`,`rank_id`,`member_initials`,`member_surname`,`member_address`,`member_phone`,`member_email`,`member_SAID`,`member_username`,`member_password`,`member_birthdate`) values (20161,3,'SN','Nkosi','Downtown','0845698569','nkosi@gmail.com','2147483647','nkosi1','nkosi1','1994-01-10'),(20162,1,'NW','Maluleke','Klarnet','0710064472','mpumi@gmail.com','2147483647','Maluleke1','Maluleke1','1991-05-13'),(20163,3,'NEP','Sikhosana','rynopark','0765823698','ntombi@yahoo.com','2147483647','Sikhosana1','Sikhosana1','1990-05-01'),(20164,4,'LP','Mahlalela','Tasbet','0723658965','linky@gmail.com','2147483647','mahlalela1','mahlalela1','1987-09-06'),(20165,1,'SB','Malaza','Pluma','0735698547','sizwe@gmail.com','2147483647','Malaza1','Malaza1','1993-10-10'),(20166,1,'NB','Nkambule','Middleburg','0725698563','nozi@yahoo.com','2147483647','Nkambule1','Nkambule1','1990-11-12'),(20175,2,'LJ','Sithole','waterpark','0786932635','xhyfdf@gmail.com','2147483647','Sithole1','sithole1','1988-06-30'),(20176,1,'AS','Joku','Flipia','0736985724','kshfk@gmail.com','2147483647','Joku1','Joku1','1994-01-19'),(20177,1,'KLY','tomas','virginia','0796859356','kelly1@gmail.com','2147483647','Tomas1','Tomas1','1992-03-06'),(20178,1,'SMG','Simelani','AThOME','0609865936','sandile@ymail.com','2147483647','Simelani1','Simelani1','1996-10-13'),(20179,1,'LT','phoku','Klarinet','0796435268','leeto@ymail.com','2147483647','Phoku1','Phoku1','1994-05-05'),(20180,1,'SP','Philane','Vilakazi Street','0763962563','sbusiso@ymail.com','2147483647','Philane1','Philane1','2010-09-10'),(20181,1,'LJ','Mofokeng','Lynville','0735698852','lerato@gmail.com','2147483647','Lerato1','Mofokeng1','1991-10-23'),(20182,1,'CS','Mokoena','Ninja Park','0825698521','chris@gmail.com','2147483647','Chris1','Mokoena1','1968-05-02'),(20183,1,'ND','Mahlangu','Ackerville','0711458965','dudu@gmail.com','2147483647','Dudu1','Mahlangu1','1976-12-25'),(20184,1,'AF','Masombuka','133 Aries Street Middleburg','0834550699','any@yahoo.com','890523','any123',NULL,'2016-11-07');

/*Table structure for table `tbloffering` */

DROP TABLE IF EXISTS `tbloffering`;

CREATE TABLE `tbloffering` (
  `offering_id` int(7) NOT NULL AUTO_INCREMENT,
  `type_id` int(2) NOT NULL,
  `service_id` int(9) NOT NULL,
  `offering_amount` double NOT NULL,
  PRIMARY KEY (`offering_id`),
  KEY `fk_type_id` (`type_id`),
  KEY `fk_service_id` (`service_id`),
  CONSTRAINT `FK_tbloffering` FOREIGN KEY (`type_id`) REFERENCES `tblofferingtype` (`type_id`),
  CONSTRAINT `FK_tbloffering1` FOREIGN KEY (`service_id`) REFERENCES `tblservice` (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2132 DEFAULT CHARSET=latin1;

/*Data for the table `tbloffering` */

insert  into `tbloffering`(`offering_id`,`type_id`,`service_id`,`offering_amount`) values (2091,2081,2061,420),(2092,2082,2061,8700),(2093,2083,2061,560),(2094,2084,2061,692),(2095,2085,2061,654),(2096,2081,2062,300),(2097,2082,2062,400),(2098,2083,2062,500),(2099,2084,2062,500),(2100,2085,2062,2000),(2101,2081,2063,800),(2102,2082,2063,5000),(2103,2083,2063,200),(2104,2084,2063,300),(2105,2085,2063,300),(2106,2081,2064,150),(2107,2082,2064,20),(2108,2083,2064,30),(2109,2084,2064,100),(2110,2085,2064,200),(2111,2081,2065,300),(2112,2082,2065,600),(2113,2083,2065,369),(2114,2084,2065,900),(2115,2085,2065,639),(2116,2081,2069,2000),(2117,2082,2069,10000),(2118,2083,2069,360),(2119,2084,2069,300),(2120,2085,2069,660),(2121,2081,2070,2500),(2122,2082,2070,3000),(2123,2083,2070,600),(2124,2084,2070,10000),(2125,2085,2070,820),(2126,2081,2071,300),(2127,2082,2071,320),(2128,2083,2071,200),(2129,2084,2071,3000),(2130,2084,2101,2000),(2131,2083,2101,500);

/*Table structure for table `tblofferingtype` */

DROP TABLE IF EXISTS `tblofferingtype`;

CREATE TABLE `tblofferingtype` (
  `type_id` int(2) NOT NULL AUTO_INCREMENT,
  `type_description` varchar(30) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2086 DEFAULT CHARSET=latin1;

/*Data for the table `tblofferingtype` */

insert  into `tblofferingtype`(`type_id`,`type_description`) values (2081,'Freewill'),(2082,'Tithes'),(2083,'Sunday School'),(2084,'Building fund'),(2085,'instrument');

/*Table structure for table `tblrank` */

DROP TABLE IF EXISTS `tblrank`;

CREATE TABLE `tblrank` (
  `rank_id` int(5) NOT NULL AUTO_INCREMENT,
  `rank_description` varchar(30) NOT NULL,
  `rank_responsibility` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tblrank` */

insert  into `tblrank`(`rank_id`,`rank_description`,`rank_responsibility`) values (1,'member','attend church'),(2,'Pastor','preach'),(3,'Administrator','general management'),(4,'Treasurer','Responsible for offering');

/*Table structure for table `tblrequest` */

DROP TABLE IF EXISTS `tblrequest`;

CREATE TABLE `tblrequest` (
  `req_id` int(5) NOT NULL AUTO_INCREMENT,
  `member_id` int(5) NOT NULL,
  `req_date` date DEFAULT NULL,
  `req_subject` varchar(30) NOT NULL,
  `req_description` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`req_id`),
  KEY `fk_member_id` (`member_id`),
  CONSTRAINT `fk_member_id` FOREIGN KEY (`member_id`) REFERENCES `tblmember` (`member_id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12366 DEFAULT CHARSET=latin1;

/*Data for the table `tblrequest` */

insert  into `tblrequest`(`req_id`,`member_id`,`req_date`,`req_subject`,`req_description`) values (12345,20161,'2016-09-20','Prayer','child is sick'),(12346,20162,'2016-02-20','Wedding','Member getting married'),(12347,20163,'2016-06-18','Prayer','member is sick'),(12352,20164,'2016-04-11','Birthday party','member\'s birthday'),(12353,20165,'2016-06-18','Funeral','Member passed on'),(12354,20166,'2016-09-01','Funeral','Member\'s relative passed on'),(12357,20163,'2016-08-12','Wedding','Member is getting married'),(12358,20161,'2016-11-01','Prayer','Member sick'),(12359,20162,'2016-11-06','Birthday party','Members birthday'),(12360,20163,'2016-11-13','Prayer','Member is preparing for final evaluation'),(12361,20164,'2016-11-18','Wedding','Member is getting married'),(12362,20165,'2016-11-25','Anniversary','Member\'s 10th year anniversary'),(12363,20162,'2016-12-01','Birthday party','Pastors birthday'),(12364,20166,'2016-12-10','Funeral','Member passed on'),(12365,20163,'2016-12-16','Anniversary','Member\'s 1st year anniversary');

/*Table structure for table `tblsermon` */

DROP TABLE IF EXISTS `tblsermon`;

CREATE TABLE `tblsermon` (
  `sermon_id` int(3) NOT NULL AUTO_INCREMENT,
  `sermon_title` varchar(30) NOT NULL,
  PRIMARY KEY (`sermon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

/*Data for the table `tblsermon` */

insert  into `tblsermon`(`sermon_id`,`sermon_title`) values (100,'back to the cross'),(101,'baptism'),(102,'love'),(103,'anger'),(104,'the art of giving'),(111,'2Pass Over'),(112,'salvation'),(113,'back to god'),(114,'deval fallen'),(115,'god never fails'),(116,'Fall of man'),(117,'Repentance'),(118,'Tithes'),(119,'god'),(120,'Good Friday');

/*Table structure for table `tblservice` */

DROP TABLE IF EXISTS `tblservice`;

CREATE TABLE `tblservice` (
  `service_id` int(9) NOT NULL AUTO_INCREMENT,
  `sermon_id` int(3) DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `service_time` time DEFAULT NULL,
  PRIMARY KEY (`service_id`),
  KEY `fk_sermon_id` (`sermon_id`),
  CONSTRAINT `fk_sermon_id` FOREIGN KEY (`sermon_id`) REFERENCES `tblsermon` (`sermon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2102 DEFAULT CHARSET=latin1;

/*Data for the table `tblservice` */

insert  into `tblservice`(`service_id`,`sermon_id`,`service_date`,`service_time`) values (1,112,'2017-08-03','10:00:00'),(2061,100,'2016-02-07','10:00:00'),(2062,100,'2016-02-14','10:00:00'),(2063,100,'2016-02-21','10:00:00'),(2064,101,'2016-02-28','10:00:00'),(2065,101,'2016-03-06','10:00:00'),(2069,101,'2016-03-13','10:00:00'),(2070,102,'2016-03-20','10:00:00'),(2071,102,'2016-03-27','10:00:00'),(2072,102,'2016-04-03','10:00:00'),(2073,103,'2016-04-10','10:00:00'),(2074,103,'2016-04-17','10:00:00'),(2075,103,'2017-09-24','10:00:00'),(2076,104,'2017-05-01','10:00:00'),(2085,104,'2017-11-08','10:00:00'),(2086,111,'2017-08-15','10:00:00'),(2087,111,'2017-11-22','10:00:00'),(2088,111,'2017-10-29','10:00:00'),(2089,112,'2017-12-05','10:00:00'),(2090,112,'2017-09-12','10:00:00'),(2091,112,'2016-06-19','10:00:00'),(2092,112,'2016-06-26','10:00:00'),(2093,113,'2016-07-03','10:00:00'),(2094,113,'2016-07-10','10:00:00'),(2095,113,'2016-07-17','10:00:00'),(2096,113,'2016-07-25','10:00:00'),(2098,119,'2016-11-17','10:00:00'),(2099,102,'2016-11-24','08:00:00'),(2100,120,'2016-11-30','10:00:00'),(2101,120,'2016-11-26','18:00:00');

/* Procedure structure for procedure `AddServiceSermon` */

/*!50003 DROP PROCEDURE IF EXISTS  `AddServiceSermon` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AddServiceSermon`(
 in sdate date, 
 in stime time, 
 in sermonTitle varchar(20))
BEGIN
 insert into tblsermon(sermon_Title)
 values(sermonTitle) ;
 insert into tblservice (sermon_id,service_date,service_time) 
 values(last_insert_id(),sdate,stime);
 END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_deleteMember` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_deleteMember` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_deleteMember`(IN mem_id INT(9))
BEGIN
 DELETE FROM tblrequest
 WHERE member_id = mem_id;
 DELETE FROM tblmember 
 WHERE member_id = mem_id;	
 END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_makeRequest` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_makeRequest` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_makeRequest`(
 INOUT mem_id int(5),
 IN rDate date,
 IN rSub varchar(20),
 IN rDesc varchar(20),
 in rUser varchar(20))
BEGIN
 select member_id 
 into mem_id
 from tblmember
 WHERE tblmember.member_id= rUser;
 INSERT INTO tblrequest(member_id,req_date,req_subject,req_description)
 VALUES(mem_id,rdate,rsub,rdesc);
 END */$$
DELIMITER ;

/* Procedure structure for procedure `sq_upload` */

/*!50003 DROP PROCEDURE IF EXISTS  `sq_upload` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sq_upload`(IN photo VARCHAR(200),
 IN eVan VARCHAR(30),
 IN etype VARCHAR(30),
 IN eDate DATE,
 IN edur DATE)
BEGIN
 DECLARE num INT(5);
 INSERT INTO tblevent(event_vanue,event_type,event_date,event_lastDay)
 VALUES (eVan,etype,DATE(edate),DATE(edur));
 SELECT MAX(event_id)
 INTO num
 FROM tblevent;
 INSERT INTO tblcontent(co_file)
 VALUES	(photo);
 INSERT INTO tblacfile
 Values('1',num,last_insert_id());
 END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
