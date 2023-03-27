<?php
// Create a database connection
$db = new mysqli("localhost", "root", "", "ostad");

// Check for any errors
if ($db->connect_errno) {
    die("Failed to connect to database: " . $db->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate the input data
    $first_name = mysqli_real_escape_string($db, $_POST["first_name"]);
    $last_name = mysqli_real_escape_string($db, $_POST["last_name"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($db, $_POST["confirm_password"]);

    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($confirm_password)) {

        // Check if the email address is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Check if the password and confirm password fields match
            if ($password == $confirm_password) {

                // Hash the password for security
                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                // Insert the data into the database
                $sql = "INSERT INTO user (first_name, last_name, email, password_hash) VALUES ('$first_name', '$last_name', '$email', '$password_hash')";
                if ($db->query($sql)) {
                    echo "Registration successful!";
                } else {
                    echo "Error: " . $sql . "<br>" . $db->error;
                }
            } else {
                echo "Error: Passwords do not match";
            }
        } else {
            echo "Error: Invalid email address";
        }
    } else {
        echo "Error: All fields are required";
    }
}

// Close the database connection
$db->close();
