<?php
session_start();

?>
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

        <h1>Assignment-7</h1>
        <div class="row">
            <div class="column column-50">
                <h4>Login Form</h4>
                <form method="POST" action="./welcome.php">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">

                    <input type="submit" value="Login">
                </form>

            </div>
        </div>

    </div>

</body>

</html>