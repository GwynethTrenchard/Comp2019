

<?php
if(isset($_POST["username"]) && $_POST["username"] !== ""){
    echo $_POST["username"] === "Joe" ? "Hello Joe" :"Please leave!";

}else{
    echo "You did not enter a name";
}

//cannot have any html here because the javascript code in index will read it as text 
// and display it in the pop up

?>
    
