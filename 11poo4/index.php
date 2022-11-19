<?php
    require_once 'Car.php';

    $car = new Car();

    /* Sans le frein a main */
    $car->setParkBrake(false);
    echo $car->start();
    echo '<br/><br/>';
    var_dump ($car->getParkBrake());



    echo '<br/><br/>';


    /* Avec le frein a main */
    $car->setParkBrake(true);
    var_dump ($car->getParkBrake());
    echo $car->start();
    echo '<br/><br/>';
    var_dump ($car->getParkBrake());
?>