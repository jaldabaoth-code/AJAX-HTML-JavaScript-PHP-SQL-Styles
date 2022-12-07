<?php
    require_once '../../../.env.php'; 
    require_once __DIR__ . '/src/models/RecipeModel.php';
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $recipe = array_map('trim', $_POST);
        $errors = [];
        if (empty($recipe['title'])) {
            $errors[] = 'Title is required';
        }
        $titleLength = 255;
        if (strlen($recipe['title']) > $titleLength) {
            $errors[] = 'The title must be less than ' . $titleLength . ' characters';
        }
        if (empty($recipe['description'])) {
            $errors[] = 'Description is required';
        }
        if (empty($errors)) {
            saveRecipe($recipe);
            header('Location: index.php');
        }
    }
    require __DIR__ . '/src/views/form.php';
