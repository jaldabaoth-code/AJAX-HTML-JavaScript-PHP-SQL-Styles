<?php
    abstract class HighWay
    {
        protected array $currentVehicles = [];
        protected int $nbLane;
        protected int $maxSpeed;

        public function __construct(int $nbLane, int $maxSpeed)
        {
            $this->nbLane = $nbLane;
            $this->maxSpeed = $maxSpeed;
        }

        abstract public function addVehicle(Vehicle $vehicle);

        public function getCurrentVehicles()
        {
            return $this->currentVehicles;
        }

        public function setCurrentVehicles(Vehicle $vehicle)
        {
            $this->currentVehicles[] = $vehicle;
        }

        public function getNbLane()
        {
            return $this->nbLane;
        }

        public function setNbLane(int $nbLane)
        {
            $this->nbLane = $nbLane;
        }

        public function getMaxSpeed(): int
        {
            return $this->maxSpeed;
        }

        public function setMaxSpeed(int $maxSpeed)
        {
            $this->maxSpeed = $maxSpeed;
        }
    }
