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



/* Retourne le nom des équipes et le nombre de joueurs par équipe. */
/* Le tout classé par nombre de joueurs par équipe, de la plus nombreuse à la moins nombreuse. */
SELECT team.name AS nom_des_equipes, COUNT(team_id) AS nombre_de_joueurs
FROM player
INNER JOIN team ON player.team_id=team.id
GROUP BY team_id
ORDER BY nombre_de_joueurs DESC;


/* Retourne uniquement les noms des équipes complètes (ayant 14 joueurs ou plus, c’est-à- dire 7 joueurs et 7 remplaçants minimum). */
/* Classés par ordre alphabétique. */
SELECT team.name AS nom_des_equipes
FROM player
INNER JOIN team ON player.team_id=team.id
GROUP BY team_id
HAVING COUNT(team_id) > 14
ORDER BY nom_des_equipes ASC;



/* L’entraîneur des Gryffondor est superstitieux, son jour préféré est le lundi. */
/* Retourne la liste des joueurs de son équipe qui ont été enrôlés un lundi (il souhaite les faire jouer en priorité). */
/* Et classe les résultats par date d’enrôlement chronologique. */
SELECT player.id AS player_id, wizard.firstname AS prenom, wizard.lastname AS nom, team.name AS equipe, enrollment_date AS date_enrolement,
  CASE
    WHEN DAYOFWEEK(enrollment_date)=2 THEN 'Lundi'
  END AS jour_enrolement
FROM player
INNER JOIN team ON player.team_id=team.id
INNER JOIN wizard ON player.wizard_id=wizard.id
WHERE team.name='Gryffindor' AND DAYOFWEEK(enrollment_date)=2
ORDER BY enrollment_date;