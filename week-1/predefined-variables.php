<?php 
echo 'The data contained in "$_GET" is: '; 
print_r($_GET);#This will print the contents of the $_GET query string superglobal array
echo $_GET["name"];
echo "<br>";
print_r($_POST);#This will print the contents of the $_POST which is the data sent to the server from the form
?>