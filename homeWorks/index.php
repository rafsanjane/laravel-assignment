<?php

/* 
*
* Write a PHP class definition for Product that includes the following:
* Private properties for name, price, and description.
* A public constructor method that accepts values for name, price, and description and sets them as the corresponding properties.
*
*/


class Products
{

    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    function get_product()
    {
        return $this->name . "\n" . $this->price  . "\n" .  $this->description;
    }
}

$product = new Products("Iphone", "$1100", "Iphone 14 pro Max 256GB");

echo $product->get_product();
