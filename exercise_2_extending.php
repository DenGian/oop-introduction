<?php

declare(strict_types=1);

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

require 'exercise_1_classes.php';

// a new class Beer that EXTENDS from Beverage / Child - Parent / access to the same properties
class Beer extends Beverage
{
    // properties
    public float $alcoholPercentage;

/// creating methods (the functions)
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
}
// // creation of a new object in class (Duvel)
$duvel = new Beer('Duvel', 3.5, 'blond', 8.5);
// getter from parent class
$duvel->getInfo();
// getter from child class
echo $duvel->getAlcoholPercentage() . '<br>';
// display of alcohol percentage without getter
echo $duvel->alcoholPercentage . '<br>';
// display of color
echo $duvel->color . '<br>';
// intentional error message / Cola is an object of parent class and can't access child class properties
echo $cola->getAlcoholPercentage();