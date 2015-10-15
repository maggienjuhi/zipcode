CREATE TABLE IF NOT EXISTS `zip_codes` (
  `Zipcode` int(7) NOT NULL,
  `ZipCodeType` varchar(11) DEFAULT NULL,
  `City` varchar(27) DEFAULT NULL,
  `State` varchar(5) DEFAULT NULL,
  `LocationType` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Lat` mediumint(5) DEFAULT NULL,
  `Long` mediumint(6) DEFAULT NULL,
  `Location` varchar(52) DEFAULT NULL,
  `Decommisioned` tinyint(1) DEFAULT NULL,
  `TaxReturnsFiled` int(15) DEFAULT NULL,
  `EstimatedPopulation` int(19) DEFAULT NULL,
  `TotalWages` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Zipcode`),
  UNIQUE KEY `Zipcode_2` (`Zipcode`),
  KEY `Zipcode` (`Zipcode`),
  KEY `Zipcode_3` (`Zipcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contains listing of zip codes';

