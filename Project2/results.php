<?php 
require "db-conn.php";


if(isset($_POST["state_id"])){

    $checkStateSql = "SELECT * FROM states WHERE id= :id";
    $resultState = $pdo->prepare($checkStateSql);
    $resultState->execute(["id" => $_POST["state_id"]]);
    $state = $resultState->fetch();
    $checkCitiesSql = "SELECT * FROM cities WHERE state_id = :id";
    $resultCities = $pdo->prepare($checkCitiesSql);
    $resultCities->execute(["id" => $_POST["state_id"]]);
    $cities = $resultCities->fetchAll();


}
else{
    echo("Invaled state");

}

require "./templates/header.php";
?>


<h1>Results for <?php echo $state["name"]; ?></h1>


<a href="index.php" class="buttonClass">
  <button> << Change State or dates</button>
</a>


<form action="submitted.php" method="post" id="cityForm">

    <label for="city_id">City: </label>
    <select name="city_id" id="city_id">
        <option value="">--Select City--</option>
        <?php foreach($cities as $city) { ?>
            <option value="<?php echo $city['id'] ?>">
                <?php echo ($city['name']) ?>
            </option>
            <?php } ?>
    </select>

    <br>
    <br>

    <label for="num_rooms">Number of rooms: </label>
    <input type="number" name="num_rooms" id="num_rooms" min="1">
    <br>
    <br>
    <label for="num_guests">Number of Guests: </label>
    <input type="number" name="num_guests" id="num_guests" min="1">
    <br>
    <br>
    <input type="submit" name="submit" value="Search" id="submit">

</form>


<form action="book.php" method="post">
        
    <div id="responseContainer">
        
    </div>
        
    <input type="submit" value="book">
</form>

<script>

    const responseContainer = document.querySelector("#responseContainer");
    responseContainer.innerHTML = "";

    //get the submit buttin useing querySelector, the store it in a variable
    const submitButton = document.querySelector("#submit");

    //add an even listner and wait for a click event
    submitButton.addEventListener("click", (e) => {
        // stop the page from moving to submitted.php by adding default action
        e.preventDefault();
        //capture the data sent back from the from reply that will be sent to submitted
        fetch("submitted.php", {
            method: "POST",
            body: new FormData(document.querySelector("#cityForm"))

        }).then((response) => response.json())
        .then((data) => {
            console.log(data)

            if(data.places.length == 0){
                responseContainer.textContent = "No results"
                // console.log("no results")
            }
            else{
                console.log("results")
               
                data.places.forEach((place) => {
                    //if(place.max_guest = FormData.num_guests){

                        const placeName = document.createElement("h3");
                        placeName.innerHTML = place.name;
                        responseContainer.appendChild(placeName);
                    
                        const placeDesc = document.createElement("p");
                        placeDesc.innerHTML = place.description;
                        responseContainer.appendChild(placeDesc);

                        const priceLable = document.createElement("lable");
                        priceLable.innerHTML = "Price per night: $";
                        responseContainer.appendChild(priceLable);

                        const placePrice = document.createElement("p");
                        placePrice.innerHTML = place.price_by_night;
                        responseContainer.appendChild(placePrice);
                        
                        const spacing = document.createElement("br");
                        spacing.innerHTML = "<br> <br> <br> ";
                        responseContainer.appendChild(spacing);

                    //}
                });         
            }
        });
    })
</script>

<?php

require "./templates/footer.php";

?>
