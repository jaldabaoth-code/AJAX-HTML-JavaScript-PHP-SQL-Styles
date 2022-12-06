<!doctype html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="assets/styles/style.css">
        <title>PHP MVC 1</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP MVC 1 - Workshop</h1>
        <h2>List of Recipes</h2>
        <?php foreach ($recipes as $recipe) : ?>
            <p>
                <a href="show.php?id=<?= $recipe['id'] ?>">
                    <?= $recipe['title'] ?>
                </a>
            </p>
        <?php endforeach ?>
        <hr>
        <h3><a class="add" href="add.php">Add new recipe</a></h3>
    </body>
</html>
