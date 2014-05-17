<?php
// This is the PEAR version of Example 9-4

require_once "Date/Calc.php";

function checkdob($birth_date)
{
  $date = new Date_Calc();

  if (empty($birth_date))
  {
    print "The date of birth field cannot be blank.";
    return false;
  }
  elseif (!ereg("^([0-9]{2})/([0-9]{2})/([0-9]{4})$", 
          $birth_date, $parts))
  {
    print "The date of birth is not a valid date in the 
           format DD/MM/YYYY";
    return false;
  }
  elseif (!$date->isValidDate($parts[1], $parts[2], $parts[3]))
  {
    print "The date of birth is invalid. Please check that the month 
           is between 1 and 12, and the day is valid for that month.";
    return false;
  }
  elseif (intval($parts[3]) < 1902 || 
          $date->isFutureDate($parts[1], $parts[2], $parts[3]))
  {
    print "You must be alive to use this service.";
    return false;
  }
  else
  {
    // Check whether the user is 18 years old.
    if ($date->compareDates($parts[1], $parts[2], $parts[3],
        intval(date("d")), intval(date("m")), intval(date("Y"))-18) > 0)
    {
      print "You must be 18+ years of age to use this service.";
      return false;
    }
  }
  return true;
}
?>
