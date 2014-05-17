<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Using UnitCounter</title>
</head>
<body>
<?php
    require "UnitCounter.inc";

    // Create a new UnitCounter object
    $bottles = new UnitCounter;

    // set the counter to 2 dozen bottles
    $bottles->units = 24;

    // Add a single bottle
    $bottles->add();

    // Add three more
    $bottles->add(3);

    // Show the total units and weight
    print "There are {$bottles->units} units, ";
    print "total weight = " . $bottles->totalWeight() . " kg";

    // Change the default weight per unit and show the new total weight
    $bottles-> weightPerUnit = 1.2;
    print "<br>Correct total weight = " . $bottles->totalWeight() . " kg";

?>
</body>
</html>
