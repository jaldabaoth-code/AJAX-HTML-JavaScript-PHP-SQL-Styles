
/* Create the table wizard */
CREATE TABLE `wizard_db_quest`.`wizard` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(100) NOT NULL,
    `lastname` VARCHAR(100) NOT NULL,
    `birthday` DATE NOT NULL,
    `birth_place` VARCHAR(255) NULL,
    `biography` TEXT NULL,
    PRIMARY KEY (`id`)
);
