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
        body {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="column column-50">
                <?php

                echo "<h3> Login successful </h3>";
                echo "<h1> Welcome, " . $_SESSION['first_name'] . "</h1>";

                ?>

            </div>
        </div>
    </div>

</body>

</html>