CREATE TABLE `kaamelott`.`story` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `content` TEXT NULL,
    `author` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`));