<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kwl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
