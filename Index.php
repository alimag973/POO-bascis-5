<?php 

require './Vehicle.php';
require './Bicycle.php';
require './Car.php';
require_once './LightableInterface.php';


$car = new Car('black', 5, 'diesel');
var_dump($car);

echo $car->switchOn() . PHP_EOL;


$velo = new Bicyle('green', 1);
var_dump($velo);

$velo->setCurrentSpeed(5);

echo $velo->switchOn() . PHP_EOL;

$velo->setCurrentSpeed(15);

echo $velo->switchOn() . PHP_EOL;