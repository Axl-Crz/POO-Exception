<?php
require './src/Car.php';
require './src/Bicycle.php';
require './src/Truck.php';


$tesla = new Car('green', 4, 'electric');

try {
    echo $tesla->start();

} catch(Exception $e) {
    echo "Attention ! ". $e->getMessage() . "<br>";
}
$tesla->setHasParkBreak(false);

try {
    echo $tesla->start();

} catch(Exception $e) {
    echo "Attention ! ". $e->getMessage() . "<br>";
} finally {
    echo "Ma voiture roule comme un donut" . "<br>";
}