<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Wines</title>
</head>
<body><pre>
<?php

   function showerror()
   {
      die("Error " . mysql_errno() . " : " . mysql_error());
   }

   // (1) Open the database connection
   if (!($connection = @ mysql_connect("localhost","fred","shhh")))
      die("Could not connect");

   // (2) Select the winestore database
   if (!(@ mysql_select_db("winestore", $connection)))
      showerror();

   // (3) Run the query on the winestore through the connection
   // NOTE : 'SELECT' is deliberately misspelt to cause an error
   if (!($result = @ mysql_query ("SELEC * FROM wine", $connection)))
      showerror();

   // (4) While there are still rows in the result set, 
   // fetch the current row into the array $row
   while ($row = @ mysql_fetch_array($result, MYSQL_NUM))
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
