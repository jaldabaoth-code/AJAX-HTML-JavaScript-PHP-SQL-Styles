<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="./style.css">
        <title>SQL Kaamelott</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>SQL Kaamelott - Quest</h1>
        <h2>Kaamelott</h2>
        <pre>
            <h3>File : kaamelott.sql</h3>
            <?php
                include 'includes/kaamelott.sql';
            ?>
        </pre>
    </body>
</html>
