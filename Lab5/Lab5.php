<?php
    session_start();
    $title = "Home Page";
    require "templates/header.php";
    require "data/allowedPages.php";
    require "data/users.php";


    $allowedPages = array("403"=>"403.html", "about" => "about.html", "index" => "index.html", "secret-page"=>"secret-page.html");
    
    $username = "";  
    $password = "";

    if(isset($POST_["username"]) && isset($POST_["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username === $users && $password === $users ){
            $_SESSION["authenticated"] = true; 
            $_SESSION["username"] = $username;
        }
        echo "Hello ". $username;
    }

    if(isset($_POST["status"])){
        $username = "";
        $password = "";
        // Clear session on logout
        $_SESSION["authenticated"] = false;
        unset($_SESSION["username"]);
    }

















    require "templates/footer.php";
?>