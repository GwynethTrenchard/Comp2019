<?php
session_start();
$title = "Home Page";
require "templates/header.php"; //header.php file is included in this file


    //if page is set in the url then include that page else include index.html
    //This code has a security vulnerability. Can you spot it?
    //Yes, the vulnerability is that the user can include any file
    //from the server by changing the value of the page parameter in the URL.
    //try localhost/week-5/lecture-5.php?page=../../../xampp-control.log
    //let's fix this vulnerability by making an array of allowed pages
    $allowedPages = array("about" => "about.html", "index" => "index.html", "help"=>"help.html", "secret-page"=>"secret-page.html", "403"=>"403.html");
    
    //Empty username and password variable
    $username = "";  
    $password = "";

    // Handle login
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        // Store credentials in session if they're correct
        if($username === "joe" && $password === "123"){
            $_SESSION["authenticated"] = true; // Mark user as authenticated
            $_SESSION["username"] = $username; // Store username in session
        }
        echo "Hello ". $username;
    }
    
    // Handle logout
    if(isset($_POST["status"])){
        $username = "";
        $password = "";
        // Clear session on logout
        $_SESSION["authenticated"] = false;
        unset($_SESSION["username"]);
    }
    
    // page inclusion logic
    if(!isset($_GET["page"])){
        include "pages/index.html";  //default page
    }
    else{
        // Check if the requested page is in the allowed pages array
        if(array_key_exists($_GET["page"], $allowedPages)){
            // Check if the user is trying to access the secret page
            if($_GET["page"] === "secret-page"){
                // Only include the secret page if the user is authenticated
                if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true){
                    include "pages/{$allowedPages[$_GET['page']]}"; //send the user to secret page
                }
                else{
                    include "pages/403.html"; //send the user to 403 forbidden page if not authenticated
                }
            }
            else{
                include "pages/{$allowedPages[$_GET['page']]}"; //include the requested page for all other pages
            }
        }
        else{
            echo "<h2>404 Page Not Found</h2>"; //if the page is not in the allowed pages array then show 404 error
        }
    }
    require "templates/footer.php"; //footer.php file is included in this file
    
    ?>

