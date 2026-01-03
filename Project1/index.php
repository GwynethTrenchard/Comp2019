<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
</head>
<body>

    <!-- to include the db connection file -->
    <?php include"db-conn.php"?> 

    <h1>Places</h1>

    <ul>
        <!-- this foreach loop will go through all the places in the db -->
        <?php foreach($places as $place) { ?>
            
        <!-- this block will display each place as a link to their respective place.php page in a list -->
        <li>
            <a href="place.php?id=<?php echo $place["id"]; ?>"><?php echo $place["name"];?></a>
        </li>
      <?php } ?>

    </ul>


</body>
</html>