<?php

class FreightCalculator
{

    protected $numberOfCases;
    protected $totalWeight;

    function totalFreight()
    {
        return $this->perCaseTotal() + $this->perKgTotal();
    }

    protected function perCaseTotal()
    {
        return $this->numberOfCases * 1.00;
    }

    protected function perKgTotal()
    {
        return $this->totalWeight * 0.10;
    }

    function __construct($numberOfCases, $totalWeight)
    {
        $this->numberOfCases = $numberOfCases;
        $this->totalWeight = $totalWeight;
    }
}

class AirFreightCalculator extends FreightCalculator
{

    protected function perCaseTotal()
    {
        // $15 + $1 per case
        return 15 + $this->numberOfCases * 1.00;
    }

    protected function perKgTotal()
    {
        // $0.40 per kilogram
        return $this->totalWeight * 0.40;
    }
}

?>
