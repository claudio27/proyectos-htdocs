<?php

// access to the Deliverable interface
require_once "example.14-4.php";

class ChristmasHamper implements Deliverable
{
    function caseCount()
    {
        return 1;
    }

    function totalWeight ()
    {
        return 26.5;
    }

    function description()
    {
        return "A hamper chock-full of Christmas goodies";
    }
}
?>
