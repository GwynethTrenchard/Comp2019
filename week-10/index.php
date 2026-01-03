<?php

require "Employee.php";

$newPerson = Person::CreateWithInfo("Jane", "Doe", "jane@email.com");
//print_r($newPerson);

echo "<br>";
echo "The person's full name is {$newPerson->get_first_name()} {$newPerson->get_last_name()}";

echo "<br>";
echo "--------------------------------------";
echo "<br>";

$newEmployee = new Employee("Boss", "Da Boss", "bossy@email.com", 123);
//print_r($newEmployee);

echo "The Employee's full name is {$newEmployee->get_first_name()} {$newEmployee->get_last_name()}";


?>