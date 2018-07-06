<?php
/**
 * Example of MySQL database connection.
 * This is a Sample File, it's not being used.
 * In order to use it, simply include this file into index.php file or inside of your model.
 */

$server = 'localhost';
$username = 'root';
$password = '';
$database = '';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    //This makes sure the statement and the values aren't parsed by PHP before sending it to the MySQL server:
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die( "Connection failed: " . $e->getMessage());
}