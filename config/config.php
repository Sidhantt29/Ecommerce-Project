<?php
    $databaseHost = 'localhost';
    $databaseUsername = 'root';
    $databaseName = 'shop_db';
    $databasePassword = '';

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die('Connection Failed.');
    
?>