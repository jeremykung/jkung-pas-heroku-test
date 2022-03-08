<?php

// Connect to DB
$host = "us-cdbr-east-05.cleardb.net";
$user = "be4c22fe1bd451";
$pass = "0128e3d6";
$db = "heroku_f4c1f1b843cd581"

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Write to DB
$username = $_POST['username'];
$age = $_POST['age'];

$sql = "INSERT INTO `user` (username, age) VALUES ('$username', '$age')";
$conn->exec($sql);
echo "successfully inserted row";

?>