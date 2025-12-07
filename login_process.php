<?php
session_start();
$conn = new mysqli("localhost", "root", "", "e_business");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Check user in database
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];

    // Redirect to profile page
    header("Location: profile.php");
} else {
    echo "Invalid Email or Password";
}

$conn->close();
?>