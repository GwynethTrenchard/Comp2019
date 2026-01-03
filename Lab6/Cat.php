<?php

include "Animal.php";

class Cat extends Animal{

    private $breed;


    public function __construct($name, $age, $breed){

        parent::__construct($name, $age);
        $this->breed = $breed;

    }

    public function set_breed($breed){
        $this->breed = $breed;
    }

    public function get_breed(){
        return $this->breed;
    }
}



?>