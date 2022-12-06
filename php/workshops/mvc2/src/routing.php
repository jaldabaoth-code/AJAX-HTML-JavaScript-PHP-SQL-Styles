<?php

require __DIR__.'/controllers/recipe-controller.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = '';
$urlArray = explode('/', $urlPath);
$url = $urlArray[5];

if ('' === $url || 'index.php' === $url) {
    browseRecipes();
} elseif ('show' === $url && isset($_GET['id'])) {
    showRecipe($_GET['id']);
} elseif ('add' === $url) {
    addRecipe();
} else {
    header('HTTP/1.1 404 Not Found');
}
