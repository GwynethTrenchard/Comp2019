<?php

// last i checked eveything here works, your're good to use as refrence for other work
require "db-conn.php";
require "user-form.php";

$users = [];
$sql_all_users = "SELECT * FROM users ORDER BY created_at DESC";
$result_all_users = $pdo->prepare($sql_all_users);
$result_all_users->execute();
$users = $result_all_users->fetchAll();

//check if the input feild contains data or not 
if(!isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["email"]) || !isset($_POST["password"])){
    echo "<b style='color: red;'>Cannot Submit! Missing Data.</b>";
} 
else {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    try{
        // SQL statments to check if the user exists
        $sql = "SELECT * FROM users WHERE email = :email";
        $result = $pdo->prepare($sql);
        $result->execute(array("email" => $email));// when we execute repalce email with $email
        if($result->rowCount() > 0){
            echo "<b style= 'color: red';> User already exists, please user another email address</b>";
        }
        else{
            $sql_add_user = "INSERT INTO users VALUES (UUID(), CURDATE(), CURDATE(), :email, :password, :first_name, :last_name)";

            $result = $pdo->prepare($sql_add_user);
            $result->execute(array(
                "email" => $email,
                "password" => $password,
                "first_name" => $first_name,
                "last_name" => $last_name
            ));
            echo "Data inserted sucsessfully!";
        }
    }catch(PDOException $error){
        echo "<b style='color: red';>Data is not inserted due to error </b>" . $error->getMessage();
    }
    echo "<br>";
   

   // print_r($users);

}
?>

<table border=1>
    <tr>

        <th>ID</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>

    </tr>
    <?php foreach($users as $user){ ?>
        <tr>
            <td> <?php echo $user["id"]?></td>
            <td> <?php echo $user["email"]?></td>
            <td> <?php echo $user["first_name"]?></td>
            <td> <?php echo $user["last_name"]?></td>
        
        </tr>

    <?php } ?>

</table>