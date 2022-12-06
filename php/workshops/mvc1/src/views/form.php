<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>Recipe</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <div class="form">
            <h1>FORMULAIRE RECIPE</h1>

            <form action="" method="POST" class="login">
                <?php if (!empty($errors)) : ?>
                    <ul class="error">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div>
                    <label  for="title">Un titre :</label>
                    <input  type="text"  id="title"  name="title" placeholder="Un titre" required>

                </div>
                <div>
                    <label  for="description">Une Description :</label>
                    <textarea  id="description"  name="description" required></textarea>
                </div>
                <div  class="button">
                    <button  type="submit" class="button">Envoyer</button>
                </div>
            </form>
        </div>
    </body>
</html>
