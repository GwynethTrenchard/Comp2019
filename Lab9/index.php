<?php

require "Car.php";

$newCar = new Car("Toyota", "Corolla", "2023", "CACP 344");

echo "The cars make is {$newCar->get_make()} , its model is {$newCar->get_model()}, its year is {$newCar->get_year()} and the plate number is {$newCar->get_plate_number()}";


?>