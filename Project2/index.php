<?php
    require "db-conn.php";

 $sql = "SELECT states.id AS state_id, states.name AS state_name
        FROM states";

     // Fetch all states useing the query above
    $resultsStates = $pdo->prepare($sql);
    $resultsStates->execute();
    $states = $resultsStates->fetchAll(PDO::FETCH_ASSOC);

    require "./templates/header.php"; 
?>


<h1>Booking</h1>

<form action="results.php" method="post">

    <!-- State select menu -->
    <label for="state_id">State: </label>
    <select name="state_id" id="state_id">
        <option value="">--Select State--</option>
        <?php foreach($states as $state) { ?>
            <option value="<?php echo $state['state_id'] ?>">
                <?php echo ($state['state_name']) ?>
            </option>
            <?php } ?>
    </select>

    <br>
    <br>
        
    <label for="check_in">Check in Date: </label>
    <input type="date" name="check_in" id="check_in">

    <br>
    <br>

    <label for="check_out">Check out Date: </label>
    <input type="date" name="check_out" id="check_out">

    <br>
    <br>
    <?php

    

    ?>

    <input type="submit" name="" id="" value="Search">

</form>


<?php
// $state_id = "state_id" && "state_id" !== "" ? trim("state_id") : null;
// if($state_id === null){
//     echo "Error: No state has been selected, please choose a state.";
//     exit;
// }


require "./templates/footer.php";
?>



