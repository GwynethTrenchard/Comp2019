<?php
// to include the db connection file
include "db-conn.php";

// grab the row from db cities table
// to get the city id from the url
$city_id = $_GET["id"];
$sqlQuerry_city = "SELECT * FROM cities WHERE id = :id";
$result_city = $pdo->prepare($sqlQuerry_city);
$result_city->execute(array("id" => $city_id));
$city = $result_city->fetch();


// grab the row from db places table
// to get the place id from the city row
$place_id = $city['id'];
$sqlQuerry = "SELECT * FROM places WHERE id= :id";
$result = $pdo->prepare($sqlQuerry);
$result->execute(array("id" => $place_id ));
$place = $result->fetch();

// grab the row from db states table
// to get the state id from the city row
$state_id = $city['state_id'];
$sqlQuerry_states = "SELECT * FROM states WHERE id= :id";
$result_states = $pdo->prepare($sqlQuerry_states);
$result_states->execute(array("id" => $state_id ));
$state = $result_states->fetch();

// display city name
echo "<h1>{$city['name']}</h1>";
echo "<br>";
// display state name
echo $state["name"];
?>


     <ul>
        <!-- loop to iterate through places as place -->
        <?php foreach($places as $place)  { 
            // check if the place's city_id matches the current city id
            if($place['city_id'] == $city['id']) {
            ?>
        
        <li>
            <!-- to display the place name as a link to place.php and pass the place id in the url -->
            <a href="place.php?id=<?php echo $place["id"]; ?>"><?php echo $place["name"];?></a>
        </li>
      <?php } } ?>

    </ul>

    <!-- to return back to index page -->
<?php echo "<a href='index.php'>Back to listings</a>"?>