<?php

// This is a copy of example.4-1.php

// Definition of the class UnitCounter
//
class UnitCounter
{
    // Member variables
    var $units = 0;
    var $weightPerUnit = 1.0;


    // Add $n to the total number of units, default $n to 1
    function add($n = 1)
    {
        $this->units = $this->units + $n;
    }

    // Member function that calculates the total weight
    function totalWeight()
    {
        return $this->units * $this->weightPerUnit;
    }
}

?>
