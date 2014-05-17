<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Hello, world</title>
</head>
<body bgcolor="#ffffff">
<?php

    $domain = "orbit.mds.rmit.edu.au";

    $a = 0;
    while (($b = strpos($domain, ".", $a)) !== false)
    {
        print substr($domain, $a, $b-$a) . "\n";
        $a = $b + 1;
    }

    // print the piece to the right of the last found .
    print substr($domain, $a);

?>
</body>
</html>
