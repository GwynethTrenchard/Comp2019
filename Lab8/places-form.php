<?php
    require "db-conn.php";
    
    // state to get cities and their state for drop down menu
    $sql = "SELECT city.id AS city_id, city.name AS city_name,
        state.id AS satat_id, state.name AS state_name 
        FROM cities city 
        JOIN states state ON city.state_id = state.id 
        ORDER BY state.name, city.name"; 

    // Fetch all cites useing the query above
    $resultsCities = $pdo->prepare($sql);
    $resultsCities->execute();
    $cities = $resultsCities->fetchAll(PDO::FETCH_ASSOC);

    // Fetch all users
    $sqlUsers = "SELECT * FROM users";
    $resultsUsers = $pdo->prepare($sqlUsers);
    $resultsUsers->execute();
    $users = $resultsUsers->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8</title>
</head>
<body>

    <h3>Add a new listing</h3>
    <form action="" method="post">

      <!-- listing name input -->
      <input type="text" name="name" id="name" placeholder="Add a listing title">
      <br>

      <!-- Descirption input -->
      <textarea name="description" id="" placeholder="Description"></textarea>
      <br>

      <!-- Cities select menu -->
       <select name="city_id">
        <option value="">--Select City--</option>
        <?php foreach($cities as $city) { ?>
            <option value="<?php echo $city['city_id'] ?>">
                <?php echo ($city['city_name'] . ' (' . $city['state_name'] . ')' ) ?>
            </option>
            <?php } ?>
       </select>
       <br>

       <!-- Room numbers select menu -->
       <select name="number_rooms">
        <option value="">--Select number of rooms--</option>
        <?php for($i = 1; $i <= 3; $i++) { ?>
            <option value="<?php echo $i ?>"> <?php echo $i ?></option>
       <?php } ?>
       </select>
       <br>

       <!-- Bathroom number sectect menu -->
       <select name="number_bathrooms">
        <option value="">--Select number of bathrooms--</option>
        <?php for($i = 1; $i <=3; $i++) { ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php } ?>
       </select>
       <br>

       <!-- Max number of guests select menu-->
        <select name="max_guest">
        <option value="">--Select max number of guests--</option>
        <?php for($i = 1; $i <=4; $i++) { ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php } ?>        
        </select>
        <br>

        <!-- Price per night -->
        <input type="number" name="price_by_night" id="" placeholder="Price by night">
        <br>

        <!-- User select menu -->
         <select name="user_id"> 
            <option value="">--Select User--</option>
            <?php foreach($users as $user) { ?>

                <option value="<?php echo $user['id'] ?>"><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></option>
            <?php } ?>
         </select>
         <br>
         <button>Submit</button>
    </form>
</body>
</html>