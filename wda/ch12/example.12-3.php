<?php
  // start buffering
  ob_start();
?>
<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Error</title>
<body>
<?php
function customHandler($number, $string, $file, $line, $context)
{
  // Throw away the current buffer
  ob_end_clean();

  print "An error occurred!";
  die();
}

set_error_handler("customHandler");

// Generates an E_NOTICE
print $a;

// Output the buffer
ob_end_flush();

?>
</body>
</html>
