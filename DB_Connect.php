<?php
$servername = "localhost";       
$username = "root";            
$password = "";                 
$dbname = "seoul_infinity_bank"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>