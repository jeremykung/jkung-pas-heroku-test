<?php

    echo "PHP TEST";
    // isset($_POST['submit']) {

        // Connect to DB
        // $host = "us-cdbr-east-05.cleardb.net";
        // $user = "be4c22fe1bd451";
        // $pass = "0128e3d6";
        // $db = "heroku_f4c1f1b843cd581";

        // try {
        //     $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        //     // set the PDO error mode to exception
        //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     echo "Connected successfully";
        // } catch(PDOException $e) {
        //     echo "Connection failed: " . $e->getMessage();
        // }

        // // Write to DB
        // $username = $_POST['username'];
        // $age = $_POST['age'];

        // $sql = "INSERT INTO `user` (username, age) VALUES ('$username', '$age')";
        // $conn->exec($sql);
        // echo "successfully inserted row";

    // }
?>

<h1>Heroku Deploy Test</h1>

<form action="formHandle.php" method="post">
    <input type="text" name="username" placeholder="username">
    <label for="age">Age</label>
    <input type="number" name="age">
    <input type="submit" value="Ok" name="submit">
</form>