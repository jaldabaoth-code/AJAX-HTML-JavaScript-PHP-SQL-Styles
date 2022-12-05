CREATE DATABASE IF NOT EXISTS `php_html_scss_css_js`;
USE `php_html_scss_css_js`;

DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `firstname` varchar(45) NOT NULL,
    `lastname` varchar(45) NOT NULL,
    PRIMARY KEY (`id`)
);

LOCK TABLES `friend` WRITE;
INSERT INTO `friend` VALUES (1,'Ross','Geller'),(2,'Monica','Geller'),(3,'Phoebe','Buffay'),(4,'Joey','Tribbiani');
UNLOCK TABLES;

DROP TABLE IF EXISTS `story`;
CREATE TABLE `story` (
    `id` int NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `content` text NULL,
    `author` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
);
