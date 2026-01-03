<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Room Selection</h1>
    <p>Thank you for your submition, <?php echo $_POST["name"];?></p>
    <p>Room type: <?php echo $_POST["roomTypes"];?></p>

    <?php
    echo "Amenities: ";
    if(isset($_POST["amenities"])){
        
        
        foreach($_POST["amenities"] as $amenitie){
            echo "$amenitie, ";
            
        }
       
    }
    else{
        echo "<p>No Amenities</p>";
    }
    
    ?>

    <p>Bed Types: <?php echo $_POST["bedTypes"];?></p>

</body>
</html>