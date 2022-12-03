<?php
    require_once 'Vehicle.php';
    require_once 'interface/LightableInterface.php';

    class Car extends Vehicle implements LightableInterface
    {
        public const ALLOWED_ENERGIES = ['gasoline', 'electric'];
        private string $energy;
        private int $energyLevel;
        private bool $hasParkBrake = true;

        public function __construct(string $color, int $nbSeats, string $energy)
        {
            parent::__construct($color, $nbSeats);
            $this->energy = $energy;
        }

        public function start(): string
        {
            try {
                if ($this->hasParkBrake == true) {
                    throw new Exception("The handbrake is active");
                }
            } catch(Exception $e) {
                echo "The exception message  : ". $e->getMessage() . "<br/>";
                $this->setParkBrake(false);
            } finally {
                return "My car drives like a donut";
            }
        }
        
        public function switchOn(): bool
        {
            return true;
        }

        public function switchOff(): bool
        {
            return false;
        }
        
        public function getEnergy(): string
        {
            return $this->energy;
        }

        public function setEnergy(string $energy): Car
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }

        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }

        public function setParkBrake(bool $hasParkBrake): void
        {
            $this->hasParkBrake = $hasParkBrake;
        }

        public function getParkBrake(): bool
        {
            return $this->hasParkBrake;
        }
    }
