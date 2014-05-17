<!DOCTYPE HTML PUBLIC
                 "-//W3C//DTD HTML 4.01 Transitional//EN"
                 "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Passwords</title>
</head>
<body>
<?php
$passwords = array();
$passwords[] = "aardvark7";
$passwords[] = "aardvark8";

foreach($passwords as $password)
{
  print "\n<p> md5({$password}) = " . md5($password);
  print "\n<br> crypt({$password}, 'aa') = " . crypt($password, "aa");
  print "\n<br> crypt({$password}, 'bb') = " . crypt($password, "bb");
}
?>
</body>
</html>
