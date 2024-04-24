<?php
include('db_connection.php');

// Fetch form data and sanitize it
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Insert user data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if(mysqli_query($conn, $sql)) {
    // If registration is successful
    // Redirect to the homepage
    header("Location: index.html");
    exit;
} else {
    // Handle registration failure
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
