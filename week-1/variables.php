
<?php
# The address to this file is http://localhost/week-1/variables.php 
# Variables in PHP are declared using the $ symbol followed by the variable name and the value.
$num1 = 10;
$num2 = 20;

$sum = $num1 + $num2;
# print the sum of the two numbers on the screen.
echo $sum;
# This is how to declare an array in PHP
$list = array(1, 2, 3, 4, 5);

echo "<br>"; # This will print a new line
echo $list[2]; # This will print 1

$str = "This is a string";
$str2 = 'This is also a string';
echo "<br>";
#echo $str + 16; #This will thorw an error because you cannot add a string to a number (uncaught type error)
#echo $str + $str2; #This will also throw an error because you cannot add two strings together

#to concatenate a string to a number, you can use the . operator
echo $str . 16; #This will print "This is a string16"

echo "<br>";
echo "We can include variable like {$str} and {$str2} in a string"; #This will print "We can include variable like This is a string in a string but it has to be enclosed in double quotes"
?>

<html>
    <head>
        <title>Variables in PHP</title>
    </head>
    <body>
        <p><?php echo "this line is PHP embbed in HTML"; ?></p>
        <p><?= 'this is a <span style="text-decoration: underline;">shortcut</span> for echo <span style="color: red; font-weight: 600;">(PLEASE DO NOT USE)</span>'  ?></p>
    </body>
</html>