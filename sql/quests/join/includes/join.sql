
/* Delete fields in table wizard */
ALTER TABLE wizard DROP birthday;
ALTER TABLE wizard DROP birth_place;
ALTER TABLE wizard DROP biography;
ALTER TABLE wizard DROP is_muggle;
ALTER TABLE wizard MODIFY firstname VARCHAR(80) NOT NULL;
ALTER TABLE wizard MODIFY lastname VARCHAR(80) NOT NULL;

/* Completely empty the wizard table */
TRUNCATE TABLE wizard;

/* Creating the team table */
CREATE TABLE wizard_db_quest.team (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    PRIMARY KEY (id)
);

/* Creating the player table */
CREATE TABLE wizard_db_quest.player (
    id INT NOT NULL AUTO_INCREMENT,
    wizard_id INT NOT NULL,
    team_id INT NOT NULL,
    role VARCHAR(50) NOT NULL,
    enrollment_date DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (wizard_id) REFERENCES wizard(id),
    FOREIGN KEY (team_id) REFERENCES team(id)
);

/* Returns the last names, first names, role and team of all players */
/* Listed alphabetically by team, then by team role, then by last name, then by first name */
SELECT wizard.lastname AS lastnames, wizard.firstname AS firstnames, role AS rôle, team.name AS squad
FROM player
INNER JOIN wizard ON player.wizard_id = wizard.id
INNER JOIN team ON player.team_id = team.id
ORDER BY name ASC, role ASC, wizard.lastname ASC, wizard.firstname ASC;

/* Returns only the first and last names of players with the role of seeker, sorted alphabetically by last name then first name */
SELECT wizard.lastname AS lastnames, wizard.firstname AS firstnames
FROM player
INNER JOIN wizard ON player.wizard_id = wizard.id AND role = 'seeker'
ORDER BY wizard.lastname ASC, wizard.firstname ASC;

/* Returns the list of all wizards who do not practice quidditch */
SELECT *
FROM wizard
LEFT JOIN player ON player.wizard_id = wizard.id
WHERE player.wizard_id IS NULL;
