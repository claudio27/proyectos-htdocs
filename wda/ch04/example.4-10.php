<?php

function formatException(Exception $e)
{
    return "Error {$e->getCode()}: {$e->getMessage()}
        (line: {$e->getline()} of {$e->getfile()})";
}


function average($total, $n)
{
    if ($n == 0)
        throw new Exception("Number of items = 0", 1001);

    return $total / $n;
}


// Script that uses the average() function
try
{
    $a = average(100, 0);
    print "Average = {$a}";
}
catch (Exception $error)
{
    print formatException($error);
}

?>
