<?php
function checkemail($email)
{
  // Check syntax
  $validEmailExpr =  "^[0-9a-z~!#$%&_-]([.]?[0-9a-z~!#$%&_-])*" .
                     "@[0-9a-z~!#$%&_-]([.]?[0-9a-z~!#$%&_-])*$";

  // Validate the email
  if (empty($email))
  {
    print "The email field cannot be blank";
    return false;
  }    
  elseif (!eregi($validEmailExpr, $email))
  {  
    print "The email must be in the name@domain format.";
    return false;
  }
  elseif (strlen($email) > 30)
  { 
    print "The email address can be no longer than 30 characters.";
    return false;
  }
  elseif (function_exists("getmxrr") && function_exists("gethostbyname"))
  {
    // Extract the domain of the email address
    $maildomain = substr(strstr($email, '@'), 1);

    if (!(getmxrr($maildomain, $temp) || 
          gethostbyname($maildomain) != $maildomain))
    {
      print "The domain does not exist.";
      return false;
    }
  }
  return true;
}
?>
