<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="./style.css">
        <title>SQL Advanced</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>SQL Advanced - Quest</h1>
        <h2>Advanced</h2>
        <pre>
            <h3>Insert</h3>
            <?php
                include 'includes/insert.sql';
            ?>
            <h3>Join</h3>
            <?php
                include 'includes/advanced.sql';
            ?>
        </pre>
    </body>
</html>
