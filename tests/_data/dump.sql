/* Replace this file with actual dump of your database */
CREATE TABLE IF NOT EXISTS `currency_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

ALTER TABLE `currency_type`
  ADD PRIMARY KEY (`id`);
--
-- Dumping data for table `currency_type`
--

INSERT INTO `currency_type` (`id`, `name`) VALUES
(1, 'EUR'),
(2, 'USD');


CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) NOT NULL,
  `price` decimal(10,4) NOT NULL,
  `date_at` date DEFAULT NULL,
  `currency_type_id` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;