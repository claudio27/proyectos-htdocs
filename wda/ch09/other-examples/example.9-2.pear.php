<?php
// This is the PEAR version of Example 9-2

require_once "Net/DNS.php";

// Call with $type of MX, then A to check if an email address
// domain is valid
function checkMailDomain($domain, $type)
{
  // Create a DNS resolver, and look up an $type record for $domain
  $resolver = new Net_DNS_Resolver();
  $answer = $resolver->search($domain, $type);

  // Is there an answer record?
  if (isset($answer->answer))
    // Iterate through the answers
    foreach($answer->answer as $ans)
      // If it's a $type answer, return true
      if ($ans->type == $type)
         return true;

  return false;
}

// This fragment does the same thing, but uses PEAR
function checkemailwithPEAR($email)
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

    if (!(checkMailDomain($maildomain, "MX") || 
        checkMailDomain($maildomain, "A")))
    {
      print "The domain does not exist.";
      return false;
    }

  return true;
}
?>
