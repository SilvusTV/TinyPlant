-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tinyPlant-dev
-- ------------------------------------------------------
-- Server version	10.5.19-MariaDB-0+deb11u2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Categories`
--

DROP TABLE IF EXISTS `Categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `images_name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `scope` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categories`
--

LOCK TABLES `Categories` WRITE;
/*!40000 ALTER TABLE `Categories` DISABLE KEYS */;
INSERT INTO `Categories` VALUES (1,'Plantes Carnivore','','Des plantes qui manges des animaux comme dans les films d\'horreur, mais là, c\'est mignon et ça ne mange pas les humains.','carnivores'),(2,'Plante d\'interieur',NULL,'Des petites plantes choupinou qui vous ferons oublier vos problèmes ainsi que raviver et habiller votre petit appartement étudiant un peu triste. Car nos plantes d\'intérieur sont beaucoup trop choupinou et irrésistible.','indoor'),(3,'Plante d\'exterieur',NULL,'Des big plante bien grosse et bien badass. Vos extérieurs dévoileront leur nouveau visage ravi de fleurs. Car même le badass peut avoir des fleurs et attirer des petits papaillons cro trognon','outdoor');
/*!40000 ALTER TABLE `Categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Products`
--

DROP TABLE IF EXISTS `Products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` text DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantities` int(11) DEFAULT NULL,
  `categori_id` int(11) DEFAULT NULL,
  `reduction` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categori_id` (`categori_id`),
  CONSTRAINT `categori_id` FOREIGN KEY (`categori_id`) REFERENCES `Categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Products`
--

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;
INSERT INTO `Products` VALUES (6,'Brancifolia_Pink_Passion.webp','Brancifolia Pink Passion','Un peu de rose n\'a jamais fait de mal à personne ! L\'Alocasia Brancifolia Pink a de jolies tiges roses avec de petites taches sombres dessus. Ces tiges supportent des feuilles captivantes. Celles-ci sont profondément découpées, ce qui donne à la plante un aspect très extravagant. De sa tige jusqu\'à l\'extrémité de sa feuille, toute la plante est intéressante à regarder ! Ne pouvez-vous pas détourner les yeux de cette plante ? Commandez l\'Alocasia Brancifolia Pink en ligne.',24.95,99,2,0),(7,'Pink_Dragon.jpg','Pink Dragon','L\'Alocasia Pink Dragon est une plante si spéciale et, contrairement à ce que son nom pourrait suggérer, elle n\'a certainement pas un tempérament de dragon. Cet attrape-regard ultime se démarque avec ses tiges roses et ses feuilles argentées métalliques. Une fois que vous verrez l\'Alocasia Pink Dragon, vous comprendrez pourquoi elle mérite une place spéciale dans votre salon !',20,99,2,25),(8,NULL,'Monkey Mask','La Monstera Adansonii, parfois appelée \"plante fromage suisse\" ou \"masque de singe\", est une grimpante naturelle. Si vous lui offrez un peu d\'espace dans votre salon, vous verrez rapidement des racines émerger pour essayer de trouver des choses auxquelles s\'accrocher. Offrez-leur un fil ou un poteau pour s\'accrocher et en un rien de temps, votre Monstera grimpera vers le haut et montrera sa joie en produisant de grandes feuilles neuves.',12.95,99,2,0),(9,NULL,'Sarracenia leucophylla','Vous aimeriez cultiver une plante carnivore rustique, résistante à des températures très basses l’hiver (jusqu’à -20°C) et qui ne craint pas les grosses chaleurs et le plein soleil de l’été ?\nVous cherchez une alternative durable aux jardineries car vous n’êtes pas pleinement satisfait des Sarracenia tout vert, étiolé, en mauvaise santé et de piètre qualité, que vous y trouvez ?',24,99,1,0);
/*!40000 ALTER TABLE `Products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(16) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `registration_date` date DEFAULT current_timestamp(),
  `state` int(11) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `zipCode` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,NULL,'Combe','Hugo',NULL,'hugo.combe.84@gmail.com','2023-06-29',1,'719855e8f4ebd94341277b0b0d50b75c5187133f',NULL,NULL),(2,NULL,'Metton','Corentin',NULL,'user@gmail.com','2023-07-03',1,'7110eda4d09e062aa5e4a390b0a572ac0d2c0220',NULL,NULL);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-11 11:42:10
