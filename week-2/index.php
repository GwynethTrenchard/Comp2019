<?php
    //variables
    //string
    $title = "Lecture 2";
    //integer
    $num = 10;
    //float
    $float = 10.5;
    //array
    $arr = [1,2,3,4,5];
    //or
    $arr2 = array(1,2,3,4,5);
    //associative array aka dictionary aka object aka hash table
    $arr3 = ['name' => 'John', 'age' => 25];
    //boolean
    $bool = true;
?>

<!-- PHP is type agnostic (doesn't care what the variable type is) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <!-- shorthand code for echo NOT RECOMMENDED! -->
    <h1><?= $title ?></h1>
    <!-- echo num -->
    <h2><?php echo $num ?></h2>
    <!-- echo array with a foreach loop -->
    <ul>
        <?php foreach($arr2 as $val): ?>
            <li style="color: red;"><?= $val ?></li>
        <?php endforeach; ?>
    </ul>
    <p style="color: blue;"><?php echo $arr3["age"]?></p>
    <!-- print_r is used for arrays and associative arrays -->
    <!-- GET will contain the querystring query information  -->
    <p><?php print_r($_GET)?></p>
    <!-- POST will contain the form data -->
    <p><?php print_r($_POST)?></p>
     <!--isset to check if a queryname exist or not so you don't break the code  -->
    <p><?php echo isset($_GET['name']) ? $_GET['name'] : 'No name' ?></p>
    
</body>
</html>