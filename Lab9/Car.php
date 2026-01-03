<?php

require "Vehicle.php";

class Car extends Vehicle{
    private $plate_number;

    public function __construct($make, $model, $year, $plate_number){

        // inharited constructor
        parent::__construct($make, $model, $year);
        // to construst unique member
        $this->plate_number = $plate_number;

    }

    // getter

    public function get_plate_number(){
        return $this->plate_number;
    }

    // setter 
    public function set_plate_number(){
        return $this->plate_number = $plate_number;
    }
}

?>


