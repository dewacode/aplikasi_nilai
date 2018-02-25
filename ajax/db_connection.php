<?php

$host = "localhost";
$user = "root";
$password = "Programmer1!";
$database = "dblatihan";

$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
