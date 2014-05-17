<?php

abstract class Shape
{
    var $colour;
    var $sides;

    function colour() 
    { 
        return $this->colour; 
    }

    function sides()
    {
        return $this->sides;
    }

    abstract function area();

    function __construct($colour, $sides)
    {
        $this->colour = $colour;
        $this->sides = $sides;
    }
}

class Circle extends Shape
{
    var $radius;

    function area()
    {
        return 2 *  PI * $this->radius;
    }

    function __construct($colour, $radius)
    {
        $this->radius = $radius;
        parent::__construct($colour, 1);
    }
}

class Rectangle extends Shape
{
    var $width;
    var $height;

    function area()
    {
        return $this->width * $this->height;
    }

    function __construct($colour, $width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        parent::__construct($colour, 4);
    }
}

class Triangle extends Shape
{
    // The length of each side
    var $a;
    var $b;
    var $c;

    function area()
    {
        // Area using Heron's formula
        $s = ($this->a + $this->b + $this->c)/2;
        $area = sqrt(
            $s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c)
            );

        return $area;
    }

    function __construct($colour, $a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct($colour, 3);
    }
}
?>
