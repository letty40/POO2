<?php
require_once 'Vehicule.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
$bicycle = new Bicycle('blue', 1,0);
$car = new Car('green', 4, 'electric');


/*echo $bicycle->forward();
var_dump($bicycle);
echo $bicycle->brake();
echo $car->forward();
var_dump($car);
echo $car->forward();
echo $car->forward();
accéder directement à la constante de classe ALLOWED_ENERGIES, sans nécessiter
l’instanciation d’un objet.
var_dump(Car::ALLOWED_ENERGIES); */


$truck = new Truck('black', 2, 40);
$stalone = new Truck( 'purple', 4, 80);
var_dump($stalone);
echo $truck->storageCapacity(80);
echo '<br>';
echo $truck->storageCapacity(100);
echo '<br>';
//echo $truck->currentSpeed(50);
echo '<br>';
echo $truck->forward(20);
echo '<br>';
echo $truck->brake();
echo '<br>';
echo $truck->brake();



