<?php


$dbPassword = "awsmawsm14056789";
$dbUserName = "abadi_alwaely";
$dbServer = "localhost";
$dbName = "Abadi1996";
$movement = "backward";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database connection failed. reason: " . $connection->connect_error);
}
$query = "INSERT INTO `Direction`(`Move`)VALUES(\"$movement\")";

$connection->query($query);
$connection->close();
echo "$movement";