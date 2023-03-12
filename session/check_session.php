<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sessionData"])) {
        $_SESSION["countdownSession"] = $_POST["sessionData"];
        echo "Session started";
        echo $_SESSION["countdownSession"];
        header('session/session.php');
    }
}
