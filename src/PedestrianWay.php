<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    public function addVehicule(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle)
        {
            $this->currentVehicules[] = $vehicle;
            return 'Let\'s go but don\'t exceed 10km/h !<br>';
        } else {
            return "This vehicle is not available <br>";
        }
        
    }
}