<?php
    require_once '../../../.env.php'; 
    require __DIR__ . '/src/models/RecipeModel.php';
    // Input GET parameter validation (integer > 0)
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]);
    if (false === $id || null === $id) {
        header("Location: index.php");
        exit("Wrong input parameter");
    }
    // Fetching a recipe
    $recipe = getRecipeById($id);
    // Database result check
    if (!isset($recipe['title']) || !isset($recipe['description'])) {
        header("Location: index.php");
        exit("Recipe not found");
    }
    // Generate the web page
    require __DIR__ . '/src/views/show.php';
