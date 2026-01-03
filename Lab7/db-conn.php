<?php
//Lab 7 database connection file
$host = "localhost";
$user = "root";
$pass = "mysql";
$db = "comp2002";
$dsn = "mysql:host=$host;dbname=$db";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Coneccted to db";
    //sql querry to grab all palces
    $sqlQuerry = "SELECT * FROM places";
    $result = $pdo->prepare($sqlQuerry);// here we perpare the sql querry
    $result->execute();//here we execute the sql querry
    $places = $result->fetchAll();

}catch(PDOExecption $error){
    echo "Connection failed " . $error->getMessage();
}
?>