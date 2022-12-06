<?php
require __DIR__ . '/../models/RecipeModel.php';

class RecipeController
{
    private RecipeModel $recipeModel;

    public function __construct()
    {
        $this->recipeModel = new RecipeModel();
    }

    public function browseRecipes(): void
    {
        // Fetching all recipes
        $recipes = $this->recipeModel->getAll();
        // Generate the web page
        require __DIR__ . '/../views/index.php';
    }

    public function showRecipe(int $id): void
    {
        // Input parameter validation (integer >0)
        $id = filter_var($id, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]);
        if (false === $id || null === $id) {
            header("Location: /");
            exit("Wrong input parameter");
        }
        // Fetching a recipe
        $recipe = $this->recipeModel->getById($id);
        // Result check
        if (!isset($recipe['title']) || !isset($recipe['description'])) {
            header("Location: index.php");
            exit("Recipe not found");
        }
        // Generate the web page
        require __DIR__ . '/../views/show.php';
    }

    public function addRecipe(): void
    {
        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $recipe = array_map('trim', $_POST);

            // Validate data
            $errors = $this->validateRecipe($recipe);

            // Save the recipe
            if (empty($errors)) {
                $this->recipeModel->saveRecipe($recipe);
                header('Location: index.php');
            }
        }
        // Generate the web page
        require __DIR__ . '/../views/form.php';
    }

    public function editRecipe(int $id)
    {
        $errors = [];
        // recuperer les info correspond à la recette $id
        $recipe = $this->recipeModel->getById($id);
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $recipe = array_map('trim', $_POST);
            $recipe['id'] = $id;
            // Validate data
            $errors = $this->validateRecipe($recipe);

            // Save the recipe
            if (empty($errors)) {
                $this->recipeModel->updateRecipe($recipe);
                header('Location: index.php');
            }
        }
        // Generate the web page
        require __DIR__ . '/../views/form.php';
    }

    public function deleteRecipe() 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->recipeModel->removeRecipe(trim($_POST['id']));
            header('Location: index.php');
        }
    }

    private function validateRecipe(array $recipe): array
    {
        if (empty($recipe['title'])) {
            $errors[] = 'The title is required';
        }
        if (empty($recipe['description'])) {
            $errors[] = 'The description is required';
        }
        if (!empty($recipe['title']) && strlen($recipe['title']) > 255) {
            $errors[] = 'The title should be less than 255 characters';
        }
        return $errors ?? [];
    }
}
