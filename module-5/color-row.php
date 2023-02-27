<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hex To RGB</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <style>
        form h3:nth-of-type(n+2) {
            margin-bottom: 5px;
        }

        .color-preview {
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 20%;
            margin-right: 10px;

        }

        #color-picker::-webkit-color-swatch {
            border-radius: 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="padding-top:80px;">
            <div class="column column-50 column-offset-25">
                <form method="POST" style="box-shadow:0 1rem 3rem rgb(0 0 0 / 18%); padding:50px">
                    <label for=" color-picker">Choose a color:</label>
                    <input type="color" id="color-picker" name="color-picker" value="#40c386">
                    <button type="submit">Submit</button>
                    <br>
                    <?php
                    if (isset($_POST['color-picker'])) {
                        $color = $_POST['color-picker'];

                        echo '<div class="color-preview" style="background-color: ' . $color . ';"></div><br>';
                        echo '<h3>Hex: ' . $color . '<br></h3>';

                        $rgb = sscanf($color, "#%2x%2x%2x");
                        echo '<h3>RGB: ' . $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2] . '</h3><br>';

                        $r = $rgb[0] / 255;
                        $g = $rgb[1] / 255;
                        $b = $rgb[2] / 255;

                        $min = min($r, $g, $b);
                        $max = max($r, $g, $b);
                        $delta = $max - $min;

                        $l = ($max + $min) / 2;

                        if ($delta == 0) {
                            $h = 0;
                            $s = 0;
                        } else {
                            if ($l < 0.5) {
                                $s = $delta / ($max + $min);
                            } else {
                                $s = $delta / (2 - $max - $min);
                            }

                            if ($r == $max) {
                                $h = ($g - $b) / $delta;
                            } elseif ($g == $max) {
                                $h = 2 + ($b - $r) / $delta;
                            } else {
                                $h = 4 + ($r - $g) / $delta;
                            }

                            $h *= 60;

                            if ($h < 0) {
                                $h += 360;
                            }
                        }

                        $h = round($h);
                        $s = round($s * 100);
                        $l = round($l * 100);

                        echo '<h3>HSL: ' . $h . ', ' . $s . '%, ' . $l . '%</h3>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>