<?php

class Man
{
    function hand($substance)
    {
        return 'I grab the ' . $substance;
    }

    function leg($path)
    {
        return 'I go to ' . $path;
    }

    function mouth($food)
    {
        return 'I eat ' . $food;
    }

    function eye($object)
    {
        return 'I watch ' . $object;
    }
}

$hafiz = new Man();

echo $hafiz->eye('Movie');
echo "<br/>";
$mizan = new Man();
echo $mizan->mouth('Burger');
?>