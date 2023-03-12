<?php

include 'inc/db.php';

$db_conn = new Database();

if (isset($_POST['submit'])) {
    $roll = filter_input(INPUT_POST, 'roll');
    $name = filter_input(INPUT_POST, 'name');
    $age = filter_input(INPUT_POST, 'age');
    $course = filter_input(INPUT_POST, 'course');

    if ($roll != '' && $name != '' && $age != '' && $course != '') {
        $result = $db_conn->insert('students', ['roll' => $roll, 'name' => $name, 'age' => $age, 'course' => $course]);
        if ($result) {
            header('location: /index.php');
        } else {
            header('location: /index.php');
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
    <title>CRUD OOP</title>
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
                <h2> CRUD-OOP Project</h2>
                <p>CRUD Project using OOP PHP</p>
                <form action="" method="post">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age">
                    <label for="course">Course</label>
                    <input type="text" name="course" id="course">
                    <button type="submit" value="save" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>