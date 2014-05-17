<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Authentication</title>
</head>
<body>
<?php
  if (isset($_SERVER["PHP_AUTH_USER"]))
    print "<h2>Hi there {$_SERVER["PHP_AUTH_USER"]}</h2>";
  else
    print "You need to be authenticated for this to work!";

  if (isset($_SERVER["PHP_AUTH_PW"]))
    print "<p>Thank you for your password {$_SERVER["PHP_AUTH_PW"]}!";
?>
</body>
</html>
