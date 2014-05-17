<?php
  require "class.ezpdf.php";
  require "alice.inc";

  // Create a new PDF document
  $doc =& new Cezpdf();

  // Use the Helvetica font for the headings
  $doc->selectFont("./fonts/Helvetica.afm");

  // Output the book heading and author
  $doc->ezText("<u>Alice's Adventures in Wonderland</u>", 24,
                array("justification"=>"center"));
  $doc->ezText("by Lewis Carroll", 20, array("justification"=>"center"));

  // Create a little bit of space
  $doc->ezSetDy(-10);

  // Output the chapter title
  $doc->ezText("Chapter 1: Down the Rabbit-Hole", 18,
                array("justification"=>"center"));

  // Number the pages
  $doc->ezStartPageNumbers(320, 15, 8,"",
     "{PAGENUM} of {TOTALPAGENUM} pages");

  // Create a little bit of space
  $doc->ezSetDy(-30);

  // Switch to two-column mode
  $doc->ezColumnsStart(array("num"=>2, "gap"=>15));

  // Use the Times-Roman font for the text
  $doc->selectFont("./fonts/Times-Roman.afm");

  // Include an image with a caption
  $doc->ezImage("rabbit.jpg", "", "", "none");
  $doc->ezText("<b>White Rabbit checking watch</b>",
               12,array("justification"=>"center"));

  // Create a little bit of space
  $doc->ezSetDy(-10);

  // Add chapter text to the document
  $doc->ezText($text,10,array("justification"=>"full"));

  // Output the document
  $doc->ezStream();
?>
