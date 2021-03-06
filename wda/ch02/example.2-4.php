<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>The Times-Tables</title>
</head>
<body bgcolor="#ffffff">
<h1>The Times Tables</h1>
<?php
  // Go through each table
  for($table=1; $table<13; $table++) 
  {  
    print "<p><b>The " . $table . " Times Table</b>\n";

    // Produce 12 lines for each table
    for($counter=1; $counter<13; $counter++)
    {
      $answer = $table * $counter;

      // Is this an even-number counter?
      if ($counter % 2 == 0)
        // Yes, so print this line in bold
        print "<br><b>$counter x $table = " . 
             "$answer</b>";

      else
        // No, so print this in normal face
        print "<br>$counter x $table = $answer";
    }
  }
?>
</body>
</html>
