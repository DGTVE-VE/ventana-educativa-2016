-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: redmesoamericana
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_archivo` varchar(150) DEFAULT NULL,
  `activo` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'c:\\pruebasBanner1',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'c:\\pruebaBanner2',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'c:\\pruebaBanner3',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colaboradores`
--

DROP TABLE IF EXISTS `colaboradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_foto` varchar(100) NOT NULL,
  `resena` varchar(250) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `colabora` varchar(50) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `dependencia` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaboradores`
--

LOCK TABLES `colaboradores` WRITE;
/*!40000 ALTER TABLE `colaboradores` DISABLE KEYS */;
INSERT INTO `colaboradores` VALUES (1,'imagenes/red/integrantes/fotos/costarica/AlejandraSanchez.png','Ingeniera en Informática. Labora para la CECC/SICA como Encargada de Tecnología y Comunicación. Actualmente cursa la Licenciatura en Ingeniería Informática con énfasis en Administración de Proyectos.','Costa Rica','','Alejandra Sánchez Flores','Encargada de Tecnología y Comunicación','Coordinación Educativa y Cultural  Centroamericana CECC/SICA','','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'imagenes/red/integrantes/fotos/costarica/AnaGuilma.png','Licenciada en Ciencias de la Educación con énfasis en Docencia para ejercer la Enseñanza del Castellano y la Literatura. Labora en el área educativa desde hace 13 años. Ha sido Profesora de Español en diferentes centros educativos. Actualmente, es As','Costa Rica','','Ana Gilma Guevara Bello','Asesora Regional de Español','Dirección Regional de Educación Zona Norte Norte','Ministerio de Educación Pública de Costa Rica','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'imagenes/red/integrantes/fotos/costarica/AnnyGonzalez.png','Máster en Informática Educativa y Administración Educativa, Posgrado en Desarrollo Cognitivo en Ambientes Informáticos. Ha laborado en el área educativa como docente de Educación Primaria, Asesora Nacional y Jefatura del Ministerio de Educación de Co','Costa Rica','','Anny González Gairaud','Coordinadora de Proyectos','Coordinación Educativa y Cultural Centroamericana (CECC/SICA)','','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'imagenes/red/integrantes/fotos/costarica/ElizabethFigueroa.png','Licenciada en Ciencias de la Educación con Énfasis en la Enseñanza de la Matemática. Maestría en Administración Educativa y en Educación. Labora en el Ministerio de Educación Pública desde el 2001 y en la Dirección de Desarrollo Curricular desde 2012','Costa Rica','','Elizabeth Figueroa Fallas','Asesora Nacional de Matemática, Departamento de Primero y Segundo Ciclos','Ministerio de Educación Pública de Costa Rica','Dirección de Desarrollo Curricular','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'imagenes/red/integrantes/fotos/costarica/LiliamCorrales.png','Licenciada en educación con énfasis en I y II ciclos.  Licenciada en docencia.  Licenciada en educación con énfasis en Español.  Máster en administración educativa. Ha laborado en el sistema educativo público desde el año 2002; desempeñando el puesto','Costa Rica','','Lilliam Corrales Torres','Asesora Pedagógica de Español','Ministerio de Educación Pública - Costa Rica','Dirección Regional Educativa Coto','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'imagenes/red/integrantes/fotos/costarica/RandallCastro.png','Licenciado en Docencia con énfasis en Español, Bachiller en Castellano y Literatura y Bachiller en La Enseñanza de la Educación Primaria con énfasis en Español. Posee estudios básicos en informática y administración educativa. Labora desde hace 15 añ','Costa Rica','','Rándall Castro Madrigal','Asesor Regional de Español ','Ministerio de Educación Pública (MEP)','','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'imagenes/red/integrantes/fotos/guatemala/CarlotaCalito.png','Licenciada en Pedagogía con orientación en Administración y Evaluación Educativa.  Labora en el área educativa desde hace 35 años.  Ha sido docente y bibliotecaria. Participó en el proceso de Transformación Curricular en el Marco de la Reforma Educat','Guatemala','','Carlota Calito de Alfaro','Profesional Técnico','Dirección General de Gestión de Calidad Educativa','Ministerio de Educación de Guatemala','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'imagenes/red/integrantes/fotos/mexico/RubenEdel.png','Investigador del Consejo Nacional de Ciencia y Tecnología (CONACyT) de México durante los últimos 12 años. Desde 2007 forma parte del Comité de Asesores de la Abraham S. Fischler College of Education de la Nova Southeastern University de la Florida, ','México','','Rubén Edel Navarro','Investigador de tiempo completo','','Universidad Veracruzana.','0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'imagenes/red/integrantes/fotos/panama/IbzkaRodríguez.png','Licenciada y Profesora en Matemáticas. Maestría en Ciencias con  Especialización en Matemática Educativa y  Maestría en Desarrollo de Sistemas Educativos con Especialización en Supervisión y Currículum. Con más de 35 años al servicio de la Educación ','Panamá','','Gibzka Rodríguez de Vernier','Supervisora Nacional de Matemáticas','Ministerio de Educación de Panamá','','0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'imagenes/red/integrantes/fotos/republicadominicana/EuniceImperio.png','Licenciada en Educación mención Filosofía y Letras. Labora en el ámbito educativo desde hace 35 años. Ha obtenido grados de: maestría en Lingüística aplicada a la enseñanza del Español;  maestría en Formación Inicial para el Cambio en la Práctica Ped','República Dominicana','','Eunice Imperio Vicioso Melo','Coordinadora de la cátedra de Letras Básicas en la Universidad Autónoma de Santo Domingo.','Recinto Félix Evaristo Mejía','Instituto Superior de Formación Docente Salomé Ureña','0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'imagenes/red/integrantes/fotos/republicadominicana/RafaelDavidFranciscoVentura.png','Licenciado en Ciencias Física y Matemática en la Universidad O & M de Santo Domingo, con maestría en matemática pura en la universidad Tecnológica de Santiago UTESA y maestría en Formador de Formadores de la universidad de Barcelona España. Profesor ','República Dominicana','','Rafael David Francisco Ventura, M. A.','Profesor de Matemática','','Instituto Superior de Formación Docente Salome Ureña (ISFODOSU) Santo Domingo R. D.','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `colaboradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_contacto` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `mensaje` varchar(250) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (7,'Sonia Martinez','soniamartinezctr@gma','Prueba','Prueba','2016-02-26 20:15:48','2016-02-26 20:15:48'),(8,'Jony','renecrapaud@gmail.com','Prueba de contacto','Saludis','2016-03-01 19:57:36','2016-03-01 19:57:36');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_02_02_220538_pruebas',1),('2016_02_02_231116_colaboradores',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(80) DEFAULT NULL,
  `validado` tinyint(1) DEFAULT '0',
  `hash` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'j.israel@gmail.com',1,'8e05f4ece694d53d453c89e2d5842bff','2016-02-24 17:31:37','2016-02-23 17:40:04'),(2,'j.israel@gmail.com',0,'84818d5515c5fd945d6888358ffb52af','2016-02-23 18:28:19','2016-02-23 18:28:19'),(3,'sonia@gmail.com',0,'d56b568b5a0ea667016d0d9aea25abba','2016-02-23 21:11:28','2016-02-23 21:11:28'),(4,'kuis@gmail.com',0,'934da29b264c57a1c7196102413c35ae','2016-02-23 21:20:38','2016-02-23 21:20:38'),(5,'1401d0624f98bc2df3c0e955ef31b6db',0,'1401d0624f98bc2df3c0e955ef31b6db','2016-02-23 21:29:38','2016-02-23 21:29:38'),(6,'7516a05b680c3c642a200a33d838cf51',0,'7516a05b680c3c642a200a33d838cf51','2016-02-23 21:45:14','2016-02-23 21:45:14'),(7,'d1e232c768ed658c48790aa7e1529327',0,'d1e232c768ed658c48790aa7e1529327','2016-02-23 21:46:25','2016-02-23 21:46:25'),(8,'839f26b1042f5378846e758aa1653a84',0,'839f26b1042f5378846e758aa1653a84','2016-02-23 21:48:56','2016-02-23 21:48:56'),(9,'3f09802f8cb3a1dddda96f5208560bbf',0,'3f09802f8cb3a1dddda96f5208560bbf','2016-02-23 21:51:28','2016-02-23 21:51:28'),(10,'ebc704b647e66d698f4594ce58cd4f4b',0,'ebc704b647e66d698f4594ce58cd4f4b','2016-02-23 22:18:22','2016-02-23 22:18:22'),(11,'j.israel.toledo@gmail.com',1,'4812051a25f63b4e86ce2ef15ae2fe66','2016-02-29 19:59:23','2016-02-29 19:59:09'),(12,'soniamartinezctr@gmail.com',1,'81e15866a931984a7a4b2e30b2d19dab','2016-03-01 18:31:37','2016-03-01 18:31:15'),(13,'soniamartinezctr@gmail.com',0,'26e51099caa4cc999a6186014560601b','2016-03-01 18:42:15','2016-03-01 18:42:15'),(14,'soniamartinezctr@gmail.com',0,'e01a9a3a22424d9f8ad8d004ef763219','2016-03-01 18:55:11','2016-03-01 18:55:11'),(15,'soniamartinezctr@gmail.com',0,'28178744a1a6420021f963ec588ec4ed','2016-03-01 19:33:28','2016-03-01 19:33:28'),(16,'amedina001@yahoo.com.mx',1,'e31ee7a60feda1b3c44dc3e72b312a15','2016-03-01 19:54:26','2016-03-01 19:34:46'),(17,'renehard@gmail.com',0,'d23191919ac6c2f89d67daec18189b77','2016-03-01 19:52:45','2016-03-01 19:52:45'),(18,'renecrapaud@gmail.com',1,'e8100f4e2dd7a5eb3fcb4fbf07f6b79e','2016-03-01 19:54:57','2016-03-01 19:54:23'),(19,'lpmurillotovar@gmail.com',1,'02fdb3bbce3d5bedd813a7a12db8dbf8','2016-03-01 20:18:29','2016-03-01 20:14:16'),(20,'alejandra.sanchez.flores@gmail.com',1,'6519ce816ba7c242760fe4def2a42d88','2016-03-01 21:26:11','2016-03-01 21:21:05'),(21,'j.israel.toledo@gmail.com',0,'af08207738fba81efbcac11ca6293dff','2016-03-01 21:25:35','2016-03-01 21:25:35'),(22,'info.taj@televisioneducativa.gob.mx',1,'165c972a6078909701b26da6bb08f048','2016-03-01 21:31:01','2016-03-01 21:30:52'),(23,'gerardo.tve@gmail.com',1,'0e50987aa19fefb8c81f5156747686fb','2016-03-02 15:49:46','2016-03-02 15:49:23'),(24,'anny.gonzalez.ceccsica@gmail.com',1,'3801237db81f48e0f0f84cde3d21408f','2016-03-02 19:14:48','2016-03-02 16:04:47'),(25,'osebastian.garza@hotmail.com',0,'3078421d45a9d432f41065c0160cc5ab','2016-03-03 19:09:58','2016-03-03 19:09:58'),(26,'joandhdz08@gmail.com',1,'68d398a4c8ec8d52843da864014b16f7','2016-03-04 17:08:46','2016-03-04 17:08:11'),(27,'luis.lach@somece.org.mx',1,'3f0227ea23b8aa17964fdb5694ad2e4c','2016-03-04 19:06:52','2016-03-04 18:22:48'),(28,'baby_chris2@hotmail.com',0,'c108501e114e5f692d93ff846f77dee3','2016-03-04 18:23:35','2016-03-04 18:23:35'),(29,'machayogf@hotmail.com',0,'48950aa7c6f65dbae811ba7d7c7a6e4c','2016-03-04 18:23:48','2016-03-04 18:23:48'),(30,'joanilich@hotmail.com',0,'37a008133fd4785f6da4e5e500db995e','2016-03-04 18:24:00','2016-03-04 18:24:00'),(31,'francismahe@hotmail.com',0,'aca638f231814bfc88d2eb854a3968ff','2016-03-04 18:24:10','2016-03-04 18:24:10'),(32,'karencian@hotmail.com',0,'d931ec2c54f1ec56c2dfa08758ee4844','2016-03-04 18:24:21','2016-03-04 18:24:21'),(33,'byolostl728@hotmail.com',0,'b581f9f689865f3732e032b2246042d7','2016-03-04 18:24:36','2016-03-04 18:24:36'),(34,'ittsspy@gmail.com',1,'6e4afc97e49c327042d99716dc35a283','2016-03-05 07:47:39','2016-03-04 18:24:48'),(35,'lumihoy@gmail.com',1,'c98909ed127221d9e5045cb99d892623','2016-03-08 23:49:35','2016-03-04 18:25:05'),(36,'ticydiscapacidad@hotmail.com',1,'b0528371d13850e92eb06c2cf7315412','2016-03-04 19:32:06','2016-03-04 18:25:26'),(37,'horaciofloresgomez@hotmail.com',0,'c0d2f63d4ba469c156f4e413f413be08','2016-03-04 18:25:38','2016-03-04 18:25:38'),(38,'emmaldonado9@gmail.com',1,'bd46e0cd18402dc3ad8fe4577743d14f','2016-03-04 21:28:37','2016-03-04 18:25:52'),(39,'candelariamorales7@gmail.com',1,'deb24873ff10ca159c1a76f3b8b86fc9','2016-03-04 22:46:52','2016-03-04 18:26:06'),(40,'gagibes@hotmail.com',0,'9822f535d66a36b140caa3b2233b79f1','2016-03-04 18:26:22','2016-03-04 18:26:22'),(41,'fuentes_hernandez@hotmail.com',0,'a88e20f1a998cbe71928b1ccc9e30e5f','2016-03-04 18:26:45','2016-03-04 18:26:45'),(42,'darklois20@gmail.com',0,'6c64cdb4e2970e7fa5c5a7c286356081','2016-03-04 18:26:55','2016-03-04 18:26:55'),(43,'gtyanez@telmex.com',0,'ed310cc667e0b1640b9b655ccf791e65','2016-03-04 18:27:08','2016-03-04 18:27:08'),(44,'guuery@gmail.com',0,'cf6866def470c265c015f785b4d447b7','2016-03-04 18:27:31','2016-03-04 18:27:31'),(45,'equimaril7@hotmail.com',0,'a94ad732ce167c8f34d45bfe3d17f955','2016-03-04 18:27:44','2016-03-04 18:27:44'),(46,'susanamadariagarioos@gmail.com',0,'cebf5b0ab39a67846a65a162267d6eb1','2016-03-04 18:31:06','2016-03-04 18:31:06'),(47,'andaira1974@gmail.com',0,'664967f07ee62abff2af596afd23002f','2016-03-04 18:31:22','2016-03-04 18:31:22'),(48,'patysanrosm@gmail.com',0,'a4ba6af339d5980b58d191d0c5f840a4','2016-03-04 18:31:36','2016-03-04 18:31:36'),(49,'rlcolin0401@hotmail.com',1,'9c6567ffe2f3277d2782e1e294819bf6','2016-03-14 14:36:44','2016-03-04 18:31:53'),(50,'elena.garcia@telmexeducacion.com',0,'615104a61cd4e15fe416ad0e63f6b430','2016-03-04 18:32:04','2016-03-04 18:32:04'),(51,'berrioszabale@yahoo.com.mx',0,'3d66d0b5297129252c9477f49786f602','2016-03-04 18:32:16','2016-03-04 18:32:16'),(52,'mar_1966@yahoo.com.mx',0,'704bdd02308826902d57eae622d9070c','2016-03-04 18:32:30','2016-03-04 18:32:30'),(53,'edithabz_00@hotmail.com',0,'b383002fabde72d0cddff9835d027c68','2016-03-04 18:32:39','2016-03-04 18:32:39'),(54,'imazona24@gmail.com',0,'f6b7104dd4f9d564235499517639ec51','2016-03-04 18:32:58','2016-03-04 18:32:58'),(55,'susa-na02@hotmail.com',0,'a55c44dbdf2c94cbfcc953a2a3d0c630','2016-03-04 18:33:12','2016-03-04 18:33:12'),(56,'alepereyra4@hotmail.com',1,'834acd792529353e61c3fd2dce2af4f7','2016-03-18 04:37:04','2016-03-04 18:33:25'),(57,'dany_12@yahoo.com',0,'030e32b8610b2a0ffe4b291950c0393e','2016-03-04 18:33:37','2016-03-04 18:33:37'),(58,'e_ventura@hotmail.com',1,'900153563c67c810abced323ac1b792a','2016-03-04 18:39:09','2016-03-04 18:33:48'),(59,'itcry@hotmail.com',0,'141812f3506e8e288fa50e955893930d','2016-03-04 18:34:04','2016-03-04 18:34:04'),(60,'anel_ama@hotmail.com',0,'8f4d1a293df2df2c49bf8cb6425393b7','2016-03-04 18:34:25','2016-03-04 18:34:25'),(61,'gaby.cj0612@outlook.com',0,'06a6d6f2e77893871b35eb5d42b272fb','2016-03-04 18:34:45','2016-03-04 18:34:45'),(62,'belenabigail@hotmail.com',0,'78375b6656fbd9470223f8ba6813570c','2016-03-04 18:34:56','2016-03-04 18:34:56'),(63,'macchazc@yahoo.com.mx',0,'9325cd64e974e06fe9669b450b42ab07','2016-03-04 18:35:06','2016-03-04 18:35:06'),(64,'gabcervantes0711@gmail.com',0,'9e35055f84207a26298170984157fe75','2016-03-04 18:35:16','2016-03-04 18:35:16'),(65,'majuvago@yahoo.com.mx',0,'1c38485d1e833cf49cee16321889cd91','2016-03-04 18:35:26','2016-03-04 18:35:26'),(66,'profe.alberto.c3@gmail.com',0,'3fa6b172cbbae5b07e7ef54f0b658554','2016-03-04 18:35:37','2016-03-04 18:35:37'),(67,'arturo.mcfly@hotmail.com',0,'c9ddaf12bc4d990a1b6faa744d0cc8d7','2016-03-04 18:35:47','2016-03-04 18:35:47'),(68,'sergioad.palma@gmail.com',0,'4110ccf31ada7bdf2e83f137d880040c','2016-03-04 18:36:05','2016-03-04 18:36:05'),(69,'claurquieta@gmail.com',1,'8400b1061863bf3aba2e43078f7740ab','2016-03-05 02:36:32','2016-03-04 18:36:34'),(70,'anamariasilvacasarin@yahoo.com.mx',0,'da034d39ef09a8ba547de0e88fe2b054','2016-03-04 18:36:46','2016-03-04 18:36:46'),(71,'arlette09010@hotmail.com',0,'80dd5c430f9a21c66f09b9e5a5ffc11b','2016-03-04 18:37:04','2016-03-04 18:37:04'),(72,'itzelmf11@hotmail.com',1,'edc39350886e986ce131587970b0729f','2016-03-04 23:10:59','2016-03-04 18:37:20'),(73,'musicalbatita@hotmail.com',1,'9d13863c4c03a0f1b324842f9e7e685f','2016-03-06 19:22:17','2016-03-04 18:37:41'),(74,'aglandi2003tqm@gmail.com',0,'54bfffdd2d2a2b382cc340f8a13ed491','2016-03-04 18:37:50','2016-03-04 18:37:50'),(75,'lidia.suarezm@gmail.com',0,'8e905165bff63e8d1047d7209f0d7b25','2016-03-04 18:37:58','2016-03-04 18:37:58'),(76,'psi_aimee@hotmail.com',0,'2a4f54e23d15376475abdce00a438068','2016-03-04 18:38:07','2016-03-04 18:38:07'),(77,'martha_guitierrez_territorial@hotmail.com',0,'156aeaa21883d371d88ed44dbe5cf03c','2016-03-04 18:38:19','2016-03-04 18:38:19'),(78,'flaca_cmav_83@hotmail.com',0,'3fa72c27b59e1e41be142504c411232f','2016-03-04 18:38:29','2016-03-04 18:38:29'),(79,'imeldarioshernandez49@gmail.com',0,'2421fcd85692a6e9475db2d6f9bdc17e','2016-03-04 18:38:39','2016-03-04 18:38:39'),(80,'geo_alarcon@hotmail.com',0,'186864d04d8dde313be1bd6b6acbc776','2016-03-04 18:38:48','2016-03-04 18:38:48'),(81,'adrix0200pgj@hotmail.com',0,'460d228a2128797cfca059ac73053d79','2016-03-04 18:38:57','2016-03-04 18:38:57'),(82,'cetis03vinculacion@outlook.com',1,'b429208b4af77ab8fe96d3eb5f391559','2016-03-04 19:16:10','2016-03-04 18:39:11'),(83,'sebastian.22@yahoo.com.mx',0,'3fda35c4a0f2d3c08bb8654e35ae8e14','2016-03-04 18:40:47','2016-03-04 18:40:47'),(84,'rociosorioo@gmail.com',1,'15e01f2e6d1861feae5ccc36b2accc09','2016-03-08 05:45:00','2016-03-04 18:41:36'),(85,'lucia_elvia50@hotmail.com',0,'66309a60c20f3302723f0e1b1d05e291','2016-03-04 18:41:45','2016-03-04 18:41:45'),(86,'emiliano30051972@gmail.com',0,'fec14f3eb85ce2a210fdb323a0c89475','2016-03-04 18:41:54','2016-03-04 18:41:54'),(87,'veros.torres.ga@gmail.com',1,'10b793b17e38b581e2963c383430c015','2016-03-05 01:27:09','2016-03-04 18:42:04'),(88,'dalila.almagura@gmail.com',0,'e24812dd14d23efac7f4e683a83be923','2016-03-04 18:42:12','2016-03-04 18:42:12'),(89,'jpoctzin@hotmail.com',1,'ee4618ac89dd657cd61f4542ab1886f3','2016-03-08 14:03:34','2016-03-04 18:43:07'),(90,'valezona120@hotmail.com',1,'44994a09590adeaa56014b0456a69b87','2016-03-05 03:37:47','2016-03-04 18:43:17'),(91,'pequebibi22@yahoo.com.mx',0,'4f19f228e807adaf1c319e151452fe8b','2016-03-04 18:43:26','2016-03-04 18:43:26'),(92,'claurquieta@gmail.com',0,'e8d3c716bcab682e1f1238fe7baa7df4','2016-03-05 02:37:53','2016-03-05 02:37:53'),(93,'',0,'6637ed32d5fc4cc1dabaaa5936ef8bc3','2016-03-05 05:14:01','2016-03-05 05:14:01'),(94,'rlcolin0401@hotmail.com',0,'f3f97c1506becd40890c7e5c1423f04a','2016-03-14 14:44:53','2016-03-14 14:44:53'),(95,'francisamsa@hotmail.com',0,'0022c4b05cc8cec1a94227f3913787e3','2016-03-14 18:17:28','2016-03-14 18:17:28'),(96,'',0,'fd36407ae3d4f7558a24ba7758b80541','2016-03-26 05:49:48','2016-03-26 05:49:48'),(97,'opergo75@gmail.com',0,'b9115974290c64d0539d95729307b3b3','2016-03-26 05:50:31','2016-03-26 05:50:31'),(98,'',0,'ac83375df730bc3567d99ea29010ea63','2016-03-30 03:32:12','2016-03-30 03:32:12'),(99,'ronpinto22@gmail.com',0,'3a1936e5f5246e60733ca0120c3a7633','2016-03-30 03:33:24','2016-03-30 03:33:24'),(100,'',0,'e7ae33204ba1356647b895966ba9db2f','2016-04-04 21:59:40','2016-04-04 21:59:40');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `thumbnail` varchar(150) NOT NULL,
  `activo` tinyint(2) DEFAULT NULL,
  `liga` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `imagen` varchar(150) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `url_descarga` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redusuarios`
--

DROP TABLE IF EXISTS `redusuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `redusuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `ocupacion` varchar(25) DEFAULT NULL,
  `grado_estudios` varchar(25) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redusuarios`
--

LOCK TABLES `redusuarios` WRITE;
/*!40000 ALTER TABLE `redusuarios` DISABLE KEYS */;
INSERT INTO `redusuarios` VALUES (1,'Juan','juan@gmail.com','México','México','M','0000-00-00','Empleado','Universidad','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Pedro','pedro@gmail.com','México','Toluca','M','0000-00-00','Empleado','Maestria','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `redusuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-27 21:55:12
