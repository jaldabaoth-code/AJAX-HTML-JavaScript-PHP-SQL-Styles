<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <title>PHP Array</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
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