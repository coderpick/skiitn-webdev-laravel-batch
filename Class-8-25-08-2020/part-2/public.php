<?php

class GrandPa
{
    public $name ='Mark Henry';  // A public variable
}

class Daddy extends GrandPa // Inherited class
{
    function displayGrandPaName()
    {
        return $this->name; // The public variable will be available to the inherited class
    }

}

// Inherited class Daddy wants to know Grandpas Name
$daddy = new Daddy();
echo $daddy->displayGrandPaName(); // Prints 'Mark Henry'
echo "<br/>";
// Public variables can also be accessed outside of the class!
$outsiderWantstoKnowGrandpasName = new GrandPa;
echo $outsiderWantstoKnowGrandpasName->name; // Prints 'Mark Henry'
?>