<?php

require_once './src/Car.php';

class Truck extends Car
{

    private int $storageCapacity;
    private int $load = 0;



    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(string $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
    public function loading(): string
        {
            if ($this->getStorageCapacity() > $this->getLoad()) {
                return "in filling";
            } else {
                return "full";
            }
        }
    }