<?php
//This file would make you upload files to your databse set in dbh.inc.php

//Post request
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];

    try {
        //requires connection to database
        require_once "dbh.inc.php";
        

        //set your command; the ? is defined 3 lines below
        $query = "INSERT INTO users (username) VALUES (?);";
        $stmt=$pdo->prepare($query);

        $stmt->execute([$username]);
        
        //setting evrything to null
        $pdo = null;
        $stmt = null;

        //ending program
        die();

    } catch (PDOException $e) {
        //show error
        die("Query failed: " . $e->getMessage());
    }

} else {
    //Returns you to main site when is not opened with post request
    header("Location: ../index.php");
}
