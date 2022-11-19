<?php

class Car
{
    private bool $hasParkBrake = true;

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
    
    public function start(): string
    {
        try{
            if ($this->hasParkBrake == true) {
                throw new Exception("le frein a main est actif");
             }
         } catch(Exception $e){
            echo "Le message d'exception  : ". $e->getMessage() . "<br/>";
            $this->setParkBrake(false);
         } finally{

            return "Ma voiture roule comme un donut";
        }
    }
}
