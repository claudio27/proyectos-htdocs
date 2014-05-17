<?php
class UnitCounter
{
    private $units = 0;
    private $weightPerUnit = 1.0;

    function numberOfUnits()
    {
        return $this->units;
    }

    function add($n = 1)
    {
        if (is_int($n) && $n > 0)
            $this->units = $this->units + $n;
    }

    function totalWeight()
    {
        return $this->units * $this->weightPerUnit;
    }

    function __construct($weightPerUnit)
    {
        $this->weightPerUnit = abs((float)$weightPerUnit);
        $this->units = 0;
    }
}
?>
