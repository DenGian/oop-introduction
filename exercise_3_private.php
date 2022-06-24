<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

// class Beverage
class Beverage
{
    // properties parent class / notice the private, ENCAPSULATION! not accessible outside of class - function except for getters
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;

/// methods
// constructor
    public function __construct(string $name, float $price, string $color)
    {
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = 'cold';
        $this-> name = $name;
    }
    // getter for info beverage
    public function getInfo() : void {
        echo "$this->name is $this->temperature and costs $this->price euro, it has the color $this->color";
        echo '<br>';
    }
    // getter color value
    public function getColor(): string
    {
        return $this->color;
    }
    // setter to change the color
    public function setColor(string $color): void
    {
        $this-> color = $color; // setter
        // echo $this ->color;
    }
    // getter for the name
    public function getName(): string
    {
        return $this->name;
    }
}

// child class Beer
class Beer extends Beverage
{
    // properties set private
    private float $alcoholPercentage;

/// methods
//constructor
    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
        // constructor from parent class with parent properties
        parent::__construct($name, $price, $color);
        $this->alcoholPercentage = $alcoholPercentage;
    }
// getter for alcohol percentage
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
// new function to show alcohol percentage without return = no getter
    public function getAlcoholPercentage2(): void
    {
        echo $this->alcoholPercentage . '<br>';
    }
    // private function to display text on screen
    private function beerInfo(): void
    {
        echo "Hi i'm " . $this->getName() . " and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a " . $this->getColor() . " color. ";
    }
    // getter for the beer info
    public function getBeerInfo(): void
    {
        $this->beerInfo() . '<br>';
    }
}
// creation of a new object in class (Duvel)
$duvel = new Beer('Duvel', 3.5, 'blond', 8.5);
// getter from parent class to get the info
$duvel->getInfo();
// show value of getter from child class to get alcohol percentage
echo $duvel->getAlcoholPercentage() . '<br>';
// second function to display alcohol percentage without getter
$duvel->getAlcoholPercentage2();
// show value getter for color on screen
echo $duvel->getColor() . '<br>';
// setter to set the new value of 'color' to 'light'
$duvel->setColor('light');
// show value getter for color on screen
echo $duvel->getColor() . '<br>';
// getter from child class to display private function
$duvel->getBeerInfo();
