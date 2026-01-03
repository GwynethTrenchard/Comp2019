<?php
    $title = "Home Page";
    include "templates/header.php";
    $colours = array("red", "blue", "green", "yellow", "pink", "purple")
?>


<p>Please enter your details</p>

<form action="submitted.php" method="POST" id="my-form">
    <lable for="name">Name: </lable>
    <input type="text" name="name" id="name" value="Joe">
    <br>
    <lable for="colour">Please pick a background colour: </lable>
   

    <select name="colour" id="colour" required>
        <option value="">--select a colour--</option>
        <?php
            foreach($colours as $colour){
                echo "<option value='{$colour}'>{$colour}</option>";
            }
        ?>
    </select>
    <br>

    
    <input type="submit" name="" id="submit"> 
</form>
<script>
    //get the submit buttin useing querySelector, the stoer it in a variable

    const submitButton = document.querySelector("#submit")

    //add an even listner and wait for a click event

    submitButton.addEventListener("click", (e) => {
    
        // stop the page from moving to submitted.php by adding default action

        e.preventDefault()
        
        //capture the data sent bacl from the from reply will be sent to submitted
        
        fetch("submitted.php", {
            method: "POST", 
            body: new FormData(document.querySelector("#my-form"))
        })
        //parse the json response into a javascript object
        .then((response) => response.json())
        .then((data) => {
            console.log(data)
            //create a new <p> element using javascript and store it in a varaible

            const newElement = document.createElement('p')

            //add the message as the text body of the new <p> element

            newElement.textContent = data.message
            
            //chnage the background colour of the <p> element with the colour sent from submitted.php
            
            newElement.style.backgroundColor = data.backgroundColor

            //change the text colour of the p element to the text colour sent from submitted.php
            
            newElement.style.color = data.textColor

            //add the p element to the page document under the body element
            document.body.appendChild(newElement)
        })

        
        
    })
</script>




<?php
    include "templates/footer.php";
?>
