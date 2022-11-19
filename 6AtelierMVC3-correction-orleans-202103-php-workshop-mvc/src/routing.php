<?php

require __DIR__.'/controllers/RecipeController.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    $recipeController = new RecipeController();
    $recipeController->browseRecipes();
} elseif ('/show' === $urlPath && isset($_GET['id'])) {
    $recipeController = new RecipeController();
    $recipeController->showRecipe($_GET['id']);
} elseif ('/add' === $urlPath) {
    $recipeController = new RecipeController();
    $recipeController->addRecipe();
} elseif ('/edit'  === $urlPath && isset($_GET['id'])) {
    $recipeController = new RecipeController();
    $recipeController->editRecipe($_GET['id']);
} elseif ('/delete' === $urlPath) {
    $recipeController = new RecipeController();
    $recipeController->deleteRecipe();
} else {
    header('HTTP/1.1 404 Not Found');
}
