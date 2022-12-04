
/* Write the query that displays the first name, last name and age of the characters */
SELECT firstname, lastname, age FROM Person;

/* Write the query that allows you to display the first and last names of the characters as well as their kingdom, only for those connected to a kingdom */ 
SELECT firstname, lastname, Kingdom.name From Person INNER JOIN Kingdom ON Kingdom.id = Person.kingdom_id;

/* Write the query that displays the same thing including all the characters */ 
SELECT firstname, lastname, Kingdom.name From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id;

/* Write the query that displays the average age of the characters */ 
SELECT AVG(age) From Person;

/* The average is a bit high, isn't it? Write the query that allows to display the average of all the characters not having the role of magician */ 
SELECT AVG(age) From Person INNER JOIN Role ON Role.id = Person.role_id WHERE Role.role != 'magicien';

/* Write the query that displays the number of characters per kingdom (include kingdoms with no characters) */ 
SELECT COUNT(Person.id), Kingdom.name From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id GROUP BY Kingdom.name;

/* Write the query that displays the average age by role */ 
SELECT AVG(age), Role.role From Person INNER JOIN Role ON Role.id = Person.role_id GROUP BY Role.role;

/* Write the query that displays the list of all the characters with their possible role and kingdom */ 
SELECT firstname, lastname, Kingdom.name, Role.role From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id INNER JOIN Role ON Role.id = Person.role_id;

/* Write the query that displays the list of kingdoms with at least 2 subjects */ 
SELECT COUNT(*) AS num, Kingdom.name From Person LEFT JOIN Kingdom ON Kingdom.id = Person.kingdom_id GROUP BY Kingdom.name HAVING num > 1;
