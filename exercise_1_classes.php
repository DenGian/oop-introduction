<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/


// defining class
class Beverage
{
    // properties
    public string $color;
    public float $price;
    public string $temperature;
    public string $name;

/// creating methods (the functions)
// constructor
    public function __construct(string $name, float $price, string $color) // required properties
    {
        $this-> color = $color;
        $this-> price = $price;
        $this-> temperature = 'cold';
        $this-> name = $name;
    }
// getter
    public function getInfo() : void { // empty
        echo "$this->name is $this->temperature and costs $this->price euro, it has the color $this->color"; // displayed string on screen
        echo '<br>';
    }
}
// creation of a new object in class (Cola)
$cola = new Beverage('Cola', 2, 'black'); // parameters of new beverage with the info for Cola

$cola-> getInfo();
echo $cola->temperature; // show temperature on the screen
