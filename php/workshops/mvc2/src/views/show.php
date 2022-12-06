<!doctype html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../../includes/head.html';
        ?>
        <title>PHP MVC 2</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../../includes/navbar.php';
        include '../../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP MVC 2 - Workshop</h1>
        <h2><?= $recipe['title'] ?></h2>
        <p>
            <?= $recipe['description'] ?>
        </p>
    </body>
</html>
