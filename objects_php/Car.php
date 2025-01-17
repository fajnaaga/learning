<?php 

class Car {
    public $brand;
    public $color;
    public function drive() {
        echo "drive Car with color " . $this->color;
    }
}

$myCar = new Car();  
$myCar->brand = "Ferrari";  

echo "The car brand is: " . $myCar->brand . "\n";

$myCar->color ="red";
echo "The car color is: " . $myCar->color . "\n";
$myCar->drive();

$myCar2 = new Car();
$myCar2->brand ="Jeep";

echo "The car brand is: " . $myCar2->brand. "\n";

$myCar2->color ="black";
echo "The car color is: " . $myCar2->color . "\n";
$myCar2->drive();
?>

