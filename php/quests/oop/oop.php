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
        <?php
            require_once 'vehicles/Vehicle.php';
            require_once 'ways/HighWay.php';
            require_once 'speedometer/Speedometer.php';

            echo '<h1>PHP OOP - Quest</h1>';
            echo '<h2>OOP</h2>';
            /* Moving Car */
            $car = new Car('Green', 4, 'electric');
            echo 'The car : ' . $car->getColor() . '<br>';
            $bicycle = new Bicycle('Blue', 1);
            echo 'The bike : ' . $bicycle->forward() . '<br>';
            $truck = new Truck('Red', 3, 'gasoline', 20);
            echo 'The truck : ' . $truck->getColor() . '<br>';
            echo '....................................................................................';
            echo '....................................................................................';
            /* Moving Car */
            echo '<br> <h3>The moving car</h3>';
            echo $car->forward();
            echo '<br> The car speed : ' . $car->getCurrentSpeed() . ' kph' . '<br>';
            echo $car->brake();
            echo '<br> The car speed : ' . $car->getCurrentSpeed() . ' kph' . '<br>';
            echo $car->brake() . '<br>';
            echo '....................................................................................';
            echo '....................................................................................';
            /* Moving Bike */
            echo '<br> <h3>The bike in motion</h3>';
            echo $bicycle->forward();
            echo '<br> The bike speed : ' . $bicycle->getCurrentSpeed() . ' kph' . '<br>';
            echo $bicycle->brake();
            echo '<br> The bike speed : ' . $bicycle->getCurrentSpeed() . ' kph' . '<br>';
            echo $bicycle->brake() . '<br>';
            echo '....................................................................................';
            echo '....................................................................................';
            /* Moving Truck */
            echo '<br> <h3>The moving truck</h3>';
            echo 'The color : ' . $truck->getColor();
            echo $truck->setCurrentCharge(20);
            echo '<br> The current load is : ' . $truck->getCurrentCharge() . '<br>';
            echo $truck->setStorageCapacity(40);
            echo '<br> When the capacity is 40 : ' . $truck->isFull() . '<br>';
            echo $truck->setStorageCapacity(20);
            echo '<br> When the capacity is 20 : ' . $truck->isFull() . '<br>';
            echo '....................................................................................';
            echo '....................................................................................';
            /* Add vehicules */
            echo '<br> <h3>Add vehicles</h3>';
            /* Motorway : Any type of car */
            echo '<h4>Motor way : Any type of car</h4>';
            $motorWay = new MotorWay();
            echo 'The truck : ';
            $motorWay->addVehicle($truck);
            echo '<br> The car : ';
            $motorWay->addVehicle($car);
            echo '<br> The bike : ';
            $motorWay->addVehicle($bicycle);
            /* ResidentialWay : Any type of vehicle */
            echo '<br> <h4>Residential way : Any type of vehicle</h4>';
            $residentialWay = new ResidentialWay();
            echo 'The truck : ';
            $residentialWay->addVehicle($truck);
            echo '<br> The car : ';
            $residentialWay->addVehicle($car);
            echo '<br> The bike : ';
            $residentialWay->addVehicle($bicycle);
            /* PedestrianWay : Bike et Skateboard uniquely */
            echo '<br> <h4>Pedestrian way : Bike and skateboard only</h4>';
            $pedestrianWay = new PedestrianWay();
            echo 'The truck : ';
            $pedestrianWay->addVehicle($truck);
            echo '<br> The car : ';
            $pedestrianWay->addVehicle($car);
            echo '<br> The bike : ';
            $pedestrianWay->addVehicle($bicycle);
            echo '<br>';
            echo '....................................................................................';
            echo '<br>';
            echo '....................................................................................';
            /* Moving Truck */
            echo '<h3>The brakes - Exceptions</h3>';
            /* Without the handbrake */
            echo '<h4>Without the handbrake</h4>';
            $car->setParkBrake(false);
            echo $car->start();
            /* With the handbrake */
            echo '<br> <h4>With the handbrake</h4>';
            $car->setParkBrake(true);
            echo $car->start();
            echo '<br>';
            echo '....................................................................................';
            echo '<br>';
            echo '....................................................................................';
            /* Converter (KM/MILES) */
            echo '<h3>Converter (KM/MILES)</h3>';
            /* Convert from KM to MILES */
            echo '<h4>Convert from KM to MILES</h4>';
            $valueKm = 10;
            echo $valueKm . ' KM is ' . Speedometer::convertKmToMiles($valueKm) . ' MILES';
            /* Convert from MILES to KM */
            echo '<h4>Convert from MILES to KM</h4>';
            $valueMiles = 10;
            echo $valueMiles . ' MILES is ' . Speedometer::convertMilesToKm($valueMiles) . ' KM';
        ?>
    </body>
</html>
