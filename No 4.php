<?php 

require_once '../Interface Abstract/Abstract.php';
require_once '../Interface Abstract/Interface.php';

class RiverBarge2 extends Vehicle implements Sailer {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        return ceil($fuel /= $trip);
    }

    public function dock() {
        return $this->name . ' berada di dermaga';
    }
    
    public function cruise() {
        return $this->name . ' sedang berlayar';
    }
}

class Airplane2 implements Flyer {
    public function takeOff() {
        return 'mobil sedang berjalan';
    }
    public function land() {
        return 'mobil berjalan';
    }
    public function fly() {
        return 'mobil dalam perjalanan';
    }
}

class SeaPlane extends Vehicle implements Sailer {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        return ceil($fuel /= $trip);
    }

    public function dock() {
        return $this->name . ' berada di dermaga';
    }
    
    public function cruise() {
        return $this->name . ' sedang berlayar';
    }

    public function takeOff() {
        return $this->name . ' sedang berjalan';
    }
    
    public function land() {
        return $this->name . ' berjalan';
    }

    public function fly() {
        return $this->name . ' dalam perjalanan';
    }
}

class Helicopter extends Vehicle {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
        echo $this->name . ' membutuhkan bahan bakar sebanyak ';
        return ceil($fuel /= $trip);
    }
    public function takeOff() {
        return $this->name . ' sedang berjalan';
    }
    
    public function land() {
        return $this->name . ' berjalan';
    }

    public function fly() {
        return $this->name . ' dalam perjalanan';
    }
}

$riverBarge2 = new RiverBarge2(30000, 'kapal');
$seaPlane = new SeaPlane(20000, 'mobil');
$helicopter = new Helicopter(10000, 'bus');