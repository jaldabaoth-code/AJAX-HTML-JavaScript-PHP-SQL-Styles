<!doctype html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../../includes/head.html';
        ?>
        <title><?= $recipe['title'] ?></title>
    </head>
    <?php
        /* Navbar included */
        include '../../../../includes/navbar.php';
        include '../../../includes/bottomNavbar.php';
    ?>
    <body>
        <a href="/">Home</a>
        <h1><?= $recipe['title'] ?></h1>
        <a href="edit?id=<?= $recipe['id'] ?>">Edit</a>
        <form action="delete" method="POST">
            <input type="hidden" value="<?= $recipe['id'] ?>" name="id">
            <button>Remove</button>
        </form>
        <a href="delete?id=<?= $recipe['id'] ?>">Remove</a>
        <div>
            <?= $recipe['description'] ?>
        </div>
    </body>
</html>
