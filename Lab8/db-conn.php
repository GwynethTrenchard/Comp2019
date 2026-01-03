<?php
$host = "localhost";
$user = "root";
$pass = "mysql";
$db = "comp2002";
$dsn = "mysql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    // echo "<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    echo "<br>";
}
?>