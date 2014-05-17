<?php
  require_once "HTML/Template/IT.php";
  include "db.inc";

  // Connect to the MySQL server
  if (!($connection = @ mysql_connect($hostname, $username, $password)))
     die("Cannot connect");

  if (!(mysql_select_db($databaseName, $connection)))
     showerror();

  // Run the query on the connection
  if (!($result = @ mysql_query ("SELECT * FROM customer LIMIT 50",
                                 $connection)))
     showerror();

  // Create a new template, and specify that the template files are 
  // in the subdirectory "templates"
  $template = new HTML_Template_IT("./templates");

  // Load the customer template file
  $template->loadTemplatefile("example.7-2.tpl", true, true);

  while ($row = mysql_fetch_array($result))
  {
     // Work with the customer block
     $template->setCurrentBlock("CUSTOMER");

     // Assign the row data to the template placeholders
     $template->setVariable("FIRSTNAME", $row["firstname"]);
     $template->setVariable("SURNAME", $row["surname"]);
     $template->setVariable("ADDRESS", $row["address"]);
     $template->setVariable("CITY", $row["city"]);
     $template->setVariable("STATE", $row["state"]);
     $template->setVariable("ZIPCODE", $row["zipcode"]);

     // Parse the current block
     $template->parseCurrentBlock();
  }

  // Output the web page
  $template->show();
?>
