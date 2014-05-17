<?php

// Access to the FreightCalculator class
require_once "example.14-6.php";

class AirFreightCalculator extends FreightCalculator
{
     protected function perCaseTotal()
     {
         return 15 + $this->item->caseCount() * 1.00;
     }

     protected function perKgTotal()
     {
         return $this->item->totalWeight() * 0.40;
     }
}

class RoadFreightCalculator extends FreightCalculator
{

     protected function perCaseTotal()
     {
         $numcases = $this->item->caseCount();

         if ($numcases < 5)
             return 15;
         else
             return 15 + ($numcases - 5) * 1.50;
     }

     protected function perKgTotal()
     {
         $weight = $this->item->totalWeight();

         if ($weight < 50)
             return 0;
         else
             return ($weight - 50) * 0.10;
     }
}

?>
