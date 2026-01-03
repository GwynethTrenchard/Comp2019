<?php

echo "<h1>Details Page</h1>";
echo "<br>";
include "db-conn.php";
//grab the row from db
$id = $_GET["id"];//to get id from the url
$sqlQuerry = "SELECT * FROM places WHERE id= :id"; //match id form places that matches id from url
$result = $pdo->prepare($sqlQuerry);
$result->execute(array("id" => $id )); // associate the url id with the $id 
$place = $result->fetch();

//showing the results attributes
echo "<br>";
echo "<br>";
echo "<b>Name:</b> {$place['name']}";
echo "<br>";
echo "<br>";
echo "<b>Description:</b> {$place['description']}";
echo "<br>";
echo "<br>";
echo "<b>Max Number of Guests:</b> {$place['max_guest']}";
echo "<br>";
echo "<br>";
echo "<b>Number of Rooms:</b> {$place['number_rooms']}";
echo "<br>";
echo "<br>";
echo "<b>Number of Bathrooms:</b> {$place['number_bathrooms']}";
echo "<br>";
echo "<br>";
echo "<b>Price per night($):</b> {$place['price_by_night']}";
echo "<br>";
echo "<br>";
// create a link back to index.php
echo "<a href='index.php'>Back to listings</a>"



?>