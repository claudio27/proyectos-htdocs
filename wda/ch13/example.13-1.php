<?php
  require "class.ezpdf.php";

  // Create a new PDF document
  $doc =& new Cezpdf();

  // Add text to the document
  $doc->ezText("Hello, world");

  // Output the document
  $doc->ezStream();
?>
