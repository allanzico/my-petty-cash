<?php

if(!defined('included')){
        header("Location: ./404.php");

        exit();
     }
//Create connection to mysql server
$conn = mysqli_connect("sabaik6fx8he7pua.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "tuam4r8le90dw9ba", "txrh8wg6qfoglgyq")
        OR DIE("<p>Unable to connect to the database server.</p>");

// $conn = mysqli_connect("localhost", "root", "")
// OR DIE("<p>Unable to connect to the database server.</p>");

//Creating database if doesn't already exist and selecting
//$DBName = "savings_club";
$DBName = "ufcaplv09w21gq60";
if (!mysqli_select_db($conn, $DBName)) {
    $SQLstring = "CREATE DATABASE $DBName";
    mysqli_query($conn, $SQLstring)
            OR DIE("<p>Unable to create database.</p>");
}
mysqli_select_db($conn, $DBName)
        OR DIE("<p>Unable to select database.</p>");
?>