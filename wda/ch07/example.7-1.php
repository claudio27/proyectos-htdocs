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
   require_once "DB.php";
   require "db.inc";

   $dsn = "mysql://{$username}:{$password}@{$hostName}/{$databaseName}";

   // Open a connection to the DBMS
   $connection = DB::connect($dsn);

   if (DB::isError($connection))
      die($connection->getMessage());

   // (Run the query on the winestore through the connection
   $result = $connection->query("SELECT * FROM wine");

   if (DB::isError($result))
      die ($result->getMessage());

   // While there are still rows in the result set, fetch the current 
   // row into the array $row
   while ($row = $result->fetchRow(DB_FETCHMODE_ASSOC))
   {
     // Print out each element in $row, that is, print the values of 
      // the attributes
      foreach ($row as $attribute)
         print "{$attribute} ";

      print "\n";
   }
?>
</pre>
</body>
</html>
