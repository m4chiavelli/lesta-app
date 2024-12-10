<!-- koneksi php -->

<?php
$host = "localhost";
$username = "root";
$pass = "";
$db_name = "lesta_app";

// create connection
$conn = new mysqli($host, $username, $pass, $db_name);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!-- show data -->