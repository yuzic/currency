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



INSERT INTO `currency` (`id`, `price`, `date_at`, `currency_type_id`) VALUES
(1, 80.1161, '2016-03-09', 1),
(2, 73.1854, '2016-03-09', 2),
(3, 79.4488, '2016-03-10', 1),
(4, 72.3775, '2016-03-10', 2),
(5, 77.9817, '2016-03-11', 1),
(6, 71.0928, '2016-03-11', 2),
(7, 78.4131, '2016-03-12', 1),
(8, 70.3067, '2016-03-12', 2),
(9, 78.4131, '2016-03-13', 1),
(10, 70.3067, '2016-03-13', 2),
(11, 78.4131, '2016-03-14', 1),
(12, 70.3067, '2016-03-14', 2),
(13, 78.1798, '2016-03-15', 1),
(14, 70.1542, '2016-03-15', 2),
(15, 78.3285, '2016-03-16', 1),
(16, 70.5408, '2016-03-16', 2),
(17, 78.7532, '2016-03-17', 1),
(18, 71.0256, '2016-03-17', 2),
(19, 77.1572, '2016-03-18', 1),
(20, 68.5598, '2016-03-18', 2),
(21, 77.1992, '2016-03-19', 1),
(22, 68.4026, '2016-03-19', 2),
(23, 77.1992, '2016-03-20', 1),
(24, 68.4026, '2016-03-20', 2),
(25, 77.1992, '2016-03-21', 1),
(26, 68.4026, '2016-03-21', 2),
(27, 77.4647, '2016-03-22', 1),
(28, 68.8086, '2016-03-22', 2),
(29, 76.1400, '2016-03-23', 1),
(30, 67.7764, '2016-03-23', 2),
(31, 75.6902, '2016-03-24', 1),
(32, 67.6409, '2016-03-24', 2),
(33, 76.9290, '2016-03-25', 1),
(34, 68.9328, '2016-03-25', 2),
(35, 76.4004, '2016-03-26', 1),
(36, 68.4346, '2016-03-26', 2),
(37, 76.4004, '2016-03-27', 1),
(38, 68.4346, '2016-03-27', 2),
(39, 76.4004, '2016-03-28', 1),
(40, 68.4346, '2016-03-28', 2),
(41, 75.6975, '2016-03-29', 1),
(42, 67.7807, '2016-03-29', 2),
(43, 76.8611, '2016-03-30', 1),
(44, 68.7549, '2016-03-30', 2),
(45, 76.5386, '2016-03-31', 1),
(46, 67.6076, '2016-03-31', 2),
(47, 76.9207, '2016-04-01', 1),
(48, 67.8552, '2016-04-01', 2),
(49, 76.4266, '2016-04-02', 1),
(50, 67.1410, '2016-04-02', 2),
(51, 76.4266, '2016-04-03', 1),
(52, 67.1410, '2016-04-03', 2),
(53, 76.4266, '2016-04-04', 1),
(54, 67.1410, '2016-04-04', 2),
(55, 78.1662, '2016-04-05', 1),
(56, 68.6753, '2016-04-05', 2),
(57, 78.2798, '2016-04-06', 1),
(58, 68.8901, '2016-04-06', 2),
(59, 77.8130, '2016-04-07', 1),
(60, 68.5215, '2016-04-07', 2),
(61, 77.3688, '2016-04-08', 1),
(62, 67.7960, '2016-04-08', 2),
(63, 76.6888, '2016-04-09', 1),
(64, 67.4662, '2016-04-09', 2),
(65, 76.6888, '2016-04-10', 1),
(66, 67.4662, '2016-04-10', 2),
(67, 76.6888, '2016-04-11', 1),
(68, 67.4662, '2016-04-11', 2),
(69, 76.4957, '2016-04-12', 1),
(70, 67.1250, '2016-04-12', 2),
(71, 75.8529, '2016-04-13', 1),
(72, 66.3456, '2016-04-13', 2),
(73, 74.6578, '2016-04-14', 1),
(74, 65.7662, '2016-04-14', 2),
(75, 74.7940, '2016-04-15', 1),
(76, 66.4954, '2016-04-15', 2),
(77, 74.3405, '2016-04-16', 1),
(78, 66.0452, '2016-04-16', 2),
(79, 74.3405, '2016-04-17', 1),
(80, 66.0452, '2016-04-17', 2),
(81, 74.3405, '2016-04-18', 1),
(82, 66.0452, '2016-04-18', 2),
(83, 77.1273, '2016-04-19', 1),
(84, 68.2724, '2016-04-19', 2),
(85, 74.3719, '2016-04-20', 1),
(86, 65.6474, '2016-04-20', 2),
(87, 75.0107, '2016-04-21', 1),
(88, 66.0364, '2016-04-21', 2),
(89, 73.4592, '2016-04-22', 1),
(90, 65.0254, '2016-04-22', 2);