<?php
require "person.php";

class Employee extends Person{

    private $employee_ID; 

    public function __construct($first_name, $last_name, $email, $employee_ID){
        parent::__construct($first_name, $last_name, $email);
        $this->employee_ID = $employee_ID;
    }

    // Getter 

    public function get_employee_ID(){
        return $this->employee_ID;
    }

    // setter 
    public function set_employee_ID(){
        $this->employee_ID = $employee_ID;
    }


}


?>