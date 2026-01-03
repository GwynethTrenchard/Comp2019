<?php
# The address to this file is http://localhost/week-1/conditionals.php
# isset() is a function that checks if a variable has been set 
if (isset($_GET["name"])) {
    echo "Hello, " . $_GET["name"];
} else {
    echo "Hello, User";
}
echo "<br>";
echo "This is the next line";

echo "<img src='https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png' alt='Google Logo'>";
?>