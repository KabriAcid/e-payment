<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-payment";


$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error: Failed to connect to database");
}
