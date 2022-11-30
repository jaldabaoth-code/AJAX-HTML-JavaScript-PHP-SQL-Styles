<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/style.css">
        <title>Xdebug</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h1>Xdebug</h1>
        <?php
            var_dump(array('CodeIgniter', 'php', 'phpMyAdmin', 'lucidar.me'));
        ?>
    </body>
</html>
