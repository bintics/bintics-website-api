-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: bintics_web
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Dumping data for table `course_locations`
--

LOCK TABLES `course_locations` WRITE;
/*!40000 ALTER TABLE `course_locations` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,'Spring Framework','2016-05-18 14:30:00',0,'https://spring.io/img/spring-by-pivotal.png','En el curso de Spring Framework aprenderas algunas de las técnicas más utilizadas al desarrollar aplicaciones empresariales, y lo mejor de todo, es totalmente gratuito.',1,'2016-05-02 19:28:40','2016-06-01 15:55:56'),(2,2,'Desarrollo de aplicaciones Android','2016-05-10 00:00:00',0,'https://www.webcrayons.biz/images/androiddev.png','Se dio de alta ese curso para prueba de consepto',1,'2016-05-30 16:00:14','2016-09-09 02:26:01'),(3,2,'Struts 2','2016-05-31 15:30:00',0,'http://appfuse.org/download/attachments/36/struts2-logo.png?version=1&modificationDate=1168497162000&api=v2','Aprenderás a utilizar uno de los Frameworks pioneros en el patrón de diseño MVC, con esta nueva versión aprenderás las técnicas mas recientes que a incluido dicho Framework.',1,'2016-05-30 18:51:31','2016-06-01 16:12:14');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `format_courses`
--

LOCK TABLES `format_courses` WRITE;
/*!40000 ALTER TABLE `format_courses` DISABLE KEYS */;
INSERT INTO `format_courses` VALUES (1,'En linea','2016-04-25 15:48:42','2016-04-25 15:48:42'),(2,'Presencial ','2016-04-25 15:48:48','2016-04-25 15:48:48'),(3,'Sin formato','2016-04-27 22:20:32','2016-04-27 22:20:32');
/*!40000 ALTER TABLE `format_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `types_currencies`
--

LOCK TABLES `types_currencies` WRITE;
/*!40000 ALTER TABLE `types_currencies` DISABLE KEYS */;
INSERT INTO `types_currencies` VALUES (1,'MXN','2016-09-09 06:21:09','2016-09-09 06:23:38'),(2,'USD','2016-09-09 06:23:43','2016-09-09 06:23:43'),(3,'EUR','2016-09-09 06:23:49','2016-09-09 06:23:49');
/*!40000 ALTER TABLE `types_currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','$2y$10$dsa9ox5SYVHiogH70gYqTOgVATgsMZOobQDS6kT86gOGiFNP7HBxi','72wsaCKQKipgqnw38YVGXXMJQdo6Saa8CuYhtDMRK8gQsYtPtKPFuhZ9fuIF',NULL,0,0,'2016-04-25 15:48:20','2016-09-09 02:26:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users_profiles`
--

LOCK TABLES `users_profiles` WRITE;
/*!40000 ALTER TABLE `users_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users_records_courses`
--

LOCK TABLES `users_records_courses` WRITE;
/*!40000 ALTER TABLE `users_records_courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_records_courses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-09  1:31:46
