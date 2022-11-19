<?php

require_once 'config.php';
require_once __DIR__ . '/src/models/recipe-model.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe = array_map('trim', $_POST);
    $errors = [];

    if (empty($recipe['title'])) {
        $errors[] = 'Le titre est obligatoire';
    }

    $titleLength = 255;
    if (strlen($recipe['title']) > $titleLength) {
        $errors[] = 'Le titre doit faire moins de ' . $titleLength . '  caractères';
    }

    if (empty($recipe['description'])) {
        $errors[] = 'La description est obligatoire';
    }

    if (empty($errors)) {
        saveRecipe($recipe);
        header('Location: /');
    }
}

require __DIR__ . '/src/views/form.php';