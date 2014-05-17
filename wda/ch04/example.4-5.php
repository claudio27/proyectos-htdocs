<?php

class FreightCalculator
{

    private $numberOfCases;
    private $totalWeight;

    function totalFreight()
    {
        return $this->perCaseTotal() + $this->perKgTotal();
    }

    private function perCaseTotal()
    {
        return $this->numberOfCases * 1.00;
    }

    private function perKgTotal()
    {
        return $this->totalWeight * 0.10;
    }

    function __construct($numberOfCases, $totalWeight)
    {
        $this->numberOfCases = $numberOfCases;
        $this->totalWeight = $totalWeight;
    }
}

?>
