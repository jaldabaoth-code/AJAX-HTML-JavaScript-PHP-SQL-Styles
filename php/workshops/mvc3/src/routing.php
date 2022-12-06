<?php

require __DIR__.'/controllers/RecipeController.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = '';
$urlArray = explode('/', $urlPath);
$url = $urlArray[5];

if ('' === $url || 'index.php' === $url) {
    $recipeController = new RecipeController();
    $recipeController->browseRecipes();
} elseif ('show' === $url && isset($_GET['id'])) {
    $recipeController = new RecipeController();
    $recipeController->showRecipe($_GET['id']);
} elseif ('add' === $url) {
    $recipeController = new RecipeController();
    $recipeController->addRecipe();
} elseif ('edit'  === $url && isset($_GET['id'])) {
    $recipeController = new RecipeController();
    $recipeController->editRecipe($_GET['id']);
} elseif ('delete' === $url) {
    $recipeController = new RecipeController();
    $recipeController->deleteRecipe();
} else {
    header('HTTP/1.1 404 Not Found');
}
