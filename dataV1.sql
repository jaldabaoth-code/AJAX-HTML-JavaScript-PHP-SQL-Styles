CREATE DATABASE IF NOT EXISTS `php_html_scss_css_js`;
USE `php_html_scss_css_js`;

DROP TABLE IF EXISTS `friend`;

CREATE TABLE `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
);
