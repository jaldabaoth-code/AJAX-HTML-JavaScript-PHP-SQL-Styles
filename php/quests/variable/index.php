<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Variable</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Variable - Quest</h1>
        <h2>Variable</h2>
        <?php
            $movie = "Indiana Jones and the Last Crusade";
            $alreadyWatchedOrNOt = true; 
            $releaseYear = 1989;
            $note = 8.2;
            echo 'Movie : ' . $movie . '</br>';
            echo 'Release Year : ' . $releaseYear . '</br>';
            echo 'Note : ' . $note;
        ?>
    </body>
</html>
