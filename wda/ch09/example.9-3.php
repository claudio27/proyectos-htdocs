<?php

function checkcard($cc, $ccType)
{
  if (!ereg("^[0-9 ]*$", $cc))
  {
    print "Card number must contain only digits and spaces.";
    return (false);
  }

  // Remove spaces
  $cc = ereg_replace('[ ]', '', $cc);

  // Check first four digits
  $firstFour = intval(substr($cc, 0, 4));
  $type = "";
  $length = 0;

  if ($firstFour >= 8000 && $firstFour <= 8999)
  {
    // Try: 8000 0000 0000 1001
    $type = "SurchargeCard";
    $length = 16;
  }
  elseif ($firstFour >= 9100 && $firstFour <= 9599)
  {
    // Try: 9100 0000 0001 7
    $type = "AustralianExpress";
    $length = 13;
  }

  if (empty($type) || strcmp($type, $ccType) != 0)
  {
    print "Please check your card details.";
    return (false);
  }

  if (strlen($cc) != $length)
  {
    print "Card number must contain {$length} digits.";
    return (false);
  }

  $check = 0;

 // Add up every 2nd digit, beginning at the right end
  for($x=$length-1;$x>=0;$x-=2)
    $check += intval(substr($cc, $x, 1));

  // Add up every 2nd digit doubled, beginning at the right end - 1.
  // Subtract 9 where doubled value is greater than 10
  for($x=$length-2;$x>=0;$x-=2)
  {
    $double = intval(substr($cc, $x, 1)) * 2;
    if ($double >= 10)
      $check += $double - 9;
    else
      $check += $double;
  }

  // Is $check not a multiple of 10?
  if ($check % 10 != 0)
  {
    print "Credit card invalid. Please check number.";
    return (false);
  }
  return (true);
}

?>
