CREATE TABLE `nw202101`.`pianos` (
  `Id_piano` BIGINT(18) NOT NULL AUTO_INCREMENT,
  `Descrip_piano` VARCHAR(60) NULL,
  `Bio_piano` VARCHAR(5000) NULL,
  `Est_pieano` VARCHAR(3) NULL,
  `Sales_piano` INT NULL,
  `Img_uri_piano` VARCHAR(128) NULL,
  `Imgthb_piano` VARCHAR(128) NULL,
  `Price_piano` DECIMAL(13,2) NULL,
  PRIMARY KEY (`Id_piano`));
