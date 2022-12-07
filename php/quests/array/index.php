<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Array</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Array - Quest</h1>
        <h2>Array</h2>
        <?php
            $movies["Raiders of the Lost Ark"] = 1981;
            $movies["Indiana Jones and the Temple of Doom"] = 1984;
            $movies["Indiana Jones and the Last Crusade"] = 1989;
            asort($movies);
            foreach ($movies as $movie => $year) {
                echo $year . " - " . $movie . " <br/>";
            }
        ?>
    </body>
</html>
