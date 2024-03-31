<!DOCTYPE html>
<html lang="en">
<!--Just site for showing the data-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
</body>
</html>

<?php
//This file would read data from database set in dbh.inc.php

//POST request
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //store it for simpler use
    $id = $_POST["id"];

    try {
        //Connects website
        require_once "dbh.inc.php";
        
        //your command here; The ? is defined 3 lines below
        $query = "SELECT username FROM users WHERE id = ?";
        $stmt=$pdo->prepare($query);

        $stmt->execute([$id]);
        
        //fetches every thing into array
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($arr);
        
        //does get all data out
        foreach ($arr as $row) {
            echo "Username: " . $row["username"];
        }
        
        //Closing connection
        $pdo = null;
        $stmt = null;
        
        //ending program
        die();
    } catch (PDOException $e) {
        //shows error
        die("Query failed: " . $e->getMessage());
    }

} else {
    //sends back to main site when post not accepted
    header("Location: ../index.php");
}
