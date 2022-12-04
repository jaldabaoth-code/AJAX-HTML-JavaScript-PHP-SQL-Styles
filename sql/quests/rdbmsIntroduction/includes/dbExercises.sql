/* Exercices 1 - 2 -3 */
/* Exercise 1 */
SELECT * FROM wizard WHERE birthday BETWEEN '1975-01-01' AND '1985-01-01';
SELECT firstname FROM wizard WHERE firstname LIKE 'h%';
SELECT firstname, lastname FROM wizard WHERE lastname='potter' ORDER BY firstname ASC;
SELECT firstname, lastname, birthday FROM wizard WHERE firstname LIKE '%' ORDER BY birthday ASC LIMIT 0,1;

/* Exercise 2 */
INSERT INTO school (name, country, capacity) VALUES ('Beauxbatons Academy of Magic', 'France', 550), ('Castelobruxo', 'Brazil', 380), ('Durmstrang Institute', 'Norway', 570);
INSERT INTO school (name, country, capacity) VALUES ('Hogwarts School of Witchcraft and Wizardry', 'United Kingdom', 450), ('Ilvermorny School of Witchcraft and Wizardry', 'USA', 300);
INSERT INTO school (name, country, capacity) VALUES ('Koldovstoretz', 'Russia', 125), ('Mahoutokoro School of Magic', 'Japan', 800);
INSERT INTO school (name, country, capacity) VALUES ('Uagadou School of Magic', 'Uganda', 350);
UPDATE school SET country = 'Sweden' WHERE name = 'Durmstrang Institute';
UPDATE school SET capacity = 700 WHERE name = 'Mahoutokoro School of Magic';
DELETE FROM school WHERE name LIKE '%Magic%';
SELECT * FROM school;

/* Exercise 3 */
CREATE TABLE `wizard` (`id` INT NOT NULL AUTO_INCREMENT,`name` VARCHAR(100) NOT NULL,`capacity` INT,`country` VARCHAR(255) NOT NULL,PRIMARY KEY (`id`));
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('harry', 'potter', '1980-07-31', 'london', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('hermione', 'granger', '1979-09-19', '', 'Friend of Harry Potter', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('lily', 'potter', '1960-01-30', '', 'mother of Harry Potter', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('ron', 'weasley', '1980-03-01', '', 'Best friend of Harry', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('ginny', 'weasley', '1981-08-11', '', 'Sister of Ron and girlfriend of Harry', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('fred', 'weasley', '1978-04-01', '', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('george', 'weasley', '1978-04-01', '', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('arthur', 'weasley', '1950-02-06', '', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('molly', 'weasley', ' 1949-01-01', '', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('drago', 'malefoy', '1980-06-05', '', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('albus', 'dumbledore', '1881-07-01', '', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('severus', 'rogue', '1960-01-09', '', '', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('tom', 'jÃ©dusor', '1926-12-31', '', 'The-Who-Must-Not-Speak-The-Name aka Voldermort', '0');
INSERT INTO `wizard_db_quest`.`wizard` (`firstname`, `lastname`, `birthday`, `birth_place`, `biography`, `is_muggle`) VALUES ('dudley', 'dursley', '1980-06-23', '', 'Harrys cousin', '1');
