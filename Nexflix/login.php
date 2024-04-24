<?php
session_start();

include('db_connection.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        echo "Login successful!";
        // Redirect to the homepage after successful login
        header("Location: index.html");
        exit;
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "User not found!";
}

mysqli_close($conn);
?>
