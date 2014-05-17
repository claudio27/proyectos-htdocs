<?php

function checkcountry($country, $zipcode)
{
  switch ($country)
  {
    case "Austria":
    case "Australia":
    case "Belgium":
    case "Denmark":
    case "Norway":
    case "Portugal":
    case "Switzerland":
      if (!ereg("^[0-9]{4}$", $zipcode))
      {
         print "The postcode/zipcode must be 4 digits in length";
         return false;
      }
      break;
    case "Finland":
    case "France":
    case "Germany":
    case "Italy":
    case "Spain":
    case "USA":
      if (!ereg("^[0-9]{5}$", $zipcode))
      {
         print "The postcode/zipcode must be 5 digits in length";
         return false;
       }
       break;
    case "Greece":
      if (!ereg("^[0-9]{3}[ ][0-9]{2}$", $zipcode))
      {
         print "The postcode must have 3 digits, a space,
                and then 2 digits";
         return false;
      }
      break;
    case "Netherlands":
      if (!ereg("^[0-9]{4}[ ][A-Z]{2}$", $zipcode))
      {
         print "The postcode must have 4 digits, a space, and then 2
                letters";
         return false;
      }
      break;
    case "Poland":
      if (!ereg("^[0-9]{2}-[0-9]{3}$", $zipcode))
      {
         print "The postcode must have 2 digits, a dash,
                and then 3 digits";
         return false;
      }
      break;
    case "Sweden":
      if (!ereg("^[0-9]{3}[ ][0-9]{2}$", $zipcode))
      {
         print "The postcode must have 3 digits, a space,
                and then 2 digits";
         return false;
      }
      break;
    case "United Kingdom":
      if (!ereg("^(([A-Z][0-9]{1,2})|([A-Z]{2}[0-9]{1,2})|" .
                "([A-Z]{2}[0-9][A-Z])|([A-Z][0-9][A-Z])|" .
                "([A-Z]{3}))[ ][0-9][A-Z]{2}$", $zipcode))
      {
         print "The postcode must begin with a string of the format
                A9, A99, AA9, AA99, AA9A, A9A, or AAA,
                and then be followed by a space and a string
                of the form 9AA.
                A is any letter and 9 is any number.";
        return false;
      }
      break;
    default:
      // No validation
  }
  return true;
}
?>
