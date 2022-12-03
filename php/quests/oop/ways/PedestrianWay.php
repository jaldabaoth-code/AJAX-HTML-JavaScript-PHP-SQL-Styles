<?php
    require_once 'HighWay.php';

    final class PedestrianWay extends HighWay
    {
        public function __construct(int $nbLane = 1, int $maxSpeed = 10)
        {
            parent::__construct($nbLane, $maxSpeed);
        }

        public function addVehicle(Vehicle $vehicle)
        {
            if (!$vehicle instanceof Car && !$vehicle instanceof Truck ) {
                $this->setCurrentVehicles($vehicle);
                echo "authorized";
            } else {
                echo "not authorized";
            }
        }
    }
