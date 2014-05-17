<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Error</title>
<body>
<h1>Two times!</h1>
<?php
function customHandler($number, $string, $file, $line, $context)
{
  switch ($number)
  {
     case E_WARNING:
     case E_NOTICE:
       print "<hr><font color=\"red\">\n";
       print "<b>Custom Error Handler -- Warning/Notice<b>\n";
       print "<br>An error has occurred on {$line} line in 
              the {$file} file.\n";
       print "<br>The error is a \"{$string}\" (error #{$number}).\n ";
       print "<br>Here's some context information:<br>\n<pre>\n";
       print_r($context);
       print "\n</pre></font>\n<hr>\n";
       break;
     default:
        // Do nothing
  }
}

function double($number)
{
  return $number*2;
}

set_error_handler("customHandler");

// Generates a warning for a missing parameter
print "Two times ten is: " . double();
?>
</body>
</html>
