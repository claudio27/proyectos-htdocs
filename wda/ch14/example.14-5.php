<?php

// Access to the UnitCounter class definition
require_once "example.4-4.php";

// Access to the Deliverable interface definition
require_once "example.14-4.php";


class CaseCounter extends UnitCounter implements Deliverable
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
