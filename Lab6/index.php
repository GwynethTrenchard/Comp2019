<?php

include "Cat.php";

// Please note this is my real cat, i love her dearly but i have no clue what breed she is,
// she was born under my best frinds bed form the stay cat they took in. All i know is she is 
// fluffy, cuddly and adorable and i love her so much

$shadow = new Cat("Shadow", "8", "Average Cat");
echo "My Cats name is {$shadow->get_name()}, ";
echo "she is {$shadow->get_age()} years old, ";
echo "and she is a {$shadow->get_breed()}<br>";

echo "<br>";

$shadow->set_name("My baby");
$shadow->set_age("9");
$shadow->set_breed("A loaf");

echo "My Cat is also {$shadow->get_name()}, ";
echo "she will be {$shadow->get_age()} soon, ";
echo "and she is a {$shadow->get_breed()}<br>";

?>
