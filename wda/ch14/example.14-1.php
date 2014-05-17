<?php
class Shape
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

    function __construct($colour, $sides)
    {
        $this->colour = $colour;
        $this->sides = $sides;
    }
}

class Circle extends Shape
{

    function __construct($colour)
    {
        parent::__construct($colour, 1);
    }
}

class Polygon extends Shape
{
    var $angles;

    function angles()
    {
        return $this->angles;
    }

    function __construct($colour, $sides)
    {
         parent::__construct($colour, $sides);
         $this->angles = $sides;
    }
}

class Triangle extends Polygon
{
    function __construct($colour)
    {
        parent::__construct($colour, 3);
    }
}

class Rectangle extends Polygon
{
    function __construct($colour)
    {
        parent::__construct($colour, 4);
    }
}
?>
