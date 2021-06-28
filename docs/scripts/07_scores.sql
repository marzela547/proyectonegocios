CREATE TABLE `nw202101`.`scores` (
  `Id_score` INT NOT NULL AUTO_INCREMENT,
  `Desc_score` VARCHAR(128) NULL,
  `Author_score` VARCHAR(256) NULL,
  `Genre_score` VARCHAR(256) NULL,
  `Year_score` INT NULL,
  `Sales_score` INT NULL,
  `Price_score` DECIMAL(13,2) NULL,
  `Est_score` CHAR(3) NULL,
  `Url_doc_score` VARCHAR(256) NULL,
  PRIMARY KEY (`Id_score`));
