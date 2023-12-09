<?php
class Animals {
    public $number_of_legs;

    function __construct($legs) {
        $this->number_of_legs = $legs;
    }
}

class Farm {
    public $animals = [];

    public function addAnimal(Animals $animal) {
        $this->animals[] = $animal;
    }

    public function getTotalLegs() {
        $totalLegs = 0;
        foreach ($this->animals as $animal) {
            $totalLegs += $animal->number_of_legs;
        }
        return $totalLegs;
    }
}

$cow = new Animals(4);
$pig = new Animals(4);
$chicken = new Animals(2);

$farm = new Farm();
$farm->addAnimal($pig);
$farm->addAnimal($chicken);
$farm->addAnimal($cow);

$total = $farm->getTotalLegs();

//output
echo "total legs : " . $total;