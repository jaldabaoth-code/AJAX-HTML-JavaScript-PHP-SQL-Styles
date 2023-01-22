<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Information</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <?php
            // Display all information, as would INFO_ALL
            phpinfo();
            // Show only the information module
            phpinfo(INFO_CONFIGURATION);
        ?>
    </body>
</html>
