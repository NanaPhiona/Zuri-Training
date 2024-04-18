<?php

class Car
{
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_model_and_year()
    {
        return 'My car is ' . $this->model . ' and it was made in ' . $this->year;
    }

    public function get_make()
    {
        return 'Car make is ' . $this->make;
    }
}

$car = new Car("Mercedes-Benz", "Mercedes-Benz C-Class", 2023);
echo $car->get_model_and_year();
echo "\n";
echo $car->get_make();

class Mercedes extends Car
{
    public function get_mercedez()
    {
        return "My car is " . $this->model . " and the " . $this->get_make();
    }
}

$mercedes = new Mercedes("Mercedes-Benz", "Mercedes-Benz C-Class", 2023);
echo "\n";
echo "\n";
echo $mercedes->get_mercedez();
