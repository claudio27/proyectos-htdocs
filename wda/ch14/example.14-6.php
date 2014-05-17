<?php

// Access to the Deliverable interface definition
require_once "example.14-4.php";

abstract class FreightCalculator
{
    // The Deliverable item
    protected $item;

    function totalFreight()
    {
        return $this->perCaseTotal() + $this->perKgTotal();
    }

    abstract protected function perCaseTotal();
    abstract protected function perKgTotal();

    function __construct(Deliverable $item)
    {
        $this->item = $item;
    }
}

?>
