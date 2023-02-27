<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password_length = $_POST["length"];
    $include_symbols = isset($_POST["symbols"]);
    $include_numbers = isset($_POST["numbers"]);
    $available_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $available_symbols = "!@#$%^&*()-_=+";
    $available_numbers = "0123456789";

    if ($include_symbols) {
        $available_chars .= $available_symbols;
    }

    if ($include_numbers) {
        $available_chars .= $available_numbers;
    }

    $password = "";

    // Using loop
    for ($i = 0; $i < $password_length; $i++) {
        $password .= $available_chars[rand(0, strlen($available_chars) - 1)];
    }

    // Using Shuffle

    $passwords =  str_shuffle($available_chars);
    $passwords =  substr($passwords, 0, $password_length);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Random Password Generator</title>
</head>

<body>

    <div class="container" style="top: 80px; ">

        <div class="row ">

            <form class="column column-50 column-offset-25" style="box-shadow:0 1rem 3rem rgb(0 0 0 / 18%); padding:50px" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <h1>Random Password Generator</h1>
                <label for="length">Password Length:</label>
                <input type="number" id="length" name="length" min="8" max="32" required>
                <br>
                <label for="symbols">Include Symbols:</label>
                <input type="checkbox" id="symbols" name="symbols" value="1">
                <br>
                <label for="numbers">Include Numbers:</label>
                <input type="checkbox" id="numbers" name="numbers" value="1">
                <br>
                <button style="background: #4dca8b; border:#4dca8b;" type="submit">Generate Password</button>

                <?php


                if (isset($password)) {
                    echo "<h3>Your password is: <br> Using Loop <span style='color:#4dca8b; font-weight: 700;padding: 10px;'> " . $password . "</span><br> Using Shuffle  <span style='color:#4dca8b; font-weight: 700;padding: 10px;'> {$passwords}" . "</span></h3>";
                }

                ?>

            </form>
        </div>
    </div>
</body>

</html>