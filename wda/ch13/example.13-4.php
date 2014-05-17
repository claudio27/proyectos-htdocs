<?php
  require "class.ezpdf.php";
  require "db.inc";

  // Do the querying to produce the customer report
  $query = "SELECT customer.cust_id, surname, firstname,
                   SUM(qty), SUM(price), MAX(order_id)
            FROM customer, items
            WHERE customer.cust_id = items.cust_id
            GROUP BY customer.cust_id";

  if (!($connection = @ mysql_connect($hostName, $username, $password)))
    die("Could not connect to database");

  if (!(mysql_selectdb($databaseName, $connection)))
    showerror();

  if (!($result = @ mysql_query($query, $connection)))
    showerror();

  // Now, create a new PDF document
  $doc =& new Cezpdf();

  // Use the Helvetica font
  $doc->selectFont("./fonts/Helvetica.afm");

  // Number the pages
  $doc->ezStartPageNumbers(320, 15, 8);

  // Set up running totals and an empty array for the output
  $counter = 0;
  $table = array();
  $totalOrders = 0;
  $totalBottles = 0;
  $totalAmount = 0;

  // Get the query rows, and put them in the table
  while ($row = mysql_fetch_array($result))
  {
    // Counts the total number of rows output
    $counter++;

    // Add current query row to the array of customer information
    $table[] = array(
          "Customer #"=>$row["cust_id"],
          "Name"=> "{$row["surname"]}, {$row["firstname"]}",
          "Orders Placed"=>$row["MAX(order_id)"],
          "Total Bottles"=>$row["SUM(qty)"],
          "Total Amount"=>"\${$row["SUM(price)"]}");

    // Update running totals
    $totalOrders += $row["MAX(order_id)"];
    $totalBottles += $row["SUM(qty)"];
    $totalAmount += $row["SUM(price)"];
  }

  // Today's date is used in the table heading
  $date = date("d M Y");

  // Right-justify the numeric columns
  $options = array("cols" =>
               array("Total Amount" =>
                 array("justification" => "right"),
                     "Total Bottles" =>
                 array("justification" => "right"),
                     "Orders Placed" =>
                 array("justification" => "right")));

  // Output the table with a heading
  $doc->ezTable($table, "", "Customer Order Report for {$date}",
                $options);

  $doc->ezSetDy(-10);

  // Show totals
  $doc->ezText("Total customers: {$counter}");
  $doc->ezText("Total orders: {$totalOrders}");
  $doc->ezText("Total bottles: {$totalBottles}");
  $doc->ezText("Total amount: \${$totalAmount}");

  // Output the document
  $doc->ezStream();
?>
