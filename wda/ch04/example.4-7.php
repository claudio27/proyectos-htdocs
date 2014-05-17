<?php

// Access to the UnitCounter class definition
require "example.4-4.php";

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

    function __construct($unitsPerCase)
    {
        $this->unitsPerCase = $unitsPerCase;
    }
}

?>
