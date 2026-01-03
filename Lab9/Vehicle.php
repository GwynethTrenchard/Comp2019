<?php

class Vehicle{

    private $make; 
    private $model; 
    private $year;

    // protected constructor to insure an insatce cannot be made
    protected function __construct($make, $model, $year){

        $this->make = $make;
        $this->model = $model;
        $this->year = $year;

    }

    // getters

    private function get_make(){
        return $this->make;
    }
    
    private function get_model(){
        return $this->model;
    }
    
    private function get_year(){
        return $this->year;
    }

    // setters

    public function set_make(){
        return $this->make = $make;

    }
     public function set_model(){
        return $this->model = $model;

    }
     public function set_year(){
        return $this->year = $year;

    }

    // used to  acsess privete getters outside of class and throw and excepotion if it does not exist
    public function __call($name_of_function, $arguments){
        if($name_of_function == "get_make"){
            return $this->get_make();
        }
        elseif($name_of_function == "get_model"){
            return $this->get_model();
        }
          elseif($name_of_function == "get_year"){
            return $this->get_year();
        }
        else{
            return throw new Exception("Method dose not exist");
        }
    }
    
    
}



?>