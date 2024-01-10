<?php
namespace App\Model;

class Car {
    private $place;
    private $tank;

    public function __construct($nbPlace, $litre)
    {
        $this->place = $nbPlace;
        $this->tank = $litre;
    }

    public function getPlace()
    {
        return $this->place;
    }
    public function setPlace(int $place)
    {
        $this->place = $place;
    }

    public function getTank()
    {
        return $this->tank;
    }
    public function setTank(int $tank)
    {
        $this->tank = $tank;
    }

    public function __toString()
    {
        return sprintf("La voiture a %d places et a %d litres dans le reservoir", $this->place, $this->tank);
    }
}