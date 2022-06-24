<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
    // properties
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;

// constructor
    public function __construct(string $name, float $price, string $color)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
        $this->name = $name;
    }

    public function getInfo(): void
    {
        echo "$this->name is $this->temperature and costs $this->price euro, it has the color $this->color";
        echo '<br>';
    }

    public function colaTemperature(): void
    {
        echo $this->temperature;
    }

    public function changePrice(float $munies): void
    {
        if ($this->price <= 3) {
            $this->price += $munies;
            echo "<br> new price is €$this->price, yes";
        }
        else{
            $this->price -= $munies;
            echo "<br> new price is €$this->price, no";
        }
    }
}

$cola = new Beverage('Cola', 2, 'black');

$cola->getInfo();
$cola->colaTemperature();
$cola->changePrice(1.5);
$cola->changePrice(1.5);