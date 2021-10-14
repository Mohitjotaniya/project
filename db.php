<?php

    $hostname = "localhost";
    $username = "admin";
    $password = "Admin@123";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=emp_mangement", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>