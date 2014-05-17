<?php
function customHandler($number, $string, $file, $line, $context)
{
  $error = "";

  switch ($number)
  {
     case E_USER_ERROR:
       $error .= "\nERROR on line {$line} in {$file}.\n";
       $stop = true;
       break;
     case E_WARNING:
     case E_USER_WARNING:
       $error .= "\nWARNING on line {$line} in {$file}.\n";
       $stop = true;
       break;
     case E_NOTICE:
     case E_USER_NOTICE:
       $error .= "\nNOTICE on line {$line} in {$file}.\n";
       $stop = false;
       break;
     default:
       $error .= "UNHANDLED ERROR on line {$line} in {$file}.\n";
       $stop = false;
  }
  $error .= "Error: \"{$string}\" (error #{$number}).";
  $error .= backTrace($context);
  $error .= "\nClient IP: {$_SERVER["REMOTE_ADDR"]}";

  $prepend = "\n[PHP Error " . date("YmdHis") . "]";
  $error = ereg_replace("\n", $prepend, $error);

  // Throw away the buffer
  ob_end_clean();

  print "<pre>{$error}</pre>";
  // Log to a user-defined filename
  // error_log($error, 3, "/home/hugh/php_error_log");

  if ($stop == true)
    die(); 
}
?>
