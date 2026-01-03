<?php
require "db-conn.php";


$returnData = array();
$returnData["id"] = $_POST["city_id"];
if(isset($_POST["city_id"])){

    $checkPlacesSql = "SELECT * FROM places WHERE city_id = :id";
    $resultPlaces = $pdo->prepare($checkPlacesSql);
    $resultPlaces->execute(["id" => $_POST["city_id"]]);
    $places = $resultPlaces->fetchAll();
    $returnData["places"] = $places;
}
else{
   $returnData["error"] = "No City Slected";

}

echo json_encode($returnData)

?>

    