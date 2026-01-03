<?php

include "db-conn.php";


// grab the row from db places table

// to get the place id from the url
$place_id = $_GET["id"];
// stores the sql querry in a variable
$sqlQuerry = "SELECT * FROM places WHERE id= :id";
// prepares the sql querry
$result = $pdo->prepare($sqlQuerry);
// executes the sql querry with the place id from the url
$result->execute(array("id" => $place_id ));
// store the fetched row in a variable
$place = $result->fetch();


// grab the row from db cities table

// to get the city id from the place row
$city_id = $place['city_id'];
// stores the sql querry in a variable
$sqlQuerry_city = "SELECT * FROM cities WHERE id = :id";
// prepares the sql querry
$result_city = $pdo->prepare($sqlQuerry_city);
// executes the sql querry with the city id from the place row
$result_city->execute(array("id" => $city_id));
// store the fetched row in a variable
$city = $result_city->fetch();



// grab the row from db users table

// to get the user id from the place row
$user_id = $place['user_id'];
// stores the sql querry in a variable
$sqlQuerry_user = "SELECT * FROM users WHERE id = :id";
// prepares the sql querry
$result_user = $pdo->prepare($sqlQuerry_user);
// executes the sql querry with the user id from the place row
$result_user->execute(array("id" => $user_id));
// store the fetched row in a variable
$user = $result_user->fetch();

// im not going to comment all of these blocks since most are the same as above, but i will comment the diffrences when the occur,
// if another comment is not added, assume its the same as previous blocks


// display place name
echo "<h1>{$place['name']}</h1>";
// display place description
echo "{$place['description']}";
 
echo "<br>";
echo "<br>";
echo "City: ";
// code below creates a link to the city.php page and user.php 
// with the city id or user id in the url 
// and displays the city name or user first and last name as the link text respectively
?>

<a href="city.php?id=<?php echo $city["id"]; ?>"><?php echo $city["name"]; echo "<br>";?></a>
<br>
<a href="user.php?id=<?php echo $user["id"]; ?>"><?php echo $user["first_name"]; echo " "; echo $user["last_name"];?></a>

<?php

echo "<br>";
echo "<br>";
// code below displays the other details about the place
echo "Price: $<b>{$place['price_by_night']}</b>";
echo "<br>";
echo "<br>";
echo "Number of Rooms: {$place['number_rooms']}";
echo "<br>";
echo "<br>";
echo "Number of Bathrooms: {$place['number_bathrooms']}";
echo "<br>";
echo "<br>";
echo "Max Number of Guests: {$place['max_guest']}";

// create a link back to index.php
echo "<br>";
echo "<br>";
echo "<a href='index.php'>Back to listings</a>"



?>