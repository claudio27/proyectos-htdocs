<?php

// Access to the UnitCounter class definition
include "example.4-4.php";

class CaseCounter extends UnitCounter
{
    private $unitsPerCase;

    function addCase()
    {
        $this->add($this->unitsPerCase);
    }

    function caseCount()
    {
        return ceil($this->numberOfUnits()/$this->unitsPerCase);
    }

    function __construct($unitsPerCase, $weightPerUnit)
    {
        parent::__construct($weightPerUnit);
        $this->unitsPerCase = $unitsPerCase;
    }
}

?>
