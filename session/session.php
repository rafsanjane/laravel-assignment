<?php


// Start the session
session_start();

if (isset($_SESSION["start_time"]) && isset($_SESSION["duration"])) {
  // Calculate the time remaining for the countdown
  $time_elapsed = time() - $_SESSION["start_time"];
  $time_remaining = $_SESSION["duration"] - $time_elapsed;
  if ($time_remaining < 0) {
    // Countdown has finished, reset the session
    session_unset();
    session_destroy();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

  <style>
    body {
      margin-top: 30px;
    }

    #countdown {
      font-size: 24px;
      font-weight: 600;
    }
  </style>

</head>

<body>

  <div class="container">
    <div class="row">
      <div class="column column-60 column-offset-20">
        <h3>Session User: <?php //echo  $_SESSION['counter']; 
                          ?>
        </h3>
        <label for="time-input">Enter time in minutes:</label>
        <input type="number" id="time-input">
        <button onclick="startCountdown()">Start Countdown</button>
        <div id="countdown"></div>
      </div>
    </div>
  </div>




  <script>
    function startCountdown() {
      let timeInMinutes = document.getElementById("time-input").value;
      let totalTime = timeInMinutes;

      // Set the session variables for the countdown
      <?php
      $_SESSION["start_time"] = time();
      $_SESSION["duration"] = $totalTime;
      ?>

      let countdown = setInterval(function() {
        let minutes = Math.floor(totalTime / 60);
        let seconds = totalTime % 60;
        document.getElementById("countdown").innerHTML = minutes + ":" + seconds;

        if (--totalTime < 0) {
          clearInterval(countdown);
          document.getElementById("countdown").innerHTML = "Countdown finished!";

          // Reload the page after 3 seconds
          setTimeout(function() {
            location.reload();
          }, 3000);
        }
      }, 1000);
    }
  </script>


  <!-- <script>
    function startCountdown() {
      let timeInMinutes = document.getElementById("time-input").value;
      let totalTime = timeInMinutes;

      let countdown = setInterval(function() {
        let minutes = Math.floor(totalTime / 60);
        let seconds = totalTime % 60;
        document.getElementById("countdown").innerHTML = minutes + ":" + seconds + " Seconds";

        if (--totalTime < 0) {
          clearInterval(countdown);
          document.getElementById("countdown").innerHTML = "Countdown finished!";
        }
      }, 1000);
    }
  </script> -->
</body>

</html>