<?php
  require "class.ezpdf.php";
  $doc =& new Cezpdf();
  $table = array(
    array("Col A" => "Row 1, Col A data", "Col B" => "Row 1, Col B data"),
    array("Col A" => "Row 2, Col A data", "Col B" => "Row 2, Col B data")
  );
  $doc->ezTable($table);
  $doc->ezStream();
?>
