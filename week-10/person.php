<?php
class Person{

    private $first_name;
    private $last_name;
    private $email;

    protected function __construct($first_name, $last_name, $email){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    public static function CreateWithInfo($first_name, $last_name, $email){
        return new Person($first_name, $last_name, $email);
    }

    public static function CreateDefault(){
        return new Person(null, null, null);
    }
    // this function allows you to acsess privete members outside of class
    public function __call($name_of_function, $arguments){
        if($name_of_function == "get_first_name"){
            return $this->get_first_name();
        }
        elseif($name_of_function == "get_last_name"){
            return $this->get_last_name();
        }
        else{
            return throw new Exception("Method dose not exist");
        }
    }
    
    // Getters
    private function get_first_name(){
        return $this->first_name;
    }
    
    private function get_last_name(){
        return $this->last_name;
    }

    private function get_email(){
        return $this->email;
    }

    // setters

    public function set_first_name($first_name){
        $this->first_name = $first_name;


    }





}

?>