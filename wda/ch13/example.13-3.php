<?php
  require "class.ezpdf.php";
  require "db.inc";

  $query = "SELECT * FROM customer, titles, countries
            WHERE customer.title_id = titles.title_id
            AND customer.country_id = countries.country_id
            AND cust_id = 1";

  if (!($connection = @ mysql_connect($hostName, $username, $password)))
    die("Could not connect to database");

  if (!(mysql_selectdb($databaseName, $connection)))
    showerror();

  if (!($result = @ mysql_query($query, $connection)))
    showerror();

  $row = mysql_fetch_array($result);

  // Construct the title and name
  $name = "{$row["title"]} {$row["firstname"]}";
  if (!empty($row["initial"]))
    $name .= " {$row["initial"]} ";
  $name .= "{$row["surname"]}";

  // Create a new PDF document
  $doc =& new Cezpdf();

  // Use the Helvetica font
  $doc->selectFont("./fonts/Helvetica.afm");

  // Create a heading
  $doc->ezText("<u>Customer Details for {$name}</u>",
                14, array("justification"=>"center"));

  // Create a little bit of space
  $doc->ezSetDy(-15);

  // Set up an array of customer information
  $table = array(
    array("Details"=>"Title and name",
          "Value"=>$name),
    array("Details"=>"Address",
          "Value"=>"{$row["address"]} {$row["city"]} {$row["zipcode"]}"),
    array("Details"=>"State and country",
          "Value"=>"{$row["state"]} {$row["country"]}"),
    array("Details"=>"Telephone",
          "Value"=>$row["phone"]),
    array("Details"=>"Date of birth",
          "Value"=>$row["birth_date"]));

  $doc->ezTable($table);

  // Output the document
  $doc->ezStream();
?>
