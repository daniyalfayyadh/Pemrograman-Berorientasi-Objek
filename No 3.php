<?php 

require_once '../Interface Abstract/Abstract.php';
require_once '../Interface Abstract/Interface.php';

class Animal  
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function eat()
    {
        return $this->name . ' sedang makan';
    }
}

class Homosapiens extends Animal {}

class Airplane2 extends Vehicle implements Flyer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }
    
    public function takeOff()
    {
        return "$this->name lepas landas";
    }
    
    public function land()
    {
        return "$this->name mendarat";
    }

    public function fly()
    {
        return "$this->name dalam perjalanan";
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        
        return ceil($fuel /= $trip);
    }
}

class Superman2 extends Homosapiens implements Flyer
{
    public function takeOff()
    {
        return "$this->name mengejar maling";
    }
    
    public function land()
    {
        return "$this->name melawan maling";
    }

    public function fly()
    {
        return "$this->name memberikan pukulan";
    }

    public function leapBuilding()
    {
        return "maling terjatuh dan tertabrak";
    }

    public function stopBullet()
    {
        return "Polisi menembaki $this->name namun terpleset";
    }
}

$singa = new Animal('komodo');
$manusia = new Homosapiens('messi');
$airplane2 = new Airplane2(20000, 'kapal');
$superman2 = new Superman2('polisi');