<?php

require_once "inc/functions.php";
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';
if ('seed' == $task) {
    seed(DATA_BASE);

    $info = "Seeding is Complete";
}

if (isset($_POST['submit'])) {
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $roll = filter_input(INPUT_POST, 'roll');

    if ($fname != '' && $lname != '' && $roll != '') {
        $result = addStudent($fname, $lname, $roll);
        if ($result) {
            header('location: /index.php?task=report');
        } else {
            header('location: /index.php?task=report&error=1');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Create + Read + Update + Delete</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2> CRUD Project</h2>
                <p>CRUD Project using row PHP</p>
                <?php
                include_once('inc/templates/nav.php');
                ?>
                <hr>
                <?php
                if ('seed' == $task) :
                ?>
                <?php
                    if ($info != '') {
                        echo "<p>{$info}</p>";
                    }
                endif;
                ?>
            </div>
        </div>

        <!-- // Error Show for Duplicate -->

        <?php
        if ('1' == $error) :
        ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <blockquote>Duplicate Roll Number</blockquote>
                </div>
            </div>
        <?php endif;  ?>


        <!-- // Report Show -->

        <?php
        if ('report' == $task) :
        ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <?php generateReport(); ?>
                </div>
            </div>
        <?php endif;  ?>

        <!-- // Add form -->

        <?php
        if ('add' == $task) :
        ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form action="/index.php?report" method="post">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" id="roll">
                        <button type="submit" value="save" name="submit">Add Student</button>
                    </form>
                </div>
            </div>
        <?php endif;  ?>
    </div>

</body>

</html>