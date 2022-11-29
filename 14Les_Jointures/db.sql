/* Suprimmer des champs dans la table wizard */
ALTER TABLE wizard DROP birthday;
ALTER TABLE wizard DROP birth_place;
ALTER TABLE wizard DROP biography;
ALTER TABLE wizard DROP is_muggle;

ALTER TABLE wizard MODIFY firstname VARCHAR(80) NOT NULL;
ALTER TABLE wizard MODIFY lastname VARCHAR(80) NOT NULL;

/* Vider completement la table wizard */
TRUNCATE TABLE wizard;

/* Creation de la table team */
CREATE TABLE wizard_db_quest.team (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(80) NOT NULL,
  PRIMARY KEY (id));

/* Creation de la table player */
CREATE TABLE wizard_db_quest.player (
  id INT NOT NULL AUTO_INCREMENT,
  wizard_id INT NOT NULL,
  team_id INT NOT NULL,
  role VARCHAR(50) NOT NULL,
  enrollment_date DATE NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (wizard_id) REFERENCES wizard(id),
  FOREIGN KEY (team_id) REFERENCES team(id));




/* Retourne les noms, prénoms, rôle et équipe de tous les joueurs. */
/* Classés dans l’ordre alphabétique par équipe, puis par rôle dans l’équipe, puis par nom de famille, puis par prénom. */

SELECT wizard.lastname AS noms, wizard.firstname AS prenoms, role AS rôle, team.name AS equipe
FROM player
INNER JOIN wizard ON player.wizard_id=wizard.id
INNER JOIN team ON player.team_id=team.id
ORDER BY name ASC, role ASC, wizard.lastname ASC, wizard.firsTname ASC;


/* Retourne uniquement les prénoms et noms des joueurs ayant le rôle de seeker (attrapeur), classés par ordre alphabétique de nom puis prénom */
SELECT wizard.lastname AS noms, wizard.firstname AS prenoms
FROM player
INNER JOIN wizard ON player.wizard_id=wizard.id AND role='seeker'
ORDER BY wizard.lastname ASC, wizard.firsTname ASC;

/* Retourne la liste de tous les sorciers qui ne pratiquent pas le quidditch. */
SELECT *
FROM wizard
LEFT JOIN player ON player.wizard_id=wizard.id
WHERE player.wizard_id IS NULL;