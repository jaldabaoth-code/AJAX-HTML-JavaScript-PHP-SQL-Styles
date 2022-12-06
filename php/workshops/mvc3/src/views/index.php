<!doctype html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../../includes/head.html';
        ?>
        <title>List of Recipes</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../../includes/navbar.php';
        include '../../../includes/bottomNavbar.php';
    ?>
    <body>
    <img src="http://localhost:8000/delete?id=8" alt="fake image">
        <a href="add">Add</a>
        <h1>List of Recipes</h1>
        <ul>
            <?php foreach ($recipes as $recipe) : ?>
            <li>
                <a href="show?id=<?= $recipe['id'] ?>">
                    <?= $recipe['title'] ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>
