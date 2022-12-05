<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP OOP</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP OOP - Lesson</h1>
        <h2>OOP</h2>
        <?php
            require_once 'vehicles/Bicycle.php';
            $bike = new Bicycle();
            var_dump($bike);
            echo '....................................................................................<br>';
            $bike->setColor('blue');
            $bike->currentSpeed = 0;
            var_dump($bike); // Then, another dump
            echo '....................................................................................<br>';
            echo '....................................................................................<br>';
            // Moving bike
            echo $bike->forward();
            echo '<br>Bike speed : ' . $bike->currentSpeed . ' kph' . '<br>';
            echo $bike->brake();
            echo '<br>Bike speed : ' . $bike->currentSpeed . ' kph' . '<br>';
            echo $bike->brake();
            echo '<br>';
            echo '....................................................................................<br>';
            echo '....................................................................................<br>';
            // Instantiating a new $rockrider object
            $rockrider = new Bicycle('yellow');
            $rockrider->color = 'yellow';
            var_dump($rockrider); // Then, another dump
            echo '....................................................................................<br>';
            // Instantiating a new $tornado object
            $tornado = new Bicycle();
            $tornado->color = 'black';
            $tornado->forward();
            var_dump($bike);
        ?>
    </body>
</html>
