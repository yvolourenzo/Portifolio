<?php
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "crud_example";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
