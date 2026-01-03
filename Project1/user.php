<?php
// to include the db connection file
include "db-conn.php";

// grab the row from db users table
// to get the user id from the url
$user_id = $_GET["id"];
$sqlQuerry_user = "SELECT * FROM users WHERE id = :id";
$result_user = $pdo->prepare($sqlQuerry_user);
$result_user->execute(array("id" => $user_id));
$user = $result_user->fetch();

// grab the row from db places table
// to get the place id from the user row
$place_id = $user['id'];
$sqlQuerry = "SELECT * FROM places WHERE id= :id";
$result = $pdo->prepare($sqlQuerry);
$result->execute(array("id" => $place_id ));
$place = $result->fetch();


// display user first and last name as a header
echo "<h1>{$user['first_name']} {$user['last_name']}</h1>";
?>

     <ul>
        <!-- loop to iterate through places as place -->
        <?php foreach($places as $place)  { 
            // check if the place's user_id matches the current user id
            if($place['user_id'] == $user['id']) {
            ?>
        
        <li>
            <!-- to display the place name as a link to place.php and pass the place id in the url -->
            <a href="place.php?id=<?php echo $place["id"]; ?>"><?php echo $place["name"];?></a>
        </li>
      <?php } } ?>

    </ul>

    <!-- to return back to index page -->
<?php echo "<a href='index.php'>Back to listings</a>"?>