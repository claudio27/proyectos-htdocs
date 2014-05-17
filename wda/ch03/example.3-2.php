<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" 
      content="text/html; charset=iso-8859-1">
  <title>Examples of using printf()</title>
</head>
<body bgcolor="#ffffff">
<h1>Examples of using printf()</h1>
<pre>
<?php
  // Outputs "pi equals 3.14159"
  printf("pi equals %f\n", 3.14159);

  // Outputs "3.14"
  printf("%.2f\n", 3.14159);

  // Outputs "      3.14"
  printf("%10.2f\n", 3.14159);

  // Outputs "3.1415900000"
  printf("%.10f\n", 3.14159);

  // Outputs "halfofthe"
  printf("%.9s\n", "halfofthestring");

  // Outputs "1111011 123 123.000000 test"
  printf("%b %d %f %s\n", 123, 123, 123, "test");
?>
</pre>
</body>
</html>
