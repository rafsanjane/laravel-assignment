<?php
session_start();


// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

// Set a cookie
setcookie("site_language", "en", time() + 3600);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="column column-50">
                <?php
                // Display the user's username and the cookie value
                echo "<h1>Welcome, $username!</h1>";
                echo "<p>Your language preference is: " . $_COOKIE['site_language'] . "</p>";

                ?>
            </div>
        </div>

    </div>

</body>

</html>