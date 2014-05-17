<?php
function checkdob($birth_date)
{
  if (empty($birth_date))
  {
    print "The date of birth field cannot be blank.";
    return false;
  }
  // Check the format and explode into $parts
  elseif (!ereg("^([0-9]{2})/([0-9]{2})/([0-9]{4})$", 
          $birth_date, $parts))
  {
    print "The date of birth is not a valid date in the 
           format DD/MM/YYYY";
    return false;
  }
  elseif (!checkdate($parts[2],$parts[1],$parts[3]))
  {
    print "The date of birth is invalid. Please check that the month is
           between 1 and 12, and the day is valid for that month.";
    return false;
  }
  elseif (intval($parts[3]) < 1902 || 
          intval($parts[3]) > intval(date("Y")))
  {
    print "You must be alive to use this service.";
    return false;
  }
  else
  {
    $dob = mktime(0, 0, 0, $parts[2], $parts[1], $parts[3]);

    // Check whether the user is 18 years old.
    if ((float)$dob > (float)strtotime("-18years"))
    {
      print "You must be 18+ years of age to use this service";
      return false;
    }
  }
  return true;
}
?>
