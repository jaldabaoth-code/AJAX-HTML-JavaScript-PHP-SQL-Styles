<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Multidimensional Array</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Multidimensional Array - Quest</h1>
        <h2>Multidimensional Array</h2>
        <?php
            $movies = [
                'Raiders of the Lost Ark' => ['Harrison Ford', 'Karen Allen', 'Paul Freeman'],
                'Indiana Jones and the Temple of Doom' => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
                'Indiana Jones and the Last Crusade' => ['Harrison Ford', 'Cate Blanchett', 'Shia LaBeouf']
            ];
            foreach($movies as $movieTitle => $nameOfTheActor) {
                echo "In the movie " . $movieTitle . ", the main actors are : " . $nameOfTheActor[0] . ", " . $nameOfTheActor[1] . ", " . $nameOfTheActor[2] . ".<br/>";
            }
        ?>
    </body>
</html>
