<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$colorPicker = $_POST['color-picker'];
    //echo $colorPicker;
    //$hexcode = isset($_POST["hexcode"]) ? $_POST["hexcode"] : $colorPicker;
    $hexcode = $_POST["hexcode"];


    class RGB
    {

        private $color;
        private $red;
        private $green;
        private $blue;


        public function __construct($colorCode = '')
        {
            $this->color = ltrim($colorCode, "#");
            $this->colorParse();
        }

        public function getColor()
        {
            return $this->color;
        }
        public function getRGBColor()
        {
            return "{$this->red},{$this->green},{$this->blue}";
        }
        public function getRGBreadable()
        {
            return "Red: {$this->red}<br>
                    Green: {$this->green}<br>
                    Blue: {$this->blue}";
        }
        public function setColor($colorCode)
        {
            $this->color = ltrim($colorCode, "#");
            $this->colorParse();
        }

        private function colorParse()
        {

            if ($this->color) {
                list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
            } else {

                list($this->red, $this->green, $this->blue) = array(0, 0, 0);
            }
        }

        function getRed()
        {
            return $this->red;
        }
        function getGreen()
        {
            return $this->green;
        }
        function getBlue()
        {
            return $this->blue;
        }
    }

    $myColor = new RGB();

    // Set color to color method 
    $myColor->setColor($hexcode);
}
?>

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
            border-radius: 50%;
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
                <form class="" style="box-shadow:0 1rem 3rem rgb(0 0 0 / 18%); padding:50px" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <h1>Hex To RGB Converter</h1>
                    <label for="hexcode">Paste Your Hex Code</label>
                    <input type="text" id="hexcode" name="hexcode">
                    <!-- <label>OR</label>
                    <label for="color-picker">Choose a color:</label>
                    <input type="color" id="color-picker" value="#40c386" name="color-picker"> -->
                    <br>
                    <button style="background: #4dca8b; border:#4dca8b;" type="submit">Get Converted</button>
                    <br>
                    <br>
                    <h3>RGB: <?php if (isset($hexcode)) {
                                    echo "<b style='color:{$hexcode}; text-shadow: 2px 2px #d3d3d3;'>{$myColor->getRGBColor()}</b>";
                                }  ?>
                    </h3>
                    <h3>Red:
                        <?php
                        if (isset($hexcode)) {
                            echo " {$myColor->getRed()}";
                        }
                        ?>
                    </h3>
                    <h3>Green: <?php if (isset($hexcode)) {
                                    echo "{$myColor->getGreen()}";
                                }  ?>
                    </h3>
                    <h3>Blue: <?php if (isset($hexcode)) {
                                    echo "{$myColor->getBlue()}";
                                }  ?>
                    </h3>
                </form>
                <div class="column column-50">
                </div>
            </div>
        </div>
    </div>


</body>

</html>