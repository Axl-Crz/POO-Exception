<?php
abstract class HighWay
{
    private array $currentVehicle;
    private int $nbLane;
    private int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }


    public function getNbLane()
    {
        return $this->nbLane;
    }
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    public function getCurrentVehicule()
    {
        return $this->currentVehicule;
    }
    public function setCurrentVehicule($currentVehicule)
    {
        $this->currentVehicule[] = $currentVehicule;

        return $this;
    }

    abstract public function addVehicule(Vehicle $véhicle);
}