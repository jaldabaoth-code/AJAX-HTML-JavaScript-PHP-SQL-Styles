CREATE DATABASE IF NOT EXISTS `ajax_html_javascript_php_sql_styles`;
USE `ajax_html_javascript_php_sql_styles`;

/* Quests PDO */
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

/* Workshops PDO */
DROP TABLE IF EXISTS `story`;
CREATE TABLE `story` (
    `id` int NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `content` text NULL,
    `author` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
);

/* Workshops MVC 1, MVC 2, MVC 3 */
DROP TABLE IF EXISTS `recipe`;
CREATE TABLE `recipe` (
    `id` integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `title` varchar(50) NOT NULL,
    `description` varchar(255) NOT NULL
);
INSERT INTO `recipe` VALUES
(1, 'A pie tatin', 'You make a pie, you put it in the oven and then tatin.'),
(2, 'Arsenic pudding', 'In a large bowl of strychnine, dilute some morphine. Heat a good glass of kerosene in a saucepan...');

/* Lessons PDO */
DROP TABLE IF EXISTS `animal`;
CREATE TABLE `animal` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(100),
    `image` varchar(255),
    `weight` FLOAT,
    PRIMARY KEY (`id`)
);
INSERT INTO `animal` VALUES
(1, 'Cat', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Black_Cat_%287983739954%29.jpg/1280px-Black_Cat_%287983739954%29.jpg', '5'),
(2, 'Red fox', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Fox_-_British_Wildlife_Centre_%2817429406401%29.jpg/1280px-Fox_-_British_Wildlife_Centre_%2817429406401%29.jpg', '10'),
(3, 'Eurasian wolf', 'https://upload.wikimedia.org/wikipedia/commons/c/cd/Alba-European-Wolf.jpg', '50'),
(4, 'Lion', 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg', '130'),
(5, 'Asian elephant', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Elephas_maximus_%28Bandipur%29.jpg/1280px-Elephas_maximus_%28Bandipur%29.jpg', '4000'),
(6, 'Blue whale', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Anim1754_-_Flickr_-_NOAA_Photo_Library.jpg/1280px-Anim1754_-_Flickr_-_NOAA_Photo_Library.jpg', '130000');
