<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Wines</title>
</head>
<body>
<pre>
<?php
   // (1) Open the database connection
   $connection = mysqli_connect("localhost","fred","shhh");

   // (2) Select the winestore database
   mysqli_select_db($connection, "winestore");

   // (3) Run the query on the winestore through the connection
   $result = mysqli_query($connection, "SELECT * FROM wine");

   // (4) While there are still rows in the result set, fetch the current
   // row into the array $row
   while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
   {
     // (5) Print out each element in $row, that is, print the values of
     // the attributes
      foreach ($row as $attribute)
         print "{$attribute} ";

      // Print a carriage return to neaten the output
      print "\n";
   }
?>
</pre>
</body>
</html>
