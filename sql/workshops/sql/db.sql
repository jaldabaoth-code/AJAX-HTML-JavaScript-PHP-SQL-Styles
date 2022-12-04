/* Ecrire la requête qui permet d'afficher Le prénom, nom et âge des personnages*/
SELECT firstname, lastname, age FROM Person;


/* Ecrire la requête qui permet d'afficher Le prénom, nom des personnages ainsi que leur royaume, uniquement pour ceux étant reliés à un royaume*/ 
SELECT firstname, lastname, Kingdom.name From Person INNER JOIN Kingdom ON Kingdom.id = Person.kingdom_id;


/* Ecrire la requête qui permet d'afficher La même chose en incluant tous les personnages */ 
SELECT firstname, lastname, Kingdom.name From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id;


/* Ecrire la requête qui permet d'afficher La moyenne de l'âge des personnages*/ 
SELECT AVG(age) From Person;


/* La moyenne est un peu haute non ? Ecrire la requête qui permet d'afficher la moyenne de tous les personnages n’ayant pas le rôle de magicien */ 
SELECT AVG(age) From Person INNER JOIN Role ON Role.id = Person.role_id WHERE Role.role!='magicien';


/* Ecrire la requête qui permet d'afficher Le nombre de personnage par royaume (inclure les royaumes n’ayant pas de personnage) */ 
SELECT COUNT(Person.id), Kingdom.name From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id GROUP BY Kingdom.name;


/* Ecrire la requête qui permet d'afficher La moyenne de l’âge par rôle */ 
SELECT AVG(age), Role.role From Person INNER JOIN Role ON Role.id = Person.role_id GROUP BY Role.role;


/* Ecrire la requête qui permet d'afficher La liste de tous les personnages avec leur rôle et royaume éventuels */ 
SELECT firstname, lastname, Kingdom.name, Role.role From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id INNER JOIN Role ON Role.id = Person.role_id;


/* Ecrire la requête qui permet d'afficher La liste des royaumes ayant au moins 2 sujets */ 
SELECT COUNT(*) AS num, Kingdom.name From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id GROUP BY Kingdom.name HAVING num>1;