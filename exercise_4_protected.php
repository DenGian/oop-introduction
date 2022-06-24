<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    // properties
    protected string $color;
    protected float $price;
    protected string $temperature;
    protected string $name;

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
    protected float $alcoholPercentage;

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
        echo "Hi i'm " . $this->name . " and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color. ";
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
