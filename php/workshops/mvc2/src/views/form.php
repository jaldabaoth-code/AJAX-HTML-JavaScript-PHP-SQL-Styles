<!doctype html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../../includes/head.html';
        ?>
        <title>Add Your Recipe</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../../includes/navbar.php';
        include '../../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP MVC 2 - Workshop</h1>
        <h2>Recipe Form</h2>
        <div class="form">
            <form action="" method="POST">
                <ul class="error">
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
                <div>
                    <label for="title">Title :</label>
                    <input id="title" name="title" type="text" value="<?= $recipe['title'] ?? '' ?>">
                </div>
                <div>
                    <label for="description">Description :</label>
                    <textarea id="description" name="description"><?= $recipe['description'] ?? '' ?></textarea>
                </div>
                <button type="submit" class="button">Send</button>
            </form>
        </div>
    </body>
</html>
