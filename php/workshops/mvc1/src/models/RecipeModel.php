<?php
    function createConnect(): PDO
    {
        return new \PDO(DSN, USER, PASS);
    }

    function getAllRecipes(): array
    {
        $connect = createConnect();
        $statement = $connect->query('SELECT id, title FROM recipe');
        $recipes = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $recipes;
    }

    function getRecipeById(int $id): array
    {
        $connect = createConnect();
        $query = 'SELECT title, description FROM recipe WHERE id = :id';
        $statement = $connect->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $recipe = $statement->fetch(PDO::FETCH_ASSOC);
        return $recipe;
    }

    function saveRecipe(array $recipe): void
    {
        $connect = createConnect();
        // Launches an SQL query to save the recipe
        $query = "INSERT INTO recipe (title, description) VALUES (:title, :description)";
        $statement = $connect->prepare($query);
        $statement->bindValue(':title', $recipe['title'], \PDO::PARAM_STR);
        $statement->bindValue(':description', $recipe['description'], \PDO::PARAM_STR);
        $statement->execute();
    }
