<?php
//Lab-3 - Loops and scope
//Mock hotel room reservation form
	$roomTypes = array("Large", "Medium", "Small");
	$amenities =  array("TV", "Fridge", "Kitchen", "Cot");
	$bedTypes = array("Single King", "Double Queen", "Double Twin", "Single Twin");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab #3 -- Loops and scope!</title>
  </head>
  <body>
	<form method="post" action="lab3-submit.php">
		<h2>Lab 3 successfully started!</h2>


		<p>

		<!-- Task1: Create a field called "Name" which is a text field that will take the customer's name to put on the room reservation -->
		 <lable for="name">Name<span style="color: red">*</span></lable>
        <input type="text" name="name" id="name" required>
        
		</p>


		<p>
		<!-- Task2 - Create a field called "Room Type", then render out the room type radio buttons with their labels! -->

		<label for="roomTypes">Room Type:<span style="color: red">*</span></label>
        <?php
            foreach($roomTypes as $rType){
				echo "$rType";
                echo "<input type='radio' name='roomTypes' value='$rType'></input>";
            }
        ?>
		</p>


		<p>
		<!-- Task3 - Create a field called "Amenities", then render out the amenities checkboxes here!
		Remember the name must contain "[]" at the end because multiple values can be sent! 
		Also, ensure to display the message "No Amenities" if the user did not choose any as they are optional -->

		<lable for="amenities">Amenities:</lable>
        <?php
            foreach($amenities as $amenitie){
                echo "<input type='checkbox' name='amenities[]' value='$amenitie'>$amenitie</input>";
            }
        ?>


		</p>
		<p>
		<!-- Task4 - Create a label called "Bed type", then create the dropdown menu for bed types here -->

		<lable for="bedTypes">Bed Type:<span style="color: red">*</span></lable>
        <select name="bedTypes" id="bedTypes" required>
            <option value="">--Select Bed Type--</option>
            <?php
                foreach($bedTypes as $bedType){
                    echo "<option value='$bedType'>$bedType</option>";
                }
            ?>
        </select>



		</p>
		
		<p><input type="submit" /></p>
	</form>
    
  </body>
</html>