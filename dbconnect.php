<?php
$servername = "127.0.0.1";
$username = "root";
$password = "usbw";
// $username = "rootie";
// $password = "uBUmTqH77cEhw6Zd";
$database = "ala3";

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
