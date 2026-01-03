<?php
$title = "Home Page";
require "./templates/header.php"; // used to make sure a file loads correctly
//  before the page can load
?>



<h1>Welcome to the Home Page</h1>

<form action="submitted.php" method="POST" id="myForm">

    <input type="text" name="username" id="username" value="Joe">
    <input type="submit" id="submit"> 

</form>
<a href="page2.php">Click to go to page 2</a>

<script>

    // add an event listner

    const submitButton = document.querySelector("#submit")// go in the documnet, 
    // find element with id submit

    //prevent the page from changing to the submittion page

    submitButton.addEventListener("click", (e) => {
        e.preventDefault()// prevents the default thing that was going to
        //  happen from happening when the submit button is clicked
        
        //capture the data posted from the form to the subbmited page

        fetch("submitted.php", {

            method: "POST",
            body: new FormData(document.querySelector("#myForm"))

            //change the data from JSON to text aka parse the date
        }).then(response => response.text())
        //display the data
        .then(data => alert(data))
        //^grab above data and store the text...

        
        
        
        
    })


</script>



<?php
include "./templates/footer.php";
?>
    
