<?php
    require_once '../../../.env.php';
    require __DIR__ . '/src/models/RecipeModel.php';
    // Fetching all recipes
    $recipes = getAllRecipes();
    // Generate the web page
    require __DIR__ . '/src/views/index.php';
