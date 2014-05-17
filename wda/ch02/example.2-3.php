<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Simple Function Call</title>
</head>
<body bgcolor="#ffffff">
<?php

function bold($string)
{
  print "<b>" . $string . "</b>\n";
}

// First example function call (with a static string)
print "this is not bold\n";
bold("this is bold");
print "this is again not bold\n";

// Second example function call (with a variable)
$myString = "this is bold";
bold($myString);
?>
</body></html>
