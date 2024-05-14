<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;

var_dump($bike);
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
?><br>
<?php
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck=new Truck(1000, 'blue', 4, 'electric');
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' .  $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->addToCharge(10);
echo 'truck load status :' . $truck->isFull().

var_dump($truck);