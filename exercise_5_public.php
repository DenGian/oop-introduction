<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

// defining class
class Beverage
{
    // properties set to private
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;

/// creating methods (the functions)
// constructor
    public function __construct(string $name, float $price, string $color) // required properties from parents
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
        $this->name = $name;
    }
// function to show info
    public function getInfo(): void
    {
        echo "$this->name is $this->temperature and costs $this->price euro, it has the color $this->color";
        echo '<br>';
    }
// function to show temperature on screen
    public function colaTemperature(): void
    {
        echo $this->temperature;
    }
    //function with logic to change price upon statements reached
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

// creation of a new object in class (Cola)
$cola = new Beverage('Cola', 2, 'black');
// getter from parent class to get the info
$cola->getInfo();
// call function to show temperature
$cola->colaTemperature();
//call function to dedicate price - addition
$cola->changePrice(1.5);
//call function to dedicate price - subtraction
$cola->changePrice(1.5);