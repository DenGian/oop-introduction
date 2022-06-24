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
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = 'cold';
        $this-> name = $name;
    }
    public function getInfo() : void {
        echo "$this->name is $this->temperature and costs $this->price euro, it has the color $this->color";
        echo '<br>';
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this-> color = $color; // setter
        // echo $this ->color;
    }
    public function getName(): string
    {
        return $this->name;
    }
}

class Beer extends Beverage
{
    // properties
    private float $alcoholPercentage;

// constructor, methods
    public function __construct(string $name, float $price, string $color, float $alcoholPercentage)
    {
        parent::__construct($name, $price, $color);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
    public function getAlcoholPercentage2(): void
    {
        echo $this->alcoholPercentage . '<br>';
    }
    private function beerInfo(): void
    {
        echo "Hi i'm " . $this->getName() . " and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a " . $this->getColor() . " color. ";
    }
    public function getBeerInfo(): void
    {
        $this->beerInfo() . '<br>';
    }
}

$duvel = new Beer('Duvel', 3.5, 'blond', 8.5);
$duvel->getInfo();
echo $duvel->getAlcoholPercentage() . '<br>';
$duvel->getAlcoholPercentage2();
echo $duvel->getColor() . '<br>';
$duvel->setColor('light');
echo $duvel->getColor() . '<br>';
$duvel->getBeerInfo();
