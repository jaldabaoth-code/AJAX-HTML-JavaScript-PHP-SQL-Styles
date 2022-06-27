<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <title>POO</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <?php
            require_once 'vehicles/Vehicle.php';
            require_once 'ways/HighWay.php';
            require_once 'speedometer/Speedometer.php';

            echo '<h2> POO </h2>';

            /* Moving Car */
            $car = new Car('vert', 4, 'électrique');
            echo 'La voiture : ' . $car->getColor() . '<br>';
            $bicycle = new Bicycle('bleu', 1);
            echo 'Le vélo : ' . $bicycle->forward() . '<br>';
            $truck = new Truck('rouge', 3, 'à l\'essence', 20);
            echo 'Le camion : ' . $truck->getColor() . '<br>';
            echo '....................................................................................';


            /* Moving Car */
            echo '<br> <h3>Voiture en mouvement</h3>';
            echo $car->forward();
            echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
            echo $car->brake();
            echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
            echo $car->brake() . '<br>';
            echo '....................................................................................';


            /* Moving Bike */
            echo '<br> <h3>Vélo en mouvement</h3>';
            echo $bicycle->forward();
            echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
            echo $bicycle->brake();
            echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
            echo $bicycle->brake() . '<br>';
            echo '....................................................................................';


            /* Moving Truck */
            echo '<br> <h3>Camion en mouvement</h3>';
            echo 'couleur : ' . $truck->getColor();
            echo $truck->setCurrentCharge(20);
            echo '<br> Le chargement actuellement est de : ' . $truck->getCurrentCharge() . '<br>';
            echo $truck->setStorageCapacity(40);
            echo '<br> Quand la capacité est de 40 : ' . $truck->isFull() . '<br>';
            echo $truck->setStorageCapacity(20);
            echo '<br> Quand capacité est de 20 : ' . $truck->isFull() . '<br>';
            echo '....................................................................................';


            /* Add vehicules */
            echo '<br> <h3>Ajouter les vehicules</h3>';

            /* Motorway : any type of car */
            echo '<h4>Autoroute : tout type de voiture</h4>';
            $motorWay = new MotorWay();
            echo 'Camion : ';
            $motorWay->addVehicle($truck);
            echo '<br> Voiture : ';
            $motorWay->addVehicle($car);
            echo '<br> Vélo : ';
            $motorWay->addVehicle($bicycle);

            /* ResidentialWay : any type of vehicle */
            echo '<br> <h4>Chemin Résidentiel : tout type de véhicule</h4>';
            $residentialWay = new ResidentialWay();
            echo 'Camion : ';
            $residentialWay->addVehicle($truck);
            echo '<br> Voiture : ';
            $residentialWay->addVehicle($car);
            echo '<br> Vélo : ';
            $residentialWay->addVehicle($bicycle);

            /* PedestrianWay : Bike et Skateboard uniquely */
            echo '<br> <h4>Voie piétonne : vélo et skateboard uniquement</h4>';
            $pedestrianWay = new PedestrianWay();
            echo 'Camion : ';
            $pedestrianWay->addVehicle($truck);
            echo '<br> Voiture : ';
            $pedestrianWay->addVehicle($car);
            echo '<br> Vélo : ';
            $pedestrianWay->addVehicle($bicycle);
            echo '<br>';
            echo '....................................................................................';
            echo '<br>';


            /* Moving Truck */
            echo '<h3>Les freins - Les exceptions</h3>';

            /* Without the handbrake */
            echo '<h4>Sans le frein à main</h4>';
            $car->setParkBrake(false);
            echo $car->start();

            /* With the handbrake */
            echo '<br> <h4>Avec le frein à main</h4>';
            $car->setParkBrake(true);
            echo $car->start();
            echo '<br>';
            echo '....................................................................................';
            echo '<br>';


            /* Converter (KM/MILES) */
            echo '<h3>Convertisseur (KM/MILES)</h3>';

            /* Convert from KM to MILES */
            echo '<h4>Convetir de KM à MILES</h4>';
            $valueKm = 10;
            echo $valueKm . ' KM est ' . Speedometer::convertKmToMiles($valueKm) . ' MILES';
            
            /* Convert from MILES to KM */
            echo '<h4>Convetir de MILES à KM</h4>';
            $valueMiles = 10;
            echo $valueMiles . ' MILES est ' . Speedometer::convertMilesToKm($valueMiles) . ' KM';
        ?>
    </body>
</html>
