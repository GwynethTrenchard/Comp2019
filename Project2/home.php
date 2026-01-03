

<!-- <button><a href="results.php">results page link</a></button> -->

<?php

require "places-form.php";


// Normalize and cast the POST values to avoid undfined variables and type issues
$state_id = isset($_POST["state_id"]) && $_POST["state_id"] !== "" ? trim($_POST["state_id"]) : null;


// Validation for state id that it exixts in states table.
// Error will be thrown if not selected or does not exist.

if($state_id === null){
    echo "Error: No state has been selected, please choose a state.";
    exit;
}
$checkStateSql = "SELECT 1 FROM states WHERE id= :id";
$resultState = $pdo->prepare($checkStateSql);
$resultState->execute([":id" => $state_id]);
if($resultState->fetchColumn() === false){
    echo "Error: Selected state does not exist.";
    exit;
}


?>

