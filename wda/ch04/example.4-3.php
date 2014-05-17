<?php

class UnitCounter
{
    var $units;
    var $weightPerUnit;

    function add($n = 1)
    {
        $this->units = $this->units + $n;
    }

    function totalWeight()
    {
        return $this->units * $this->weightPerUnit;
    }

    // Constructor function that initializes the member variables
    function __construct($weightPerUnit = 1)
    {
        $this->weightPerUnit = $weightPerUnit;
        $this->units = 0;
    }
}

?>
