CREATE TABLE IF NOT EXISTS `product` (
  `serial_no` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  PRIMARY KEY (`serial_no`)
)