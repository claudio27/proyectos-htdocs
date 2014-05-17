<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Wines</title>
</head>
<body>
<?php
  require 'db.inc';

  // Show the wines in an HTML <table>
  function displayWines($result)
  {

     print "<h1>Our Wines</h1>\n";

     // Start a table, with column headers
     print "\n<table>\n<tr>\n" .
          "\n\t<th>Wine ID</th>" .
          "\n\t<th>Wine Name</th>" .
          "\n\t<th>Type</th>" .
          "\n\t<th>Year</th>" .
          "\n\t<th>Winery ID</th>" .
          "\n\t<th>Description</th>" .
          "\n</tr>";

     // Until there are no rows in the result set, fetch a row into 
     // the $row array and ...
     while ($row = @ mysql_fetch_row($result))
     {
        // ... start a TABLE row ...
        print "\n<tr>";

        // ... and print out each of the attributes in that row as a
        // separate TD (Table Data).
        foreach($row as $data)
           print "\n\t<td> {$data} </td>";

        // Finish the row
        print "\n</tr>";
     }

     // Then, finish the table
     print "\n</table>\n";
  }

  $query = "SELECT * FROM wine";

  // Connect to the MySQL server
  if (!($connection = @ mysql_connect($hostname, $username, $password)))
     die("Cannot connect");

  if (!(mysql_select_db($databaseName, $connection)))
     showerror();

  // Run the query on the connection
  if (!($result = @ mysql_query ($query, $connection)))
     showerror();

  // Display the results
  displayWines($result);
?>
</body>
</html>
