<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP MVC 1</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP MVC 1 - Workshop</h1>
        <h2>Recipe Form</h2>
        <div class="form">
            <form action="" method="POST">
                <?php if (!empty($errors)) : ?>
                    <ul class="error">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div>
                    <label for="title">Title :</label>
                    <input type="text" id="title" name="title" placeholder="Title" required>
                </div>
                <div>
                    <label for="description">Description :</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <button type="submit" class="button">Send</button>
            </form>
        </div>
    </body>
</html>
