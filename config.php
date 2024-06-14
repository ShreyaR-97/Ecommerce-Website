<?php
$servername = "localhost";

$username = "root";

$password = "";

$db = "ecommerce";


$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("Error: " .$conn->connect_error);
}





?>