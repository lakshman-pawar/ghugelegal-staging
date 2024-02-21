<?php

$dbHost     = "localhost";
$dbUsername = "u833937764_ghugelegal";
$dbPassword = "GhugeLegal12!!";
$dbName     = "u833937764_ghugelegalData";

// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$con = mysqli_connect($dbHost, $dbUsername, $dbPassword,$dbName);

// Check connection
if ($db->connect_error) {
    
    die("Connection failed: " . $db->connect_error);
}
else{
     //echo("testsucess");
}