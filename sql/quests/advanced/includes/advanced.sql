
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

/* Returns the name of the teams and the number of players per team */
/* All classified by number of players per team, from the most numerous to the least numerous */
SELECT team.name AS name_of_teams, COUNT(team_id) AS numbers_of_players
FROM player
INNER JOIN team ON player.team_id = team.id
GROUP BY team_id
ORDER BY numbers_of_players DESC;

/* Returns only the names of complete teams (having 14 players or more, i.e. 7 players and 7 substitutes minimum) */
/* Listed in alphabetical order */
SELECT team.name AS name_of_teams
FROM player
INNER JOIN team ON player.team_id = team.id
GROUP BY team_id
HAVING COUNT(team_id) > 14
ORDER BY name_of_teams ASC;

/* The Gryffindor coach is superstitious, his favorite day is Monday */
/* Returns the list of players on his team who were signed up on a Monday (he wants them to play first) */
/* And classifies the results by date of chronological enlistment */
SELECT player.id AS player_id, wizard.firstname, wizard.lastname, team.name AS squad, enrollment_date,
    CASE
        WHEN DAYOFWEEK(enrollment_date) = 2 THEN 'Monday'
    END AS enlistment_day
FROM player
INNER JOIN team ON player.team_id = team.id
INNER JOIN wizard ON player.wizard_id = wizard.id
WHERE team.name = 'Gryffindor' AND DAYOFWEEK(enrollment_date) = 2
ORDER BY enrollment_date;
