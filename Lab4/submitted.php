<?php
   // print_r(_$POST);
   $returnData = array();


    if(isset($_POST["name"]) && isset($_POST["colour"]) && $_POST["name"] !== ""){
        if($_POST["name"] === "Joe"){

            $returnData["message"] ="Hello {$_POST['name']}";
            $returnData["backgroundColor"] = $_POST["colour"];
            $returnData["textColor"] = "black";
            
            
        }else{
            $returnData["message"] = "Please leave!";
            $returnData["backgroundColor"] = "black";
            $returnData["textColor"] = "white";
        }
    }
    echo json_encode($returnData);

?>