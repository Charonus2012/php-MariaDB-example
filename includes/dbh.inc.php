<?php

//dbname = {name of MariaDB database}
$dsn = "mysql:host=localhost;dbname=test";

//username(normally root)
$dbusername = "";
//password
$dbpassword = "";

try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
