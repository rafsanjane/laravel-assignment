<?php
session_start();


// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // Redirect to the index page
    header("Location: index.php");
    exit();
}

// Check if the form was submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Verify the username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    // You should use a more secure method to store and verify passwords in a real project
    if ($username === "admin" && $password === "1234") {
        // Store the username in a session variable
        $_SESSION['username'] = $username;
        // Redirect to the index page
        header("Location: index.php");
        exit();
    } else {
        // Display an error message
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>
    <div class="container">
        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post">
            <label>Username:</label>
            <input type="text" name="username"><br>
            <label>Password:</label>
            <input type="password" name="password"><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>