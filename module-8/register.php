<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>মডিউল ৮ এর এসাইনমেন্ট</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        span {
            color: rgb(10, 163, 112);
            font-weight: 900;
            font-size: large;
        }
    </style>
</head>

<body>
    <div class="container">


        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
                echo "All fields are required.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format.";
            } elseif ($password !== $confirm_password) {
                echo "<h1>Passwords do not match. </h1>";
            } else {
                echo "<h1> Registration successful! </h1>";
            }
        }


        ?>
    </div>

</body>

</html>