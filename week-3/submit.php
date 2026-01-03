<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: green;">Your Submition</h1>
    <p>Username: <?php echo $_POST["username"];?></p>
    <p>Country of Residence: <?php echo $_POST["country"];?></p>
    <p>Age Range: <?php echo $_POST["ageRange"];?></p>


    <?php
    if(isset($_POST["colours"])){
        echo "<p>Your favorite colours are:</p>";
        echo "<ul>";
        foreach($_POST["colours"] as $colour){
            echo "<li style='color: #89cff0'>$colour</li>";
        }
        echo "</ul>";
    }
    else{
        echo "<p style='color: red;'>You have not selected any colours</p>";
    }
    
    ?>


    <br>
    <a href="/week-3">Back to form</a>
</body>
</html>