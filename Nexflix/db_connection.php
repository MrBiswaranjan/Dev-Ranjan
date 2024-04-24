<?php
$servername = "localhost";
$username = "root"; // Assuming default XAMPP username is root
$password = ""; // Assuming no password is set
$dbname = "netflix_db"; // Change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
