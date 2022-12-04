/* ATELIER POUR LE SQL */
CREATE DATABASE kaamelott;
CREATE TABLE knight (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, age INT NOT NULL, PRIMARY KEY (id));

INSERT INTO knight (name, age) VALUES ("Arthur", "40");
INSERT INTO `kaamelott`.`knight` (name, age) VALUES ("Perceval", "35");
INSERT INTO `kaamelott`.`knight` (name, age) VALUES ("Lancelot", "38");

SELECT * FROM knight;
UPDATE knight SET age = '36' WHERE name = 'Perceval';

SELECT * FROM knight WHERE age > 37;
ALTER TABLE knight ADD is_dubbed boolean;
ALTER TABLE wizard ADD is_dubbed boolean;
UPDATE knight SET is_dubbed=TRUE;
UPDATE knight SET is_dubbed=false WHERE name = 'Perceval';

DELETE FROM knight WHERE name = 'Lancelot';
TRUNCATE TABLE knight;
DROP TABLE knight;
CREATE TABLE weapon (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY (id));

INSERT INTO `kaamelott`.`weapon` (name) VALUES ("épée");
INSERT INTO `kaamelott`.`weapon` (name) VALUES ("arc");
INSERT INTO `kaamelott`.`weapon` (name) VALUES ("lance");
INSERT INTO `kaamelott`.`weapon` (name) VALUES ("catapulte");