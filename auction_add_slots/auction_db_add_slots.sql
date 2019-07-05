-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: auction_db
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `bid_history`
--

DROP TABLE IF EXISTS `bid_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bid_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bid_time` datetime NOT NULL,
  `bid_amount` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bid_history_user_id_fk` (`user_id`),
  KEY `fk_bid_history_product1_idx` (`product_id`),
  CONSTRAINT `FK_79922F584584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `FK_79922F58A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bid_history`
--

LOCK TABLES `bid_history` WRITE;
/*!40000 ALTER TABLE `bid_history` DISABLE KEYS */;
INSERT INTO `bid_history` VALUES (89,2,2,'2019-07-04 20:50:27','1'),(90,2,2,'2019-07-04 20:50:33','2'),(91,2,2,'2019-07-04 20:50:36','3'),(92,2,2,'2019-07-04 20:50:38','3'),(93,2,2,'2019-07-04 21:31:13','4'),(94,2,2,'2019-07-04 21:32:01','45'),(95,7,2,'2019-07-05 12:21:34','3005'),(96,7,2,'2019-07-05 13:43:46','3455');
/*!40000 ALTER TABLE `bid_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20190619151938','2019-06-27 08:03:45'),('20190623071657','2019-06-27 08:03:45'),('20190623082857','2019-06-27 08:03:46'),('20190623083642','2019-06-27 08:03:46'),('20190623090836','2019-06-27 08:03:49'),('20190626140942','2019-06-27 08:03:50'),('20190626155140','2019-06-27 08:03:51'),('20190627161313','2019-06-27 16:13:26'),('20190627204930','2019-06-27 20:52:41'),('20190703085008','2019-07-03 08:51:11'),('20190703091637','2019-07-03 09:16:59');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `enable` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Самая дорогая картина в мире: полотно Леонардо да Винчи продал русский миллиардер','Картина \"Спаситель мира\" Леонардо да Винчи была продана на торгах аукционного дома Christie\'s в Нью-Йорке за $450 млн (точнее за 450 312 500 долларов США). Непосредственная цена картины – 400 млн долларов США. Имя покупателя неизвестно, Reuters сообщает, что он вел торги по телефону.\n                                                                                                                                                                                                                  \n                                                                                                                                                                                                                  Предыдущий ценовой рекорд был поставлен два года назад также на торгах Christie\'s в Нью-Йорке: картина Пабло Пикассо \"Алжирские женщины\" была куплена бывшим премьер-министром Катара Хамадом Аль Тани за 179 млн долларов.\n                                                                                                                                                                                                                  \n                                                                                                                                                                                                                  Картину да Винчи в 2013 году частным образом приобрел российский миллиардер Дмитрий Рыболовлев, обладатель большой художественной коллекции. Он заплатил за нее \"всего лишь\" 127,5 млн долларов.','2019-06-27',1),(2,'ТОП-5 самых известных мировых аукционов','В современные аукционы стали активно внедряться информационные технологии. В наше время сложно отыскать человека, который ничего не знает об аукционах. С каждым годом они набирают все большей популярности, а для некоторых становятся неотъемлемой частью профессии. Как правило, такой вид комиссионной торговли является очень выгодным не только для продавцов, но и для покупателей: любой человек может найти необходимую вещь, даже если она очень редко. Нынче же аукционы переходят в интернет-пространство, что делает их еще более доступными и популярными. Редакция Деньги.ua собрала пять самых известных аукционов, которые проводятся по всему миру каждый год на протяжении многих лет.</p>\r\n\r\n2. Сотбис (Sotheby&#39;s) Один из старейших в мире аукционных домов, был основан в 1744 году книготорговцем Сэмюэлем Бейкером. Раньше него были основаны лишь три шведских аукционных дома. Изначально Сотбис представлял собой закрытый клуб, где работали исключительно представители аристократии. Целое столетие компания Бейкера специализировалась только на книгах, поэтому организовывала торги почти всех известных британских библиотек. После периода банкротства, в 1983 году, компания Сотбис была куплена американским предпринимателем Альфредом Таубманом.</p>\r\n\r\n3. Бонхамс (Bonhams) Универсальный аукционный дом Bonhams является одним из старейших и самых крупных аукционов в Британии. Он был образован в 1793 году известным дилером гравюр Томасом Доддом и книжным антикваром Вальтером Бонхамом. С конца XVIII века Bonhams специализируется на продаже предметов старины, коллекционных артефактов и произведений классического искусства. В 2000-м году Бонхамс был продан аукционному дому Brooks, после чего компания была названа Bonhams&amp;Brooks. Сегодня Бонхамс торгует лотами 70-ти различных категорий, в том числе живописью, машинами, музыкальными инструментами, винами, коврами и объектами дизайна,</p>\r\n\r\n4. Доротеум (Dorotheum) В немецко-говорящих странах Доротеум является, пожалуй, самым крупным и почтенным аукционным домом. Его основателем стал Император Иосиф I в 1707 году. Это самое известное культурное учреждение Вены. Ежегодно аукционный дом Доротеум проводит примерно 600 аукционов. В нем есть функционирующий отдел мгновенных продаж позволяет заполучить в свою коллекцию ту или иную интересную вещь сразу.</p>\r\n\r\n5. Макдугаллс (MacDougall&#39;s) МасDougall`s было основан в 2004 году Уильямом и Екатериной Макдугалл. Это единственный аукцион, который специализируется исключительно на русском и славянском изобразительном искусстве и в этой области является третьим по объемам продаж аукционом в мире.</p>','2019-06-28',1),(6,'wefsafs','wqefweqf','2019-07-04',1),(7,'qwerwq','qwerqwer','2019-07-04',1),(8,'weerfsadf','safdasdfasf','2019-07-04',1),(9,'asdfasdfasdf','sadfasfdasdfsa','2019-07-04',1),(10,'asdasfasdf','sdfsadfsafd','2019-07-04',1),(11,'sdfasdf','asdfasdfsadfsaf','2019-07-04',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_details` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F52993984584665A` (`product_id`),
  KEY `fk_order_product1_idx` (`product_id`),
  KEY `order_user_id_fk` (`user_id`),
  CONSTRAINT `FK_F52993984584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_id` int(11) DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` int(11) NOT NULL,
  `start_at` datetime NOT NULL,
  `finish_at` datetime NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D34A04ADD614C7E7` (`price`),
  KEY `fk_product_product_category1_idx` (`product_category_id`),
  CONSTRAINT `FK_D34A04ADBE6903FD` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (2,1,'реликвия','1200','zolotoe-kolco-s-fianitami-art-12181.jpg','золотое кольцо новое','NEW',1,'2019-07-04 12:22:00','2019-07-10 12:22:00','Кольцо'),(3,2,'юзер','45000','ec49c8eab31a833bffc39d3da7c38135.jpeg','Модель Executive с гравировкой 3 отличается самой роскошной отделкой: ствольная коробка украшена сюжетной гравировкой, изображающей зайца, преследуемого собакой. Фигуры животных позолоченные. Ложа обработана маслом и воском с тем, чтобы максимально подчеркнуть качество отделки, оттенки цвета и красоту текстуры.','NEW',2,'2019-07-04 14:36:00','2019-07-10 14:36:00','Ружье'),(6,1,'юзер234','5000','420_420_04d39c5a-e54b-4a73-8dbb-ab58c614505b.jpeg','<p><em>Пуля 304 подвески из нержавеющей стали, золотые, 28x6.5 мм, отверстие : 2 мм</em></p>\r\n\r\n<p>&nbsp;(STAS-L167-011)</p>\r\n\r\n<p>&nbsp;</p>','NEW',3,'2019-07-06 12:11:00','2019-07-12 12:11:00','Золотая пуля'),(7,3,'юзер23423','3000','книга.jpg','<p>Начиная с 1975 года ко мне много раз обращались с различными формулировками вопроса:&laquo;Почему Храм Сета?&raquo;. Я никогда не отвечал на него с точки зрения атмосферы, услуг, удобства или забавы (всё вышеперечисленное вполне допустимо для храма). Мой ответ, скорее всего, будет таким:&laquo;Потому что Храм Сета метафизически правилен, а все другие религии и атеизмы &mdash; нет&raquo;.В ответ на это я часто получаю поразительный, иногда возмутительный, а порой удивительный результат. Современные религии пудрят мозги по социальным или традиционным причинам, но эти причины никогда не воспринимаются всерьёз. Лишь глупые или необразованные действительно верят в эти мифы. Очевидный выбор для огромного большинства людей &mdash; атеизм или агностицизм. Все мировые религии и оккультные системы, основанные на их мифологии &mdash; не что иное, как пропагандистские устройства для контроля над массами.</p>','NEW',4,'2019-07-06 12:15:00','2019-07-12 12:15:00','Древняя книга');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_category_product_category1_idx` (`parent_id`),
  CONSTRAINT `FK_CDFC7356727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `product_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` VALUES (1,NULL,'Ювелирние изделия'),(2,NULL,'Оружие'),(3,NULL,'Книги');
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'NEW',
  `identific_code` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_registration` datetime NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Igor',NULL,'admim@admin.com','$2y$13$sVOdF81zqxl5T9q5R56EPeviExTtWiiQqG5qMgT7IFL9rhV1tLv6a',NULL,NULL,'NEW',NULL,'2019-06-27 21:03:40','admin','admin','admim@admin.com',1,NULL,'2019-07-03 11:11:35',NULL,NULL,'a:0:{}'),(2,'Lemeshko',NULL,'admin@example.com','$2y$13$kMzk1PauQuqElXt35tz92Ouxyr49uttefH/c4I2L3Skcn5BoXOksK',NULL,NULL,'NEW',NULL,'2019-06-27 21:05:58','adminuser','adminuser','admin@example.com',1,NULL,'2019-07-05 13:39:37',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');
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

-- Dump completed on 2019-07-05 14:57:11
