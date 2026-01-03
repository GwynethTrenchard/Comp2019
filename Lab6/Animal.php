<?php

class Animal{

    protected $name;
    protected $age;

    protected function __construct($name, $age){

        $this->name = $name;
        $this->age = $age;
    }


    public function set_name($name){
        $this->name = $name;
    }
    public function set_age($age){
        $this->age = $age;
    }
    
    public function get_name(){
        return $this->name;
    }
     public function get_age(){
        return $this->age;
    }
}


?>