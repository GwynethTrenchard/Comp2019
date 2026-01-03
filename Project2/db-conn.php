<?php
// Database connection file

// database connection variables
$host = "localhost";
$user = "root";
$pass = "mysql";
$db = "comp2002";
$dsn = "mysql:host=$host;dbname=$db";

try{
    // create a new PDO instance to connect to the database
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // commented out after testing, i kept it in for later debugging if needed
    // echo "Coneccted to db"; 

    // sql querry to grab all palces
    $sqlQuerry = "SELECT * FROM places";
    // here we perpare the sql querry
    $result = $pdo->prepare($sqlQuerry);
    //here we execute the sql querry
    $result->execute();
    // fetch all places and store them places variable
    $places = $result->fetchAll();

// catch any connection errors
}catch(PDOExecption $error){
    echo "Connection failed " . $error->getMessage();
}
?>

