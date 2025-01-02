<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    echo "success";
}

?>