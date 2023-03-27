<?php

session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ostad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate user input
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password are not empty
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email and password are required";
        header("Location: ./index.php");
        exit;
    }

    // Check if user exists in database
    $sql = "SELECT * FROM user WHERE email='$email' AND password_hash='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, set session variable and redirect to welcome page
        $row = $result->fetch_assoc();
        $_SESSION['first_name'] = $row['first_name'];
        header("Location: ./welcome.php");
        exit;
    } else {
        // User does not exist, display error message
        $_SESSION['error'] = "Invalid login credentials";
        header("Location: ./index.php");
        exit;
    }
}
