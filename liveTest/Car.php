<?php


class Car
{

    private $make;
    private $model;
    private $year;

    public function __construct($make = "2015", $model = "Honda", $year = "Civic")
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function set_make($make)
    {
        $this->make = $make;
    }
    public function set_model($model)
    {
        $this->model = $model;
    }
    public function set_year($year)
    {
        $this->year = $year;
    }
    public function get_make()
    {
        return $this->make;
    }
    public function get_model()
    {
        return $this->model;
    }

    public function get_year()
    {
        return $this->year;
    }


    public function display_info()
    {
        echo "Year: {$this->make} <br> Model: {$this->model}  <br> Year: {$this->year}";
    }
}

$car = new Car();

$car->set_make("Toyota");
$car->set_model("Corolla");
$car->set_year("2015");

$car->display_info();
