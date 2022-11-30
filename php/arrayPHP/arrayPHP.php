<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/formStyle.css">
        <title>Array PHP</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h1>Array PHP</h1>
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
