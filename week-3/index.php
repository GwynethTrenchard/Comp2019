<?php
//countries array
$countries = array("Canada", "Mexico", "China", "Japan", "Germany", "United Kingdom", "France", "Italy");

//age group array
$ageRange = array("0-19", "20-29", "30-39", "40-55", "56 and above");

// colours array
$colours = array("Red", "Green", "Blue", "Purple", "Yellow", "Orange", "Black", "White");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Submission form</h1>
    <form action="submit.php" method="post">
        <lable for="username">Username<span style="color: red">*</span></lable>
        <input type="text" name="username" id="username" required>
        <br>
        <lable for="country">Country of Residence<span style="color: red">*</span></lable>
        <select name="country" id="country" required>
            <option value="">--Select a country--</option>
            <?php
                foreach($countries as $country){
                    echo "<option value='$country'>$country</option>";
                }
            ?>
        </select>
        <br>
        <label for="ageRange">Age Range<span style="color: red">*</span></label>
        <?php
            foreach($ageRange as $age){
                echo "<p><input type='radio' name='ageRange' value='$age'>$age</input></p>";
            }
        ?>
        <br>
        <lable for="colour">Choose all the colours you like:</lable>
        <?php
            foreach($colours as $colour){
                echo "<p><input type='checkbox' name='colours[]' value='$colour'>$colour</input></p>";
            }
        ?>
        <input type="submit" name="" id="">
    </form>
</body>
</html>