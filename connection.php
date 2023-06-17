<?php

session_start();

try {
    $pdo=new PDO("mysql:host=localhost;dbname=inventory_point_of_sales_project", "root", "Aung123580Zaw@");

    // echo "Connected.";
} catch(PDOException $error) {

    echo $error->getMessage();
}
