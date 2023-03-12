<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }

        img {
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column  ">
                <h2>Dashboard - User List</h2>
                <h4><a href="./index.html">Back</a></h4>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Profile Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $file = fopen('users.csv', 'r');
                        while (($row = fgetcsv($file)) !== false) {
                            echo '<tr>';
                            foreach ($row as $data) {
                                if (strpos($data, '.jpg') !== false || strpos($data, '.png') !== false || strpos($data, '.jpeg') !== false) {
                                    echo '<td><img src="./' . htmlspecialchars($data) . '" width="50" height="50" ></td>';
                                } else {
                                    echo '<td>' . htmlspecialchars($data) . '</td>';
                                }
                            }
                            echo '</tr>';
                        }
                        fclose($file);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>