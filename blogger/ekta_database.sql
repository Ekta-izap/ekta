-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ekta
-- ------------------------------------------------------
-- Server version	5.6.30-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `logins` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,3,'aarush','The most important sentence in any article is the first one. If it doesnâ€™t induce the reader to proceed to the second sentence, your article is dead. And if the second sentence doesnâ€™t induce him to continue to the third senten'),(1,32,'ekta','hello friends welcome here.you can write your own blog here also edit and delete ur own blog easily'),(1,33,'preety','Some of them are public, others are private. You can tweak the settings in any way you like and let your thoughts take form on the page. If you’re trying'),(1,35,'fasion today','A little personality goes a long way, especially on a business blog. So donâ€™t be afraid to let loose now and again. When done tastefully (and sometimes not so tastefully), itâ€™s bound to make people take notice.'),(1,36,'culture','When someone asks you a question, you almost canâ€™t help but think of an answer. Your reader will do the same thing, and youâ€™ll immediately engage them in a conversation. Be careful though.'),(1,50,'uich','hswucil'),(1,51,'wuhc','iocihn jh'),(2,52,'outdoor living ideas','If youre looking for inspirational outdoor living products to spruce up your outdoor living space lookno further than Outdoor Living Garden'),(4,53,'jfkfk','hk,gkytuhlglu'),(2,55,'ehfgkqfq','hifnv\r\nwgovpie\r\nvk;drhiw\r\ndfqowegi'),(2,56,'RERA ','A property has to be sold based on carpet area only (selling of property based on super built up area is prohibited under RERA'),(3,57,'Nerd Boyfriend','Cute guide for boys who want to dress in Nerd/Geek Chic. It is a popular tumblr because the images are fun'),(3,58,'Espresso Deco','here are a lot of coffee blogs from enthusiasts, shop owners and home baristas. The Espresso Deco blog is a mix of content from various authors.'),(3,59,'jhfuafoaf','gyuwftbkyd'),(3,60,'KLEPT','rgpjdigvjsdnklg\"HgE'),(4,61,'jhsf','hegfujhdvjhywkufmudioy2i86hbjsdbcjsava'),(4,62,'kjfio','kyeyfchknmawyr7 6ghukehfge'),(5,63,'fwuoyqofr','wuiryfjnbfjy3 fkjgh wiuagff'),(5,64,'jlsdjfoqhag','flwyhqfyfbjawf'),(5,65,'gjwrklgjlk','fbjsbj azabwrglkwe'),(6,66,'hdgy','chSUKChbyqfwyudydHChC'),(6,67,'GHJHHJJKb','hgfgvbmnhutwrehgjhgh,hhi'),(11,68,'mfqkfb','hvdahgbkd;iwgtw/lekf;ag'),(11,69,'ioug','ghuibiuyusebvfgryfmjgut'),(10,71,'fghst','safyusayyqbfcjasvjhwqfghw'),(10,72,'jkj','jiqoifduFciwoi7rhjAJf'),(1,74,'hello','blog updated...'),(1,75,'hello world','testing editing'),(1,76,'perfect blog','this is vry important blog.'),(1,77,'first  blog','this is my first blog ever. what a busy day..'),(1,78,'fn','fdndm'),(1,79,'fn','fdndm'),(1,80,'fn','fdndm'),(1,81,'Oho','yiiybi'),(1,82,'Oho','yiiybi');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `first`
--

DROP TABLE IF EXISTS `first`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `first` (
  `id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `first`
--

LOCK TABLES `first` WRITE;
/*!40000 ALTER TABLE `first` DISABLE KEYS */;
/*!40000 ALTER TABLE `first` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `stu_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `date_of_birth` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (1,'ekta','123 medel town','9876543210','ludhiana',NULL),(2,'aarush','987 maharaj street','987526878','chandigarh','2016'),(3,'atit','8724 shine colony','9587594827','ludhiana',NULL);
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logins` (
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES ('ekta','sharma','ekta','ekta.sharma@izap.in','hello123',1),('gurpreet','kaur','preety','gurpreet.kaur@gmail.com','preetyone',2),('Sonia','Bholey','Sonia Bholey','sonia.bholey@izap.in','Wahegurug01',3),('rajdeep','sharma','raja','raj.deep11@gmail.com','welcome99',4),('aarush','sharma','aaru','aarush.cutie@gmail.com','myaarush',5),('ranjana','gupta','ranjana','ranjana_gupta@yahoo.com','iamhere',6),('priya','garg','priya','priya.garg12@hotmail.com','welcome00',7),('amika ','mehta','amika','amika.mehta@gmail.com','amikaback1',8),('tanuja','rani','tannu','tanuja.rani2@izap.in','tannu321',9),('atit','sharma','atit','atit.sharma84@gmail.com','atit.atit',10),('rahul','verma','rahul','verma.828@gmail.com','vermabest',11);
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `id` int(11) DEFAULT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `percentage` int(100) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (1,'ekta','sharma',82,'A'),(2,'gurpreet','kaur',81,'A'),(3,'neha','kaul',78,'A'),(4,'raj','kumar',65,'c'),(6,'vikas','sharma',75,'B'),(7,'aarush','sharma',75,'B'),(5,'simpy','thakur',55,'c'),(8,'simpy','thakur',101,'c'),(9,'simpy','thakur',19,'c'),(10,'radhika','sharma',70,'A');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact` int(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'ekta','123 model town',2147483647,'ludhiana'),(2,'anuradha','#234 model town',2147483647,'ludhiana'),(101,'aarush sharma','#234 model town',2147483647,'ludhiana'),(101,'aarush sharma','#234 model town',2147483647,'ludhiana'),(102,'atit sharma','',2147483647,'chandigarh'),(1,'ekta','123 model town',2147483647,'ludhiana'),(4,'','',0,''),(4,'','',0,'');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-22 14:21:34
