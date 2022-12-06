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
        <a href="/">Home</a>
        <h1>Your Recipe</h1>

        <?php foreach ($errors as $error) : ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>

        <form action="" method="post">
            <div>
                <label for="title">Title</label>
                <input id="title" name="title" type="text" value="<?= $recipe['title'] ?? '' ?>">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description"><?= $recipe['description'] ?? '' ?></textarea>
            </div>
            <button>Send</button>
        </form>
    </body>
</html>
