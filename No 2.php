<?php 

require_once '../Interface Abstract/Interface.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Mobil berjalan cepat..';
    }
    
    public function land() {
        return 'mobil berjalan';
    }

    public function fly() {
        return 'mobil dalam perjalanan';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Budi mencari makan';
    }
    
    public function land() {
        return 'Budi kembali pulang';
    }

    public function fly() {
        return 'Budi keluar';
    }

    public function buildNest() {
        return 'Budi membuat minuman';
    }

    public function layEggs() {
        return 'budi beraktivitas';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'polisi mengejar maling';
    }
    
    public function land() {
        return 'polisi melawan maling';
    }

    public function fly() {
        return 'polisi memberikan pukulan';
    }

    public function leapBuilding() {
        return 'maling terjatuh dan tertabrak mobil';
    }

    public function stopBullet() {
        return 'Polisi menembaki maling namun terpleset';
    }
}

$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;