<!doctype html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title><?= $recipe['title'] ?></title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <a href="/">Home</a>
        <h1><?= $recipe['title'] ?></h1>

        <div>
            <?= $recipe['description'] ?>
        </div>
    </body>
</html>
