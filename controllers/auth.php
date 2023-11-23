<?php
session_start();
include('../config/connection.php'); 

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Fetch user record based on the email
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Verify password 
        if ($password === $row['password']) { 
            // If the password matches
            $_SESSION['username'] = $row['username'];
            $_SESSION['valid'] = true;
            $_SESSION['id'] = $row['id'];
            header("Location: ../pages/home.php");
            exit;
        } else {
            // Password doesnt match
            $_SESSION['error'] = "Invalid email or password";
            header("Location: ../pages/index.php"); 
            exit;
        }
    } else {
        // User not found
        $_SESSION['error'] = "User not found";
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
