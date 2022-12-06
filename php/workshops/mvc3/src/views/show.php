<!doctype html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/style.css">
        <title>PHP MVC 3</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../../includes/navbar.php';
        include '../../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP MVC 3 - Workshop</h1>
        <h2><?= $recipe['title'] ?></h2>
        <p>
            <?= $recipe['description'] ?>
        </p>
        <div class="toto">
            <a class="edit" href="edit?id=<?= $recipe['id'] ?>">Edit</a>
            <form action="delete" class="formDelete" method="POST">
                <input type="hidden" value="<?= $recipe['id'] ?>" name="id">
                <button class="delete">Remove</button>
            </form>
        </div>
    </body>
</html>
