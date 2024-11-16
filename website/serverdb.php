<?php

$server = "localhost";
$user = "root";
$password = ""; 
$db = "signup";

$con = mysqli_connect($server, $user, $password, $db);

// Check connection
if ($con === false) {
    die("Connection failed: " . mysqli_connect_error());
}
