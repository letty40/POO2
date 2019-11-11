
<?php
require_once 'Vehicule.php';
class Car extends Vehicule
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private $energy;
    private $energyLevel;
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    /* public function __construct(string $color, int $nbSeats, string $energy)
     {
         parent::__construct($color, $nbSeats, $energy);
         $this->setEnergy = ($energy);
     }*/
    public function getEnergy(): string
    {
        return $this->getEnergy();
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES))
        {
            $this->energy = $energy;
        }
        return $this;
    }
    /*public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }*/
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}