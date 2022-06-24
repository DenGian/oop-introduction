<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

// class Beverage
class Beverage
{
    // properties parent class / notice the protected, ENCAPSULATION! accessible outside of class for chlild classes
    protected string $color;
    protected float $price;
    protected string $temperature;
    protected string $name;

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
    protected float $alcoholPercentage;

/// methods
// constructor
    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
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
        echo "Hi i'm " . $this->name . " and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color. ";
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
