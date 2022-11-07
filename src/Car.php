<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    protected string $energy;

    protected int $energyLevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private bool $hasParkBreak = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function start()
    {
        if ($this->getHasParkBreak()) {
            throw new Exception("Le frein à main est serré");
        }
        echo $this->forward(15);
        return "Allons y" . "<br>";
    }
    /**
     * Get the value of hasParkBreak
     */
    public function getHasParkBreak(): bool
    {
        return $this->hasParkBreak;
    }

    /**
     * Set the value of hasParkBreak
     *
     * @return  self
     */
    public function setHasParkBreak(bool $hasParkBreak): self
    {
        $this->hasParkBreak = $hasParkBreak;

        return $this;
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
}
