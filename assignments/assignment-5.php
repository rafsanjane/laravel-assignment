<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 4</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
  <style>
    .top-pad {
      padding-top: 100px;
    }

    .item {
      padding-top: 40px !important;
      padding-left: 36px !important;
      padding-right: 36px !important;
      box-shadow: 0 1rem 3rem rgb(0 0 0 / 10%);
      border-radius: 5px;

    }

    h3 {
      font-weight: 600;
      font-size: 24px;
    }

    span {
      color: #e55f5f;
      font-size: 20px;
      font-weight: 400;
    }
  </style>
</head>

<body>

  <div class="container top-pad">
    <div class="row">


      <!--- Task 1 ---->

      <div class="column column-33 item">
        <h3>Task 1: HTML Basics</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name"><br><br>
          <label for="email">Email:</label>
          <input type="email" name="email" id="email"><br><br>
          <input type="submit" value="Submit">
        </form>
      </div>


      <!--- Task 2 ---->


      <div class="column column-33 item">
        <h3>Task 2: Basic OOP in PHP</h3>
        <?php

        class Person
        {
          private $name;
          private $email;

          public function setName($name)
          {
            $this->name = $name;
          }

          public function setEmail($email)
          {
            $this->email = $email;
          }

          public function getName()
          {
            return $this->name;
          }

          public function getEmail()
          {
            return $this->email;
          }
        }

        $person = new Person();
        $person->setName("Rafsan Jane");
        $person->setEmail("rafsan@rafsanjane.com");

        echo "Name: " . $person->getName() . "<br>";
        echo "Email: " . $person->getEmail() . "<br>";

        ?>
      </div>


      <!--- Task 3 ---->

      <div class="column column-33 item">
        <h3>Task 3: Superglobal Variables in PHP</h3>
        <?php
        if (isset($_POST['name']) && isset($_POST['email'])) {

          $name = $_POST['name'];
          $email = $_POST['email'];

          $person = new Person();
          $person->setName($name);
          $person->setEmail($email);

          echo "Name: " . $person->getName() . "<br>";
          echo "Email: " . $person->getEmail() . "<br>";
        } else {
          echo "<span>Input Your Name and Email</span>";
        }
        ?>
      </div>

    </div>
  </div>


</body>


</html>