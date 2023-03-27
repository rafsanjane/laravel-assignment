<?php

// session_start();

// // Connect to the database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ostad";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Validate user input
// if (isset($_POST['email']) && isset($_POST['password'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Check if email and password are not empty
//     if (empty($email) || empty($password)) {
//         $_SESSION['error'] = "Email and password are required";
//         header("Location: ./login.php");
//         exit;
//     }

//     // Check if user exists in database
//     $sql = "SELECT * FROM user WHERE email='$email' AND password_hash='$password'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // User exists, set session variable and redirect to welcome page
//         $row = $result->fetch_assoc();
//         $_SESSION['first_name'] = $row['first_name'];
//         header("Location: ./welcome.php");
//         exit;
//     } else {
//         // User does not exist, display error message
//         $_SESSION['error'] = "Invalid login credentials";
//         header("Location: ./login.php");
//         exit;
//     }
// }

// Start the session
session_start();

// Create a database connection
$db = new mysqli("localhost", "root", "", "ostad");

// Check for any errors
if ($db->connect_errno) {
    die("Failed to connect to database: " . $db->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate the input data
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (!empty($email) && !empty($password)) {

        // Retrieve the user data from the database based on the email address
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $db->query($sql);

        // Check if the email address exists in the database
        if ($result->num_rows == 1) {

            // Get the user data from the database
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user["password_hash"])) {

                // Set the session variables
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["first_name"] = $user["first_name"];

                // Redirect to the welcome page
                header("Location: index.php");
                exit();
            } else {
                echo "Error: Invalid login credentials";
            }
        } else {
            echo "Error: Invalid login credentials";
        }
    } else {
        echo "Error: All fields are required";
    }
}

// Close the database connection
$db->close();
