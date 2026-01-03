<?php
// echo "Lab 8"
require "places-form.php";

// Normalize and cast the POST values to avoid undfined variables and type issues

// trim is a built in function to remove white space
$city_id = isset($_POST["city_id"]) && $_POST["city_id"] !== "" ? trim($_POST["city_id"]) : null;
$user_id = isset($_POST["user_id"]) && $_POST["user_id"] !== "" ? trim ($_POST["user_id"]) : null; 
$name = isset($_POST["name"]) && $_POST["name"] !== "" ? trim ($_POST["name"]) : ""; 
$description = isset($_POST["description"]) ? trim ($_POST["description"]) : ""; 
$number_rooms = isset($_POST["number_rooms"]) && $_POST["number_rooms"] !== "" ? (int)$_POST["number_rooms"] : null; 
$number_bathrooms = isset($_POST["number_bathrooms"]) && $_POST["number_bathrooms"] !== "" ? (int)$_POST["number_bathrooms"] : null;
$max_guest = isset($_POST["max_guest"]) && $_POST["max_guest"] !== "" ? (int)$_POST["max_guest"] : null; 
$price_by_night = isset($_POST["price_by_night"]) && $_POST["price_by_night"] !== "" ? (int)$_POST["price_by_night"] : null; 
$latitude = 0;
$longitude = 0;


// Validation for city id that it exixts in cities table
if($city_id === null){
    echo "Error: No city has been selected, please choose a city.";
    exit;
}
$checkCitySql = "SELECT 1 FROM cities WHERE id= :id";
$resultCity = $pdo->prepare($checkCitySql);
$resultCity->execute([":id" => $city_id]);
if($resultCity->fetchColumn() === false){
    echo "Error: Selected city does not exist.";
    exit;
}

//Validation for the user id that it exists in users table
if($user_id === null){
    echo "Error: No user has been selected, please choose a user.";
    exit;
}
$checkUserSql = "SELECT 1 FROM users WHERE id= :id";
$resultUser = $pdo->prepare($checkUserSql);
$resultUser->execute([":id" => $user_id]);
if($resultUser->fetchColumn() === false){
    echo "Error: Selected user does not exist.";
    exit;
}

// SQL querry to instert a new row to places
$insertToPlaceSql = "INSERT INTO places (id, created_at, updated_at, city_id, user_id, name, description, number_rooms, number_bathrooms,
 max_guest, price_by_night, latitude, longitude) VALUES(UUID(), NOW(), NOW(), :city_id, :user_id, :name, :description, :number_rooms, :number_bathrooms
 :max_guest, :price_by_night, :latitude, :longitude)";

// prepare and execute the insert statmnent 

$results = $pdo->prepare($insertToPlaceSql);
$sucsess = $results->execute([
    // "UUID()" => $id,
    // "NOW()" => $created_at,
    // "NOW()" => $updated_at,
    ":city_id" => $city_id,
    ":user_id" => $user_id,
    ":name" => $name,
    ":description" => $description,
    ":number_rooms" => $number_rooms,
    ":number_bathrooms" => $number_bathrooms,
    ":max_guest" => $max_guest,
    ":price_by_night" => $price_by_night,
    ":latitude" => $latitude,
    ":longitude" => $longitude
]);

if($sucsess){
    echo "New listing is added";
}
else{
    $error = $sucsess->errorInfo();
    echo "Failed to add listing " . $error[2];
}


?>