<?php

class GrandPa
{
    private $name = 'Mark Henry';
}

class Daddy extends GrandPa
{
    function displayGrandPaName()
    {
        return $this->name;
    }

}

$daddy = new Daddy;
echo $daddy->displayGrandPaName(); // Results in a Notice 

$outsiderWantstoKnowGrandpasName = new GrandPa;
echo $outsiderWantstoKnowGrandpasName->name; // Results in a Fatal Error
?>