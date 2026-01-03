<?php

//Task #1 
//Create a variable called "profile" and set it equal to an associative array
//with the keys "name" and "age" and the values of the variables "name" and "age" respectively.
//Within the body of the HTML, create a <h2> that displays a message that says
//"Hello, my name is [name] and I am [age] years old." using the variables you created.

$profile = ['name' => 'Sally', 'age' => 25];

//Task #2
//Create an array called numbers that contains 5 different numbers.
//create a sum variable that sums all the numbers in the array using 
//then a foreach loop using php then display a message within the HTML body
//that says "The sum of the numbers is [sum]." as a <p> tag.

$numbers = [2, 3, 4, 5, 6];
$sum = 0;

foreach($numbers as $num)(
  $sum += $num
);


//Task #3
//Create a variable called "is_logged_in" and set it equal to a boolean value.
//Create a conditional, using ternaries, that checks if the variable is true and displays a message, 
//within a <p> tag within the HTML body, that says "Welcome back!" if it is, bolded in a green color.
//If the variable is false, display a message that says "Please log in.", bolded in a red color

$is_logged_in = true;

$is_true = $is_logged_in ? "<b style='color: green;'>Welcome back!</b>" : "<b style='color: red;'>Please log in</b>";


//Task #4
//Create a querystring that contains a key of "course" and "lab". 
//Use isset to check if the querystring "course" exists and display the a message, 
//within a <p> tag, that says "The course is [course] and the lab is [lab]."
//if there is no query set, display a message saying "Please check your query", bolded in a red color.


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab #2 -- Variables and Conditionals</title>
  </head>
  <body>

    <h2>Hello, my name is <?php echo $profile["name"]?> and I am <?php echo $profile["age"]?> years old.</h2>

    <p>The sum of the numbers is <?php echo $sum?>.</p>

    <p><?php echo $is_true?></p>

    <?php echo isset ($_GET["course"]) && isset ($_GET["lab"]) ? "<p>The course is {$_GET['course']} and the Lab is {$_GET['lab']}. " : "<b style='color: red;'>Please check your query</b>"
    ?>

  </body>
</html>