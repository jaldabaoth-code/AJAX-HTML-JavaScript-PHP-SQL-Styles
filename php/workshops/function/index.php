<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Function</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Function - Workshop</h1>
        <h2>Function</h2>
        <?php
            require("src/function.php");
            $watchmenList = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];
            echo whoAmI('Dr. Manhattan', $watchmenList);
        ?>
    </body>
</html>
        